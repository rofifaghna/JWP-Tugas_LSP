<?php 
// koneksi database
include 'function.php';
 
// menangkap data yang di kirim dari form pada file
$ruang              = $_POST['ruang'];
$hari               = $_POST['hari'];
$jam                = $_POST['jam'];
if($ruang=="")                                                                  
{
  echo "<script>alert('No ruang Belum diisi');history.go(-1);</script>";
}
if($hari=="")                                                                 
{
  echo "<script>alert('hari Belum diisi');history.go(-1);</script>";
}
if($jam=="")                                                                 
{
  echo "<script>alert('Jam Belum diisi');history.go(-1);</script>";
}
  else
{

// menginput data ke database
$query="INSERT INTO ruang SET ruang='$ruang', hari='$hari', jam='$jam'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data yang anda Input sukses');window.location='ruang_input.php'</script>";
 
// mengalihkan halaman kembali ke index.php
} 
?>