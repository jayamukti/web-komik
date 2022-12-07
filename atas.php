<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOMIKSIH</title>
    <link rel="stylesheet" href="atas.css">
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

    <!-- MODAL -->
    <div class="modal-container">
        <div class="modal">
            <div class="modal-head" style="display: flex;">
                <h3>MENU</h5>
            </div>
            <hr style="color: white;">
            <div class="modal-bod">
                <a href="" style="color: white; text-decoration: none;">
                    <div class="kategori">Kategori</div>
                </a>
                <a href="" style="color: white; text-decoration: none;">
                    <div class="keluar" style="margin-top: 10px;">Keluar</div>
                </a>
            </div>
        </div>
    </div>
    </div>
    <script>
        const modalBtn = document.querySelector(".modal-btn");
        const closeBtn = document.querySelector(".close-btn");
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
            <div class="box"><input type="search" class="input"><a href="" class="butsearch" type="submit">
                    <iconify-icon icon="akar-icons:search" width="15" height="15" style="color: black;">
                </a></iconify-icon>
            </div>
        </div>
    </div><br><br><br><br>
</body>

</html>