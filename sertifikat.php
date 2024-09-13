<?php
require('lib/fpdf/fpdf.php');
    
class PDF extends FPDF
{
    // Fungsi untuk menampilkan konten sertifikat
    function CertificateBody($nama, $judul_kursus, $background, $tanggal, $id_sertifikat, $logo, $cap)
    {
        // Tambahkan gambar background
        $this->Image($background, 0, 0, $this->GetPageWidth(), $this->GetPageHeight());
        
        // Atur posisi untuk menambahkan teks di atas gambar
        $this->SetXY(0, 81); // Atur posisi Y sesuai kebutuhan
        $this->SetFont('Arial', '', 35);
        $this->Cell(298, 10, $nama, 0, 1, 'C');

        $this->SetXY(0, 110); // Atur posisi Y sesuai kebutuhan
        $this->SetFont('Arial', '', 15);
        $this->MultiCell(298, 7, 'Dalam menyelesaikan Kursus ' . $judul_kursus . ' ' . "\n" . 'dan menunjukan pemahaman tentang modul dan persyaratan kursusnya', 0, 'C');
            
        $this->SetXY(0, 135); // Atur posisi Y sesuai kebutuhan
        $this->SetFont('Arial', 'B', 15);
        $this->MultiCell(320, 7, 'Bandung, '.$tanggal, 0, 'C');
        
        $this->SetXY(0, 10); // Atur posisi Y sesuai kebutuhan
        $this->SetFont('Arial', 'B', 7);
        $this->MultiCell(135, 7, 'ID Sertifikat: YMP-S-'.$id_sertifikat, 0, 'C');
        
        // Tambahkan gambar logo di bawah teks
        $this->Image($logo, 120, 135, 70); // ('file', x, y, width)

            // Tambahkan gambar logo di bawah teks
        $this->Image($cap, 130, 75, 30); // ('file', x, y, width)
    }
}

// Pastikan library JWT di-load
require_once 'lib/PHP-JWT/src/JWT.php'; // Path ke JWT library
require_once 'lib/PHP-JWT/src/ExpiredException.php'; // Path ke JWT library
require_once 'lib/PHP-JWT/src/Key.php'; // Path ke Key library
    
use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

// Ambil token dari query string
    $token = isset($_GET['token']) ? $_GET['token'] : null;

    // Ambil jawaban dari form yang dikirim
    $jawaban = isset($_POST['jawaban']) ? $_POST['jawaban'] : [];
    
    // Inisialisasi array untuk menyimpan pesan kesalahan
    $errors = [];
    
    // Kunci rahasia yang sama dengan yang digunakan untuk menghasilkan JWT
    $secretKey = 'C0fnR!23C9W*ox';
    
$jwtToken = $_GET['token'];

// Decode dan verifikasi token
$decoded = JWT::decode($jwtToken, new Key($secretKey, 'HS256'));
$decoded_array = (array) $decoded;

// Nama file yang akan dicek
        $filename = 'id-sertifikat.txt';
        
        // Data yang akan dimasukkan ke sertifikat
$nama = $decoded_array['nama_lengkap'] ? $decoded_array['nama_lengkap'] : 'John Doe';
$judul_kursus = $decoded_array['judul_kursus'] ? $decoded_array['judul_kursus'] : null;
$id_sertifikat = $decoded_array['transaction_id'] ? $decoded_array['transaction_id'] : null;
        
        // Teks yang ingin ditambahkan
        $textToAdd = 'YMP-S-' . $id_sertifikat . '-' . $nama . '-' . $judul_kursus . '' .PHP_EOL .'';
        
        // Baca seluruh isi file
        $fileContents = '';
        if (file_exists($filename)) {
            $fileContents = file_get_contents($filename);
        }
        
        // Cek jika data sudah ada
        if (strpos($fileContents, $textToAdd) === false) {
            // Data tidak ada dalam file, jadi tambahkan
            $file = fopen($filename, 'a');
            if ($file) {
                fwrite($file, $textToAdd);
                fclose($file);
            } else {
                echo "Tidak dapat membuka file.";
            }
        } else {
            echo null;
        }
        
// Inisialisasi PDF
$pdf = new PDF();

// Set ukuran halaman ke A4
$pdf->AddPage('L', 'A4'); // 'P' untuk portrait, 'A4' untuk ukuran A4

$bulanIndonesia = array(
    1 => 'Januari',
    2 => 'Februari',
    3 => 'Maret',
    4 => 'April',
    5 => 'Mei',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'Agustus',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember'
);

// Ambil hari, bulan, dan tahun saat ini
$hari = date('d');
$bulan = date('n'); // Menggunakan 'n' untuk mendapatkan angka bulan tanpa leading zero
$tahun = date('Y');

$background = 'sertifikat.png'; // Nama file gambar dari Canva
$tanggal = $tanggal = $hari . ' ' . $bulanIndonesia[$bulan] . ' ' . $tahun;
$logo = 'TTD.png'; // Nama file gambar logo
$cap = 'cap_lulus.png';

// Membuat sertifikat
$pdf->CertificateBody($nama, $judul_kursus, $background, $tanggal, $id_sertifikat, $logo, $cap);

// Output PDF
$pdf->Output('I', 'certificate.pdf');
?>