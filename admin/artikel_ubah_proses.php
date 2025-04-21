<?php
include 'koneksi.php';

$id         = $_POST['id_artikel'];
$judul      = $_POST['judul_artikel'];
$deskripsi  = $_POST['deskripsi_artikel'];
$isi        = $_POST['isi_artikel'];
$gambarLama = $_POST['gambar_lama'];

if (isset($_FILES['gambar_artikel']) && $_FILES['gambar_artikel']['error'] == 0) {
    // User upload gambar baru
    $namaFile = $_FILES['gambar_artikel']['name'];
    $tmpName  = $_FILES['gambar_artikel']['tmp_name'];
    $folder   = "uploads/";

    move_uploaded_file($tmpName, $folder . $namaFile);

    // Hapus gambar lama jika ada
    if (file_exists($folder . $gambarLama)) {
        unlink($folder . $gambarLama);
    }
} else {
    // Tidak ganti gambar
    $namaFile = $gambarLama;
}

$query = "UPDATE tb_artikel SET 
            judul_artikel = ?, 
            deskripsi_artikel = ?, 
            isi_artikel = ?, 
            gambar_artikel = ? 
          WHERE id_artikel = ?";

$stmt = $koneksi->prepare($query);
$stmt->bind_param("ssssi", $judul, $deskripsi, $isi, $namaFile, $id);

if ($stmt->execute()) {
    echo "<script>alert('Artikel berhasil diubah!'); window.location.href='index.php?page=artikel';</script>";
} else {
    echo "Gagal mengubah artikel: " . $stmt->error;
}
?>
