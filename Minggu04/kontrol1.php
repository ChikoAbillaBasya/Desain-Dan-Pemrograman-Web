<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiYangDihitung = array_slice($nilaiSiswa, 2, 6); 
$totalNilai = array_sum($nilaiYangDihitung);
$rataRata = $totalNilai / count($nilaiYangDihitung);

echo "Nilai siswa yang dihitung: " . implode(", ", $nilaiYangDihitung) . "<br>";
echo "Total nilai: <strong>$totalNilai</strong><br>";
echo "Rata-rata nilai: <strong>" . round($rataRata, 2) . "</strong>";
?>