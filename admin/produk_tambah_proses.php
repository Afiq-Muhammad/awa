<?php
include 'koneksi.php';

$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$deskripsi_1 = $_POST['deskripsi_1'];
$deskripsi_2 = $_POST['deskripsi_2'];
$deskripsi_3 = $_POST['deskripsi_3'];

$tambah = mysqli_query($koneksi, "INSERT INTO tb_produk values(NULL, '$nama', '$harga', '$deskripsi_1', '$deskripsi_2', '$deskripsi_3')");

if ($tambah) {
    echo "<script> 
                 alert('Data Produk berhasil tambah'); 
                 location.href='index.php?page=produk'; 
          </script>";
}
