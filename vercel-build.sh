#!/bin/bash
set -e

echo "🚀 Building Laravel for Vercel..."

# Clear cache agar config baru terbaca
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Buat folder output static Vercel
mkdir -p .vercel/output/static

# Copy semua file di public ke static output
cp -r public/* .vercel/output/static/

echo "✅ Public assets copied to .vercel/output/static/"
