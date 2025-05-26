<?php
require 'functions.php';
$title = 'Form Tambah Data Mahasiswa';

if (isset($_POST['submit'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'tambah.php';
          </script>";
  }
}
?>

<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h1 class="mb-3">Form Tambah Data Mahasiswa</h1>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" required autofocus>
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="text" class="form-control" id="gambar" name="gambar" value="nophoto.jpg" readonly>
        </div>
        <div class="my-4 d-grid gap-2">
          <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require('partials/footer.php'); ?>