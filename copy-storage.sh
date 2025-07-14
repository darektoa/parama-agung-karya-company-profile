#!/bin/sh

echo "=== Checking if public/storage exists ==="
pwd
ls -a public

# Cek apakah folder public/storage sudah ada dan berisi file
if [ -d "public/storage" ] && [ "$(ls -A public/storage 2>/dev/null)" ]; then
    echo "=== 'public/storage' already exists and contains files, skipping copy ==="
    ls -la public/storage
else
    echo "=== 'public/storage' does not exist or is empty, copying files ==="

    # Hapus public/storage jika ada (folder atau symlink)
    rm -rf public/storage

    # Buat ulang folder public/storage
    mkdir -p public/storage

    # Copy semua file dari storage/app/public ke public/storage
    cp -a storage/app/public/. public/storage/

    echo "=== Storage copied to 'public/storage' successfully! ==="
    ls -la public/storage
fi
