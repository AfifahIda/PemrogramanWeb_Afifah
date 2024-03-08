<?php
$poin = 600;

$totalSkor = "Total skor pemain adalah: " . $poin . "<br>";
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";

echo $totalSkor;
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan;
?>