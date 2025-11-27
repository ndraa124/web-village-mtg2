# 🚀 Quick Start: Auto Deployment

## Setup dalam 5 Langkah

### 1️⃣ Generate SSH Key (di komputer lokal)

```bash
ssh-keygen -t ed25519 -C "github-actions" -f ~/.ssh/github_actions_key
cat ~/.ssh/github_actions_key      # Copy untuk GitHub Secret
cat ~/.ssh/github_actions_key.pub  # Copy untuk server
```

### 2️⃣ Setup di Server

```bash
# Login ke server
ssh root@202.155.90.102

# Jalankan script setup
cd /var/www/web-village-mtg2  # Sesuaikan path Anda
bash <(curl -s https://raw.githubusercontent.com/ndraa124/web-village-mtg2/main/.github/setup-server.sh)

# ATAU copy script manual dari .github/setup-server.sh
```

### 3️⃣ Setup GitHub Secrets

Buka: `https://github.com/ndraa124/web-village-mtg2/settings/secrets/actions/new`

Tambahkan 4 secrets:

-   `SSH_PRIVATE_KEY` = isi dari `~/.ssh/github_actions_key`
-   `SERVER_IP` = `202.155.90.102`
-   `SERVER_USER` = `root`
-   `PROJECT_PATH` = `/var/www/web-village-mtg2` _(sesuaikan!)_

### 4️⃣ Commit & Push

```bash
git add .
git commit -m "Setup CI/CD auto deployment"
git push origin main
```

### 5️⃣ Monitor Deployment

Buka: `https://github.com/ndraa124/web-village-mtg2/actions`

---

## 📖 Dokumentasi Lengkap

Lihat [DEPLOYMENT.md](.github/DEPLOYMENT.md) untuk panduan lengkap dan troubleshooting.

---

## ⚡ Auto Deploy

Setiap push ke branch `main` akan otomatis deploy ke server!

```bash
git add .
git commit -m "Update feature"
git push origin main  # 🚀 Auto deploy!
```

---

**Catatan:** Pastikan path project di server sudah benar sebelum setup!
