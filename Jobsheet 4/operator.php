<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "{$a} + {$b} = {$hasilTambah}<br>";
echo "{$a} - {$b} = {$hasilKurang}<br>";
echo "{$a} * {$b} = {$hasilKali}<br>";
echo "{$a} / {$b} = {$hasilBagi}<br>";
echo "{$a} % {$b} = {$sisaBagi}<br>";
echo "{$a} ** {$b} = {$pangkat}<br>";

echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "{$a} == {$b} : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "{$a} != {$b} : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "{$a} < {$b} : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "{$a} > {$b} : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "{$a} <= {$b} : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "{$a} >= {$b} : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "{$a} && {$b} : " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "{$a} || {$b} : " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "!{$a} : " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "!{$b} : " . ($hasilNotB ? 'true' : 'false') . "<br>";

echo "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "$a += $b : {$a}<br>";
echo "$a -= $b : {$a}<br>";
echo "$a *= $b : {$a}<br>";
echo "$a /= $b : {$a}<br>";
echo "$a %= $b : {$a}<br>";

echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "$a === $b : " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "$a !== $b : " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>