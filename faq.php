<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/icon.png">
  <link rel="stylesheet" href="css/faq.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <title>Smart Detector Rokok - FAQ</title>
  <style>
    body {
      font-family: "Roboto", sans-serif;
      height: 100%;
      
    }
  </style>
</head>
<body background="img\faq.jpg">
  <nav>
    <ul>
      <a href="index.php" style="text-decoration: none; color: white;"><li>HOME</li></a>
    </ul>
  </nav>
  <div class="content">
    <h2 class="title">FaQ</h2>

    <div class="faq" id="satu">
      <h3>Apa itu Smart Detector Rokok ?</h3>
      <i class="fas fa-caret-right" style="float: right; font-size: 30px; margin-top:-25px;"></i>
    </div>
    <div class="faq" id="panel1" style="display: none;">Website Smart Detector Rokok adalah platform inovatif yang didedikasikan untuk mendeteksi keberadaan asap rokok secara real-time dan memberikan informasi yang berguna kepada pengguna. Kami hadir dengan visi untuk menciptakan lingkungan yang lebih sehat dan aman dengan menghadirkan solusi yang cerdas dalam mengatasi masalah merokok.</div>

    <div class="faq" id="dua">
      <h3>Apa saja fitur Smart Detector Rokok ?</h3>
      <i class="fas fa-caret-right" style="float: right; font-size: 30px; margin-top:-25px;"></i>
    </div>
    <div class="faq" id="panel2" style="display: none;">Smart Detector Rokok menawarkan fitur-fitur inovatif yang bertujuan untuk mendeteksi keberadaan asap rokok secara real-time dan menyediakan informasi yang berguna kepada pengguna.</div>

    <div class="faq" id="tiga">
      <h3>Bagaimana cara penggunaan Smart Detector Rokok ?</h3>
      <i class="fas fa-caret-right" style="float: right; font-size: 30px; margin-top:-25px;"></i>
    </div>
    <div class="faq" id="panel3" style="display: none;">Pertama anda harus mendaftarkan diri terlebih dahulu. Setelah mendaftarkan diri, kita wajib login untuk mengakses website Smart Detector Rokok dan anda dapat menggunakan semua fitur yang telah di sediakan dengan mudah.</div>
  </div>

  <!-- change icon -->
    <script>
      $("#satu").click(function () {
        $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
        if ($("#satu").not(this).find("i").hasClass("fa-caret-right")) {
          $("#satu").not(this).find("i").toggleClass('fa-caret-down fa-caret-right');
        }

    });
      $("#dua").click(function () {
        $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
        if ($("#dua").not(this).find("i").hasClass("fa-caret-right")) {
          $("#dua").not(this).find("i").toggleClass('fa-caret-down fa-caret-right');
        }
    });
      $("#tiga").click(function () {
        $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
        if ($("#tiga").not(this).find("i").hasClass("fa-caret-right")) {
          $("#tiga").not(this).find("i").toggleClass('fa-caret-down fa-caret-right');
        }
    });
  </script>
  <!-- change icon -->
  <script>
    $("#satu").click(function(){
      $("#panel1").slideToggle("medium");
    });
    $("#dua").click(function(){
      $("#panel2").slideToggle("medium");
    });
    $("#tiga").click(function(){
      $("#panel3").slideToggle("medium");
    });
  </script>

  
</body>
</html>
