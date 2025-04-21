<?php

session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = md5($_POST['pw']);

//login admin
$query_a = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email' AND password='$password'");
$cek_a = mysqli_num_rows($query_a);


if ($cek_a > 0) {
    $data_a = mysqli_fetch_array($query_a);
    $_SESSION['nama'] = $data_a['username'];
    $_SESSION['id_user'] = $data_a['id_user'];
    $_SESSION['role'] = 'admin';
    $_SESSION['status'] = 'login';

    $_SESSION['message'] = "Selamat datang " . ($data_a['username']);
    $_SESSION['alert_type'] = "success";
    
    header("Location: index.php");

} else {
    echo '<script>
        alert("Email atau password salah");
        document.location.href="login.php";
    </script>';
}

?>

