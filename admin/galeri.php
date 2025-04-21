<?php
include 'koneksi.php';
if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login') {
  $_SESSION['message'] = "Anda harus login terlebih dahulu!";
  $_SESSION['alert_type'] = "warning";
    header("Location: login.php");
}

$user_role = $_SESSION['role'];
?>
<?php
include 'koneksi.php';
?>
<title>Galeri</title>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">

          <div class="card">
            <div class="card-header d-flex justify-content-center">
              <h3 class="card-title">Galeri</h3>
            </div>
            <div class="card-body">
              <a href="?page=galeri_tambah" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus-circle"></i> Tambah Galeri</a>
              <table id="example1" class="table table-bordered table-striped table-hover table-sm">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Gambar Galeri</th>
                    <th>Judul Galeri</th>
                    <th>Deskripsi Galeri</th>
                    <th class="text-center"><i class="fa fa-cog"></i></th>
                  </tr>
                  <?php
                  $no =1;
                  $query = mysqli_query($koneksi, "SELECT*FROM tb_galeri");
                  while ($data = mysqli_fetch_array($query)) {
                  ?>
                </thead>
                <tbody>
                  <tr>
                    <td class="align-middle text-center"><?php echo $no++; ?></td>
                    <td class="align-middle">
                      <img src="uploads/<?php echo $data['gambar_galeri']; ?>" alt="Gambar Galeri" width="100">
                    </td>   
                    <td class="align-middle"><?php echo $data['judul_galeri']; ?></td>
                    <td class="align-middle"><?php echo $data['deskripsi_galeri']; ?></td>
                    <td class="text-center">
                      <a href="?page=galeri_ubah&id_ubah=<?php echo $data['id_galeri']; ?>" class="btn btn-warning btn-sm" title="Ubah"><i class="fa fa-edit"></i> Ubah</a>
                      <a href="index.php?page=galeri_hapus&hapus=<?php echo $data['id_galeri']; ?>" onclick="return confirm ('apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-alt"></i> Hapus</a>
                    </td>
                  </tr>
                <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
</div>