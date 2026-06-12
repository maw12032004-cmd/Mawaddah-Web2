<?php

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("nama_database", $conn);

// Query yang ingin dieksekusi
$query = "SELECT * FROM nama_tabel WHERE id = '1'";

// PERBAIKAN: Menambahkan or die(mysql_error()) untuk debugging
$result = mysql_query($query) or die("Query Error: " . mysql_error());

// Sekarang aman untuk melakukan fetch karena jika error, script sudah berhenti di atas
while($row = mysql_fetch_array($result)) {
    echo $row['nama'];
}
?>