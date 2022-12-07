<?php
session_start();
error_reporting(10);
include "koneksidb.php";
$nama_admin = $_POST['nama_admin'];
$kata_sandi = $_POST['kata_sandi'];

$kirim = $_POST['submit'];
if(isset($kirim)){
	if(empty($nama_admin) && empty($kata_sandi)){
		echo "";
}
}

$query = "SELECT * FROM tbl_admin WHERE nama_admin = '$nama_admin'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($hasil);

if(isset($kirim)){
	if($kata_sandi == $data['kata_sandi']){
		
		$_SESSION['level'] = $data['level'];
		$_SESSION['nama_admin'] = $data['nama_admin'];
		echo "Login berhasil";
		header('Location:admin/home.php');
		exit;
	} else {
		echo "<script>alert('login gagal')</script>";;
	}
}
