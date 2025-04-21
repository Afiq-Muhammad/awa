<?php
include 'koneksi.php';

// Cek jika form tambah galeri dikirim
if (isset($_POST['judul_galeri'])) {
    $judul      = $_POST['judul_galeri'];
    $deskripsi  = $_POST['deskripsi_galeri'];

    // Proses upload gambar
    $namaFile   = $_FILES['gambar_galeri']['name'];
    $tmpName    = $_FILES['gambar_galeri']['tmp_name'];
    $folder     = "uploads/";

    // Rename nama file agar unik
    $ekstensi   = pathinfo($namaFile, PATHINFO_EXTENSION);
    $namaBaru   = uniqid() . '.' . $ekstensi;

    if (move_uploaded_file($tmpName, $folder . $namaBaru)) {
        // Simpan ke database
        $query = "INSERT INTO tb_galeri (judul_galeri, deskripsi_galeri, gambar_galeri)
                  VALUES (?, ?, ?)";
        $stmt = $koneksi->prepare($query);
        $stmt->bind_param("sss", $judul, $deskripsi, $namaBaru);

        if ($stmt->execute()) {
            echo "<script>alert('Galeri berhasil ditambahkan!'); window.location.href='index.php?page=galeri';</script>";
        } else {
            echo "Gagal menyimpan data: " . $stmt->error;
        }
    } else {
        echo "<script>alert('Gagal upload gambar!'); window.history.back();</script>";
    }
}
?>
