<?php
// Perintah session_start() harus ditaruh di perintah pertama tanpa spasi di depannya [cite: 215]
session_start(); [cite: 218]

if (isset($_POST['Login'])) { [cite: 219]
    $user = $_POST['user']; [cite: 220]
    $pass = $_POST['pass']; [cite: 221]

    // Periksa login [cite: 223]
    if ($user == "rahadian" && $pass == "123") { [cite: 224]
        // Menciptakan session [cite: 225]
        $_SESSION['login'] = $user; [cite: 226]
        
        // Menuju ke halaman pemeriksaan session [cite: 227]
        echo "<h1>Anda berhasil LOGIN</h1>"; [cite: 228]
        echo "<h2>Klik <a href='session2.php'>di sini (session2.php)</a> untuk menuju ke halaman pemeriksaan session</h2>"; [cite: 229, 230, 231]
    }
} else { [cite: 233]
    ?>
    <html>
    <head>
        <title>Login here...</title> [cite: 238]
    </head>
    <body>
        <form action="" method="post"> [cite: 241]
            <h2>Login Here...</h2> [cite: 242]
            Username : <input type="text" name="user"><br> [cite: 243]
            Password : <input type="password" name="pass"><br> [cite: 244]
            <input type="submit" name="Login" value="Log In"> [cite: 245]
        </form>
    </body>
    </html>
    <?php
}
?>