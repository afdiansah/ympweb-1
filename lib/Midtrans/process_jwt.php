<?php
session_start();

require_once 'Midtrans.php';
require_once '../PHP-JWT/src/JWT.php';
require_once '../PHP-Mailer/src/PHPMailer.php';
require_once '../PHP-Mailer/src/SMTP.php';
require_once '../PHP-Mailer/src/Exception.php';

use \Firebase\JWT\JWT;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Debugging: Menampilkan input yang diterima
error_log(print_r($_POST, true));

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$order_id = isset($data['order_id']) ? $data['order_id'] : '';
$first_name = isset($data['first_name']) ? $data['first_name'] : '';
$no_whatsapp = isset($data['phone']) ? $data['phone'] : '';
$email = isset($data['email']) ? $data['email'] : '';
$judul_kursus = isset($data['judul_kursus']) ? $data['judul_kursus'] : '';
$email_pemateri = isset($data['email_pemateri']) ? $data['email_pemateri'] : '';

if ($order_id) {
    try {
        // Generate JWT
        $secretKey = 'C0fnR!23C9W*ox';
        $payload = [
            'transaction_id' => $order_id,
            'nama_lengkap' => $first_name,
            'exp' => time() + (21 * 24 * 60 * 60),
            'judul_kursus' => $judul_kursus
        ];
        $jwtToken = JWT::encode($payload, $secretKey, 'HS256');

        /* ---------------------------------------------------------------------- */
        // Mengirim email dengan JWT Token
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'yukmari2211@gmail.com';
        $mail->Password = 'vmbbqvdritmwavsq';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('yukmari2211@gmail.com', 'Yuk-Mari Project');
        $mail->addAddress($email); // Ganti dengan email pelanggan dari database atau notifikasi

        $mail->isHTML(true);
        $mail->Subject = 'Link Materi Video Kursus Online Kamu di Yuk-Mari Project!';
        $mail->Body    = '
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        color: #333;
                        margin: 0;
                        padding: 0;
                        background-color: #f4f4f4;
                    }
                    .container {
                        width: 80%;
                        margin: 20px auto;
                        padding: 20px;
                        background-color: #ffffff;
                        border-radius: 5px;
                        border: 1px solid #ddd;
                    }
                    h1 {
                        color: #000;
                        font-size: 24px;
                    }
                    a {
                        color: #007bff;
                        text-decoration: none;
                        font-weight: bold;
                    }
                    .footer {
                        border-top: 1px solid #ddd;
                        padding-top: 10px;
                        font-size: 12px;
                        color: #777;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <h1>Selamat! Pembayaran Kursus Online kamu telah berhasil!</h1>
                    <p>Terima kasih <b>'.$first_name.'</b>, kamu telah menyelesaikan pembayaran kursus online <b>"'.$judul_kursus.'"</b> di Yuk-Mari Project!<br/>Berikut link materi video eksklusif kamu kami lampirkan:</p>
                    <p><a href="https://yuk-mari.com/materi-video-exclusive.php?token=' . htmlspecialchars($jwtToken) . '">Akses Materi Video</a></p>
                    <p>Selamat belajar!</p>
                    <div class="footer">
                        Hormat Kami,<br>
                        Yuk-Mari Project Team<br>
                        Alamat Kantor: Komplek Bandung Indah Raya No.17 Blok C13, Mekarjaya, Kec. Rancasari, Kota Bandung, Jawa Barat 40286<br>
                        No. Telepon: +62813-8636-9207 (via Call / Whatsapp Messenger)
                    </div>
                </div>
            </body>
            </html>
        ';


        $mail->send();
    /* ---------------------------------------------------------------------- */
    
    $timestamp = $decoded_array['exp'];

    // Mengubah timestamp menjadi hari dalam bahasa Inggris dan tanggal
    $englishDate = date('l, d F Y H:i:s', $timestamp);
    
    // Array mapping dari hari bahasa Inggris ke bahasa Indonesia
    $days = [
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    ];
    
    // Mengganti nama hari dalam bahasa Inggris menjadi bahasa Indonesia
    $indonesianDate = str_replace(array_keys($days), array_values($days), $englishDate);
                                    
    /* ---------------------------------------------------------------------- */
    // Kirim email dengan link pembayaran
    $mail2 = new PHPMailer(true); // Passing `true` enables exceptions
    
    //Server settings
    $mail2->isSMTP();
    $mail2->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail2->SMTPAuth = true;
    $mail2->Username = 'yukmari2211@gmail.com'; // Ganti dengan email Gmail Anda
    $mail2->Password = 'vmbbqvdritmwavsq'; // Ganti dengan password aplikasi Gmail Anda
    $mail2->SMTPSecure = 'tls'; // Aktifkan enkripsi TLS
    $mail2->Port = 587; // Port untuk TLS
    
    // Recipients
    $mail2->setFrom('yukmari2211@gmail.com', 'Yuk-Mari Project');
    $mail2->addAddress($email);
    $mail2->addAddress('yukmari2211@gmail.com'); // Email kedua, ganti dengan email yang diinginkan
    
    // Content
    $mail2->Subject = '#YMP-'.$order_id.' -  '.$judul_kursus.' !';
    $mail2->Body    = '
        <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    color: #333;
                }
                .container {
                    width: 80%;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #f9f9f9;
                    border-radius: 5px;
                    border: 1px solid #ddd;
                }
                h1 {
                    color: #000;
                }
                .content {
                    margin-bottom: 20px;
                }
                a {
                    color: #007bff;
                    text-decoration: none;
                }
                .footer {
                    border-top: 1px solid #ddd;
                    padding-top: 10px;
                    font-size: 12px;
                    color: #777;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>Orderan kursus dari ' . htmlspecialchars($first_name) . '!</h1>
                <div class="content">
                    Sebagai notifikasi pembayaran kursus, '.htmlspecialchars($indonesianDate).', ada orderan kursus dengan id <b>YMP-'.htmlspecialchars($order_id).'</b> untuk judul kursus <b>"'.htmlspecialchars($judul_kursus).'"</b><br><br>
                    Mohon untuk tidak menghapus pesan ini ya, sebagai bukti orderan masuk untuk materi kursus.<br/><br/>
                    Terima Kasih!
                </div>
                <div class="footer">
                    Hormat Kami,<br>
                    Yuk-Mari Project Team<br>
                    Alamat Kantor: Komplek Bandung Indah Raya No.17 Blok C13, Mekarjaya, Kec. Rancasari, Kota Bandung, Jawa Barat 40286<br>
                    No. Telepon: +62813-8636-9207 (via Call / Whatsapp Messenger)
                </div>
            </div>
        </body>
        </html>
    ';
    $mail2->isHTML(true); // Pastikan email dikirim sebagai HTML
    
    $mail2->send();
    /* ---------------------------------------------------------------------- */

        // Return JWT token in response
        echo json_encode(['status' => 'ok', 'jwtToken' => $jwtToken]);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'error' => 'Invalid order_id']);
}
?>
