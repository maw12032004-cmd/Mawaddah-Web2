<?php
// Perintah keluaran string diletakkan sebelum fungsi pengalihan
echo "<p>Hallo Apa kabar?</p>"; [cite: 87]

// Baris ini akan memicu Warning: Cannot modify header information [cite: 76, 88]
header("Location: test.php"); [cite: 88]
?>