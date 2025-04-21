<?php
include 'koneksi.php';
if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login') {
  $_SESSION['message'] = "Anda harus login terlebih dahulu!";
  $_SESSION['alert_type'] = "warning";
  header("Location: login.php");
}

$user_role = $_SESSION['role'];
?>
<title>Produk</title>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <?php
          if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-' . $_SESSION['alert_type'] . ' alert-dismissible fade show" role="alert">'
              . $_SESSION['message'] .
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>';
            unset($_SESSION['message']); // Hapus pesan setelah ditampilkan
          }
          ?>
          <div class="card">
            <div class="card-header d-flex justify-content-center">
              <h3 class="card-title">Produk</h3>
            </div>
            <div class="card-body">
              <?php if ($user_role == 'admin') : ?>
                <a href="?page=produk_tambah" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus-circle"></i> Tambah Produk</a>
              <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped table-hover table-sm">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi 1</th>
                    <th>Deskripsi 2</th>
                    <th>Deskripsi 3</th>
                    <th class="text-center"><i class="fa fa-cog"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include 'koneksi.php';
                  $no = 1;
                  $query = mysqli_query($koneksi, "SELECT*FROM tb_produk");
                  while ($data = mysqli_fetch_array($query)) {
                  ?>
                    <tr>
                      <td class="align-middle text-center"><?php echo $no++; ?></td>
                      <td class="align-middle"><?php echo $data['nama_produk']; ?></td>
                      <td class="align-middle"><?php echo $data['harga']; ?></td>
                      <td class="align-middle"><?php echo $data['deskripsi_1']; ?></td>
                      <td class="align-middle"><?php echo $data['deskripsi_2']; ?></td>
                      <td class="align-middle"><?php echo $data['deskripsi_3']; ?></td>
                      <td class="text-center">
                        <a href="?page=produk_ubah&id_ubah=<?php echo $data['id_produk']; ?>" class="btn btn-warning btn-sm" title="Ubah"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="index.php?page=produk_hapus&hapus=<?php echo $data['id_produk']; ?>" onclick="return confirm ('apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash-alt"></i> Hapus</a>
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