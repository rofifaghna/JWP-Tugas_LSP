<?php
require 'function.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0) {
        echo "<script> alert('user baru berhasil ditambahkan!'); </script>";
    } else {
        echo mysqli_error($koneksi);
    }


}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bstrap/css/css.css" rel="stylesheet">

    <title>Halamar Registrasi</title>
  </head>
  <body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.php"><svg width="20" height="22" fill="#dc3545" class="bi bi-door-open-fill" viewBox="0 0 16 16">
  <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
</svg> SIA UIN Sunan Jagakali</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="wpu-movie/index.html">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="input.php">Input</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabel Portofolio
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="alumni/alumni.php">Mahasiswa</a></li>
            <li><a class="dropdown-item" href="app/application.php">Application</a></li>
            <li><a class="dropdown-item" href="perusahaan/perusahaan.php">Perusahaan</a></li>
            <li><a class="dropdown-item" href="PL/PL.php">Perusahaan Lowongan</a></li>
            <li><a class="dropdown-item" href="PLS/PLS.php">Perusahaan Lowongan Syarat</a></li>
            <li><a class="dropdown-item" href="syarat/syarat.php">Syarat</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </nav>
    <!-- akhir navbar -->

    <br>

    <!-- jumbotron -->
    <div class="container">
    <section class="jumbotron text-center">
      <h1 class="display-4">Form Login </h1>
      <hr class="my-4">
    </section>
    </div>
    <!-- akhir jumbotron -->

<!-- form -->
<div class="card container shadow-lg" style="width: 40rem;">
  <form>
  <div class="mb-3" >
  </br>
    <label for="email" class="form-label fw-bold">Email address</label>
    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label fw-bold">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="password2" class="form-label fw-bold">Konfirmasi Password</label>
    <input type="password" name="password2" class="form-control" id="password2">
  </div>
  <div class="d-grid gap-2">
  <a href="index.php" type="submit" name="register" class="btn btn-primary btn-block" type="button">Submit</a>
  <button type="reset" class="btn btn-danger btn-block mb-3" type="button">Reset</button>
  </div>
</form>
</div>
<!-- akhir form -->



    <script src="bstrap/js/jss.js"></script>
  </body>
</html>