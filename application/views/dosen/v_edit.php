<?php foreach ($dosen as $d): ?>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Edit Dosen</h3>
  </div>
  <div class="card-body">
    <form action="<?= site_url('dosen/update') ?>" method="post">
      <input type="hidden" name="id" value="<?= $d->id ?>">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $d->nama ?>" required>
      </div>
      <div class="mb-3">
        <label for="nidn" class="form-label">NIDN</label>
        <input type="text" class="form-control" id="nidn" name="nidn" value="<?= $d->nidn ?>" required>
      </div>
      <button type="submit" class="btn btn-success">Update</button>
      <a href="<?= site_url('dosen') ?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
<?php endforeach ?>
