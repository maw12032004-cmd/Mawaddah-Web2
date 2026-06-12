<?php
// Solusi: Tempatkan fungsi pengalihan sebelum ada output apa pun ke browser 
$proses_sukses = true;

if ($proses_sukses) {
    header("Location: test.php"); [cite: 82]
    exit; // Praktik terbaik: tambahkan exit setelah header redirect agar kode di bawahnya berhenti
}
?>