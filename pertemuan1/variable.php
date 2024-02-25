<?php
// variable server
echo $_SERVER['SERVER_NAME'];

echo "<br>";

// variable user
$nama = "Budi";
echo $nama;
echo "<br>";

$nama = "Andi";
echo $nama;
echo "<br>";
// variable konstan
define("NAMA", "Budi");
echo NAMA;

echo "<br>";
const JENIS_KELAMIN = "Laki-laki";

echo JENIS_KELAMIN;

// latihan variable
// perhitungan bangun datar
// luas persegi
$sisi = 10;
$luas_persegi = $sisi * $sisi;
echo "Luas Persegi: " . $luas_persegi;
echo "<br>";
echo "luas persegi : $luas_persegi";
echo "<br>";
echo 'luas persegi : $luas_persegi';
