<?php 
session_start();
require "function/functions.php"; 

if(empty($_SESSION['login'])) {
        header('Location: login');
        exit;
    } 

//getnama

$nama = getnama();
$username = $nama['username'];

// Retrieve the latest sensor data
$data = getLatestSensorData();

$nilai_asap = $data['asap'];
$nilai_pir = $data['pir'];
$nilai_led_merah = $data['led_merah'];
$nilai_led_hijau = $data['led_hijau'];
$nilai_lcd = $data['lcd'];

mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icon.png">
    <title>Smart Detector Rokok - Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styler.css?v=1.0">
    <link rel="stylesheet" href="css/dashboard.css?v=1.0">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="js/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <style>
    .rentang {
        padding-bottom: 75px;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0; /* Menghilangkan margin default pada body */
    }

    .main-content {
        padding: 20px;
        background-image: url('img/web.jpg'); /* Gambar latar belakang */
        background-size: cover; /* Mengisi seluruh area */
        background-position: center; /* Menempatkan gambar di tengah */
        background-repeat: no-repeat; /* Tidak mengulang gambar */
        position: relative; /* Diperlukan untuk overlay */
    }

    .konten {
        background: rgba(255, 255, 255, 0.8); /* Transparan putih untuk keterbacaan */
        padding: 20px;
        border-radius: 10px;
    }

    .card {
        background: rgba(255, 255, 255, 0.9); /* Transparan putih pada kartu */
    }
    .led-indicator {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: inline-block;
        
        margin-left: 10px;
    }

    .led-red-on {
        background-color: red;
    }

    .led-red-off {
        background-color: transparent;
        border: 1px solid red;
    }

    .led-green-on {
        background-color: green;
    }

    .led-green-off {
        background-color: transparent;
        border: 1px solid green;
    }

    .led-status {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }
    .led-text {
        margin-left: 10px;
    }

    </style>
    <style>
    #myDoughnutChart {
        max-width: 1000px;
        margin: 0 auto;
    }
</style>

</head>

<body>
    <div class="header">
        <img src="img/icon.png" width="25px" height="25px" class="float-left logo-fav">
        <h3 class="text-secondary font-weight-bold float-left logo">Smart</h3>
        <h3 class="text-secondary float-left logo2">Detector Rokok</h3>
        <div class="logout" style="text-align: right; padding-top: 0px;">
            <a href="logout.php" class="btn btn-primary">
                <h7>Logout</h7>
            </a>
        </div>
    </div>

    <div class="sidebar">
        <nav>
            <ul>
                <!-- User Profile Section -->
                <li class="rentang">
                    <img src="img/user.png" class="img-fluid profile float-left" width="60px">
                    <h5 class="admin"><?php echo $username; ?></h5>
                    <div class="online online2">
                        <p class="float-right ontext">Online</p>
                        <div class="on float-right"></div>
                    </div>
                </li>
                
                <!-- Fungsi Slide -->
                <script>
                $(document).ready(function(){
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
                <!-- Dashboard Link -->
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
                    <li >
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
                <h2 class="heade" style="color: #4b4f58;">Dashboard</h2>
                <hr style="margin-top: -2px;">
                <div class="container" id="container" style="border: none;">
                    <div class="row tampilCardview" id="row">
                        <!-- Kartu 1 Asap -->
                        <div class="col-md-6 jarak"> 
                            <div class="card card-stats" style="background: #98afc7;">
                                <div class="card-body" style="padding: 20px;">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <img src="img/mq.jpg" width="50" height="50" style="vertical-align: middle; border-radius: 50%;">
                                        </div>
                                        <div class="col-7 d-flex align-items-center tulisan" >
                                            <div class="numbers" id="asap">
                                                <p class="card-category" style="color: #2c3e50; font-weight: bold;"> Status Sensor MQ-2</p>
                                                <h4 class="card-title" style="color: #34495e; font-weight: bold;"> <?php echo $nilai_asap; ?> </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Kartu 2 GAUGE -->
                        
                        <!-- Kartu 3 PIR --> 
                        <div class="col-md-6 jarak" style="margin-bottom: 20px;"> 
                            <div class="card card-stats" style="background: #98afc7;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <img src="img/pir1.png" width="50" height="50" style="vertical-align: middle; border-radius: 50%;" >
                                        </div>
                                        <div class="col-7 d-flex align-items-center tulisan">
                                            <div class="numbers">
                                                <p class="card-category" style="color: #2c3e50; font-weight: bold;">Sensor PIR</p>
                                                <h4 class="card-title" style="color: #34495e; font-weight: bold;"><?php echo $nilai_pir; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Jarak antara kartu 2 dan kartu 3 -->
                        <div class="w-100"></div> <!-- Memastikan kartu 3 berada di bawah -->
                        <!-- Kartu 3 -->
                        <div class="col-md-6 jarak" style="margin-top: 20px;"> 
                            <div class="card card-stats" style="background: #98afc7;">
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <!-- Ganti dengan GIF lampu -->
                                        <div class="col-5 text-center">
                                            <img src="img/lampu.gif" width="100" height="100" style="vertical-align: middle; border-radius: 50%;" >
                                            <p></p>
                                            <div>
                                                <div class="led-indicator <?php echo ($nilai_led_merah == 'ON') ? 'led-red-on' : 'led-red-off'; ?>" style="vertical-align: middle;"></div>
                                                <div class="led-text"></div>
                                            </div>
                                            <p></p>
                                            <div>
                                                <div class="led-indicator <?php echo ($nilai_led_hijau == 'ON') ? 'led-green-on' : 'led-green-off'; ?>"></div>
                                                <div class="led-status"></div>
                                            </div>
                                        </div>
                                        <!-- Program Memanggil Nilai ON atau OFF pada LED -->
                                        <div class="col-7 d-flex align-items-center tulisan">
                                            <div class="numbers">
                                                <p class="card-category" style="color: #2c3e50; font-weight: bold;">Tampilan LED</p>
                                                <div class="led-status">
                                                    <div class="led-text" style="color: #2c3e50; font-weight: bold;"><?= $nilai_led_merah ?></div>
                                                </div>
                                                <div class="led-status">
                                                    <div class="led-text" style="color: #2c3e50; font-weight: bold;"><?= $nilai_led_hijau ?></div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kartu 4 -->
                        <div class="col-md-6 jarak" style="margin-top: 20px;"> 
                            <div class="card card-stats" style="background: #98afc7;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5 text-center">
                                            <img src="img/lcd.jpeg" width="50" height="50" style="vertical-align: middle; border-radius: 50%;" >
                                        </div>
                                        <div class="col-7 d-flex align-items-center tulisan">
                                            <div class="numbers">
                                                <p class="card-category" style="color: #2c3e50; font-weight: bold;">Tampilan I2C</p>
                                                <h4 class="card-title" style="color: #34495e; font-weight: bold;"><?php echo $nilai_lcd; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

</body>
</html>
