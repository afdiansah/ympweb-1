<?php
// Menampilkan error jika terjadi
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Nama file yang akan dicek
$filename = 'habis-waktu.txt';

// Data dari permintaan POST
$transactionId = $_POST['transaction_id'] ?? '';
$namaLengkap = $_POST['nama_lengkap'] ?? '';

// Teks yang ingin ditambahkan
$textToAdd = $transactionId . '-' . $namaLengkap . '-HABISWAKTU' . PHP_EOL;

// Membuka file dalam mode append
$file = fopen($filename, 'a');

// Memeriksa apakah file berhasil dibuka
if ($file) {
    fwrite($file, $textToAdd);
    fclose($file);
} else {
    echo "Tidak dapat membuka file.";
}
?>
