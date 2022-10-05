<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bstrap/css/css.css" rel="stylesheet">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>Sistem Informasi Akademik</title>
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

</br>

<!-- jumbotron -->
<div class="container">
    <section class="jumbotron text-center">
      <h1 class="display-5">Form Penginputan Data Perusahaan </h1>
      <hr class="my-4">
    </section>
    </div>
    <!-- akhir jumbotron -->





<!-- card -->
<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">Mahasiswa</h5>
        <p class="card-text">Melakukan penginputan data pada tabel mahasiswa.</p>
        <a href="input/mahasiswa.php" class="btn btn-primary">Input</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">Dosen</h5>
        <p class="card-text">Melakukan penginputan data pada tabel Dosen.</p>
        <a href="input/dosen_input.php" class="btn btn-primary">input</a>
      </div>
    </div>
  </div>
</div>
</div>
</br>

<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">Mata Kuliah</h5>
        <p class="card-text">Melakukan penginputan data pada tabel Mata Kuliah.</p>
        <a href="input/matkul_input.php" class="btn btn-primary">input</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">Jadwal</h5>
        <p class="card-text">Melakukan penginputan data pada tabel perusahaan Jadwal.</p>
        <a href="input/jadwal_input.php" class="btn btn-primary">input</a>
      </div>
    </div>
  </div>
</div>
</div>
</br>

<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">Ruangan</h5>
        <p class="card-text">Melakukan penginputan data pada tabel Ruangan.</p>
        <a href="input/ruang_input.php" class="btn btn-primary">input</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">Syarat KRS</h5>
        <p class="card-text">Melakukan penginputan data pada tabel syarat KRS.</p>
        <a href="#" class="btn btn-primary">input</a>
      </div>
    </div>
  </div>
</div>
</div>

<!-- akhir card -->

<script src="bstrap/js/jss.js"></script>
  </body>
</html>