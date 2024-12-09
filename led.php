<?php 
session_start();
require "function/functions.php";  // Pastikan path ke file functions.php benar

// Koneksi ke database
$konek = mysqli_connect('localhost', 'root', '', 'coba');  // Sesuaikan dengan database Anda
if (!$konek) {
    die('Gagal terhubung ke database: ' . mysqli_connect_error());
}

// Cek apakah parameter 'asap', 'led_merah', 'led_hijau', 'lcd', dan 'pir' ada
if (isset($_GET['asap']) && isset($_GET['led_merah']) && isset($_GET['led_hijau']) ) {
    $asap = mysqli_real_escape_string($konek, $_GET['asap']);
    $led_merah = mysqli_real_escape_string($konek, $_GET['led_merah']);
    $led_hijau = mysqli_real_escape_string($konek, $_GET['led_hijau']);
    

    
    // Menyimpan data ke database
    $simpan = mysqli_query($konek, "INSERT INTO sensor (asap, led_merah, led_hijau ) VALUES ('$asap', '$led_merah', '$led_hijau')");

    if ($simpan) {
        echo "Berhasil Terkirim";
    } else {
        echo "Gagal Terkirim: " . mysqli_error($konek);
    }
} else {
    echo "Parameter 'asap', 'led_merah', 'led_hijau' tidak ditemukan dalam permintaan.";
}

// Tutup koneksi database
mysqli_close($konek);
?>
