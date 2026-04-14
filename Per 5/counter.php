<html>
<head>
    <title>Contoh Counter</title>
</head>
<body>
    <?php
    $nama_file = "counter.dat";

    if (file_exists($nama_file)) {
        $berkas = fopen($nama_file, "r");
        // Membaca baris dan konversi ke integer
        $pencacah = (int)trim(fgets($berkas, 255));
        $pencacah++;
        fclose($berkas); // Perbaikan: Sebelumnya terputus
    } else {
        // Perbaikan: Tambahkan kurung kurawal agar lebih rapi
        $pencacah = 1;
    }

    // Simpan pencacah terbaru
    $berkas = fopen($nama_file, "w");
    fputs($berkas, $pencacah);
    fclose($berkas);

    // Tulis ke halaman web
    echo "Anda pengunjung ke-$pencacah <br>\n";
    ?>
</body>
</html>