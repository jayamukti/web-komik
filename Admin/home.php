<?php
session_start();

if(isset($_SESSION['email']) && isset($_SESSION['level'])) {
	if ($_SESSION['level'] == "1"){
		header('Location:/User/index.php');
		exit;
    } 
} 
else if(isset($_SESSION['username']) && isset($_SESSION[''])) {
    header('Location:../index.php');
	exit;   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Komiksih</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="menu">
            <a class="modal-btn">
                <iconify-icon icon="eva:menu-outline" width="60" height="40"></iconify-icon>
            </a>
        </div>
        <div class="komiksih">
            <h1 style="margin: 0; text-align: center;">komiksih</h1>
        </div>

        <a class="butprof" href="profil.php" style="background-color: #CC1C1C;">
            <div class="profie">
                <link>
                <iconify-icon icon="gg:profile" width="50" height="30"></iconify-icon>
                </link>
            </div>
        </a>
    </nav><br>


    <!-- MODAL -->
    <div class="modal-container">
        <div class="modal">
            <div class="modal-bod">
                <!-- <div class="scroll-modal" style="height: 145px; overflow-y: auto;"> -->
                <a href="home.php" style="color: white; text-decoration: none;">
                    <div class="userl" style="margin-top: 5px;">List User</div>
                </a>
                <a href="listkomik.php" style="color: white; text-decoration: none;">
                    <div class="komikl" style="margin-top: 10px;">List Komik</div>
                </a>
                <a href="kategori.php" style="color: white; text-decoration: none;">
                    <div class="kategori" style="margin-top: 10px;">Kategori List</div>
                </a>
                <a href="bab.php" style="color: white; text-decoration: none;">
                    <div class="kategori" style="margin-top: 10px;">Bab</div>
                </a>
                <a href="postkomik.php" style="color: white; text-decoration: none;">
                    <div class="post" style="margin-top: 10px;">Post</div>
                </a>
                <a href="komentar.php" style="color: white; text-decoration: none;">
                    <div class="post" style="margin-top: 10px;">Komentar</div>
                </a>
                <a href="../masuk-admin.php" style="color: white; text-decoration: none;">
                    <div class="keluar" style="margin-top: 10px;">Keluar</div>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        const modalBtn = document.querySelector(".modal-btn");
        const modalContainer = document.querySelector(".modal-container");
        modalBtn.addEventListener("click", () => {
            modalContainer.classList.add("show");
        });
        modalContainer.addEventListener("click", () => {
            modalContainer.classList.remove("show");
        });
    </script>

    <div style="display: flex; justify-content: center;">
        <div class="box"><input type="search" class="input"><a href="" class="butsearch" type="submit">
                <iconify-icon icon="akar-icons:search" width="15" height="15" style="color: black;">
                </iconify-icon>
            </a>
        </div>
    </div><br><br>

    <?php
    include "../koneksidb.php";
    $query = "SELECT * FROM tbl_user";
    $hasil = mysqli_query($koneksi, $query);
    $jumlah = mysqli_num_rows($hasil);
    ?>


    <div class="list" style="display: flex; justify-content: center;">
        <div class="list-user" style="border-radius: 10px; background-color: #CC1C1C; padding-top: 30px; padding-bottom: 30px; height: auto; width: 800px;">
            <table align="center" border="1" style="border-collapse: collapse; background-color: white;">
                <tr>
                    <th>ID</th>
                    <th>Level</th>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                    <th>Delete</th>
                </tr>
                <?php
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                    <td><?php echo $data['id_pengguna']; ?></td>
                    <td><?php echo $data['level'];?></td>
                    <td><?php echo $data['nama_pengguna'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><a href="../delete.php?id_pengguna=<?php echo $data['id_pengguna']; ?>" onclick="return confirm('Data akan hilang, apakah anda yakin ?')" style="color: white; text-decoration: none; background-color: #CC1C1C; border: 1px solid black;">DELETE</a></td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </div>
    <?php
    include "../bwh.php"
    ?>
</body>

</html>