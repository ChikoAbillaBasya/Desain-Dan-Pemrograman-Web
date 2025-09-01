<?php

$nama = @$_GET['chiko']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong
$usia = @$_GET['19']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>