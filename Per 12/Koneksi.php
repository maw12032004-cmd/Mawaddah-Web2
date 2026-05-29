<?php
$dbhost = "localhost"; [cite: 36]
$dbuser = "root"; [cite: 37]
$dbpass = ""; [cite: 38]
$dbname = "artikel_db"; [cite: 39]

// Lakukan koneksi dengan mysql [cite: 40]
$connection = mysql_connect($dbhost, $dbuser, $dbpass); [cite: 41]
if (!$connection) { [cite: 42]
    echo "Tidak dapat terhubung dengan database"; [cite: 44]
    exit; [cite: 45]
}

// Pilih database [cite: 47]
$pilih_db = mysql_select_db($dbname); [cite: 48]
if (!$pilih_db) { [cite: 49]
    echo "Tidak dapat memilih database"; [cite: 51]
    exit; [cite: 52]
}
?>