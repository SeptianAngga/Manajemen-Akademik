<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h3 class="card-title">Data Dosen</h3>
    <a href="<?= site_url('dosen/tambah') ?>" class="btn btn-primary btn-sm">+ Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIDN</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($dosen as $d): ?>
            <tr>
              <td><?= $d->id ?></td>
              <td><?= $d->nama ?></td>
              <td><?= $d->nidn ?></td>
              <td>
                <a href="<?= site_url('dosen/edit/'.$d->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= site_url('dosen/hapus/'.$d->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
