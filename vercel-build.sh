#!/bin/bash
set -e

echo "🚀 [Vercel Build] Copying Laravel public assets"

# Pastikan folder output static Vercel ada
mkdir -p .vercel/output/static

# Salin semua isi folder public ke output static
cp -r public/* .vercel/output/static/

echo "✅ [Vercel Build] Public assets copied successfully"
