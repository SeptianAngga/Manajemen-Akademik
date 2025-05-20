<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h3 class="card-title">Data Kelas</h3>
    <a href="<?= site_url('kelas/tambah') ?>" class="btn btn-primary btn-sm">+ Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($kelas as $k): ?>
          <tr>
            <td><?= $k->id ?></td>
            <td><?= $k->kode_kelas ?></td>
            <td><?= $k->nama_kelas ?></td>
            <td>
              <a href="<?= site_url('kelas/edit/' . $k->id) ?>" class="btn btn-sm btn-warning">Edit</a>
              <a href="<?= site_url('kelas/hapus/' . $k->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
