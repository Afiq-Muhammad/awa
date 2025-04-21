<?php
include 'koneksi.php';

$result_produk = mysqli_query($koneksi, "SELECT * FROM tb_produk");
$count_produk = mysqli_num_rows($result_produk);

$result_artikel = mysqli_query($koneksi, "SELECT * FROM tb_artikel");
$count_artikel = mysqli_num_rows($result_artikel);

$result_galeri = mysqli_query($koneksi, "SELECT * FROM tb_galeri");
$count_galeri = mysqli_num_rows($result_galeri);

$result_admin = mysqli_query($koneksi, "SELECT * FROM tb_user");
$count_admin = mysqli_num_rows($result_admin);

$result_pesan = mysqli_query($koneksi, "SELECT * FROM tb_pesan");
$count_pesan = mysqli_num_rows($result_pesan);

$user_role = $_SESSION['role'];
?>
<title>Dashboard</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
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
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6 text-right">
          <h3 id="time"></h3>
          <p id="date"></p>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <?php if ($user_role == 'admin') : ?>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $count_admin; ?></h3>

              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php endif; ?>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $count_produk; ?></h3>

              <p>Produk</p>
            </div>
            <div class="icon">
              <i class="ion ion-university"></i>
            </div>
            <a href="?page=produk" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $count_artikel; ?></h3>

              <p>Artikel</p>
            </div>
            <div class="icon">
              <i class="ion ion-home"></i>
            </div>
            <a href="?page=artikel" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $count_galeri; ?></h3>

              <p>Galeri</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="?page=galeri" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $count_pesan; ?></h3>

              <p>Pesan Kontak</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="?page=pesan" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->