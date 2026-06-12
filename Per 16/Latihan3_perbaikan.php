<?php
// Solusi: Jalankan fungsi penyiapan session sebelum memanggil file include yang berisi output 
session_start();

// Set up data session secara aman
$_SESSION['status'] = "Aktif";

// Menyertakan file komponen HTML/Echo setelah session siap 
include "header.php";

echo "<br>Sistem mendeteksi status session: " . $_SESSION['status'];
?>