<?php
// Solusi: Tempatkan inisialisasi session di baris paling awal file script 
session_start();

// Mendaftarkan variabel session data setelah session aktif
$_SESSION['user'] = "Mawaddah";

// Output atau kode HTML baru boleh ditulis setelah fungsi session_start() 
echo "Hallo... Sesi berhasil dijalankan secara aman.<br>";
echo "Pengguna Aktif: " . $_SESSION['user'];
?>