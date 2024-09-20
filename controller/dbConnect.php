<?php
$serverDB = 'localhost:3306';
$user = 'root';
$password = 'zaxx';
$name_database = 'club_motor';
$db = mysqli_connect($serverDB, $user, $password, $name_database);
echo "200K";
if (!$db) {
    die("Gagal terhubung 500" . mysqli_connect_error());
}
