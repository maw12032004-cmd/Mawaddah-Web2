<?php
// Penghapusan Cookies dengan menetapkan tanggal kedaluwarsa satu jam yang lalu [cite: 302, 334, 336]
setcookie("username", "", time() - 3600); [cite: 337]
setcookie("namalengkap", "", time() - 3600); [cite: 338]

echo "<h1>Cookie Berhasil dihapus.</h1>"; [cite: 339]
echo "<h2>Klik <a href='cookie1.php'>di sini</a> untuk penciptaan cookies</h2>"; [cite: 340, 341]
echo "<h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>"; [cite: 342, 343]
?>