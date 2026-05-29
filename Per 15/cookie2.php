<?php
// Pemeriksaan Cookies [cite: 301, 314]
if (isset($_COOKIE['username'])) { [cite: 316]
    echo "<h1>Cookie 'username' ada. Isinya : " . $_COOKIE['username'] . "</h1>"; [cite: 317, 318]
} else { [cite: 319]
    echo "<h1>Cookie 'username' TIDAK ada.</h1>"; [cite: 320]
}

if (isset($_COOKIE['namalengkap'])) { [cite: 322]
    echo "<h1>Cookie 'namalengkap' ada. Isinya : " . $_COOKIE['namalengkap'] . "</h1>"; [cite: 324, 325]
} else { [cite: 326]
    echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>"; [cite: 327]
}

echo "<h2>Klik <a href='cookie1.php'>di sini</a> untuk penciptaan cookies</h2>"; [cite: 329, 330]
echo "<h2>Klik <a href='cookie3.php'>di sini</a> untuk penghapusan cookies</h2>"; [cite: 331, 332]
?>