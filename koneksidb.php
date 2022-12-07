<?php
// koneksi php ke mysql
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_komiksih";
// menghubungkan php dengan database
$koneksi = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($koneksi));
?>

