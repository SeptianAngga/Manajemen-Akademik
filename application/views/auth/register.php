<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar | Manajemen Akademik</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.min.css') ?>">
</head>
<body class="login-page">

<div class="login-box">
  <div class="login-logo">
    <b>Manajemen</b> Akademik
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Daftar untuk membuat akun baru</p>

      <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
      <?php endif; ?>

      <form action="<?= site_url('auth/register_action') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Nama Pengguna" required>
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required>
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <a href="<?= site_url('auth/login') ?>">Sudah punya akun?</a>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

</body>
</html>
