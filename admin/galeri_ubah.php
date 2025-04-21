<?php
include 'koneksi.php';
$id     = $_GET['id_ubah'];
$tampil = mysqli_query($koneksi, "SELECT * FROM tb_galeri WHERE id_galeri='$id'");
while ($data = mysqli_fetch_assoc($tampil)) {
?>
  <title>Ubah Galeri</title>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Ubah Galeri</h3>
              </div>
              <div class="card-body">
                <form action="galeri_ubah_proses.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="mb-3">
                  <input type="hidden" name="id_galeri" class="form-control" value="<?= $data['id_galeri']; ?>">
                  
                  <label for="judul_galeri">Judul Galeri</label>
                  <input type="text" name="judul_galeri" class="form-control" id="judul_galeri" value="<?= $data['judul_galeri']; ?>" required>
                </div>
                <div class="mb-3">
                  <label for="deskripsi_galeri">Deskripsi Galeri</label>
                  <textarea name="deskripsi_galeri" id="deskripsi_galeri" class="form-control" required><?= $data['deskripsi_galeri']; ?></textarea>
                </div>
                <div class="mb-3">
                  <label for="gambar_galeri">Gambar Galeri (kosongkan jika tidak ingin diganti)</label><br>
                  <img src="uploads/<?= $data['gambar_galeri']; ?>" width="100" class="mb-2"><br>
                  <input type="file" name="gambar_galeri" class="form-control" accept="image/*">
                  <input type="hidden" name="gambar_lama" value="<?= $data['gambar_galeri']; ?>">
                </div>
                  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Ubah</button>
                  <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                  <a href="?page=galeri" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
                <?php } ?>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>