<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>
<! Menentukan Form Input>
<form method="POST">
Masukkan Bilangan Pertama : <br>
<input type="text" name="A" size=10> <br>
Masukkan Bilangan Kedua : <br>
<input type="text" name="B" size=10> <br>
<input type="submit" value="hitung">
</form>

<?php
$a=$_POST["A"];
$b=$_POST["B"];
function jumlah($A,$B)
{
	$jumlahbil=$A + $B;
	return $jumlahbil;
}
function kurang($A,$B)
{
	$kurangbil=$A - $B;
	return $kurangbil;
}
function kali($A,$B)
{
	$kalibil=$A * $B;
	return $kalibil;
}
function bagi($A,$B)
{
	$bagibil=$A / $B;
	return $bagibil;
}
Echo ("Bilangan Pertama : ");
Echo $A;
Echo "<br>";
Echo ("Bilangan Kedua : ");
Echo $B;
Echo "<br> <br>";
Echo ("Hasil Penjumlahan 2 buah bilangan ");
Echo "<br>";
$jumlahbil=&jumlah($A,$B);
Printf ("Penjumlahan antara : %d - %d = %d ",
$A,$B,$jumlahbil);
Echo "<br><br>";
$kurangbil=&kurang($A,$B);
Printf ("Pengurangan antara : %d - %d = %d ",$A,$B,$kurangbil);
Echo "<br><br>";
$kalibil=&kali($A,$B);
Printf ("Perkalian antara : %d - %d = %d ",$A,$B,$kalibil);
Echo "<br><br>";
$bagibil=&bagi($A,$B);
Printf ("Pembagian antara : %d / %d = %d ",$A,$B,$bagibil);
Echo "<br><br>";
?>
</body>
</html>
