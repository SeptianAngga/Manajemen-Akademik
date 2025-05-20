<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah Kelas</h3>
  </div>
  <div class="card-body">
    <form action="<?= site_url('kelas/tambah_aksi') ?>" method="post">
      <div class="mb-3">
        <label for="kode_kelas" class="form-label">Kode Kelas</label>
        <input type="text" class="form-control" id="kode_kelas" name="kode_kelas">
      </div>
      <div class="mb-3">
        <label for="nama_kelas" class="form-label">Nama Kelas</label>
        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?= site_url('kelas') ?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
