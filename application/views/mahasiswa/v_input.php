<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah Mahasiswa</h3>
  </div>
  <div class="card-body">
    <form action="<?= site_url('mahasiswa/tambah_aksi') ?>" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" name="npm" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="gmail" class="form-label">Gmail</label>
        <input type="email" name="gmail" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="prodi" class="form-label">Prodi</label>
        <input type="text" name="prodi" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?= site_url('mahasiswa') ?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
