<?php
header('Content-Type: application/json');

// Simulasi data kode voucher
$available_vouchers = [
    'ymp_bersatu' => 0.95, // Diskon 75%
    //'C0fnR!23C9W*ox' => 0.75, // Diskon 75%
];

// Data daftar kelas dan harga valid
$valid_classes = [
    'pemula' => 100000,
    'menengah' => 150000,
    'terbaru' => 75000,
];

// Ambil data POST
$kode_voucher = trim($_POST['kode_voucher'] ?? '');
$level = $_POST['level'] ?? '';

// Validasi level
if (!array_key_exists($level, $valid_classes)) {
    echo json_encode(['valid' => false, 'error' => 'Level kursus tidak valid.']);
    exit();
}

// Ambil harga awal berdasarkan level
$harga_awal = $valid_classes[$level];

// Validasi kode voucher
if (!empty($kode_voucher) && array_key_exists($kode_voucher, $available_vouchers)) {
    $discount = $available_vouchers[$kode_voucher];
    $harga_baru = $harga_awal * (1 - $discount);
    echo json_encode(['valid' => true, 'harga_awal' => $harga_awal, 'harga_baru' => round($harga_baru)]);
} else {
    echo json_encode(['valid' => false, 'harga_awal' => $harga_awal]);
}
