<?php 
// koneksi database
include 'function.php';
 
// menangkap data yang di kirim dari form pada file mahasiswa.php
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jenkel         = $_POST['jenkel'];
$tgl_lahir      = $_POST['tgl_lahir'];
$tmp_lahir      = $_POST['tmp_lahir'];
$alamat_skrg    = $_POST['alamat_skrg'];

if($nim=="")                                                                  //apabila nim kosong maka muncul window alert
{
  echo "<script>alert('NIM Belum diisi');history.go(-1);</script>";
}
 
if($nama=="")                                                                 //apabila nama kosong maka muncul window alert
{
  echo "<script>alert('Nama Belum diisi');history.go(-1);</script>";
}
 
if($tmp_lahir=="")                                                            //apabila tmp_lahir kosong maka muncul window alert
{
  echo "<script>alert('Tempat Lahir Belum diisi');history.go(-1);</script>";
}
if($tgl_lahir=="")                                                            //apabila tgl_lahir kosong maka muncul window alert
{
  echo "<script>alert('Tanggal Lahir Belum diisi');history.go(-1);</script>";
}
if($jenkel=="")                                                               //apabila jenkel kosong maka muncul window alert
{
  echo "<script>alert('Jenis Kelamin Belum diisi');history.go(-1);</script>";
}
if($alamat_skrg=="")                                                        //apabila alamat kosong maka muncul window alert
{
  echo "<script>alert('Alamat Belum diisi');history.go(-1);</script>";
}
  else
{

// menginput data ke database
$query="INSERT INTO mahasiswa SET nim='$nim', nama='$nama', tgl_lahir='$tgl_lahir', tmp_lahir='$tmp_lahir', alamat_skrg='$alamat_skrg', jenkel='$jenkel'";
mysqli_query($koneksi, $query);

echo "<script>alert('Data yang anda Input sukses');window.location='mahasiswa.php'</script>";
 
// mengalihkan halaman kembali ke index.php
} 
?>