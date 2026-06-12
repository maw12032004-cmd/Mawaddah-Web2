<?php
// Solusi: Lakukan pengecekan logika dan pengalihan sebelum memuat file tampilan 
$status_login = true;

if ($status_login) {
    header("Location: test.php");
    exit;
}

// File include baru boleh dimuat jika pengalihan tidak terjadi 
include "header.php";
?>