<?php

// Panggil file autoload dari Laravel
require __DIR__ . '/../vendor/autoload.php';

// Inisialisasi aplikasi Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Jalankan perintah storage:link
\Illuminate\Support\Facades\Artisan::call('storage:link');

// Jalankan migrasi database fresh
\Illuminate\Support\Facades\Artisan::call('migrate:fresh');

// Tampilkan pesan sukses atau gagal
echo "Storage link created and migration completed.";
