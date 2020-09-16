<?php 

class HitungBangunPersegi
{
	// public $panjang;
	// public $tinggi;

	public function __construct($panjang, $tinggi) {
		echo $panjang * $tinggi;
	}

}
class HitungBangunLingkaran
{

	public function __construct($phi, $diameter) {
		echo $phi * $diameter;
	}

	
}



class HitungBangunTrapesium
{
	

	public function __construct($rusuk, $tinggi) {
		echo $rusuk * $tinggi;
	}

	
}