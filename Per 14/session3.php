<?php
session_start(); [cite: 276]

if (isset($_SESSION['login'])) { [cite: 277]
    // Menghapus session yang ada [cite: 274]
    unset($_SESSION['login']); [cite: 278]
    session_destroy(); [cite: 279]
    
    echo "<h1>Anda sudah berhasil LOGOUT</h1>"; [cite: 281]
    echo "<h2>Klik <a href='session1.php'>di sini</a> untuk LOGIN kembali</h2>"; [cite: 282, 283]
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='session2.php'>session2.php</a> lagi</h2>"; [cite: 284, 285]
}
?>