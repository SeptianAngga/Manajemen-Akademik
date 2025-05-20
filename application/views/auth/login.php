<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - Manajemen Akademik</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.min.css') ?>">
  <!-- Bootstrap CSS (Pastikan sudah ada di project Anda) -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <b>Manajemen</b> Akademik
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan masuk untuk memulai sesi Anda</p>

      <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
      <?php endif ?>

      <form action="<?= site_url('auth/login_action') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Nama Pengguna" required>
          <div class="input-group-append">
            <div class="input-group-text h-100 d-flex align-items-center">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Kata Sandi" required>
          <div class="input-group-append">
            <div class="input-group-text h-100 d-flex align-items-center">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <a href="<?= site_url('auth/register') ?>">Daftar akun baru</a>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/adminlte.min.js') ?>"></script>

</body>
</html>
