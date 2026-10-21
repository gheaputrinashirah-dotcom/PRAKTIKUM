
<?php
/**
 * Praktikum 4: Implementasi Aplikasi Web Dinamis Menggunakan PHP
 * File: proses_hapus.php
 * Skrip pemroses penghapusan data mahasiswa.
 */

require_once __DIR__ . '/includes/functions.php';

// Pastikan request menggunakan metode GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $npm = $_GET['id'] ?? '';

    // Panggil fungsi hapus data mahasiswa
    $hasil = hapus_mahasiswa($npm);

    if ($hasil['status']) {
        set_flash_message('success', $hasil['message']);
    } else {
        set_flash_message('danger', $hasil['message']);
    }
} else {
    header('Location: index.php');
    exit;
}

// Redirect kembali ke halaman utama
header('Location: index.php#daftar-mahasiswa');
exit;
