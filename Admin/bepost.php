<?php 
session_start();
error_reporting(10);
$nama_komik = $_POST['nama_komik'];
$kategori_komik = $_POST['kategori_komik'];
$penulis = $_POST['penulis'];
$sipnosis = $_POST['sipnosis'];
$kirim = $_POST['submit'];

if(isset($kirim)){
		include "../koneksidb.php";
		$query = "INSERT INTO tbl_komik (nama_komik, kategori_komik, penulis, sipnosis) VALUES('$nama_komik', '$kategori_komik', '$penulis', '$sipnosis')";
		$hasil = mysqli_query($koneksi,$query);
        header('location:listkomik.php');
	}
