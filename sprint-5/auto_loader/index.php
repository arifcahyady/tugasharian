<?php 

// function Lingkaran($class)
// {
// 	$file = "Lingkaran/{$class}.php";

// 	if (is_readable($file)) {
// 		require $file;
// 	}
// }

// function Segitiga($class)
// {
// 	$file = "Segitiga/{$class}.php";

// 	if (is_readable($file)) {
// 		require $file;
// 	}
// }

// spl_autoload_register("Lingkaran");
// spl_autoload_register("Segitiga");

// $lingkaran = new BangunLingkaran;
// $segitiga = new BangunSegitiga;
// echo "Luas lingkaran adalah : "; 
// $lingkaran->luasLingkaran();
// echo "<br>";
// echo "Keliling lingkaran adalah : "; 
// $lingkaran->kelilingLingkaran();
// echo "<br>";
// echo "Luas segitiga adalah : "; 
// $segitiga->luasSegitiga();
// echo "<br>";
// echo "Keliling lingkaran adalah : "; 
// $segitiga->kelilingSegitiga();


require_once __DIR__ . "/vendor/autoload.php";

use Src\Controller;

$new = new Controller;
echo "Luas segitiga adalah :";
echo $new->luasSegitiga();
echo "<br>";
echo "Keliling segitiga adalah :";
echo $new->kelilingSegitiga();
echo "<br>";
echo "Luas lingkaran adalah :";
echo $new->luasLingkaran();
echo "<br>";
echo "Keliling lingkaran adalah :";
echo $new->kelilingLingkaran();