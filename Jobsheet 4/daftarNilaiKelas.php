<?php
$dataSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalNilai = 0;
foreach ($dataSiswa as $siswa) {
    $totalNilai += $siswa[1];
}
$rataRata = $totalNilai / count($dataSiswa);

echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas:<br>";
foreach ($dataSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo $siswa[0] . ": " . $siswa[1] . "<br>";
    }
}
?>