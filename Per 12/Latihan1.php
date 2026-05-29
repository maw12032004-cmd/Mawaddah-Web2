<?php
// Latih 1: UPDATE Record [cite: 7]
$con = mysql_connect("localhost", "root", ""); [cite: 9]
if (!$con) { [cite: 10]
    die('Could not connect: ' . mysql_error()); [cite: 12]
}

mysql_select_db("lat_dbase", $con); [cite: 14]

// Mengupdate record pada tabel berdasarkan kriteria tertentu [cite: 4, 15]
mysql_query("UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'"); [cite: 15, 16]

mysql_close($con); [cite: 17]
?>