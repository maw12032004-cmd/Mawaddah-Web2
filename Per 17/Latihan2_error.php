<?php
// Menyertakan file yang memuat output teks 
include "header.php";

// Akan memicu eror headers already sent karena header.php telah mengirim data ke browser [cite: 76, 104]
header("Location: test.php");
?>