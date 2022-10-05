<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bstrap/css/css.css" rel="stylesheet">

    <title>SIA Mahasiswa</title>
  </head>
  <body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="alumni.php"> Tabel Mahasiswa</a>
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
            Tabel Portofolio
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="mahasiswa.php">Alumni</a></li>
            <li><a class="dropdown-item" href="../app/application.php">Application</a></li>
            <li><a class="dropdown-item" href="../perusahaan/perusahaan.php">Perusahaan</a></li>
            <li><a class="dropdown-item" href="../PL/PL.php">Perusahaan Lowongan</a></li>
            <li><a class="dropdown-item" href="../PLS/PLS.php">Perusahaan Lowongan Syarat</a></li>
            <li><a class="dropdown-item" href="../syarat/syarat.php">Syarat</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </nav>
    <!-- akhir navbar -->
</br>

<!-- judul tabel -->
<figure>
<div class="container-fluid">
  <blockquote class="blockquote">
    <h2>Tabel Data Mahasiswa</h2>
  </blockquote>
  <figcaption class="blockquote-footer">
    Laporan seluruh data pada tabel Mahasiswa <cite title="Source Title"></cite>
  </figcaption>
</figure>
</div>
</div>
<!-- akhir judul tabel -->


<!-- dropdown -->
<div class ="container-fluid">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Daftar Laporan Data Mahasiswa
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">laporan data alumni yang berjenis kelamin laki-laki</a></li>
    <li><a class="dropdown-item" href="#">laporan data alumni yang berjenis kelamin Perempuan</a></li>
  </ul>
</div>
</div>
<!-- akhir dropdown -->
</br>

    <!-- tabel -->
    <div class = "container-fluid">
    <table class="table table-bordered table-striped">
  <thead class = "thead-dark">
    <tr class="table-dark">
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat Sekarang</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <?php
    include '../function.php';
    $no = 1;
	$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
	foreach( $data as $d ) :
    ?>
  <tbody>
    <tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['jenkel']; ?></td>
    <td><?php echo $d['tmp_lahir']; ?></td>
		<td><?php echo $d['tgl_lahir']; ?></td>
    <td><?php echo $d['alamat_skrg']; ?></td>
    <td><a href="edit.php" class="btn btn-primary">Edit</a><a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">Delete</a></tr>
    </tr>
  </tbody>
  <?php
  endforeach
  ?>
</table>
    </div>
    <!-- akhir tabel -->










    <script src="../bstrap/js/jss.js"></script>
  </body>
</html>