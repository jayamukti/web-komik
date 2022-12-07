<?php
include "koneksidb.php";
$id_pengguna = $_GET['id_pengguna'];
$query = "DELETE FROM tbl_user WHERE id_pengguna = '$id_pengguna'";
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
    ?>
    <script language="javascript">document.location.href="Admin/home.php";</script>
<?php
} else {
    echo 'gagal hapus';
}
?>