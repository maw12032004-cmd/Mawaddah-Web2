<?php
$a = 10; [cite: 94]

// Perintah echo tidak dieksekusi karena kondisi ($a < 0) bernilai salah [cite: 95, 101]
if ($a < 0) echo "Nilai A negatif"; [cite: 95]
else header("Location: test.php"); // Proses pengalihan berjalan aman [cite: 96]
?>