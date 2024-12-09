<?php 
session_start();
$error = array();

require "mail.php";

  if(!$con = mysqli_connect("localhost","root","","iotalen")){

    die("could not connect");
  }

  $mode = "enter_email";
  if(isset($_GET['mode'])){
    $mode = $_GET['mode'];
  }

  //something is posted
  if(count($_POST) > 0){

    switch ($mode) {
      case 'enter_email':
        // code...
        $email = $_POST['email'];
        //validate email
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $error[] = "Please enter a valid email";
        }elseif(!valid_email($email)){
          $error[] = "That email was not found";
        }else{

          $_SESSION['lupapw']['email'] = $email;
          send_email($email);
          header("Location: lupapw.php?mode=enter_code");
          die;
        }
        break;

      case 'enter_code':
        // code...
        $code = $_POST['code'];
        $result = is_code_correct($code);

        if($result == "the code is correct"){

          $_SESSION['lupapw']['code'] = $code;
          header("Location: lupapw.php?mode=enter_password");
          die;
        }else{
          $error[] = $result;
        }
        break;

      case 'enter_password':
        // code...
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if($password !== $password2){
          $error[] = "Passwords do not match";
        }elseif(!isset($_SESSION['lupapw']['email']) || !isset($_SESSION['lupapw']['code'])){
          header("Location: lupapw.php");
          die;
        }else{
          
          save_password($password);
          if(isset($_SESSION['lupapw'])){
            unset($_SESSION['lupapw']);
          }

          header("Location: login.php");
          die;
        }
        break;
      
      default:
        // code...
        break;
    }
  }

  function send_email($email){
    
    global $con;

    $expire = time() + (60 * 1);
    $code = rand(10000,99999);
    $email = addslashes($email);

    $query = "insert into codes (email,code,expire) value ('$email','$code','$expire')";
    mysqli_query($con,$query);

    //send email here
    send_mail($email,'Password reset',"Your code is " . $code);
  }
  
  function save_password($password){
    
    global $con;

    $password = password_hash($password, PASSWORD_DEFAULT);
    $email = addslashes($_SESSION['lupapw']['email']);

    $query = "update users set password = '$password' where email = '$email' limit 1";
    mysqli_query($con,$query);

  }
  
  function valid_email($email){
    global $con;

    $email = addslashes($email);

    $query = "select * from users where email = '$email' limit 1";    
    $result = mysqli_query($con,$query);
    if($result){
      if(mysqli_num_rows($result) > 0)
      {
        return true;
      }
    }

    return false;

  }

  function is_code_correct($code){
    global $con;

    $code = addslashes($code);
    $expire = time();
    $email = addslashes($_SESSION['lupapw']['email']);

    $query = "select * from codes where code = '$code' && email = '$email' order by id desc limit 1";
    $result = mysqli_query($con,$query);
    if($result){
      if(mysqli_num_rows($result) > 0)
      {
        $row = mysqli_fetch_assoc($result);
        if($row['expire'] > $expire){

          return "the code is correct";
        }else{
          return "the code is expired";
        }
      }else{
        return "the code is incorrect";
      }
    }

    return "the code is incorrect";
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Reset</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background: url(img/lupa.jpg) no-repeat center center;
      background-size: cover; /* Membuat gambar latar belakang menutupi seluruh layar secara proporsional */
      font-family: 'Arial', sans-serif;
    }


    form {
      background-color: #fff;
      padding: 20px 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #333;
    }

    h3 {
      font-size: 16px;
      color: #555;
      margin-bottom: 20px;
    }

    .textbox {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    .textbox:focus {
      border-color: #66afe9;
      outline: none;
      box-shadow: 0 0 5px rgba(102, 175, 233, 0.6);
    }

    .error {
      color: red;
      font-size: 12px;
      margin-bottom: 15px;
      text-align: left;
    }

    .btn {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 4px;
      background-color: #28a745;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #218838;
    }

    .btn-secondary {
      background-color: #6c757d;
      margin-top: 10px;
    }

    .btn-secondary:hover {
      background-color: #5a6268;
    }

    .link {
      margin-top: 20px;
      display: block;
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
    }

    .link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <?php 
    switch ($mode) {
      case 'enter_email':
        ?>
        <form method="post" action="lupapw.php?mode=enter_email"> 
          <h1>Password Reset</h1>
          <h3>Enter your email below</h3>
          <?php if (!empty($error)): ?>
          <div class="error">
            <?php foreach ($error as $err) { echo $err . "<br>"; } ?>
          </div>
          <?php endif; ?>
          <input class="textbox" type="email" name="email" placeholder="Email" required><br>
          <input class="btn" type="submit" value="Next">
          <a class="link" href="login.php">Login</a>
        </form>
        <?php       
        break;

      case 'enter_code':
        ?>
        <form method="post" action="lupapw.php?mode=enter_code"> 
          <h1>Password Reset</h1>
          <h3>Enter the code sent to your email</h3>
          <?php if (!empty($error)): ?>
          <div class="error">
            <?php foreach ($error as $err) { echo $err . "<br>"; } ?>
          </div>
          <?php endif; ?>
          <input class="textbox" type="text" name="code" placeholder="12345" required><br>
          <input class="btn" type="submit" value="Next">
          <input class="btn btn-secondary" type="button" value="Start Over" onclick="window.location.href='lupapw.php'">
          <a class="link" href="login.php">Login</a>
        </form>
        <?php
        break;

      case 'enter_password':
        ?>
        <form method="post" action="lupapw.php?mode=enter_password"> 
          <h1>Password Reset</h1>
          <h3>Enter your new password</h3>
          <?php if (!empty($error)): ?>
          <div class="error">
            <?php foreach ($error as $err) { echo $err . "<br>"; } ?>
          </div>
          <?php endif; ?>
          <input class="textbox" type="password" name="password" placeholder="Password" required><br>
          <input class="textbox" type="password" name="password2" placeholder="Retype Password" required><br>
          <input class="btn" type="submit" value="Next">
          <input class="btn btn-secondary" type="button" value="Start Over" onclick="window.location.href='lupapw.php'">
          <a class="link" href="login.php">Login</a>
        </form>
        <?php
        break;
      
      default:
        break;
    }
  ?>

</body>
</html>
