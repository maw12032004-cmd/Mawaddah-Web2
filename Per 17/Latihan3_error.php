<?php
$host    = "localhost";
$user    = "root";
$pass    = "password_salah_123"; // Menggunakan kata sandi yang salah [cite: 111]
$db_name = "db_karyawan";

// Menggunakan mysqli_connect sebagai pengganti fungsi deprecated mysql_connect() 
// Baris ini akan menghasilkan peringatan: Access denied for user [cite: 108]
$koneksi = mysqli_connect($host, $user, $pass, $db_name) 
           or die("Gagal Koneksi! Terjadi kesalahan autentikasi.");
?>