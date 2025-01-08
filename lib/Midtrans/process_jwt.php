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
        $mail->Password = 'lhxsjghbydcawxmz';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

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
                        <h1>Selamat! Pembayaran Kursus Online kamu telah berhasil!</h1>
                        <div class="content">
                            Terima kasih <b>'.$first_name.'</b>, kamu telah menyelesaikan pembayaran kursus online <b>"'.$judul_kursus.'"</b> di Yuk-Mari Project!<br/>Berikut link materi video eksklusif kamu kami lampirkan:<br/>
                            <a href="https://yuk-mari.com/materi-video-exclusive.php?token=' . htmlspecialchars($jwtToken) . '" class="button">Akses Materi Video</a>
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
    $mail2->Password = 'lhxsjghbydcawxmz'; // Ganti dengan password aplikasi Gmail Anda
    $mail2->SMTPSecure = 'ssl'; // Aktifkan enkripsi TLS
    $mail2->Port = 465; // Port untuk TLS
    
    // Recipients
    $mail2->setFrom('yukmari2211@gmail.com', 'Yuk-Mari Project');
    $mail2->addAddress($email);
    $mail2->addAddress('firdamdamsasmita@upi.edu'); // Email kedua, ganti dengan email yang diinginkan
    
    // Content
    $mail2->Subject = '#YMP-'.$order_id.' -  '.$judul_kursus.' !';
    $mail2->Body    = '
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
                        <h1>Orderan kursus dari ' . htmlspecialchars($first_name) . '!</h1>
                        <div class="content">
                            Sebagai notifikasi pembayaran kursus, '.htmlspecialchars($indonesianDate).', ada orderan kursus dengan id <b>YMP-'.htmlspecialchars($order_id).'</b> untuk judul kursus <b>"'.htmlspecialchars($judul_kursus).'"</b><br><br>
                            Mohon untuk tidak menghapus pesan ini ya, sebagai bukti orderan masuk untuk materi kursus.<br/><br/>
                            Terima Kasih!
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
