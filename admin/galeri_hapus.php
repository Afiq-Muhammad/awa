<?php
include 'koneksi.php';

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    // Ambil data gambar sebelum hapus
    $query  = mysqli_query($koneksi, "SELECT gambar_galeri FROM tb_galeri WHERE id_galeri = '$id'");
    $data   = mysqli_fetch_assoc($query);
    $gambar = $data['gambar_galeri'];

    // Hapus file gambar dari folder
    $file_path = "uploads/" . $gambar;
    if (file_exists($file_path) && $gambar != '') {
        unlink($file_path);
    }

    // Hapus data galeri dari database
    $hapus = mysqli_query($koneksi, "DELETE FROM tb_galeri WHERE id_galeri = '$id'");

    if ($hapus) {
        echo "<script>alert('Galeri berhasil dihapus!'); window.location.href='index.php?page=galeri';</script>";
    } else {
        echo "<script>alert('Gagal menghapus galeri.'); window.location.href='index.php?page=galeri';</script>";
    }
}
?>
