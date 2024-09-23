<?php
$hargaProduk = 120000;
$diskonPersentase = 20;

$diskon = ($diskonPersentase / 100) * $hargaProduk;

$hargaSetelahDiskon = $hargaProduk - $diskon;

echo "Harga awal produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
?>