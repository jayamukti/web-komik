<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Post</title>
    <link rel="stylesheet" href="post.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="menu">
            <a class="modal-btn">
            <iconify-icon icon="eva:menu-outline" width="60" height="40"></iconify-icon></a>
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
    </nav>

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
                <a href="" style="color: white; text-decoration: none;">
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
<br><br><br><br>
    <form method="POST" action="bepost.php">
    <div class="infkoma" style="display: flex;">
    <div style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2021/12/A-Disaster-Class-Hero-Has-Returned.jpg); width: 185px; height: 250px; background-size: cover; margin-left: 100px;"></div>
    <div style="display: flex; flex-direction: column; margin-left: 70px; margin-bottom: 20px;">
    <label for="judul">Judul</label>
    <input type="text" class="judul" name="nama_komik" placeholder="judul"></input><br>
    <label for="judul">Kategori</label>
    <input type="text" class="judul" name="kategori_komik" placeholder="kategori"></input><br>
    <label for="judul">Pengarang</label>
    <input type="text" class="penulis" name="penulis" placeholder="pengarang"></input><br>
    <label for="sipnosis">Sipnosis</label>
    <textarea type="text" class="katasandi" name="sipnosis" placeholder="Sipnosis"></textarea>
    </div>
    </div>
    <br>

    <br><br>
    <div style="display: flex; align-content: center;">
    <input type="submit" class="submit" value="POST" name="submit" style="border: 2px solid black; box-shadow: 1px 3px 8px black; border-radius: 15px; background-color: #D9D9D9; height: 40px; width: 900px; margin: auto;">
    </div>
    </form>

    <?php
    include "../bwh.php"
    ?>
</body>

</html>