<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah Dosen</h3>
  </div>
  <div class="card-body">
    <form action="<?= site_url('dosen/tambah_aksi') ?>" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="nidn" class="form-label">NIDN</label>
        <input type="text" class="form-control" id="nidn" name="nidn" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?= site_url('dosen') ?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
