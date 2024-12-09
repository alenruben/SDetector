<?php 
session_start();
require "function/functions.php";

//getnama

$nama = getnama();
$username = $nama['username'];

// Initialize variables
$start_date = '';
$end_date = '';
$hasil = null;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the start and end dates from the form
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Adjust end date to include the entire day
    $adjusted_end_date = date('Y-m-d', strtotime($end_date . ' +1 day'));

    // Store dates in session
    $_SESSION['start_date'] = $start_date;
    $_SESSION['end_date'] = $end_date;

    // Query to fetch the data within the specified date range
    // Make sure to use the correct column name for the date
    $sql = "SELECT * FROM sensor WHERE date BETWEEN '$start_date' AND '$adjusted_end_date'";
    $hasil = mysqli_query($koneksi, $sql);

    if (!$hasil) {
        die("Query failed: " . mysqli_error($koneksi));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icon.png">
    <title>Smart Detector Rokok - Laporan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/styler.css?v=1.0">
    <link rel="stylesheet" href="css/dashboard.css?v=1.0">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="header">
        <img src="img/icon.png" width="25px" height="25px" class="float-left logo-fav">
        <h3 class="text-secondary font-weight-bold float-left logo">Monitoring</h3>
        <h3 class="text-secondary float-left logo2">- Smart Detector Rokok</h3>
        <div class="logout" style="text-align: right; padding-top: 0px;">
            <a href="logout.php" class="btn btn-primary">
                <h7>Logout</h7>
            </a>
        </div>
    </div>

    <div class="sidebar">
        <nav>
            <ul>
                <li>
                    <img src="img/user.png" class="img-fluid profile float-left" width="60px">
                    <h5 class="admin"><?php echo $username; ?></h5>
                    <div class="online online2">
                        <p class="float-right ontext">Online</p>
                        <div class="on float-right"></div>
                    </div>
                </li>
                <!-- fungsi slide -->
                <script>
                    $(document).ready(function() {
                        $("#flip").click(function(){
                            $("#panel").slideToggle("medium");
                            $("#panel2").slideToggle("medium");
                        });
                        $("#flip2").click(function(){
                            $("#panel3").slideToggle("medium");
                            $("#panel4").slideToggle("medium");
                        });
                    });
                </script>
                <!-- Dashboard -->
                <a href="dashboard.php" style="text-decoration: none;">
                    <li>
                        <div>
                            <span class="fas fa-tachometer-alt"></span>
                            <span>Dashboard</span>
                        </div>
                    </li>
                </a>
                <!-- Realtime Database -->
                <a href="monitoring.php" style="text-decoration: none;">
                    <li>
                        <div>
                            <span><i class="fas fa-clipboard-list"></i></span>
                            <span>Monitoring</span>
                        </div>
                    </li>
                </a>
                <!-- Laporan Section -->
                <a href="laporan.php" style="text-decoration: none;">
                    <li>
                        <div>
                            <span><i class="fas fa-clipboard-list"></i></span>
                            <span>Laporan</span>
                        </div>
                    </li>
                </a>

                <!-- change icon -->
                <script>
                    $(".klik").click(function () {
                        $(this).find('i').toggleClass('fa-caret-up fa-caret-right');
                        if ($(".klik").not(this).find("i").hasClass("fa-caret-right")) {
                            $(".klik").not(this).find("i").toggleClass('fa-caret-up fa-caret-right');
                        }
                    });
                    $(".klik2").click(function () {
                        $(this).find('i').toggleClass('fa-caret-up fa-caret-right');
                        if ($(".klik2").not(this).find("i").hasClass("fa-caret-right")) {
                            $(".klik2").not(this).find("i").toggleClass('fa-caret-up fa-caret-right');
                        }
                    });
                </script>
                <!-- change icon -->
            </ul>
        </nav>
    </div>

    <div class="main-content khusus">
        <div class="konten khusus2">
            <div class="konten_dalem khusus3">
                <h2 class="heade" style="color: #4b4f58;">Monitoring </h2>
                <hr style="margin-top: -2px;">
                <div class="row cari-filter">
                    <div class="col-lg-5">
                        <form method="POST" action="">
                            <table class="tabel-data">
                                <tr>
                                    <td><label>Pilih Tanggal</label></td>
                                    <td>
                                        <input type="date" name="start_date" class="form-control control" value="<?php echo $start_date; ?>">
                                    </td>
                                    <td><label>sampai</label></td>
                                    <td>
                                        <input type="date" name="end_date" class="form-control control" value="<?php echo $end_date; ?>">
                                    </td>
                                    <td><button type="submit" class="btn btn-primary lapor">Tampilkan</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>

                <table class="table table-sm table-hover table-striped table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Asap</th>
                        <th>Pir</th>
                        <th>LCD</th>
                        <th>Date</th>
                    </tr>
                    <?php
                    if ($hasil) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($hasil)) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $row['asap'] . "</td>";
                            echo "<td>" . $row['pir'] . "</td>";
                            echo "<td>" . $row['lcd'] . "</td>";
                            echo "<td>" . date('l, d/m/Y H:i:s', strtotime($row['date'])) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No data found for the selected date range.</td></tr>";
                    }
                    ?>
                </table>

                <form action="ex_pdf.php" method="POST" style="margin-top: 20px;">
                    <input type="hidden" name="start_date" value="<?php echo $start_date; ?>">
                    <input type="hidden" name="end_date" value="<?php echo $end_date; ?>">
                    
                </form>
            </div>
        </div>
    </div>

    <script src="ajax/js/laporan.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>
</html>
