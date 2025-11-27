#!/bin/bash

# GitHub Secrets Configuration untuk Auto Deployment
# =================================================

echo "📝 GITHUB SECRETS CONFIGURATION"
echo "================================"
echo ""
echo "Buka URL berikut untuk menambahkan secrets:"
echo "https://github.com/ndraa124/web-village-mtg2/settings/secrets/actions/new"
echo ""
echo "Tambahkan 4 secrets berikut:"
echo ""

# Secret 1: SSH_PRIVATE_KEY
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "1️⃣  SECRET NAME: SSH_PRIVATE_KEY"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "VALUE (copy seluruh text di bawah ini, termasuk BEGIN dan END):"
echo ""
cat ~/.ssh/github_actions_web_village
echo ""
echo ""

# Secret 2: SERVER_IP
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "2️⃣  SECRET NAME: SERVER_IP"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "VALUE:"
echo "202.155.90.102"
echo ""
echo ""

# Secret 3: SERVER_USER
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "3️⃣  SECRET NAME: SERVER_USER"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "VALUE:"
echo "root"
echo ""
echo ""

# Secret 4: PROJECT_PATH
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "4️⃣  SECRET NAME: PROJECT_PATH"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "VALUE:"
echo "/var/www/web-village-mtg2"
echo ""
echo ""

echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "✅ SETUP SELESAI!"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo ""
echo "Setelah menambahkan semua secrets:"
echo "1. Buka: https://github.com/ndraa124/web-village-mtg2/actions"
echo "2. Pilih workflow 'Deploy to Production Server'"
echo "3. Klik 'Run workflow' untuk test deployment manual"
echo ""
echo "Atau langsung push code ke main branch untuk trigger auto deploy!"
echo ""
