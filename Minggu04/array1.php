<?php

$daftarNilai = [
    ['Nama' => 'Alice', 'Nilai' => 85],
    ['Nama' => 'Bob', 'Nilai' => 92],
    ['Nama' => 'Charlie', 'Nilai' => 78],
    ['Nama' => 'David', 'Nilai' => 64],
    ['Nama' => 'Eva', 'Nilai' => 90],
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilai);

foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa['Nilai']; 
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata kelas: <strong>" . round($rataRata, 2) . "</strong><br><br>";

echo "Siswa yang nilainya di atas rata-rata:<br>";

foreach ($daftarNilai as $siswa) {
    if ($siswa['Nilai'] > $rataRata) {
        echo "Nama: {$siswa['Nama']}, Nilai: {$siswa['Nilai']}<br>";
    }
}
?>