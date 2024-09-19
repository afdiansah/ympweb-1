<?php
session_start();

// Buat gambar captcha
$image = imagecreatetruecolor(120, 40);
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
$line_color = imagecolorallocate($image, 64, 64, 64);
$pixel_color = imagecolorallocate($image, 100, 100, 100);

imagefilledrectangle($image, 0, 0, 120, 40, $background_color);

// Tambahkan garis acak
for ($i = 0; $i < 6; $i++) {
    imageline($image, 0, rand() % 40, 120, rand() % 40, $line_color);
}

// Tambahkan noise pixel
for ($i = 0; $i < 1000; $i++) {
    imagesetpixel($image, rand() % 120, rand() % 40, $pixel_color);
}

// Buat teks captcha
$captcha_text = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 6);
$_SESSION['captcha'] = $captcha_text;

// Local
//$font_path = $_SERVER['DOCUMENT_ROOT'] . '/ympweb/lib/captcha/font.ttf';
// Online Hosting
$font_path = $_SERVER['DOCUMENT_ROOT'] . '/lib/captcha/font.ttf';//

imagettftext($image, 20, 0, 10, 30, $text_color, $font_path, $captcha_text);

// Set header tipe gambar
header('Content-Type: image/png');

// Tampilkan gambar
imagepng($image);
imagedestroy($image);
?>
