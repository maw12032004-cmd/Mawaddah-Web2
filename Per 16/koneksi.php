<?php
// Konfigurasi koneksi database
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "db_karyawan";

// Membuka koneksi ke server MySQL
$koneksi = mysqli_connect($host, $user, $pass, $db_name);

// Memeriksa status koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>