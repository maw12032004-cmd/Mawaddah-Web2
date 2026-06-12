<?php
// Solusi: Pastikan kecocokan host, nama pengguna, dan kata sandi pada server MySQL local 
$host    = "localhost"; [cite: 113]
$user    = "root";      // Default user XAMPP [cite: 113]
$pass    = "";          // Default password XAMPP kosong [cite: 113]
$db_name = "db_karyawan";

// Menjalankan koneksi dengan parameter autentikasi yang valid [cite: 113]
$koneksi = mysqli_connect($host, $user, $pass, $db_name);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi ke database db_karyawan berhasil terhubung secara aman.";
}
?>