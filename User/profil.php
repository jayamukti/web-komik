<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="profil.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye&display=swap" rel="stylesheet">
</head>
<body>

    <nav>
        <a class="butprof" onclick="window.history.back()" style="background-color: #CC1C1C;">
            <div class="back">
                <link>
                <iconify-icon icon="ep:back" width="30" height="30"></iconify-icon>
                </link>
            </div>
        </a>
        <div class="ubh-prof">
            <h1 style="margin-left: 490px;">Ubah Profil</h1>
        </div>
    </nav><br><br>

    <div style="display: flex; justify-content: center;">
    <div class="pp">
        <img style="border-radius: 50%; height: 200px; width: 200px;" src="https://acehvideo.tv/wp-content/uploads/2022/05/Anime-Boy-9.jpg">
        <div style="margin-left: 60px; font-weight: 500;">Ganti Foto</div>
    </div>
    </div>

    <div class="datadiri">
        <div class="flex">
            <label for="namapengguna" class="tulisan">Nama Pengguna</label>
            <input type="namapengguna" class="namapengguna" id="namapengguna" placeholder="Nama Pengguna">
        </div>
        <div class="flex">
            <label for="email" class="tulisan">Alamat Email</label>
            <input type="email" class="email" id="email" placeholder="Email">
        </div>
        <div class="flex" style="margin-top: 20px;">
            <label for="katasandi">Kata Sandi</label>
            <input type="password" class="katasandi" id="katasandi" placeholder="Kata Sandi">
        </div><br>
        <input type="submit" value="Perbarui" style="margin-top: 20px; background-color: #D9D9D9; border: none; width: 800px; height: 50px; border-radius: 8px; box-shadow: 1px 1px 5px; font-weight: 600; font-family: 'Poppins';">
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
?>