<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];


//pengecekan kelengkapan data
if (empty($username)  || empty($password) || empty($email)) {
    header("location: " . BASE_URL . "register.php?page=register&process=failed");
} else {
    mysqli_query($koneksi, "INSERT INTO admin(username, password, email) VALUES ('$username', '$password', '$email')");
    header("location: " . BASE_URL . "index.php?index&process=success");
}
