<?php
session_start();
require 'function/functions.php'; 
require 'function/loginRegister.php';

// Check cookies
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    global $koneksi;
    $stmt = $koneksi->prepare("SELECT username FROM users WHERE id_user = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) { // Check if any row is returned
        $row = $result->fetch_assoc();

        if ($key === hash('sha256', $row['username'])) {
            $_SESSION['login'] = true;
        }
    }
}

if (isset($_SESSION["login"])) {
    header("Location: dashboard");
    exit;
}

if (isset($_POST['login'])) {
    login($_POST);
}

if (isset($_POST['sign-up'])) {
    if (register($_POST) > 0) {
        echo "<script>swal('Berhasil','Akun anda berhasil didaftarkan!','success');</script>";
    } else {
        echo "<script>swal('Gagal','Gagal melakukan registrasi!','error');</script>";
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
    <title>Login | Smart Detector-Rokok</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>

        function togglePassword(fieldId, eyeId) {
        var passwordField = document.getElementById(fieldId);
        var eyeIcon = document.getElementById(eyeId);
        
        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }

        function validateForm() {
            var password = document.querySelector('input[name="password-registrasi"]').value;
            var passwordConfirm = document.querySelector('input[name="password-confirm"]').value;

            if (password.length < 8) {
                alert("Password must be at least 8 characters long.");
                return false;
            }

            if (password !== passwordConfirm) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }
    </script>

    <style>
    body {
      background: url('img/body.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      font-family: "roboto", sans-serif;
    }
    .img {
      background: url('img/login.png');
      background-size: cover;
      background-position: center;
      height: 100%;
      top: 0;
      position: absolute;
      width: 100%;
      z-index: 2;
  }
  </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center mt-12">
            <div class="col-sm-8 border-box">
                <div class="row">
                    <div class="col-sm-6 p-0">
                        <div class="card">
                            <div class="card-header">
                                <div class="signup">
                                    <h4 class="aktif">SIGN UP</h4>
                                </div>
                                <div>
                                    <h4> / </h4>
                                </div>
                                <div class="login">
                                    <h4>LOGIN</h4>
                                </div>
                                <div class="sub-title">Registrasi untuk gunakan Smart Detector-Rokok</div>
                            </div>
                            <div class="icon-user">
                                <h4 class="fa fa-user"></h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" onsubmit="return validateForm()">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="text" name="email-registrasi" class="form-control" placeholder="Email" autocomplete="off" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" name="username-registrasi" class="form-control" placeholder="Username" autocomplete="off" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" name="password-registrasi" id="password-registrasi" class="form-control" placeholder="Password" autocomplete="off" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="togglePassword('password-registrasi', 'eye1')">
                                                <i class="fa fa-eye" id="eye1"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" name="password-confirm" id="password-confirm" class="form-control" placeholder="Confirm password" autocomplete="off" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="togglePassword('password-confirm', 'eye2')">
                                                <i class="fa fa-eye" id="eye2"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <button type="submit" name="sign-up" class="btn btn-primary">Sign up</button>
                                </form>
                            </div>
                        </div>
                        <div class="img"></div>
                    </div>

                    <div class="col-sm-6 p-0">
                        <div class="card">
                            <div class="card-header">
                                <div class="login">
                                    <h4 class="aktif">LOGIN</h4>
                                </div>
                                <div>
                                    <h4> / </h4>
                                </div>
                                <div class="signup">
                                    <h4>SIGN UP</h4>
                                </div>
                                <div class="sub-title">Login untuk gunakan Smart Detector-Rokok</div>
                            </div>
                            <div class="icon-user">
                                <h4 class="fa fa-user"></h4>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" name="user-email" class="form-control" placeholder="Username / email" autocomplete="off" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" name="password-login" id="password-login" class="form-control" placeholder="Password" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="togglePassword('password-login', 'eye3')">
                                                <i class="fa fa-eye" id="eye3"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="forgot-password">
                                        <a href="lupapw.php">Forgot Password?</a>
                                    </div>
                                    <button type="submit" name="login" class="btn btn-primary" style="margin-top: 10px;">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/slidelogin.js"></script>
</body>
</html>
