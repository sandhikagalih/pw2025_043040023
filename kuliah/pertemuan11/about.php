<?php
require 'functions.php';
$title = 'About Me';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-8-md">
      <h1 class="mb-3">About Me</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed a iusto aliquid illum ipsum aliquam odio nulla qui cumque maiores nesciunt fugit fugiat eos quasi, quidem unde suscipit laudantium asperiores.</p>
    </div>
  </div>
</div>

<?php require('partials/footer.php'); ?>