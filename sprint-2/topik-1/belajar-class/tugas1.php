<?php 

/**
 * 
 */
class Perpustakaan
{
	public $buku_bahasa = [
	'bahasa' => 'Pelajaran bahasa indonesia,isbn: 301',
	'teori' => 'Pelajaran bahasa asing,isbn: 221',
	];	
	public $buku_hitungan = [
	'math' => 'Pelajaran math, isbn : 1414',
	'teori_math' => 'Pelajaran teori, isbn : 223'
	];
	public $buku_dongeng = [
	'dongeng' => 'Kancil sang penolong,isbn: 101',
	'hakyat' => 'panji sang petualang,isbn: 076',
	];
	
	public function set_buku_bahasa($index) {
		$this->buku_bahasa = $index;
	}

		public function set_buku_hitungan($index) {
		$this->buku_hitungan = $index;
	}

		public function set_buku_dongeng($index) {
		$this->buku_dongeng = $index;
	}
}
/**
 * 
 */
class Pengunjung extends Perpustakaan
{
	
	public function get_buku_bahasa()
	{
		return $this->buku_bahasa;
	}
	public function get_buku_hitungan()
	{
		return $this->buku_hitungan;
	}
	public function get_buku_dongeng()
	{
		return $this->buku_dongeng;
	}
}


$hasil1 = new Pengunjung;
$hasil2 = new Pengunjung;
$hasil3 = new Pengunjung;
echo "1.bahasa	" . "2.math		" . "3.dongeng	" . "\n";
echo "Mau pilih Buku Apa ? ";
$input = trim(fgets(STDIN));
	
	echo "Kamu Berhasil Meminjam Buku : " . "\n";

	if ($input == 'bahasa' || $input == 1) {
		print_r($hasil1->get_buku_bahasa());
	}elseif ($input == 'math' || $input == 2) {
		print_r($hasil2->get_buku_hitungan());
	}elseif ($input == 'dongeng' || $input == 3) {
		print_r($hasil3->get_buku_dongeng());
	}else {
		echo "Maaf buku tidak di temukan";
	}

echo "Mohon Kembalikan Buku Tepat Waktu !". "\n";	

echo "mau kembalikan buku (y/n) ? " . "\n";
$input = trim(fgets(STDIN));
echo "Pilih Buku yang mau di kembalikan : ";
$input1 = trim(fgets(STDIN));	
	
	if ($input1 == 'bahasa' || $input1 == 1) {
		echo "Buku Di Kembalikan : " . "\n";
		print_r($hasil1->get_buku_bahasa());
		echo "Terima Kasih Sudah MengemBalikan Buku Tepat Waktu !!";

	}elseif ($input1 == 'math' || $input1 == 2) {
		echo "Buku Di Kembalikan : " . "\n";
		print_r($hasil1->get_buku_hitungan());
		echo "Terima Kasih Sudah MengemBalikan Buku Tepat Waktu !!";
	}elseif ($input1 == 'dongeng' || $input1 == 3) {
		echo "Buku Di Kembalikan : " . "\n";
		print_r($hasil1->get_buku_dongeng());
		echo "Terima Kasih Sudah MengemBalikan Buku Tepat Waktu !!";
	}else {
		echo "Maaf Buku tidak di temukan !!";
	}
	


	








































 ?>