<?php
include 'koneksi.php';

$id          = $_POST['id_produk'];
$nama        = $_POST['nama_produk'];
$harga       = $_POST['harga'];
$deskripsi_1 = $_POST['deskripsi_1'];
$deskripsi_2 = $_POST['deskripsi_2'];
$deskripsi_3 = $_POST['deskripsi_3'];

$update = mysqli_query($koneksi, "UPDATE tb_produk SET nama_produk='$nama', harga='$harga', deskripsi_1='$deskripsi_1', deskripsi_2='$deskripsi_2', deskripsi_3='$deskripsi_3' WHERE id_produk='$id'");

if ($update) {
    echo "<script> 
                 alert('Data Produk berhasil diubah');
                 location.href='index.php?page=produk';
          </script>";
}
