<?php

    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $hasilSisa = $a % $b;

    echo "Hasil a + b: $hasilTambah<br>";
    echo "Hasil a - b: $hasilKurang<br>";
    echo "Hasil a * b: $hasilKali<br>";
    echo "Hasil a / b: $hasilBagi<br>";
    echo "Hasil a % b: $hasilSisa<br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Nilai a: $a (tipe: " . gettype($a) . ")<br>";
    echo "Nilai b: $b (tipe: " . gettype($b) . ")<br><br>";

    echo "Apakah a identik dengan b? " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
    echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br>";

    $totalKursi = 45;
    $kursiTerisi = 28;
    $kursiKosong = $totalKursi - $kursiTerisi;
    $persentaseKosong = ($kursiKosong / $totalKursi) * 100;

    echo "<br>Jumlah kursi kosong: $kursiKosong<br>";
    echo "Persentase kursi yang masih kosong: " . round($persentaseKosong, 2) . "%<br>";
?>