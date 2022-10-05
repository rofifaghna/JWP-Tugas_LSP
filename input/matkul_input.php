<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Input Data Tabel Mata Kuliah</title>
  </head>
  <body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="alumni.php"> Tabel Mata Kuliah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../input.php">Input</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabel KRS
          </a>
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
      <h1 class="display-4">Form Penginputan Data Tabel Mata Kuliah</h1>
      <hr class="my-4">
    </section>
    </div>
    <!-- akhir jumbotron -->

<!-- form -->
<div class=" card container shadow-lg" style="width: 60rem;">
    <form method="post" action="matkul_input_aksi.php">
        <div class="mb-3">
            </br>
                <label class="form-label">Nama Mata Kuliah</label>
                <input class="form-control" name="nama_mk" type="text" placeholder="Silahkan masukkan Mata Kuliah" aria-label="default input example">
            </br>
                <label class="form-label">SKS</label>
                <input class="form-control" name="sks" type="number" placeholder="Silahkan masukkan SKS" aria-label="default input example">
            </br>
                <label class="form-label">Semester</label>
                <input class="form-control" name="semester" type="number" placeholder="Silahkan masukkan Semester" aria-label="default input example">
            </br>
                <div class="col-12">
                <button class="btn btn-primary" type="submit" value="simpan">Submit form</button>
                </div>
        </div>
    </form>
</div>
<!-- akhir form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>