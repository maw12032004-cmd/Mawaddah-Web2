<?php
$value = 'rahadian'; [cite: 305]
$value2 = 'rahadi ramelan'; [cite: 306]

// Pembuatan Cookies [cite: 300, 303]
setcookie("username", $value); [cite: 307]
setcookie("namalengkap", $value2, time()+3600); /* expire in 1 hour */ [cite: 308, 309]

echo "<h1>Ini halaman pengesetan cookie</h1>"; [cite: 310]
echo "<h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>"; [cite: 311, 312]
?>