<?php

require_once('./function/helper.php');
require_once('./function/koneksi.php');

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="<?= BASE_URL . 'assets/style.css' ?>">
    </head>

    <body>
        <div class="topbar">
            <h3 class="text-topbar">Data Mahasiswa FTI</h3>
        </div>
        <div class="content">
          <h1>Register</h1>
            <form>
                <label>Username</label>
                <br>
                <input type="text">
                <br>
                <label>Email</label>
                <br>
                <input type="text">
                <br>
                <label>Password</label>
                <br>
                <input type="password">
                <br>
                <button type="submit" class="btn btn-login">Login</button>
                <p> Sudah punya akun?
                  <a href="index.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>
