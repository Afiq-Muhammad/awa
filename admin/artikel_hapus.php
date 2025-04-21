<?php
include 'koneksi.php';

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    // Ambil nama gambar sebelum dihapus
    $cek = mysqli_query($koneksi, "SELECT gambar_artikel FROM tb_artikel WHERE id_artikel = '$id'");
    $data = mysqli_fetch_assoc($cek);
    $gambar = $data['gambar_artikel'];

    // Hapus file gambar
    $file_path = "../uploads/" . $gambar;
    if (file_exists($file_path) && $gambar != '') {
        unlink($file_path);
    }

    // Hapus data dari database
    $hapus = mysqli_query($koneksi, "DELETE FROM tb_artikel WHERE id_artikel = '$id'");

    if ($hapus) {
        echo "<script>alert('Artikel berhasil dihapus!'); window.location.href='index.php?page=artikel';</script>";
    } else {
        echo "<script>alert('Gagal menghapus artikel.'); window.location.href='index.php?page=artikel';</script>";
    }
}
?>

