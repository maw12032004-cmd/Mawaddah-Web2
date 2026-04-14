<html>
<head>
<title>Tabel Perkalian</title>
</head>
<body>
<?php
echo "<table border=\"1\" align=\"center\">";
echo "<tr><td colspan=\"2\"><b>Tabel Perkalian</b></td></tr>";
for ($i = 1; $i <= 12; $i++) {
	echo "<tr>";
	echo "<td>1.2 * " . $i . "</td>";
	echo "<td>" . (1.2 * $i) . "</td>";
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
