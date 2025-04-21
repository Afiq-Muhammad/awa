<?php
include 'koneksi.php';
$id     = $_GET['id_ubah'];
$tampil = mysqli_query($koneksi, "SELECT * FROM tb_artikel WHERE id_artikel='$id'");
while ($data = mysqli_fetch_assoc($tampil)) {
?>
  <title>Ubah Artikel</title>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header d-flex justify-content-center">
                <h3 class="card-title">Ubah Artikel</h3>
              </div>
              <div class="card-body">
                <form action="artikel_ubah_proses.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="mb-3">
                  <input type="hidden" name="id_artikel" class="form-control" value="<?= $data['id_artikel']; ?>">
                  
                  <label for="judul_artikel">Judul Artikel</label>
                  <input type="text" name="judul_artikel" class="form-control" id="judul_artikel" value="<?= $data['judul_artikel']; ?>" required>
                </div>
                <div class="mb-3">
                  <label for="deskripsi_artikel">Deskripsi Artikel</label>
                  <textarea name="deskripsi_artikel" id="deskripsi_artikel" class="form-control" required><?= $data['deskripsi_artikel']; ?></textarea>
                </div>
                <div class="mb-3">
                  <label for="isi_artikel">Isi Artikel</label>
                  <textarea name="isi_artikel" id="isi_artikel" class="form-control" required><?= $data['isi_artikel']; ?></textarea>
                </div>
                <div class="mb-3">
                  <label for="gambar_artikel">Gambar Artikel (kosongkan jika tidak ingin diganti)</label><br>
                  <img src="uploads/<?= $data['gambar_artikel']; ?>" width="100" class="mb-2"><br>
                  <input type="file" name="gambar_artikel" class="form-control" accept="image/*">
                  <input type="hidden" name="gambar_lama" value="<?= $data['gambar_artikel']; ?>">
                </div>
                  <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Ubah</button>
                  <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                  <a href="?page=artikel" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
                <?php } ?>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>