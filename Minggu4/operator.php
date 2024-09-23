<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil penjumlahan $a + $b = $hasilTambah<br>";
    echo "Hasil pengurangan $a - $b = $hasilKurang<br>";
    echo "Hasil perkalian $a * $b = $hasilKali<br>";
    echo "Hasil pembagian $a / $b = $hasilBagi<br>";
    echo "Sisa bagi $a % $b = $sisaBagi<br>";
    echo "Hasil $a pangkat $b = $pangkat<br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Apakah $a sama dengan $b? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
    echo "Apakah $a tidak sama dengan $b? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
    echo "Apakah $a lebih kecil dari $b? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
    echo "Apakah $a lebih besar dari $b? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
    echo "Apakah $a lebih kecil atau sama dengan $b? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
    echo "Apakah $a lebih besar atau sama dengan $b? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Nilai a: " . ($a ? 'true' : 'false') . "<br>";
    echo "Nilai b: " . ($b ? 'true' : 'false') . "<br><br>";

    echo "Hasil a AND b: " . ($hasilAnd ? 'true' : 'false') . "<br>";
    echo "Hasil a OR b: " . ($hasilOr ? 'true' : 'false') . "<br>";
    echo "Hasil NOT a: " . ($hasilNotA ? 'true' : 'false') . "<br>";
    echo "Hasil NOT b: " . ($hasilNotB ? 'true' : 'false') . "<br>";

    $a += $b;
    $a -= $b;
    $a *= $b;
    $a /= $b;
    $a %= $b;

    echo "Hasil a += b: $a<br>";
    echo "Hasil a -= b: $a<br>";
    echo "Hasil a *= b: $a<br>";
    echo "Hasil a /= b: $a<br>";
    echo "Hasil a %= b: $a<br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Nilai a: " . $a . " (tipe: " . gettype($a) . ")<br>";
    echo "Nilai b: " . $b . " (tipe: " . gettype($b) . ")<br><br>";

    echo "Apakah a identik dengan b? " . ($hasilIdentik ? 'Ya' : 'Tidak') . "<br>";
    echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? 'Ya' : 'Tidak') . "<br>";
?>