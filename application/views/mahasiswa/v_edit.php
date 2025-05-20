<div class="card">
  <div class="card-header">
    <h3 class="card-title">Edit Mahasiswa</h3>
  </div>
  <div class="card-body">
    <form action="<?= site_url('mahasiswa/update') ?>" method="post">
      <input type="hidden" name="id" value="<?= $mahasiswa->id ?>">

      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?= $mahasiswa->nama ?>" required>
      </div>

      <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" class="form-control" name="npm" value="<?= $mahasiswa->npm ?>" required>
      </div>

      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?= $mahasiswa->alamat ?>" required>
      </div>

      <div class="mb-3">
        <label for="gmail" class="form-label">Gmail</label>
        <input type="email" class="form-control" name="gmail" value="<?= $mahasiswa->gmail ?>" required>
      </div>

      <div class="mb-3">
        <label for="prodi" class="form-label">Prodi</label>
        <input type="text" class="form-control" name="prodi" value="<?= $mahasiswa->prodi ?>" required>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="<?= site_url('mahasiswa') ?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
