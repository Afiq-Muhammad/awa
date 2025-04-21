<title>Tambah Artikel</title>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">

          <div class="card">
            <div class="card-header d-flex justify-content-center">
              <h3 class="card-title">Tambah Artikel</h3>
            </div>
            <div class="card-body">
              <form action="artikel_tambah_proses.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="judul_artikel">Judul Artikel</label>
                  <input type="text" name="judul_artikel" class="form-control" id="judul_artikel" placeholder="masukkan judul artikel" autofocus required>
                </div>
                <div class="mb-3">
                  <label for="deskripsi_artikel">Deskripsi Artikel</label>
                  <textarea name="deskripsi_artikel" id="deskripsi_artikel" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="isi_artikel">Isi Artikel</label>
                  <textarea name="isi_artikel" id="isi_artikel" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="gambar_artikel">Gambar Artikel</label>
                  <input type="file" name="gambar_artikel" class="form-control" id="gambar_artikel" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                <a href="?page=artikel" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>