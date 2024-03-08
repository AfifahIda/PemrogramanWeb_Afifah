<?php
$hargaProduk = 120000;
$diskonPersen = 20;

while ($hargaProduk > 100000) {
    $hargaProduk -= ($hargaProduk * $diskonPersen / 100);
    break;
}

echo "Harga setelah mendapatkan diskon: Rp " . $hargaProduk . "<br>";
?>