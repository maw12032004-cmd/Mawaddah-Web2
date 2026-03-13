<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
    <style>
        body { font-family: sans-serif; margin: 50px; }
        .kalkulator { border: 1px solid #ccc; padding: 20px; display: inline-block; }
    </style>
</head>
<body>

<div class="kalkulator">
    <form method="POST" action="">
        <label>Nilai I</label> 
        <input type="number" name="nilai1" required>
        
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        
        <label>Nilai II</label>
        <input type="number" name="nilai2" required>
        
        <input type="submit" name="submit" value="submit">
    </form>
</div>

<hr>

<?php
if (isset($_POST['submit'])) {
    $n1 = $_POST['nilai1'];
    $n2 = $_POST['nilai2'];
    $op = $_POST['operator'];
    $hasil = 0;

    switch ($op) {
        case '+': $hasil = $n1 + $n2; break;
        case '-': $hasil = $n1 - $n2; break;
        case '*': $hasil = $n1 * $n2; break;
        case '/': 
            if ($n2 != 0) {
                $hasil = $n1 / $n2; 
            } else {
                echo "<p style='color:red;'>Error: Tidak bisa membagi dengan nol!</p>";
                exit;
            }
            break;
    }

    echo "<h3>Hasil Perhitungan:</h3>";
    echo "<p>$n1 $op $n2 = <strong>$hasil</strong></p>";
}
?>

</body>
</html>