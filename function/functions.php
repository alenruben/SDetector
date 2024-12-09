<?php 
// Database connection
$koneksi = mysqli_connect('localhost', 'root', '', 'iotalen');
if (!$koneksi) {
    die('Gagal terhubung ke database: ' . mysqli_connect_error());
}

// Function to execute a query and return results as an array
function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die('Query error: ' . mysqli_error($koneksi));
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


    

// Retrieve the latest data from the sensor table
function getLatestSensorData() {
    global $koneksi;
    $query = "SELECT asap, pir, led_merah, led_hijau, lcd FROM sensor ORDER BY date DESC LIMIT 1";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        error_log('Query error: ' . mysqli_error($koneksi)); // Log the error
        return false; // Return false to handle it gracefully
    }
    return mysqli_fetch_assoc($result);
}

function getnama() {
    global $koneksi;
    $query = "SELECT username FROM users ";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        error_log('Query error: ' . mysqli_error($koneksi)); // Log the error
        return false; // Return false to handle it gracefully
    }
    return mysqli_fetch_assoc($result);
}




?>
