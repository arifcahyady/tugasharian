<?php  
include_once 'class2,0.php';

echo "Hasil hitung luas persegi adalah : ";
$hasil = new HitungBangunPersegi(2,5);
echo "\n";
echo "Hasil hitung keliling persegi adalah : ";
$hasil = new HitungBangunPersegi(2,7 * 2);
echo "\n";
echo "Hasil hitung luas lingkaran adalah : ";
$hasil = new HitungBangunLingkaran(3.14,5);
echo "\n";
echo "Hasil hitung keliling lingkaran adalah : ";
$hasil = new HitungBangunLingkaran(3,14, 5 / 2 * 2);
echo "\n";
echo "Hasil hitung luas trapesium adalah : ";
$hasil = new HitungBangunTrapesium(2,5 / 2);
echo "\n";
echo "Hasil hitung keliling trapesium adalah : ";
$hasil = new HitungBangunTrapesium(2,7);

