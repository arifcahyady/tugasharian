<?php 

class HitungBangunPersegi
{


	public function hitungPersegi($panjang, $tinggi) {
		if ($panjang < 0) {
			throw new Exception('gak boleh minus ! ' . '\n') ;
		}
		return $panjang * $tinggi;

	}
}
class HitungBangunLingkaran
{

	public function hitungLingkaran($phi, $diameter) {
		if ($diameter < 0) {
			throw new Exception('nilai tidak boleh minus ! ' . '\n') ;
		}
		return $phi * $diameter;
	}

	
}

class HitungBangunTrapesium
{
	

	public function hitungTrapesium($rusuk, $tinggi) {
		if ($tinggi < 0) {
			throw new Exception('nilai tidak boleh minus ! ' . '\n') ;
		}
		return $rusuk * $tinggi;
	}

	
}