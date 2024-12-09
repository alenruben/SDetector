<?php ob_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

</html>
<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'iotalen');

// Function for user registration
function register($data) {
    global $koneksi;

    $email = htmlspecialchars($data['email-registrasi']);
    $username = htmlspecialchars($data['username-registrasi']);
    $password = htmlspecialchars($data['password-registrasi']);
    $passwordConfirm = htmlspecialchars($data['password-confirm']);

    // Validate password length
    if (strlen($password) < 8) {
        echo "<script>swal('Gagal', 'Password harus terdiri dari setidaknya 8 karakter!', 'error');</script>";
        return 0;
    }

    // Check if passwords match
    if ($password !== $passwordConfirm) {
        echo "<script>swal('Gagal', 'Password dan konfirmasi password tidak cocok!', 'error');</script>";
        return 0;
    }

    // Hash the password for security
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database
    $stmt = $koneksi->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
    if ($stmt === false) {
        echo "<script>swal('Gagal', 'Gagal menyiapkan query!', 'error');</script>";
        return 0;
    }
    
    $stmt->bind_param("sss", $email, $username, $passwordHash);
    $stmt->execute();

    // Return number of affected rows
    return $stmt->affected_rows;
}

// Function for user login
// Function for user login
function login($dataLogin) {
    global $koneksi;

    $emailOrUsername = $dataLogin['user-email'];
    $password = $dataLogin['password-login'];

    // Prepare statement to check if the user exists
    $stmt = $koneksi->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
    if ($stmt === false) {
        echo "<script>swal('Gagal', 'Gagal menyiapkan query!', 'error');</script>";
        return 0;
    }

    $stmt->bind_param("ss", $emailOrUsername, $emailOrUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any row is returned
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user["password"])) {
            if ($user['status'] === 'aktif') {
                session_start(); // Tambahkan jika session belum dimulai
                $_SESSION['user'] = $user['username'];
                $_SESSION['login'] = true;

                // If "remember me" is checked, set cookies
                if (isset($dataLogin['rememberme'])) {
                    setcookie('login', $user['username'], time() + 3600, '/', '', false, true); // HttpOnly, secure
                    setcookie('id', $user['id_user'], time() + 3600, '/', '', false, true);
                    setcookie('key', hash('sha256', $user['username']), time() + 3600, '/', '', false, true);
                }

                header('Location: dashboard.php');
                exit;
            } else {
                // If the account is inactive
                echo "<script>swal('Maaf','Akun anda dinonaktifkan oleh admin!','info');</script>";
                return false;
            }
        } else {
            // Incorrect password
            echo "<script>swal('Maaf','Username atau password salah!','warning');</script>";
            return false;
        }
    } else {
        // No user found
        echo "<script>swal('Maaf','Username atau email salah!','warning');</script>";
        return false;
    }
}

?>
