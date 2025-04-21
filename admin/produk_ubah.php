<?php
include 'koneksi.php';
$id     = $_GET['id_ubah'];
$tampil = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk='$id'");
while ($data = mysqli_fetch_assoc($tampil)) {
?>

  <title>Ubah Produk</title>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Ubah Produk</h3>
              </div>
              <div class="card-body">
                <form action="produk_ubah_proses.php" method="post" autocomplete="off">
                  <div class="mb-3">
                    <input type="hidden" name="id_produk" class="form-control" id="id_produk" value="<?= $data['id_produk']; ?>" required>
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="<?= $data['nama_produk']; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" value="<?= $data['harga']; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi_1">Deskripsi 1</label>
                    <input type="text" name="deskripsi_1" class="form-control" id="deskripsi_1" value="<?= $data['deskripsi_1']; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi_2">Deskripsi 2</label>
                    <input type="text" name="deskripsi_2" class="form-control" id="deskripsi_2" value="<?= $data['deskripsi_2']; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi_3">Deskripsi 3</label>
                    <input type="text" name="deskripsi_3" class="form-control" id="deskripsi_3" value="<?= $data['deskripsi_3']; ?>" required>
                  </div>
                  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Ubah</button>
                  <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                  <a href="?page=produk" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>