<?php
// Menyertakan file header yang berisi output echo [cite: 61, 64]
include "header.php";

// Akan memicu error karena header.php telah mengirim data ke browser terlebih dahulu [cite: 31, 64]
session_start();
?>