<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOMIKSIH</title>
    <link rel="stylesheet" href="style.css">
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
    </nav>

    <div class="wrapper">
        <div class="navigationbar">
            <li style="padding: 15px 0 15px 15px;"><a style=" background-color: #413F3F;  color: white; padding: 15px;" href="index.php" type="text/css">BERANDA</li></a>
            <li><a href="populer.php" type="text/css">POPULER</a></li>
            <div class="box"><input type="search" class="input"><a href="" class="butsearch" type="submit">
                    <iconify-icon icon="akar-icons:search" width="15" height="15" style="color: black;">
                </a></iconify-icon>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal-container">
        <div class="modal">
            <div class="modal-bod">
                <a class="kateg-btn">Hai</a>
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

    <!-- kategori -->
    <div class="kateg-container">
        <div class="kateg">
            <div class="kateg-bod">
                Hai
            </div>
        </div>
    </div>
    <script>
        const kategBtn = document.querySelector(".kateg-btn");
        const closeBtn = document.querySelector(".close-btn");
        const kategContainer = document.querySelector(".kateg-container");
        kategBtn.addEventListener("click", () => {
            kategContainer.classList.add("show");
        });
        kategContainer.addEventListener("click", () => {
            kategContainer.classList.remove("show");
        });
    </script>

    <!-- ATAS -->
    <div class="ktk-ats">
        <br>
        <div class="ab">
            <p style="color: white; margin-left: 20px; font-size: large; font-weight: 600; padding: 9px;">Baru diperbarui</p>
        </div>
        <div class="ac">
            <br>
            <div class="scrollsam">
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2021/12/A-Disaster-Class-Hero-Has-Returned.jpg); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">A Disaster-Class Hero Has Returned</div>
                    </a>
                </div>
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2022/06/The-Lazy-Swordmaster.jpg); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">The Lazy Swordmaster</div>
                    </a>
                </div>
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2021/01/1610719628-5267-Mairimashita-Iruma-kun.jpg); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Mairimashita! Iruma-kun</div>
                    </a>
                </div>
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2020/07/Hero-Max-Level.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Solo Max-Level Newbie</div>
                    </a>
                </div>
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i1.wp.com/westmanga.info/wp-content/uploads/2021/07/Rankers-Return.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Ranker’s Return (Remake)</div>
                    </a>
                </div>
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2021/01/killthero-e1585211534116.png?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Kill the Hero</div>
                    </a>
                </div>
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i3.wp.com/westmanga.info/wp-content/uploads/2022/08/Return-of-the-SSS-Class-Ranker.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Return of the SSS-Class Ranker</div>
                    </a>
                </div>
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i3.wp.com/westmanga.info/wp-content/uploads/2022/06/Damn-Reincarnation.jpg?resize=165,225)"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Damn Reincarnation</div>
                    </a>
                </div>
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2022/06/Overpowered-Sword.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Overpowered Sword</div>
                    </a>
                </div>
                <div style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2022/01/Talent-Swallowing-Magician.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Talent-Swallowing Magician</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <div class="ad" style="background-color: #CC1C1C; width: 1100px; margin: auto; border: #CC1C1C; height: 1000px; border-radius: 22px; margin-top: 50px;">
        <br><br><br>
        <div class="ae" style="background-color: #4F4E4E; height: 700px; margin: auto; margin-top: auto; width: 1000px;"><br>
            <div style="display: flex; flex-direction: row; max-height: 320px; margin-left: 75px; margin-top: 20px;">
                <div style="flex-direction: column; ">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2021/12/A-Disaster-Class-Hero-Has-Returned.jpg); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">A Disaster-Class Hero Has Returned</div>
                    </a>
                </div>
                <div class="jrk-bwh" style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2022/06/The-Lazy-Swordmaster.jpg); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">The Lazy Swordmaster</div>
                    </a>
                </div>
                <div class="jrk-bwh" style="flex-direction: column; ">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2021/01/1610719628-5267-Mairimashita-Iruma-kun.jpg); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Mairimashita! Iruma-kun</div>
                    </a>
                </div>
                <div class="jrk-bwh" style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2020/07/Hero-Max-Level.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Solo Max-Level Newbie</div>
                    </a>
                </div>
                <div class="jrk-bwh" style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i1.wp.com/westmanga.info/wp-content/uploads/2021/07/Rankers-Return.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Ranker’s Return (Remake)</div>
                    </a>
                </div>
            </div><br>
            <div style="display: flex; flex-direction: row; max-height: 320px; margin-left: 60px;">
                <div class="jrk-bwh" style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2021/01/killthero-e1585211534116.png?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Kill the Hero</div>
                    </a>
                </div>
                <div class="jrk-bwh" style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i3.wp.com/westmanga.info/wp-content/uploads/2022/08/Return-of-the-SSS-Class-Ranker.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Return of the SSS-Class Ranker</div>
                    </a>
                </div>
                <div class="jrk-bwh" style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i3.wp.com/westmanga.info/wp-content/uploads/2022/06/Damn-Reincarnation.jpg?resize=165,225)"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Damn Reincarnation</div>
                    </a>
                </div>
                <div class="jrk-bwh" style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2022/06/Overpowered-Sword.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Overpowered Sword</div>
                    </a>
                </div>
                <div class="jrk-bwh" style="flex-direction: column;">
                    <a href="infokomik.php" style="text-decoration: none;">
                        <div class="item" style="background-image: url(https://i2.wp.com/westmanga.info/wp-content/uploads/2022/01/Talent-Swallowing-Magician.jpg?resize=165,225); background-size: cover;"></div><br>
                        <div style="color: white; max-width: 120px; font-size: small;">Talent-Swallowing Magician</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- TOMBOL -->
        <div class="tombol" style="display: flex; flex-direction: row; margin-left: 450px; margin-top: 50px;">
            <a href="" type="button" style="text-decoration: none;">
                <div class="sebelum" style="margin-right: 10px; color: white; font-size: large; font-weight: 500; border: 25px 25px 25px solid black; border-radius: 12px; background-color: #4F4E4E; height: 30px; width: 80px; text-align: center;">
                    < </div>
                        <a href="" type="button" style="text-decoration: none;">
                            <div class="selanjut" style="color: white; font-size: large; font-weight: 500; border: 25px 25px 25px solid black; border-radius: 12px; background-color: #4F4E4E; height: 30px; width: 80px; text-align: center;">></div>
                        </a>
                </div>
        </div>

        <br><br><br><br><br><br><br><br><br>
        <footer>
            <div class="komiksih" style="margin-left: 130px;">
                <h1>komiksih</h1>
            </div>
            <div class="fo" style="color: white; width: 350px;">Website kami menyediakan fitur membaca komik secara online</div>
        </footer>
</body>

</html>