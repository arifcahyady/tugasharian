<?php 
//Program Perhitungan Suhu

//Deklarasi

$celcius = 34;
$reamur = 4 / 5 * $celcius;
$fahrenheit = 9 / 5 * $celcius + 32;
$kelvin = $celcius + 273;

//Konversi Celcius Ke Reamur

echo "Konversi Celcius Ke Reamur<br>";
echo "Celcius = 34<br>";
echo "Reamur = 4 /5 * $celcius<br>";
echo "====================<br>";
echo "Hasilnya adalah: " .$reamur;

//Konversi Celcius Ke Fahrenheit

echo "<br><br>";
echo "Konversi Celcius Ke Fahrenheit<br>";
echo "Celcius = 34<br>";
echo "Fahrenheit = 9 / 5 * celcius + 32<br>";
echo "====================<br>";
echo "Hasilnya adalah: " .$fahrenheit;

//Konversi Celcius Ke Kelvin

echo "<br><br>";
echo "Konversi Celcius Ke kelvin<br>";
echo "Celcius = 34<br>";
echo "Fahrenheit = Celcius + 273<br>";
echo "====================<br>";
echo "Hasilnya adalah: " .$kelvin;
?>