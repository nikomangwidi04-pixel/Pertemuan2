<?php
// Kuis soal 1: Array angka 1-20, tampilkan hanya yang habis dibagi 3
$angka = range(1, 20); // membuat array berisi 1, 2, 3, ..., 20

foreach ($angka as $n) {
    if ($n % 3 == 0) {
        echo $n . "<br>";
    }
}
?>