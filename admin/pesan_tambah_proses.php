<?php
include 'koneksi.php';

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan  = $_POST['pesan'];

if ($nama != '' && $email != '' && $subjek != '' && $pesan != '') {
    $stmt = $koneksi->prepare("INSERT INTO tb_pesan (nama, email, subjek, pesan) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $email, $subjek, $pesan);

    if ($stmt->execute()) {
        echo 'success'; // biar dikenali AJAX
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>

