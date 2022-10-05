<?php 
$koneksi = mysqli_connect("localhost","root","","kuliah");	//mengkaitkan database sql dengan variabel koneksi
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();	// memastikan apakah berhasil mengkaitkan database
}
?>