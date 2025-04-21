<?php
include 'koneksi.php';

$id = $_GET['hapus'];
$hapus = mysqli_query($koneksi, "DELETE FROM tb_pesan WHERE id_pesan='$id'");
if($hapus) {
    echo '<script>
    alert("Hapus data berhasil"); 
    document.location.href="index.php?page=pesan";
    </script>';
}else{
    echo '<script>
    alert("Hapus data gagal") 
    document.location.href="?page=pesan";
    </script>';  
}
?>