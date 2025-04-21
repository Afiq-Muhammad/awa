<?php

include 'koneksi.php';

$id = $_GET['hapus'];
$hapus = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id_produk='$id'");
if($hapus) {
    echo '<script>
    alert("Hapus data berhasil"); 
    document.location.href="index.php?page=produk";
    </script>';
}else{
    echo '<script>
    alert("Hapus data gagal") 
    document.location.href="?page=produk";
    </script>';  
}
?>