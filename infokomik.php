<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOMIKSIH</title>
    <link rel="stylesheet" href="infokomik.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
                <a class="kateg-btn" style="color: white; text-decoration: none;"><div class="kategori" style="margin-top: 5px;">Kategori</div></a>
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


    <div class="wrapper">
        <div class="navigationbar">
            <li style="padding: 15px 0 15px 15px;"><a style="color: white; padding: 15px;" href="index.php" class="active" type="text/css">BERANDA</a></li>
            <li><a href="populer.php" type="text/css">POPULER</a></li>
            <div class="box"><input type="search" class="input"><a href="" class="butsearch" type="submit"><iconify-icon icon="akar-icons:search" width="15" height="15" style="color: black;"></a></iconify-icon></div>
        </div>
    </div><br><br><br><br>

    <div class="infkoma" style="display: flex;">
    <div style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2021/12/A-Disaster-Class-Hero-Has-Returned.jpg); width: 185px; height: 250px; background-size: cover; margin-left: 100px;"></div>
    <div style="display: flex; flex-direction: column; margin-left: 70px; margin-bottom: 20px;"><div style="font-weight: 900; font-size: large;">A Disaster-Class Hero Has Returned</div><br>
    <div>Action, Drama</div><br>
    <div>Author : SAN.G (산지직송)</div><br>
    <div style="display: flex;"><div>Rate : 7.00</div><iconify-icon icon="emojione:star" width="18" height="18" style="margin-left: 5px; margin-top: -1px;"></iconify-icon></div><br>
    <div class="scrollsip" style="overflow-y: auto; max-width: 800px; max-height: 95px;">
    <div>Ketika dunia dilahap oleh kegelapan, dimana monster-monster bermunculan dari dungeon, dunia pun diambang kemusnahan, tapi ada harapan. bangkitnya para hunter (awakened) yang siap melawan para monster itu, dan disana lahirnya juga para Hero yang di panggil 13 hero bintang. dan ini lah salah satu dari kisah 1 dari 13 orang itu</div></div></div>
    </div><br>

    <br>
    <a class="bab-btn">
    <div class="butbaca" style="box-shadow: 1px 3px 8px black; border: 2px solid black; border-radius: 15px; background-color: #D9D9D9; height: 40px; width: 900px; margin: auto;">
    <div style="padding: 10px; text-align: center; font-size: large; font-weight: 500px; color: black;">BACA</div>
    </div></a>
    <br>

    
    <!-- BAB -->
    <div class="bab-container">
        <div class="bab">
            <div class="bab-bod">
                <div style="margin-left: 20px;">
                <div style="flex-direction: row; display: flex;">
                <a href="komik.php" style="color: white; text-decoration: none;"><div>Bab 1</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 30px;"><div>Bab 2</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 30px;"><div>Bab 3</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 30px;"><div>Bab 4</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 30px;"><div>Bab 5</div></a>
                </div>
                <div style="flex-direction: row; display: flex; margin-top: 10px;">
                <a href="komik.php" style="color: white; text-decoration: none;"><div>Bab 6</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 25px;"><div>Bab 7</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 30px;"><div>Bab 8</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 30px;"><div>Bab 9</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 30px;"><div>Bab 10</div></a>
                </div>
                <div style="flex-direction: row; display: flex; margin-top: 10px;">
                <a href="komik.php" style="color: white; text-decoration: none;"><div>Bab 8</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 25px;"><div>Bab 9</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 27px;"><div>Bab 10</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 27px;"><div>Bab 11</div></a>
                <a href="" style="color: white; text-decoration: none; margin-left: 27px;"><div>Bab 12</div></a>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        const babBtn = document.querySelector(".bab-btn");
        const babContainer = document.querySelector(".bab-container");
        babBtn.addEventListener("click", () => {
            babContainer.classList.add("show");
        });
        babContainer.addEventListener("click", () => {
            babContainer.classList.remove("show");
        });
    </script>

    <?php
    include "bwh.php"
    ?>
</body>

</html>