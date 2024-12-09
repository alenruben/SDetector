<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Membuat gambar baru
$width = 800;
$height = 600;
$image = imagecreatetruecolor($width, $height);

// Menetapkan warna
$background_color = imagecolorallocate($image, 255, 255, 255); // Putih
$black = imagecolorallocate($image, 0, 0, 0); // Hitam
$blue = imagecolorallocate($image, 0, 0, 255); // Biru

// Mengisi background dengan warna putih
imagefill($image, 0, 0, $background_color);

// Menggambar teks
function drawText($image, $text, $x, $y, $color, $fontSize = 12) {
    $fontPath = '/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf'; // Ganti dengan path font Anda
    imagettftext($image, $fontSize, 0, $x, $y, $color, $fontPath, $text);
}

// Menggambar kotak
function drawBox($image, $x1, $y1, $x2, $y2, $color, $text, $textColor) {
    imagerectangle($image, $x1, $y1, $x2, $y2, $color);
    drawText($image, $text, ($x1 + $x2) / 2 - 20, ($y1 + $y2) / 2 + 5, $textColor);
}

// Menggambar flowchart
drawBox($image, 50, 50, 200, 100, $black, 'Start', $blue);
drawBox($image, 50, 150, 200, 200, $black, 'Read Sensor', $blue);
drawBox($image, 50, 250, 200, 300, $black, 'AsapValue > Threshold?', $blue);
drawBox($image, 50, 350, 200, 400, $black, 'GerakValue == HIGH?', $blue);
drawBox($image, 50, 450, 200, 500, $black, 'Display "Ada Asap"', $blue);
drawBox($image, 50, 550, 200, 600, $black, 'End', $blue);

// Menyimpan gambar
header('Content-Type: image/png');
imagepng($image);

// Membersihkan memori
imagedestroy($image);
?>
