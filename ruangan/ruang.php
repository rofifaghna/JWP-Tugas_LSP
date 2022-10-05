<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bstrap/css/css.css" rel="stylesheet">

    <title>SIA UIN Sunan Jagakali</title>
  </head>
  <body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="PLS.php">Tabel Ruangan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../input.php">Input</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabel KRS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
    <h2>Tabel Data Ruangan</h2>
  </blockquote>
  <figcaption class="blockquote-footer">
    Laporan seluruh data pada tabel Ruang<cite title="Source Title"></cite>
  </figcaption>
</figure>
</div>
</div>
<!-- akhir judul tabel -->


<!-- dropdown -->
<div class ="container-fluid">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Daftar Laporan Data Ruangan
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
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
      <th scope="col">ruang</th>
      <th scope="col">hari</th>
      <th scope="col">jam</th>
    </tr>
  </thead>
  <?php
    include '../function.php';
    $no = 1;
	$data = mysqli_query($koneksi,"SELECT * FROM ruang");
	foreach( $data as $d ) :
    ?>
  <tbody>
    <tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['ruang']; ?></td>
		<td><?php echo $d['hari']; ?></td>
        <td><?php echo $d['jam']; ?></td>
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