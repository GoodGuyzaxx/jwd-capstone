<?php

include("dbConnect.php");
$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($db, "SELECT * from tb_user where email='$email' and password='$password'");
$qLogin = mysqli_num_rows($login);

if ($qLogin > 0) { // Check if there's at least one row
    echo "<script type='text/javascript'>alert('Berhasil Login.'); window.location.href='/view/index_login.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Password atau email salah.'); window.location.href='/view/login.php';</script>";
}
