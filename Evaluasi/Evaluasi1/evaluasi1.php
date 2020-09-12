<?php 

// for ($i=0; $i < 10; $i++) { 
// 	for ($j=0; $j < 10; $j++) { 
// 		echo "(".$i . $j .")";
// 	}
// 	echo "<br>";
// }


// echo "<br>";
// for ($i=0; $i < 10; $i++) { 
// 	for ($j=0; $j < 10; $j++) { 
// 		if ($j == 0) {
// 			echo "+" . "\n";
// 		}elseif ($j == 2) {
// 			echo "+". "\n";
// 		}elseif ($j == 4) {
// 			echo "+". "\n";
// 		}elseif ($j == 6) {
// 			echo "+". "\n";
// 		}elseif ($j == 8) {
// 			echo "+". "\n";
// 		}else{
// 			echo "-";
// 		}
// 	}
// 	echo "<br>";
// }




// echo "<br>";
// for ($i=0; $i < 10; $i++) { 
// 	for ($j=0; $j < 10; $j++) { 
// 		if ($i == 0) {
// 			echo "-" . "\n";
// 		}elseif ($i == 2) {
// 			echo "-". "\n";
// 		}elseif ($i == 4) {
// 			echo "-". "\n";
// 		}elseif ($i == 6) {
// 			echo "-". "\n";
// 		}elseif ($i == 8) {
// 			echo "-". "\n";
// 		}else{
// 			echo "+";
// 		}
// 	}
// 	echo "<br>";
// }

// $angka = [1,2,3,4,5,6];

// function values($value) {
// 	global $angka;

// 	return $value == $angka;
// 	// $angka = int;

	
// } 
// echo  values([1,2,3,4,5,0,6]);
// print_r($angka);	

echo "======================================"."\n";
echo "| Selamat Datang Di Program Input Data|"."\n";
echo "======================================="."\n";
	
function inputdata() {
	echo "nama ; ";
	$nama = trim(fgets(STDIN));
	echo "nik : ";
	$nik = trim(fgets(STDIN));
	echo "jurusan : ";
	$jurusan = trim(fgets(STDIN));
	echo "divisi : ";
	$divisi = trim(fgets(STDIN));
	echo "usia : ";
	$usia = trim(fgets(STDIN));


}

inputdata();	