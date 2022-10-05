<?php 
// koneksi database
include 'function.php';
 
// menangkap data yang di kirim dari form pada file
$nama_mk            = $_POST['nama_mk'];
$sks                = $_POST['sks'];
$semester           = $_POST['semester'];
if($nama_mk=="")                                                                  
{
  echo "<script>alert('Nama Mata Kuliah Belum diisi');history.go(-1);</script>";
}
if($sks=="")                                                                 
{
  echo "<script>alert('SKS Belum diisi');history.go(-1);</script>";
}
if($semester=="")                                                                 
{
  echo "<script>alert('Semester Belum diisi');history.go(-1);</script>";
}
  else
{

// menginput data ke database
$query="INSERT INTO mata_kuliah SET nama_mk='$nama_mk', sks='$sks', semester='$semester'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data yang anda Input sukses');window.location='matkul_input.php'</script>";
 
// mengalihkan halaman kembali ke index.php
} 
?>