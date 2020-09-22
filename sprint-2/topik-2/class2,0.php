<?php 
 $panjang = 12;
 $tinggi = 21;
 $phi = 3.14;
 $diameter = 12;

class HitungBangunPersegi
{
	public static function luasPersegi($panjang, $tinggi) {
		echo $panjang * $tinggi;

	}
}
class HitungBangunLingkaran
{

	public static function luasLingkaran($phi, $diameter) {
		echo $phi * $diameter;
	}
}



class HitungBangunTrapesium
{
	public function __construct($rusuk, $tinggi) {
		echo $rusuk * $tinggi;
	}	
}

