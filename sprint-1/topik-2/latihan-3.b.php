<?php  

//Program Perhitungan Persegi Panjang

//Deklarasi
$panjang = 5;
$lebar = 8;
$hasil_perhitungan = $panjang * $lebar;

echo "Luas Persegi Panjang<br>";
echo "Panjang = 5<br>";
echo "Lebar = 8<br>";
echo "Luas = Panjang * Lebar<br>";
echo "=====================<br>";
echo "Hasilnya adalah: " . $hasil_perhitungan;

//Program Perhitungan Lingkaran

$diameter = 9;
$vi = 3.14;
$r = $diameter / 2;
$hasil_keliling = 2 * $vi * $r;
$hasil_luas = $vi * $r * $r;

//Perhitungan Keliling Lingkaran
echo "<br><br>";
echo "Hasil Perhitungan Keliling<br>";
echo "Diameter = 9<br>";
echo "vi = 3.14<br>";
echo "jari-jari = diameter / 2<br>";
echo "======================<br>";
echo "Hasilnya Adalah: " .$hasil_keliling;

//Perhitungan Luas Lingkaran
echo "<br><br>";
echo "Hasil Perhitungan Luas<br>";
echo "Diameter = 9<br>";
echo "vi = 3.14<br>";
echo "jari-jari = diameter / 2<br>";
echo "======================<br>";
echo "Hasilnya Adalah: " .$hasil_luas;
?>

?>