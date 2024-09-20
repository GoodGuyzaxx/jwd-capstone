<?php
include("dbConnect.php");

//Cek apakah ada pengiriman data dari Formulir
if (isset($_POST['daftar'])) {
    //Ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tb_user
    (nama,email,password) 
    VALUE 
    ('$nama', '$email', '$password')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script type='text/javascript'>alert('Akun Berhasil dibuat.'); window.location.href='/view/login.php';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Gagal Membuat Akun.'); window.location.href='/view/singup.php';</script>";
    }
}
