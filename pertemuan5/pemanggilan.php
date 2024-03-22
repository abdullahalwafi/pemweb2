<?php
require_once('Lingkaran.php');
require_once('PersegiPanjang.php');

$lingkaran1 = new Lingkaran(8);

echo "Luas lingkaran tersebut adalah" . $lingkaran1->luas();
echo "<br>";
$lingkaran1->keliling();

$persegiPanjang = new PersegiPanjang(10, 8);

echo "Luas Persegi tersebut adalah" . $persegiPanjang->getLuas();
echo "<br>";
echo "Keliling Persegi tersebut adalah" . $persegiPanjang->getKeliling();
