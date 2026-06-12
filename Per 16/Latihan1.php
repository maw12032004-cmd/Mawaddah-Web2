<?php
// Menyertakan koneksi database
include "koneksi.php";

// Teks perintah SQL yang akan dieksekusi
// Contoh di bawah disengaja salah (nama tabel 'karyawan_salah') untuk mensimulasikan error handling [cite: 17]
$query = "SELECT * FROM karyawan_salah";

// Eksekusi query dengan penanganan error terintegrasi jika statement gagal 
$result = mysqli_query($koneksi, $query) or die("Gagal mengeksekusi query. Detail Error: " . mysqli_error($koneksi));

// Blok kode di bawah ini hanya akan berjalan jika query di atas benar [cite: 8, 12]
echo "<h3>Daftar Karyawan:</h3>";
while ($row = mysqli_fetch_array($result)) {
    echo "ID: " . $row['id'] . " - Nama: " . $row['nama'] . "<br>";
}
?>