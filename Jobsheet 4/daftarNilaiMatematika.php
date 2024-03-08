<?php
// Daftar nilai dari 10 siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

$totalNilai = 0;
$jumlahSiswa = count($nilaiSiswa);

for ($i = 2; $i < $jumlahSiswa - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

$rataRata = $totalNilai / ($jumlahSiswa - 4); 

//setelah mengabaikan dua nilai tertinggi dan terendah
echo "Total nilai siswa: " . $totalNilai . "<br>";
echo "Jumlah siswa: " . ($jumlahSiswa - 4) . "<br>";
echo "Rata-rata nilai siswa: " . $rataRata . "<br>";
?>