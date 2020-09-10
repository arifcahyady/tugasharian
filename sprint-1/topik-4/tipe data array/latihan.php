<?php 

echo "Mau masuk berapa nilai: ";
$nilai = (int) trim(fgets(STDIN));

for ($i=1; $i <= $nilai ; $i++) { 
	echo "input ke $i: " . "\n";
	$input_nilai[] = (int) trim(fgets(STDIN));
}
echo "\n";


sort($input_nilai);


function mean($nilai) {
	return array_sum($nilai) / count($nilai);
}
echo"mean :" . mean($input_nilai) ."\n";


function median($nilai) {
	if (count($nilai) % 2 == 1) {
		$median = (count($nilai) + 1) / 2;
		echo "Median :" .$nilai[$median - 1] ."\n";
	}elseif (count($nilai) % 2 == 0) {
		$median1 = (count($nilai) / 2);
		$median2 = (count($nilai) / 2) + 1;

		$hasil =  "Median :" .(($nilai[$median1 - 1]) + ($nilai[$median2 -1])) /2;
		echo $hasil ."\n";
	}

}
echo median($input_nilai);

function modus($nilai) {
	
	$modus = array_count_values($nilai);
	arsort($modus);

	$hasil = array_key_first($modus);
	$frekuensi = max($modus);
	echo "Modus : $hasil" . "\n" . "Frekuensi : $frekuensi" ."\n";
	
}

echo modus($input_nilai);





rsort($input_nilai);
echo "3 terbesar = $input_nilai[0], $input_nilai[1], $input_nilai[2] \n";

sort($input_nilai);
echo "3 terkecil = $input_nilai[0], $input_nilai[1], $input_nilai[2] \n";



 


?>