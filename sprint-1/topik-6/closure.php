<?php 

								// Closure =================

    


    $var = function(int $width, int $length) {
      return $width * $length;
    };
    echo "Luas persegi panjang closure : " . ($var(4, 5)) . "\n";
  
	

	$phi = 3.14;

	$lingkaran = function (int $width, int $length) use ($phi)  {

		return $width * $length * $phi;
	};
	 echo "Luas Lingkaran closure : " . ($lingkaran(4,5)) . "\n";

	

	$int = 0.5;

	$segitiga = function (int $width, int $length) use ($int)  {

		return $width * $length * $int;
	};
	 echo "Luas Segitiga closure : " . ($segitiga(4,5)) . "\n";


	$a = 10;
	$b = 14;
	$t = 15;

	$trapesium = function () use ($a, $b, $t)  {

		return ($a + $b) * $t * 0.5;
	};
	 echo "Luas trapesium : " . ($trapesium(4,5));












 ?>