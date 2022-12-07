<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&family=Ribeye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="masuk-admin.css">
</head>
<body>
    <nav>
    <h1 style="margin: 0;">komiksih</h1>
    </nav>

    <div class="login" style="align-content: center">
        <div class="judul">
            <h2>Masuk ke akun anda</h2>
            <p style="color: grey; margin-top: 5px; font-size: 9pt;">selamat datang kembali, silahkan masukkan detail anda</p>
        </div>

        <form action="koneklog-admin.php" method="POST">
            <div class="flex">
                <label for="nama_admin" class="tulisan">Nama</label>
                <input type="username" class="nama_admin" name="nama_admin" id="nama_admin" placeholder="Nama">
            </div>
            <div class="flex" style="margin-top: 20px;">
                <label for="kata_sandi">Kata Sandi</label>
                <input type="password" class="kata_sandi" name="kata_sandi" id="kata_sandi" placeholder="Kata Sandi">
            </div><br>
            <input type="submit" class="submit" name="submit" value="Masuk" style="margin-top: 20px; background-color: #1676F3; border: none; color: white; padding: 10px;"></input>
        </form>

        <div class="akhir">
            <p>Tidak memiliki akun?</p>
            <a href="daftar.php">Daftar</a>
        </div>
    </div>
    <footer>
        <h1>komiksih</h1>
        <p>Website kami menyediakan fitur membaca komik secara online</p>
    </footer>
</body>
</html>