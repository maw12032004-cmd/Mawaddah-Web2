<?php
session_start(); [cite: 255]

// Pemeriksaan session [cite: 256]
if (isset($_SESSION['login'])) { [cite: 257]
    // Jika sudah login, menampilkan isi session [cite: 258, 259]
    echo "<h1>Selamat Datang ". $_SESSION['login'] ."</h1>"; [cite: 261]
    echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah login</h2>"; [cite: 262]
    echo "<h2>Klik <a href='session3.php'>di sini (session3.php)</a> untuk LOGOUT</h2>"; [cite: 263, 264]
} else { [cite: 265]
    // Session belum ada artinya belum login [cite: 266]
    die("Anda belum login! Anda tidak berhak masuk ke halaman ini. Silahkan login <a href='session1.php'>di sini</a>"); [cite: 267, 268]
}
?>