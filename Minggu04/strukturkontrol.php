<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan <strong>$hari</strong> hari untuk mencapai jarak <strong>$jarakTarget kilometer</strong>.<br>";
echo "Jarak yang ditempuh setiap hari adalah <strong>$peningkatanHarian kilometer</strong>.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah lahan: <strong>$jumlahLahan</strong><br>";
echo "Jumlah tanaman per lahan: <strong>$tanamanPerLahan</strong><br>";
echo "Jumlah buah per tanaman: <strong>$buahPerTanaman</strong><br>";
echo "Jumlah buah yang akan dipanen adalah: <strong>$jumlahBuah</strong> buah.";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

$jumlahUjian = count($skorUjian);

echo "Skor ujian: <strong>" . implode(", ", $skorUjian) . "</strong><br>";
echo "Jumlah ujian: <strong>$jumlahUjian</strong><br>";
echo "Total skor ujian adalah: <strong>$totalSkor</strong>";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "<h3>Hasil Ujian Siswa</h3>";

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: <strong>$nilai</strong> (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: <strong>$nilai</strong> (Lulus) <br>";
}

echo "<br>Jumlah siswa: <strong>" . count($nilaiSiswa) . "</strong><br>";
?>