<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&family=Ribeye&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <h1>komiksih</h1>
    </header>

    <div class="login" style="align-content: center">
        <div class="judul">
            <h2>Masuk ke akun anda</h2>
            <p style="color: grey; margin-top: 5px; font-size: 9pt;">selamat datang kembali, silahkan masukkan detail anda</p>
        </div>

        <form action="">
            <div class="flex">
                <label for="email" class="tulisan">Alamat Email</label>
                <input type="email" class="email" id="email">
            </div>
            <div class="flex" style="margin-top: 20px;">
                <label for="password">Password</label>
                <input type="password" class="password" id="password">
            </div>
            <div class="kir">
                <div class="ho">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingatkan Saya</label>
                </div>
                <a href="">Lupa Kata Sandi?</a>
            </div>
            <input type="submit" value="MULAI" style="margin-top: 20px; background-color: #1676F3; border: none; color: white; padding: 10px;">
        </form>

        <div class="akhir">
            <p>Tidak memiliki akun?</p>
            <a href="">Daftar</a>
        </div>
    </div>

    <footer>
        <h1>komiksih</h1>
        <p>Website kami menyediakan fitur membaca komik secara online</p>
    </footer>
</body>
</html>