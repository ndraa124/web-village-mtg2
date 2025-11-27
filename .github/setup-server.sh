#!/bin/bash

# Script untuk setup auto deployment di server Ubuntu 22.04
# Jalankan script ini di SERVER (bukan di local)

set -e

echo "🚀 Setup Auto Deployment Script"
echo "================================"
echo ""

# Warna untuk output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Fungsi untuk print dengan warna
print_success() {
    echo -e "${GREEN}✅ $1${NC}"
}

print_error() {
    echo -e "${RED}❌ $1${NC}"
}

print_warning() {
    echo -e "${YELLOW}⚠️  $1${NC}"
}

print_info() {
    echo -e "${YELLOW}ℹ️  $1${NC}"
}

# Cek apakah dijalankan sebagai root atau dengan sudo
if [[ $EUID -ne 0 ]]; then
   print_error "Script ini harus dijalankan sebagai root atau dengan sudo"
   exit 1
fi

# Input project path
echo ""
print_info "Masukkan path project di server (contoh: /var/www/web-village-mtg2):"
read -p "Project Path: " PROJECT_PATH

if [ ! -d "$PROJECT_PATH" ]; then
    print_error "Directory $PROJECT_PATH tidak ditemukan!"
    exit 1
fi

print_success "Directory ditemukan: $PROJECT_PATH"

# Navigate ke project
cd "$PROJECT_PATH"

# Cek apakah ini git repository
if [ ! -d ".git" ]; then
    print_error "Directory ini bukan git repository!"
    print_info "Inisialisasi git terlebih dahulu dengan: git init"
    exit 1
fi

print_success "Git repository detected"

# Cek remote repository
REMOTE_URL=$(git config --get remote.origin.url 2>/dev/null || echo "")

if [ -z "$REMOTE_URL" ]; then
    print_warning "Remote repository belum di-set"
    print_info "Masukkan URL repository GitHub (contoh: https://github.com/username/repo.git):"
    read -p "Repository URL: " REPO_URL
    git remote add origin "$REPO_URL"
    print_success "Remote repository ditambahkan: $REPO_URL"
else
    print_success "Remote repository: $REMOTE_URL"
fi

# Cek branch
CURRENT_BRANCH=$(git branch --show-current 2>/dev/null || echo "")

if [ -z "$CURRENT_BRANCH" ]; then
    print_warning "Tidak ada branch aktif"
    git checkout -b main
    print_success "Branch 'main' dibuat"
else
    print_success "Current branch: $CURRENT_BRANCH"
fi

# Set upstream
git branch --set-upstream-to=origin/main main 2>/dev/null || print_warning "Gagal set upstream, akan dilakukan saat pull pertama"

# Cek PHP version
PHP_VERSION=$(php -r "echo PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;")
print_success "PHP Version: $PHP_VERSION"

# Cek composer
if ! command -v composer &> /dev/null; then
    print_error "Composer tidak ditemukan!"
    print_info "Install composer terlebih dahulu: https://getcomposer.org/download/"
    exit 1
fi

print_success "Composer installed: $(composer --version | head -n 1)"

# Cek node & npm
if ! command -v node &> /dev/null; then
    print_error "Node.js tidak ditemukan!"
    print_info "Install Node.js terlebih dahulu"
    exit 1
fi

print_success "Node.js installed: $(node -v)"
print_success "NPM installed: $(npm -v)"

# Cek nginx
if ! command -v nginx &> /dev/null; then
    print_warning "Nginx tidak ditemukan! Pastikan nginx sudah terinstall"
else
    print_success "Nginx installed: $(nginx -v 2>&1)"
fi

# Set permissions
print_info "Setting permissions..."
chmod -R 755 storage bootstrap/cache 2>/dev/null || true
chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true
print_success "Permissions set"

# Input untuk SSH public key
echo ""
print_info "==================================="
print_info "SETUP SSH KEY"
print_info "==================================="
echo ""
print_info "Paste SSH Public Key dari GitHub Actions (isi dari github_actions_key.pub):"
print_info "Tekan Enter setelah paste, kemudian tekan Ctrl+D untuk selesai"
echo ""

# Baca public key dari input
SSH_KEY=$(cat)

if [ -z "$SSH_KEY" ]; then
    print_warning "SSH key tidak dimasukkan, skip..."
else
    # Tambahkan ke authorized_keys
    mkdir -p ~/.ssh
    echo "$SSH_KEY" >> ~/.ssh/authorized_keys
    chmod 700 ~/.ssh
    chmod 600 ~/.ssh/authorized_keys
    print_success "SSH key ditambahkan ke authorized_keys"
fi

# Test deployment simulation
echo ""
print_info "==================================="
print_info "TEST DEPLOYMENT SIMULATION"
print_info "==================================="
echo ""

print_info "Apakah ingin test deployment simulation? (y/n)"
read -p "Test: " DO_TEST

if [ "$DO_TEST" == "y" ] || [ "$DO_TEST" == "Y" ]; then
    echo ""
    print_info "Starting deployment simulation..."
    
    # Pull changes (skip jika error)
    print_info "Git pull..."
    git pull origin main || print_warning "Git pull gagal, mungkin tidak ada changes"
    
    # Composer install
    print_info "Composer install..."
    composer install --no-interaction --prefer-dist --optimize-autoloader
    
    # NPM install
    print_info "NPM install..."
    npm ci || npm install
    
    # Build assets
    print_info "Building assets..."
    npm run build || print_warning "Build gagal, pastikan package.json memiliki script 'build'"
    
    # Clear cache
    print_info "Clearing cache..."
    php artisan config:clear
    php artisan cache:clear
    php artisan route:clear
    php artisan view:clear
    
    print_success "Test deployment completed!"
else
    print_info "Skip test deployment"
fi

# Summary
echo ""
print_success "==================================="
print_success "SETUP COMPLETED!"
print_success "==================================="
echo ""
print_info "Langkah selanjutnya:"
echo "1. Buka GitHub repository Settings → Secrets and variables → Actions"
echo "2. Tambahkan secrets berikut:"
echo "   - SSH_PRIVATE_KEY: (private key dari github_actions_key)"
echo "   - SERVER_IP: 202.155.90.102"
echo "   - SERVER_USER: root"
echo "   - PROJECT_PATH: $PROJECT_PATH"
echo ""
echo "3. Push code ke GitHub:"
echo "   git add ."
echo "   git commit -m 'Setup auto deployment'"
echo "   git push origin main"
echo ""
echo "4. Lihat deployment progress di GitHub Actions tab"
echo ""
print_success "Happy Deploying! 🎉"
