<?php  
include_once 'class2,0.php';
echo "Luas Bangun Persegi adalah : ";
HitungBangunPersegi::luasPersegi($panjang,$tinggi);
echo "\n";
echo "Luas Bangun Lingkaran adalah : ";
HitungBangunLingkaran::luasLingkaran($phi,$diameter);
echo "\n";
echo "Hasil hitung luas trapesium adalah : ";
$hasil = new HitungBangunTrapesium(2,5 / 2);
echo "\n";
echo "Hasil hitung keliling trapesium adalah : ";
$hasil = new HitungBangunTrapesium(2,7);

