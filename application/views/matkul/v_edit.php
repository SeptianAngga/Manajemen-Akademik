<div class="card">
  <div class="card-header">
    <h3 class="card-title">Edit Mata Kuliah</h3>
  </div>
  <div class="card-body">
    <form action="<?= site_url('matkul/update') ?>" method="post">
      <input type="hidden" name="id" value="<?= $matkul->id ?>">
      <div class="mb-3">
        <label for="kode_matkul" class="form-label">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" value="<?= $matkul->kode_matkul ?>">
      </div>
      <div class="mb-3">
        <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="<?= $matkul->nama_matkul ?>">
      </div>
      <button type="submit" class="btn btn-success">Update</button>
      <a href="<?= site_url('matkul') ?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
