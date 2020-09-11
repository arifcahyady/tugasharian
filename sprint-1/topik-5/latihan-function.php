<?php 

									//========= Luas Persegi Panjang =========


function persegipanjang(int $width, int $length) {
	return $width*$length;
}
echo "Luas Persegi Panjang : " . persegipanjang(4, 5);


									// ========= Luas Bangun Lingkaran & Segitiga ================



$phi = 3.14;
$int = 0.5;

function segitigalingkaran(int $width, int $length) {
	
	global $phi, $int;

	echo "Luas segitiga : " . $width * $length * $int . "\n";
	echo "Luas lingkaran : " . $width * $length * $phi . "\n";
}
segitigalingkaran(4, 5);


									// =============== Luas Trapesium ======================

$a = 10;
$b = 11;
$t = 20;
function trapesium() {
	global $a, $b, $t;

	echo "Luas Trapesium : " . ($a + $b) * $t * 0.5;
}
trapesium();

$array = [2,3,4,5,6,7,8,9];
function calcRectangArea($change) {
	global $array;

	return $array = $change;
}
$hasil =  calcRectangArea([6,9,12,15,18,21,24,27]);
print_r($hasil);











?>