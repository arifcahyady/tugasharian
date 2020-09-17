<?php  
include_once 'class3,0.php';

try {
    $result = HitungBangunPersegi::hitungPersegi(2, 7);//<= coba masukan minus utk melihat error

    
} catch (Exception $ex) {
	echo "Error pada ".$ex->getFile() . " baris ke : ". $ex->getLine()."\n";
	echo $ex->getMessage();
	die;
} finally {
	echo "Hasil Hitung Luas Persegi : " . $result . "\n";
}
  

try {
    $result = HitungBangunLingkaran::hitungLingkaran(3.14, 7);//<= coba nilai minus utk melihat error
} catch (Exception $k) {
	echo "Error pada ".$k->getFile() . " baris ke : ". $k->getLine()."\n";
	echo $k->getMessage();
	die;
} finally {
	echo "Hasil Hitung Luas lingkaran : " . $result . "\n";
}


try {
    $result = HitungBangunTrapesium::hitungTrapesium(7,2 / 2);//<= nilai phi harus 3.14
} catch (Exception $i) {
	echo "Error pada ".$i->getFile() . " baris ke : ". $i->getLine()."\n";
	echo $i->getMessage();
	die;
} finally {
	echo "Hasil Hitung Luas Trapesium : " . $result . "\n";
}