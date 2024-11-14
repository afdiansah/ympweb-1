<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start(); // Memulai sesi untuk akses CAPTCHA yang disimpan

header('Content-Type: application/json');

// Pastikan file Midtrans dan JWT library sudah di-load dengan benar
require_once('Midtrans.php');
require_once '../PHP-JWT/src/JWT.php'; // Pastikan path ke JWT library benar
require_once '../PHP-Mailer/src/PHPMailer.php'; // Include PHPMailer
require_once '../PHP-Mailer/src/SMTP.php'; // Include PHPMailer
require_once '../PHP-Mailer/src/Exception.php'; // Include PHPMailer

use \Firebase\JWT\JWT;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Verifikasi CAPTCHA
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['captcha']) || $_POST['captcha'] !== $_SESSION['captcha']) {
        echo json_encode(['error' => 'Captcha tidak valid atau sudah digunakan.']);
        exit();
    } else {
        // Hapus captcha dari sesi setelah validasi
        unset($_SESSION['captcha']);
    }

    // Verifikasi input
    if (!isset($_POST['harga']) || !is_numeric($_POST['harga']) ||
        !isset($_POST['nama_lengkap']) || !isset($_POST['alamat_email']) ||
        !isset($_POST['nomor_whatsapp']) || !isset($_POST['alamat_domisili']) || !isset($_POST['judul_kursus'])) {
        echo json_encode(['error' => 'Input tidak valid']);
        exit();
    }

    // Daftar level, harga, dan judul kelas yang valid (judul kelas bisa dalam bentuk array)
    $valid_classes = [
        'pemula' => [
            'price' => 100000,
            'titles' => ['Keamanan Siber untuk Pemula: Hacking hingga Forensik']
        ],
        'menengah' => [
            'price' => 150000,
            'titles' => ['Fondasi dalam Keamanan Website Sebelum Memulai Penetrasi Sistem', 'Memulai Perjalanan dalam Keamanan Website Membangun Pengalaman Praktis'] // Variasi judul
        ],
        'diskon' => [
            'price' => 1,
            'titles' => ['Langkah Awal Bounty Hunting Simulasi 5 Teknik Eksploit Terpopuler']
        ],
    ];

    // Pastikan 'level', 'harga', dan 'judul_kelas' ada di $_POST
    if (!isset($_POST['level'], $_POST['harga'], $_POST['judul_kursus'])) {
        echo json_encode(['error' => 'Error: Data tidak lengkap.']);
        exit();
    }

    // Ambil data dari POST
    $level = $_POST['level'];
    $harga = (int)$_POST['harga'];
    $judul_kursus = $_POST['judul_kursus'];

    // Cek apakah level yang dikirim ada di daftar kelas yang valid
    if (!array_key_exists($level, $valid_classes)) {
        echo json_encode(['error' => 'Error: Level kelas tidak valid.']);
        exit();
    }

    // Ambil data valid berdasarkan level yang dikirim
    $fixed_price = $valid_classes[$level]['price'];
    $valid_titles = $valid_classes[$level]['titles']; // Judul kelas bisa banyak

    // Validasi harga
    if ($harga !== $fixed_price) {
        echo json_encode(['error' => 'Error: Terjadi manipulasi Harga.']);
        exit();
    }

    // Validasi judul kelas (cek apakah judul kelas yang dikirim ada dalam array valid titles)
    if (!in_array($judul_kursus, $valid_titles)) {
        echo json_encode(['error' => 'Error: Terjadi manipulasi Judul Kursus.']);
        exit();
    }

    // Set Midtrans Server Key
    \Midtrans\Config::$serverKey = 'Mid-server-nQ40waJaQMihHi-DnUtxndLH';
    \Midtrans\Config::$isProduction = true; // Set true for production
    \Midtrans\Config::$isSanitized = true;
    \Midtrans\Config::$is3ds = true;

    // Buat parameter transaksi
    $transaction_details = array(
        'order_id' => rand(),
        'gross_amount' => $fixed_price, // Total pembayaran tetap
        'first_name' => $_POST['nama_lengkap'],
        'email' => $_POST['alamat_email'],
        'phone' => $_POST['nomor_whatsapp'],
        'judul_kursus' => $_POST['judul_kursus'],
        'email_pemateri' => $_POST['email_pemateri']
    );

    $customer_details = array(
        'first_name' => $_POST['nama_lengkap'],
        'email' => $_POST['alamat_email'],
        'phone' => $_POST['nomor_whatsapp'],
        'judul_kursus' => $_POST['judul_kursus'],
        'email_pemateri' => $_POST['email_pemateri'],
        'billing_address' => array(
            'address' => $_POST['alamat_domisili'],
            'country_code' => 'IDN'
        ),
    );

    $transaction_data = array(
        'transaction_details' => $transaction_details,
        'customer_details' => $customer_details
    );

    try {
        // Dapatkan transaction token dari Midtrans
        $snapToken = \Midtrans\Snap::getSnapToken($transaction_data);

        // Simpan data ke dalam SESSION berdasarkan order_id
        $_SESSION['orders'][$transaction_details['order_id']] = [
            'first_name' => $_POST['nama_lengkap'],
            'phone' => $_POST['nomor_whatsapp'],
            'email' => $_POST['alamat_email'],
            'judul_kursus' => $_POST['judul_kursus'],
            'email_pemateri' => $_POST['email_pemateri'],
            'snapToken' => $snapToken
        ];
        
        // Kirim token ke client
        echo json_encode([
            'snapToken' => $snapToken,
            'first_name' => $_POST['nama_lengkap'],
            'email' => $_POST['alamat_email'],
            'phone' => $_POST['nomor_whatsapp'],
            'judul_kursus' => $_POST['judul_kursus'],
            'email_pemateri' => $_POST['email_pemateri']
        ]);
        
        /* ---------------------------------------------------------------------- */
        // Kirim email dengan link pembayaran
        $mail = new PHPMailer(true); // Passing `true` enables exceptions
        
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'yukmari2211@gmail.com'; // Ganti dengan email Gmail Anda
        $mail->Password = 'vmbbqvdritmwavsq'; // Ganti dengan password aplikasi Gmail Anda
        $mail->SMTPSecure = 'tls'; // Aktifkan enkripsi TLS
        $mail->Port = 587; // Port untuk TLS
        
        // Recipients
        $mail->setFrom('yukmari2211@gmail.com', 'Yuk-Mari Project');
        $mail->addAddress($_POST['alamat_email']);
        
        // Content
        $mail->Subject = 'Status Pembayaran Kursus Online Kamu di Yuk-Mari Project !';
        $mail->Body    = '
            <html>
                <head>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            color: #333;
                            background-color: #f4f4f4;
                            margin: 0;
                            padding: 0;
                        }
                        .container {
                            width: 80%;
                            max-width: 600px;
                            margin: 0 auto;
                            padding: 20px;
                            background-color: #ffffff;
                            border-radius: 8px;
                            border: 1px solid #ddd;
                            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                        }
                        .header {
                            text-align: center;
                            margin-bottom: 20px;
                        }
                        .logo {
                            max-width: 150px;
                            margin-bottom: 10px;
                        }
                        h1 {
                            color: #333;
                            font-size: 24px;
                            margin-bottom: 10px;
                        }
                        .content {
                            margin-bottom: 20px;
                            line-height: 1.6;
                        }
                        a {
                            color: #007bff;
                            text-decoration: none;
                        }
                        .button {
                            display: inline-block;
                            padding: 10px 20px;
                            margin-top: 20px;
                            background-color: #fdbe08;
                            color: #fff;
                            text-decoration: none;
                            border-radius: 5px;
                            font-size: 16px;
                        }
                        .button:hover {
                            background-color: #000;
                        }
                        .footer {
                            border-top: 1px solid #ddd;
                            padding-top: 10px;
                            font-size: 12px;
                            color: #777;
                            text-align: left;
                        }
                        .footer a {
                            color: #007bff;
                            text-decoration: none;
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <!-- Logo Perusahaan -->
                        <div class="header">
                            <img src="https://yuk-mari.com/assets/img/black-logo.png" alt="Logo Yuk-Mari Project" class="logo">
                        </div>

                        <!-- Isi Email -->
                        <h1>Status Pembayaran Kursus Online Kamu di Yuk-Mari Project !</h1>
                        <div class="content">
                            Terima kasih telah berminat untuk kursus online <b>"'.htmlspecialchars($_POST['judul_kursus']).'"</b> di Yuk-Mari Project.<br>
                            Berikut kami lampirkan status pembayaran Anda. Klik link berikut untuk melihatnya: <br/><br/>
                            <b><a href="https://yuk-mari.com/payment.php?token=' . htmlspecialchars($snapToken) . '">Status Pembayaran</a></b>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            Hormat Kami,<br>
                            Yuk-Mari Project<br>
                            Komplek Bandung Indah Raya No.17 Blok C13, Mekarjaya, Kec. Rancasari, Kota Bandung, Jawa Barat 40286 , <a href="wa.me/6282295603115">+62 822-9560-3115</a> (via Call / Whatsapp Messenger)
                        </div>
                    </div>
                </body>
            </html>
        ';
        $mail->isHTML(true); // Pastikan email dikirim sebagai HTML
        
        $mail->send();
        /* ---------------------------------------------------------------------- */
    } catch (Exception $e) {
        // Menangani kesalahan
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Request tidak valid.']);
}
?>