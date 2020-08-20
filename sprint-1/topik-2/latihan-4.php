<?php 
//Program Perhitungan suku ke n

//deklarasi

$a = 2;
$b = 2;
$U5	 = $a + (6-1) * $b;
$U9 = $a + (10-1) * $b;
$U19 = $a + (20-1) * $b;

//Mencari suku ke 5
echo "Mencari Suku Ke 5<br>";
echo "Suku pertama = 2<br>";
echo "Beda = 2<br>";
echo "Un = a+(n-1)b<br>";
echo "======================<br>";
echo "Hasilnya adalah: " .$U5;

//Mencari suku ke 9
echo "<br><br>";
echo "Mencari Suku Ke 9<br>";
echo "Suku pertama = 2<br>";
echo "Beda = 2<br>";
echo "Un = a+(n-1)b<br>";
echo "======================<br>";
echo "Hasilnya adalah: " .$U9;

//Mencari suku ke 19
echo "<br><br>";
echo "Mencari Suku Ke 19<br>";
echo "Suku pertama = 2<br>";
echo "Beda = 2<br>";
echo "Un = a+(n-1)b<br>";
echo "======================<br>";
echo "Hasilnya adalah: " .$U19;

echo "<br><br>";
echo "<b>Notice:</b><br>Di karenakan n di mulai dari 0 maka n + 1";


?>