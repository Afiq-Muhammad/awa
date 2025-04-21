<?php
include 'koneksi.php';

if (isset($_POST['id_galeri'])) {
    $id         = $_POST['id_galeri'];
    $judul      = $_POST['judul_galeri'];
    $deskripsi  = $_POST['deskripsi_galeri'];
    $gambarLama = $_POST['gambar_lama'];

    $folder     = "uploads/";
    $gambarBaru = $gambarLama; // default: pakai gambar lama

    // Cek apakah user upload gambar baru
    if (!empty($_FILES['gambar_galeri']['name'])) {
        $namaFile = $_FILES['gambar_galeri']['name'];
        $tmpName  = $_FILES['gambar_galeri']['tmp_name'];

        $ekstensi = pathinfo($namaFile, PATHINFO_EXTENSION);
        $namaBaru = uniqid() . '.' . $ekstensi;

        // Upload gambar baru
        if (move_uploaded_file($tmpName, $folder . $namaBaru)) {
            // Hapus gambar lama jika ada
            if (file_exists($folder . $gambarLama) && $gambarLama != '') {
                unlink($folder . $gambarLama);
            }
            $gambarBaru = $namaBaru;
        } else {
            echo "<script>alert('Gagal upload gambar baru.'); window.history.back();</script>";
            exit;
        }
    }

    // Update data galeri
    $query = "UPDATE tb_galeri SET judul_galeri=?, deskripsi_galeri=?, gambar_galeri=? WHERE id_galeri=?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("sssi", $judul, $deskripsi, $gambarBaru, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Galeri berhasil diubah!'); window.location.href='index.php?page=galeri';</script>";
    } else {
        echo "<script>alert('Gagal mengubah galeri.'); window.history.back();</script>";
    }
}
?>
