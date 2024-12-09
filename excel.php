<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_asap_rokok_smp.xls");

session_start();
require "function/functions.php";
error_reporting(0);

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Database connection check 
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM sensor WHERE date BETWEEN '$start_date' AND DATE_ADD('$end_date', INTERVAL 1 DAY)";

$hasil = mysqli_query($koneksi, $sql);

// Check if query returns data
if (mysqli_num_rows($hasil) > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tampilan Data Asap Rokok</title>
    </head>
    <body>
        <h2 align="center">SMP NEGERI 28 SAMARINDA</h2>
        <h4 align="center">LAPORAN MONITORING ASAP ROKOK</h4>
        <h4 align="center">Dari <?php echo $start_date; ?> sampai <?php echo $end_date; ?></h4>
        <table border="1" width="50%" align="center">
            <tr>
                <th>No</th>
                <th>Asap</th>
                <th>PIR</th>
                <th>LCD</th>
                <th>Kondisi</th>
                <th>DATE</th>
            </tr>
            <?php
            $no = 1;
            while($row = mysqli_fetch_array($hasil)) { 
                echo "<tr>";
                echo "<td align='center'>" . $no++ . "</td>";
                echo "<td align='center'>" . $row['asap'] . "</td>";
                echo "<td align='center'>" . $row['pir'] . "</td>";
                echo "<td align='center'>" . $row['lcd'] . "</td>";
                
                // Kondisi column logic based on 'lcd' value
                if ($row['lcd'] == "Kondisi Normal") {
                    $kondisi = "Blower dan Buzzer OFF";
                } elseif ($row['lcd'] == "Toilet Di Gunakan") {
                    $kondisi = "Blower ON dan Buzzer OFF";
                } elseif ($row['lcd'] == "Ada asap di toilet") {
                    $kondisi = "Blower dan Buzzer ON";
                } elseif ($row['lcd'] == "Ada Asap Di Toilet") {
                    $kondisi = "Blower dan Buzzer ON";
                } else {
                    $kondisi = "Unknown Condition";
                }

                // Menampilkan nilai kondisi di tabel
                echo "<td align='center'>" . $kondisi . "</td>"; 
                echo "<td align='center'>" . date('d-m-Y H:i:s', strtotime($row['date'])) . "</td>";  // Format DATE
                echo "</tr>";
            }
            ?>
        </table>
    </body>
    </html>
    <?php
} else {
    echo "No data found for the selected date range.";
}

mysqli_close($koneksi);
?>
