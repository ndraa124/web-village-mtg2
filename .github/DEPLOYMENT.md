# 🚀 Auto Deployment Setup Guide

## Prerequisites

✅ Server Ubuntu 22.04 sudah tersetup dengan Nginx dan PHP  
✅ Project sudah pernah di-deploy secara manual  
✅ Git sudah terinstall di server  
✅ Repository sudah ter-push ke GitHub

---

## 🔧 Setup Auto Deploy (CI/CD)

### 1️⃣ Setup SSH Key untuk GitHub Actions

Jalankan di **komputer lokal** Anda:

```bash
# Generate SSH key pair (jangan masukkan passphrase)
ssh-keygen -t ed25519 -C "github-actions" -f ~/.ssh/github_actions_key

# Copy private key (untuk GitHub Secrets)
cat ~/.ssh/github_actions_key

# Copy public key (untuk di-paste ke server)
cat ~/.ssh/github_actions_key.pub
```

---

### 2️⃣ Setup SSH di Server

Login ke server Ubuntu Anda:

```bash
ssh root@202.155.90.102
```

Kemudian jalankan:

```bash
# Tambahkan public key ke authorized_keys
echo "PASTE_PUBLIC_KEY_DISINI" >> ~/.ssh/authorized_keys

# Set permissions
chmod 600 ~/.ssh/authorized_keys
chmod 700 ~/.ssh
```

**Ganti `PASTE_PUBLIC_KEY_DISINI` dengan isi dari file `~/.ssh/github_actions_key.pub`**

---

### 3️⃣ Setup GitHub Secrets

1. Buka repository Anda di GitHub
2. Pergi ke **Settings** → **Secrets and variables** → **Actions**
3. Klik **New repository secret** dan tambahkan:

| Name              | Value                                | Keterangan                          |
| ----------------- | ------------------------------------ | ----------------------------------- |
| `SSH_PRIVATE_KEY` | Isi dari `~/.ssh/github_actions_key` | Private key yang di-generate tadi   |
| `SERVER_IP`       | `202.155.90.102`                     | IP server VPS Anda                  |
| `SERVER_USER`     | `root`                               | Username SSH (biasanya root)        |
| `PROJECT_PATH`    | `/var/www/web-village-mtg2`          | Path project di server (sesuaikan!) |

**⚠️ PENTING:** Ganti `PROJECT_PATH` dengan path project Anda di server!

---

### 4️⃣ Setup Project di Server

Pastikan project di server menggunakan Git dan terhubung dengan repository:

```bash
# Login ke server
ssh root@202.155.90.102

# Navigate ke project directory
cd /var/www/web-village-mtg2  # Sesuaikan dengan path Anda

# Pastikan ini adalah git repository
git remote -v

# Jika belum ada remote, tambahkan:
git remote add origin https://github.com/ndraa124/web-village-mtg2.git

# Set branch tracking
git branch --set-upstream-to=origin/main main

# Pastikan tidak ada uncommitted changes
git status
```

---

### 5️⃣ Berikan Permission Sudo tanpa Password (Opsional)

Jika menggunakan user non-root, Anda perlu setup sudo tanpa password untuk service restart:

```bash
# Edit sudoers
sudo visudo

# Tambahkan di bagian bawah (ganti 'username' dengan user Anda):
username ALL=(ALL) NOPASSWD: /bin/systemctl reload nginx
username ALL=(ALL) NOPASSWD: /bin/systemctl reload php8.2-fpm
username ALL=(ALL) NOPASSWD: /bin/systemctl reload php8.3-fpm
```

---

## 🎯 Cara Menggunakan Auto Deploy

### Otomatis

Setiap kali Anda push ke branch `main`, deployment akan berjalan otomatis:

```bash
git add .
git commit -m "Update feature XYZ"
git push origin main
```

### Manual

Anda juga bisa trigger deployment manual:

1. Buka repository di GitHub
2. Pergi ke **Actions** tab
3. Pilih workflow "Deploy to Production Server"
4. Klik **Run workflow** → **Run workflow**

---

## 📊 Monitoring Deployment

1. Buka repository di GitHub
2. Pergi ke **Actions** tab
3. Lihat status deployment (✅ success / ❌ failed)
4. Klik pada workflow run untuk melihat detail log

---

## 🔍 Troubleshooting

### Error: Permission denied (publickey)

-   Pastikan SSH key sudah ditambahkan ke `~/.ssh/authorized_keys` di server
-   Cek permission: `chmod 600 ~/.ssh/authorized_keys && chmod 700 ~/.ssh`

### Error: Could not resolve host

-   Pastikan `SERVER_IP` di GitHub Secrets sudah benar
-   Test koneksi: `ping 202.155.90.102`

### Error: directory not found

-   Pastikan `PROJECT_PATH` di GitHub Secrets sudah benar
-   Cek path di server: `ls -la /var/www/`

### Error: git pull failed

-   Pastikan git repository sudah di-setup dengan benar di server
-   Test: `cd PROJECT_PATH && git pull origin main`

### Assets tidak ter-update

-   Cek apakah `npm run build` berhasil di log Actions
-   Pastikan Node.js terinstall di server: `node -v && npm -v`

### Migration error

-   Pastikan database credentials di `.env` server sudah benar
-   Cek koneksi database: `php artisan migrate:status`

---

## 🛡️ Keamanan

**⚠️ PERHATIAN KEAMANAN:**

1. **JANGAN** commit file ini dengan password/credentials ke repository public
2. **GUNAKAN** GitHub Secrets untuk menyimpan data sensitif
3. **PERTIMBANGKAN** untuk menggunakan SSH key dengan passphrase untuk keamanan lebih
4. **UBAH** password SSH server secara berkala
5. **AKTIFKAN** 2FA di GitHub account Anda

---

## 📝 Notes

-   Deployment akan set application ke **maintenance mode** saat proses berlangsung
-   Service `php-fpm` dan `nginx` akan di-reload setelah deployment
-   Cache akan di-clear dan di-rebuild otomatis
-   Permissions akan di-set otomatis untuk `storage` dan `bootstrap/cache`

---

## 🆘 Butuh Bantuan?

Jika mengalami masalah:

1. Cek log di GitHub Actions
2. Login ke server dan cek log: `tail -f storage/logs/laravel.log`
3. Cek nginx error log: `tail -f /var/log/nginx/error.log`
4. Cek PHP-FPM log: `tail -f /var/log/php8.2-fpm.log`

---

**Happy Deploying! 🎉**
