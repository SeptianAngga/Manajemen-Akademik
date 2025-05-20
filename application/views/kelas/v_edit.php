<div class="card">
  <div class="card-header">
    <h3 class="card-title">Edit Kelas</h3>
  </div>
  <div class="card-body">
    <form action="<?= site_url('kelas/update') ?>" method="post">
      <input type="hidden" name="id" value="<?= $kelas->id ?>">
      <div class="mb-3">
        <label for="kode_kelas" class="form-label">Kode Kelas</label>
        <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" value="<?= $kelas->kode_kelas ?>">
      </div>
      <div class="mb-3">
        <label for="nama_kelas" class="form-label">Nama Kelas</label>
        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $kelas->nama_kelas ?>">
      </div>
      <button type="submit" class="btn btn-success">Update</button>
      <a href="<?= site_url('kelas') ?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
