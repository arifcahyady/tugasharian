<?php 

for ($i=1; $i <= 9 ; $i++) { 
	for ($k=1; $k <= 9; $k++) { 
		echo "(". $i,$k . ")";
	}
echo "\n";
}

echo "\n";
for ($i=1; $i <= 9; $i++) { 
	for ($k=1; $k <= 9; $k++) { 
		if ($k == 1 || $k == 3 || $k == 5 || $k == 7 || $k == 9) {
			echo "+";
		}else {
			echo "-";
		}
	}
echo "\n";
}

echo "\n";
for ($i=1; $i <= 9; $i++) { 
	for ($k=1; $k <= 9; $k++) { 
		if ($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 9) {
			echo "-";
		}else {
			echo "+";
		}
	}
echo "\n";
}

$a = 5956560159466056;

$explode = explode(0, $a);
// print_r($explode);

	foreach ($explode as $key => $value) {
		$result[] = str_split($explode[$key]);
		sort($result[$key]);
	}

$hasil = array_merge(...$result);
// print_r($result);
echo "Hasil nya : ";
foreach ($hasil as $get) {
	echo $get;
}

// echo "=================================="."\n";
// echo "||	Program input data         ||" . "\n";
// echo "==================================" . "\n";
// echo "\n";

// echo "Mau input berapa user : ";
// $input = trim(fgets(STDIN));

// 	for ($i=1; $i <= $input ; $i++) { 
// 		echo "data ke : " .$i . "\n";
// 		echo "Masukan user : ";
// 		$nama = trim(fgets(STDIN));
// 		echo "Masukan umur : ";
// 		$umur = trim(fgets(STDIN));
// 		echo "Masukan jurusan : ";
// 		$jurusan = trim(fgets(STDIN));
// 		echo "Masukan divisi : ";
// 		$divisi = trim(fgets(STDIN));
	

// 	$hasil = [
// 		'nama' => $nama,
// 		'umur' => $umur,
// 		'jurusan' => $jurusan,
// 		'divisi' => $divisi
// 	];


// // $hasil[];

	
// };
// print_r($hasil);
 
// foreach ($hasil as $k) {
// 	if ($k['divisi'] == 'backend') {
// 		$get = $k['nama'];
// 	}		
// }
// print_r($get);