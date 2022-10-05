<?php 
// koneksi database
include 'function.php';
 
// menangkap data yang di kirim dari form pada file mahasiswa.php
$nip            = $_POST['nip'];
$nama_dosen     = $_POST['nama_dosen'];
if($nip=="")                                                                  
{
  echo "<script>alert('NIP Belum diisi');history.go(-1);</script>";
}
 
if($nama_dosen=="")                                                                 
{
  echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
}
  else
{

// menginput data ke database
$query="INSERT INTO dosen SET nip='$nip', nama_dosen='$nama_dosen'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data yang anda Input sukses');window.location='dosen_input.php'</script>";
 
// mengalihkan halaman kembali ke index.php
} 
?>