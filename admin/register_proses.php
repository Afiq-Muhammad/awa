<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['pw']);

$cek = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");

if (mysqli_num_rows($cek)>0) {
    echo
    '<script>
        alert("Email yang anda masukkan sudah terdaftar. Silahkan gunakan email yang lain");
        window.location.href="register.php";
    </script>';
    // $_SESSION['message'] = "Email yang anda masukkan sudah terdaftar. Silahkan gunakan email yang lain";
    // $_SESSION['alert_type'] = "danger";
    // header("Location: register.php");
}else {
    $query = mysqli_query($koneksi, "INSERT INTO tb_user VALUES (NULL, '$nama','$email','$password')");

    if ($query) {
        echo
        '<script>
            alert("Anda berhasil daftar! Silahkan login.");
            window.location.href="login.php";
        </script>';
        // $_SESSION['message'] = "Anda berhasil daftar! Silahkan login.";
        // $_SESSION['alert_type'] = "success";
        // header("Location: login.php");
}else {
    echo
    '<script>
        alert("Anda gagal mendaftar!");
        window.location.href="register.php";
    </script>';
    // $_SESSION['message'] = "Anda gagal mendaftar!";
    // $_SESSION['alert_type'] = "danger";
    // header("Location: register.php");
}
}


?>