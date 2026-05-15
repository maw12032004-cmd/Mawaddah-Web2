<?php
mysql_connect("localhost","root","");
mysql_select_db("lat_dbase");

// Hitung total record
$hasil_total=mysql_query("select * from tbl_mhs");
$total_record=mysql_num_rows($hasil_total);

// Jumlah record per halaman
$record_per_halaman = 5;

// Hitung total halaman
$total_halaman = ceil($total_record / $record_per_halaman);

// Ambil halaman dari URL, jika tidak ada default ke halaman 1
$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

// Validasi halaman
if ($halaman < 1) {
    $halaman = 1;
} elseif ($halaman > $total_halaman) {
    $halaman = $total_halaman;
}

// Hitung OFFSET untuk query
$offset = ($halaman - 1) * $record_per_halaman;

// Query data dengan LIMIT
$hasil=mysql_query("select * from tbl_mhs LIMIT $offset, $record_per_halaman");

?>
<html>
<head>
<title>Tampilkan Buku Tamu</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
table, th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: left;
}
th {
    background-color: #4CAF50;
    color: white;
}
a {
    padding: 5px 10px;
    margin: 5px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 3px;
}
</style>
</head>
<body>

<h2>Daftar Buku Tamu</h2>

<table>
<tr>
<th>ID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Age</th>
</tr>
<?php
while($data=mysql_fetch_array($hasil))
{
    echo "<tr>";
    echo "<td>" . $data['mhsID'] . "</td>";
    echo "<td>" . $data['FirstName'] . "</td>";
    echo "<td>" . $data['LastName'] . "</td>";
    echo "<td>" . $data['Age'] . "</td>";
    echo "</tr>";
}
?>
</table>

<br>
<p>Halaman <?php echo $halaman; ?> dari <?php echo $total_halaman; ?> | Total Record: <?php echo $total_record; ?></p>

<div>
<?php
// Tombol Previous
if ($halaman > 1) {
    echo "<a href='Tampilkanlah_buku_tamu.php?halaman=" . ($halaman - 1) . "'>← Previous</a>";
}

// Nomor halaman
for ($i = 1; $i <= $total_halaman; $i++) {
    if ($i == $halaman) {
        echo "<a style='background-color: #008CBA;'>$i</a>";
    } else {
        echo "<a href='Tampilkanlah_buku_tamu.php?halaman=$i'>$i</a>";
    }
}

// Tombol Next
if ($halaman < $total_halaman) {
    echo "<a href='Tampilkanlah_buku_tamu.php?halaman=" . ($halaman + 1) . "'>Next →</a>";
}
?>
</div>

</body>
</html>
<?php
mysql_close();
?>
