<?php
require 'function.php';
if(isset($_POST["login"])) {

  $email = $_POST["email"];
  $passwordAlumni = $_POST["passwordAlumni"];


  $resault = mysqli_query($koneksi, "SELECT email, passwordAlumni FROM alumni WHERE email = '$email'");

  //cek username
  if(mysqli_num_rows($resault) == 1 ) {

  // cek password
    $row = mysqli_fetch_assoc($resault);
    if (password_verify($passwordAlumni, $row["passwordAlumni"]) ) {
      header("Location: index.php");
      exit;
    }

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

    <title>Login Data Perusahaan</title>
  </head>
  <body>
  </br>
<!-- jumbotron -->
<div class="container">
    <section class="jumbotron text-center">
      <h1 class="display-4">Form Login </h1>
      <hr class="my-4">
    </section>
    </div>
    <!-- akhir jumbotron -->

  </br>

<!-- form -->
   <div class="card container shadow-lg" style="width: 40rem;">
  <form action="" method="post">
  <div class="mb-3" >
  </br>
    <label for="email" class="form-label fw-bold">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="passwordAllumni" class="form-label fw-bold">Password</label>
    <input type="password" name="passwordAlumni" class="form-control" id="passwordAlumni">
  </div>
  <div class="d-grid gap-2">
  <a type="submit" name="login" class="btn btn-primary btn-block " data-bs-toggle="modal" data-bs-target="#exampleModal">login</a>
  <button type="reset" class="btn btn-danger btn-block mb-3" type="button">Reset</button>
  </div>
</form>
</div>
<!-- akhir form -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Email dan Password yang anda masukkan berhasil. </br>
        Apakah Anda yakin untuk masuk ke halaman web?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="index.php" type="button" class="btn btn-primary">Oke</a>
      </div>
    </div>
  </div>
</div>

<!-- akhir modal -->

    <script src="bstrap/js/jss.js"></script>
  </body>
</html>