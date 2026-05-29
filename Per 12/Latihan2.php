<?php
// Latih 2: DELETE Record [cite: 23]
$con = mysql_connect("localhost", "root", ""); [cite: 25]
if (!$con) { [cite: 26]
    die('Could not connect: ' . mysql_error()); [cite: 28]
}

mysql_select_db("lat_dbase", $con); [cite: 30]

// Menghapus record dengan kriteria tertentu [cite: 20, 31]
mysql_query("DELETE FROM tbl_mhs WHERE LastName='Prabowo'"); [cite: 31]

mysql_close($con);
?>