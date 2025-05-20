<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->helper('url'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Navbar</title>
</head>
<body>

<div class="navbar">
    <a href="<?= site_url('mahasiswa') ?>">Mahasiswa</a>
    <a href="<?= site_url('matkul') ?>">Matkul</a>
    <a href="<?= site_url('dosen') ?>">Dosen</a>
    <a href="<?= site_url('kelas') ?>">Kelas</a>
</div>
<hr>

</body>
</html>
