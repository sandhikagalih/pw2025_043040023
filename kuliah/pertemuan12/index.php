<?php
require 'functions.php';
$title = 'Daftar Mahasiswa';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-8-md">
      <h1 class="mb-3">Daftar Mahasiswa</h1>
      <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
      <table class="table table-striped table-hover">
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($mahasiswa as $mhs) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td>
              <img src="img/<?= $mhs['gambar']; ?>" width="50">
            </td>
            <td>
              <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
              <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Yakin?');" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<?php require('partials/footer.php'); ?>