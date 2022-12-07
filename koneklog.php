<?php
session_start();
error_reporting(10);
include "koneksidb.php";
$email = $_POST['email'];
$kata_sandi = $_POST['kata_sandi'];

$kirim = $_POST['submit'];
if(isset($kirim)){
	if(empty($email) && empty($kata_sandi)){
		echo "";
}
}

$query = "SELECT * FROM tbl_user WHERE email = '$email'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_assoc($hasil);

if(isset($kirim)){
	if($kata_sandi == $data['kata_sandi']){
		
		$_SESSION['level'] = $data['level'];
		$_SESSION['email'] = $data['email'];
		echo "Login berhasil";
		header('Location:user/index.php');
		exit;
	} else {
		echo "<script>alert('login gagal')</script>";;
	}
}
