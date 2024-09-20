<?php
include("dbConnect.php");

//Cek apakah ada pengiriman data dari Formulir
if (isset($_POST['kirim'])) {
    //Ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO tb_kontak
    (nama,email,subjek,pesan) 
    VALUE 
    ('$nama', '$email', '$subjek', '$pesan')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        echo "<script type='text/javascript'>alert('Berhasil Mengirim.'); window.location.href='/view/kontak.php';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Gagal Mengirim.'); window.location.href='/view/kontak.php';</script>";
    }
}
