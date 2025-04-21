<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
  <link rel="shortcut icon" href="dist/img/icon.png" type="image/x-icon">

  <style>
    .hidden {
      display: none;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
  <?php 
  session_start();
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
  </div>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">

      <form action="login_proses.php" method="post" autocomplete="off">
        <div class="" id="admin-f">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pw" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block mb-3">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <!-- Belum punya akun? <a href="register.php" class="text-center">Silahkan daftar!</a> -->
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- script pilih role -->
 <script>
  document.getElementById('role').addEventListener('change', function() {
    var adminF = document.getElementById('admin-f');
    var siswaF = document.getElementById('siswa-f');

    if (this.value == '1') {
      adminF.classList.remove('hidden');
      siswaF.classList.add('hidden');
    } else if (this.value == '2') {
      adminF.classList.add('hidden');
      siswaF.classList.remove('hidden');
    }
  });
 </script>
</body>
</html>





