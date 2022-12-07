<?php 
session_start();
error_reporting(10);
$nama_pengguna = $_POST['nama_pengguna'];
$kata_sandi = $_POST['kata_sandi'];
$email = $_POST['email'];
$level = "1";
$kirim = $_POST['submit'];

if(isset($kirim)){
		include "koneksidb.php";
		$query = "INSERT INTO tbl_user (nama_pengguna, kata_sandi, email, level) VALUES('$nama_pengguna', '$kata_sandi', '$email', '$level')";
		$hasil = mysqli_query($koneksi,$query);
		header('location:masuk.php');
	} 
?>