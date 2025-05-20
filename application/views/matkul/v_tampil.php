<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h3 class="card-title">Data Mata Kuliah</h3>
    <a href="<?= site_url('matkul/tambah') ?>" class="btn btn-sm btn-primary">+ Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama Mata Kuliah</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($matkul as $m): ?>
            <tr>
              <td><?= $m->id ?></td>
              <td><?= $m->kode_matkul ?></td>
              <td><?= $m->nama_matkul ?></td>
              <td>
                <a href="<?= site_url('matkul/edit/'.$m->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= site_url('matkul/hapus/'.$m->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
