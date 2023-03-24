<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pendaftaran_siswa";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
   die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}
