<?php
include 'koneksi.php';

$judul      = $_POST['judul_artikel'];
$deskripsi  = $_POST['deskripsi_artikel'];
$isi        = $_POST['isi_artikel'];

//upload gambar
$namaFile   = $_FILES['gambar_artikel']['name'];
$tmpName    = $_FILES['gambar_artikel']['tmp_name'];
$folder     = "uploads/";

if (move_uploaded_file($tmpName, $folder . $namaFile)) {
    $query = "INSERT INTO tb_artikel (judul_artikel, deskripsi_artikel, isi_artikel, gambar_artikel) 
              VALUES (?, ?, ?, ?)";
    
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ssss", $judul, $deskripsi, $isi, $namaFile);
    
    if ($stmt->execute()) {
        echo "<script> 
                     alert('Artikel berhasil ditambahkan.'); 
                     location.href='index.php?page=artikel'; 
              </script>";
        // echo "Artikel berhasil ditambahkan.";
        // header("Location: index.php?page=artikel");
    } else {
        $_SESSION['message'] = " Artikel gagal ditambah!";
        $_SESSION['alert_type'] = "error";
        echo "Gagal menambahkan artikel: " . $stmt->error;
        header("Location: index.php?page=artikel");
    }
} else {
    echo "<script> 
                 alert('Gambar gagal ditambahkan.'); 
          </script>";
    
    // echo "Upload gambar gagal.";
    // header("Location: index.php?page=artikel");
}
