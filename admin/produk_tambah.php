<title>Tambah Produk</title>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">

          <div class="card">
            <div class="card-header d-flex justify-content-center">
              <h3 class="card-title">Tambah Produk</h3>
            </div>
            <div class="card-body">
              <form action="produk_tambah_proses.php" method="post" autocomplete="off">
                <div class="mb-3">
                  <label for="nama_produk">Nama Produk</label>
                  <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="masukkan nama produk" autofocus required>
                </div>
                <div class="mb-3">
                  <label for="harga">Harga</label>
                  <input type="text" name="harga" class="form-control" id="harga" placeholder="masukkan harga" required>
                </div>
                <div class="mb-3">
                  <label for="deskripsi_1">Deskripsi 1</label>
                  <input type="text" name="deskripsi_1" class="form-control" id="deskripsi_1" placeholder="masukkan deskripsi 1" required>
                </div>
                <div class="mb-3">
                  <label for="deskripsi_2">Deskripsi 2</label>
                  <input type="text" name="deskripsi_2" class="form-control" id="deskripsi_2" placeholder="masukkan deskripsi 2" required>
                </div>
                <div class="mb-3">
                  <label for="deskripsi_3">Deskripsi 3</label>
                  <input type="text" name="deskripsi_3" class="form-control" id="deskripsi_3" placeholder="masukkan deskripsi 3" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-sync-alt"></i> Batal</button>
                <a href="?page=produk" class="btn btn-secondary btn-sm"><i class="fa fa-reply-all"></i> Kembali</a>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>