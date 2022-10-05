<?php 
include '../function.php';
$id = $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id='$id'");
 
header("location:mahasiswa.php?pesan=hapus");
?>