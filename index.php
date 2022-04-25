<?php

require_once('function/helper.php');
require_once('function/config.php');

?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>FTI UNMER</title>
        <link rel="stylesheet" href="<?= BASE_URL . 'assets/style.css' ?>">
    </head>

    <body>
        <div class="topbar">
            <h3 class="text-topbar">Data Mahasiswa FTI</h3>
        </div>
        <div class="content">
            <div class="card-login">
                <div class="card-main">
                    <h1>Login</h1>
            <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_login.php' ?>">
                    <label class="form-label">Username</label>
                    <input type="username" name="username" class="form-input">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-input">
                    <button type="submit" class="btn btn-login">Login</button>
                    <p> Belum punya akun?
                    <a href="register.php">Register di sini</a>
                    </p>
            </form>
                </div>
            </div>
        </div>
    </body>
</html>
