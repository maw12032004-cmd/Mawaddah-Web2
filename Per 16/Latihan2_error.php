<?php
// Perintah keluaran string diletakkan sebelum inisialisasi session [cite: 44]
echo "Hallo...";

// Baris ini akan memicu Warning: Cannot send session cookie [cite: 31, 35]
session_start(); 
?>