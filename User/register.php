<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&family=Ribeye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="daftar.css">
</head>
<body>
    <nav>
    <h1 style="margin: 0;">komiksih</h1>
    </nav>

    <div class="login" style="align-content: center">
        <div class="judul">
            <h2>Daftar akun anda</h2>
            <p style="color: grey; margin-top: 5px; font-size: 9pt;">selamat datang kembali, silahkan masukkan detail anda</p>
        </div>

        <form action="daftar.php" method="POST">
            <div class="flex">
                <label for="email" class="tulisan">Alamat Email</label>
                <input type="email" class="email" name="email" placeholder="Email">
            </div>
            <div class="flex">
                <label for="namapengguna" class="tulisan">Nama Pengguna</label>
                <input type="nama_pengguna" class="nama_pengguna" name="nama_pengguna" placeholder="Nama Pengguna">
            </div>
            <div class="flex" style="margin-top: 20px;">
                <label for="katasandi">Kata Sandi</label>
                <input type="password" class="kata_sandi" name="kata_sandi" placeholder="Kata Sandi">
            </div><br>
            <input type="submit" class="submit" name="submit" value="DAFTAR" style="margin-top: 20px; background-color: #1676F3; border: none; color: white; padding: 10px;">
        </form>

        <div class="akhir">
            <p>Sudah memiliki akun?</p>
            <a href="login.php">Masuk</a>
        </div>
    </div>

    <?php
        // memanggil file
        include "koneksidb.php";
        if(isset($_POST['submit'])){
        @$nama_pengguna = $_POST['nama_pengguna'];
        @$level = $_POST['level'];
        @$email = $_POST['email'];
        @$kata_sandi = $_POST['kata_sandi'];
        @$kirim = $_POST['submit'];
        @$query = "INSERT INTO 'tbl_user' (nama_pengguna, email, kata_sandi) VALUES ('$nama_pengguna','$email','$kata_sandi')";
        
        // hasil data
        if ($kirim) {
            $hasil = mysqli_query($koneksi, $query);
            echo "data berhasil disimpan";
            echo "<a href='/User/home.php'> Lihat data</a>";  
        }
    }

        ?>

    <footer>
        <h1>komiksih</h1>
        <p>Website kami menyediakan fitur membaca komik secara online</p>
    </footer>
</body>
</html>