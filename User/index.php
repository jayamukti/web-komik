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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="menu">
            <iconify-icon icon="eva:menu-outline" width="60" height="40"></iconify-icon>
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
            <div class="box" ><input type="search" class="input"><a href="" class="butsearch" type="submit">
                    <iconify-icon icon="akar-icons:search" width="15" height="15" style="color: black;">
                </a></iconify-icon>
            </div>
        </div>
    </div>

    <!-- KATEGORI -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content" style="background-color: #CC1C1C;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white;">KATEGORI</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" style="color: white;" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color: white;">
                    <!-- text -->
                    <center>
                        <div style="font-size: large; font-family: poppins;">
                            <div style="padding: 20px; background-color: red; border: 2px 2px 2px black; border-radius: 5px;"><a href="populer.php">AKSI</a></div>
                            <div>FANTASI</div>
                            <div>SEKOLAH</div>
                            <div>SEJARAH</div>
                            <div>SIHIR</div>
                            <div>KRIMINAL</div>
                            <div>KEHIDUPAN</div>
                            <div>ROMANSA</div>
                            <div>KOMEDI</div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!-- ATAS -->
    <div class="aa" style="background-color: #CC1C1C; width: 1400px; margin: auto; border: #CC1C1C; height: 415px; border-radius: 22px; margin-top: 50px;">
        <br>
        <div class="ab" style="background-color: #4F4E4E; height: 40px; width: 200px; margin-left: 50px;">
            <p style="color: white; margin-left: 20px; font-size: large; font-weight: 600; padding: 9px;">Baru diperbarui</p>
        </div>
        <div class="ac" style="background-color: #4F4E4E; height: 285px; margin: auto; margin-top: auto; width: 1300px;">
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
    <div class="ad" style="background-color: #CC1C1C; width: 1400px; margin: auto; border: #CC1C1C; height: 700px; border-radius: 22px; margin-top: 50px;">
        <br><br><br>
    <div class="ae" style="background-color: #4F4E4E; height: 500px; margin: auto; margin-top: auto; width: 1300px;"><br>
                <div style="display: flex; flex-direction: row; max-height: 320px; margin-left: 35px;">
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
                </div><br>
                <div style="display: flex; flex-direction: row; max-height: 320px; margin-left: 35px;">
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

    <br><br><br><br><br><br><br><br><br><br>
    <footer>
        <div class="komiksih" style="margin-left: 130px;">
            <h1>komiksih</h1>
        </div>
        <div class="fo" style="color: white; width: 350px;">Website kami menyediakan fitur membaca komik secara online</div>
    </footer>
</body>

</html>