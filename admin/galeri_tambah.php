<title>Tambah Galeri</title>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">

          <div class="card">
            <div class="card-header d-flex justify-content-center">
              <h3 class="card-title">Tambah Galeri</h3>
            </div>
            <div class="card-body">
              <form action="galeri_tambah_proses.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="judul_galeri">Judul Galeri</label>
                  <input type="text" name="judul_galeri" class="form-control" id="judul_galeri" placeholder="masukkan judul galeri" autofocus required>
                </div>
                <div class="mb-3">
                  <label for="deskripsi_galeri">Deskripsi Galeri</label>
                  <textarea name="deskripsi_galeri" id="deskripsi_galeri" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="gambar_galeri">Gambar Galeri</label>
                  <input type="file" name="gambar_galeri" class="form-control" id="gambar_galeri" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                <a href="?page=galeri" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>