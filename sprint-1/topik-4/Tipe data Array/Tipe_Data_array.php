<?php 

function index($p, $l) {
	return "hello world <br>" .$p*$l;
}
echo index(5, 4);

echo "==============================="."\n";
echo "|      Contoh function         |"."\n";
echo "==============================="."\n";
echo "1.Luas"."\n"."2.Keliling"."\n";
echo "Mau ngitung apa : "."\n";
$pilihan = (int) trim(fgets(STDIN));


function luas($p, $l){
	return $p*$l;
}

function keliling($p, $l){
	return ($p*$l)+2;
}

if ($pilihan == 1) {
	echo "Panjang : ";
	$panjang =(int) trim(fgets(STDIN));
	echo "Lebar : ";
	$lebar =(int) trim(fgets(STDIN));
	echo "Luas : ".luas($panjang, $lebar). "\n";
}elseif ($pilihan == 2) {
	echo "Panjang : ";
	$panjang =(int) trim(fgets(STDIN));
	echo "Lebar : ";
	$lebar =(int) trim(fgets(STDIN));
	echo "Keliling : ".keliling($panjang, $lebar). "\n";
}else {
	echo "Unditified Change"."\n";
}
// echo "<><>=========================<><><><><>========================<><>";
 ?>