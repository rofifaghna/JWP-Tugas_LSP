<?php 
// koneksi database
include 'function.php';
 
// menangkap data yang di kirim dari form pada file mahasiswa.php
$nim            = $_POST['nim'];
$nama_mk        = $_POST['nama_mk'];
$nama_dosen     = $_POST['nama_dosen'];
$ruang          = $_POST['ruang'];
$hari           = $_POST['hari'];
$jam            = $_POST['jam'];

if($nim=="")                                                                  //apabila nim kosong maka muncul window alert
{
  echo "<script>alert('NIM Belum diisi');history.go(-1);</script>";
}
 
if($nama_mk=="")                                                                 //apabila nama kosong maka muncul window alert
{
  echo "<script>alert('Nama mata kuliah Belum diisi');history.go(-1);</script>";
}
 
if($nama_dosen=="")                                                            //apabila tmp_lahir kosong maka muncul window alert
{
  echo "<script>alert('Nama Dosen Belum diisi');history.go(-1);</script>";
}
if($ruang=="")                                                            //apabila tgl_lahir kosong maka muncul window alert
{
  echo "<script>alert('Ruangan Belum diisi');history.go(-1);</script>";
}
if($hari=="")                                                               //apabila jenkel kosong maka muncul window alert
{
  echo "<script>alert('Hari Belum diisi');history.go(-1);</script>";
}
if($jam=="")                                                        //apabila alamat kosong maka muncul window alert
{
  echo "<script>alert('Jam Belum diisi');history.go(-1);</script>";
}
  else
{

// menginput data ke database
$query="INSERT INTO jadwal SET nim='$nim', nama_mk='$nama_mk', nama_dosen='$nama_dosen', ruang='$ruang', hari='$hari', jam='$jam'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data yang anda Input sukses');window.location='jadwal_input.php'</script>";
 
// mengalihkan halaman kembali ke index.php
} 
?>