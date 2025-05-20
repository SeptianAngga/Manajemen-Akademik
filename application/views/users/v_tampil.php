<?php $this->load->view('partials/navbar'); ?>

<h2>Data Users</h2>
<a href="<?= site_url('users/tambah') ?>">+ Tambah</a>
<table border="1">
    <tr><th>ID</th><th>Username</th><th>Email</th><th>Aksi</th></tr>
    <?php foreach ($users as $u): ?>
    <tr>
        <td><?= $u->id ?></td>
        <td><?= $u->username ?></td>
        <td><?= $u->email ?></td>
        <td>
            <a href="<?= site_url('users/edit/'.$u->id) ?>">Edit</a> |
            <a href="<?= site_url('users/hapus/'.$u->id) ?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
