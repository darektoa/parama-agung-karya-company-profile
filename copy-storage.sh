#!/bin/sh

# Hapus public/storage jika ada (folder atau symlink)
rm -rf public/storage/

# Buat ulang folder public/storage
mkdir -p public/storage

# Copy semua file dari storage/app/public ke public/storage
cp -r storage/app/public/* public/storage/

echo "Storage copied to public/storage successfully!"
