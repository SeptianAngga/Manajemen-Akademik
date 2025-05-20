<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h3 class="card-title">Data Mahasiswa</h3>
    <a href="<?= site_url('mahasiswa/tambah') ?>" class="btn btn-primary btn-sm">+ Tambah</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Alamat</th>
            <th>Gmail</th>
            <th>Prodi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($mahasiswa as $m): ?>
          <tr>
            <td><?= $m->id ?></td>
            <td><?= $m->nama ?></td>
            <td><?= $m->npm ?></td>
            <td><?= $m->alamat ?></td>
            <td><?= $m->gmail ?></td>
            <td><?= $m->prodi ?></td>
            <td>
              <a href="<?= site_url('mahasiswa/edit/'.$m->id) ?>" class="btn btn-sm btn-warning">Edit</a>
              <a href="<?= site_url('mahasiswa/hapus/'.$m->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
