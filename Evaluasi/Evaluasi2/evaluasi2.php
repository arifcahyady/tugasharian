<?php 

/**
 * 
 */
class DataSantri
{
	protected $santri = [
		1=> [
			'nama' => 'Arif Cahyady',
			'alamat' => 'Siantar',
			'divisi' => 'Backend'
		],
		[
			'nama' => 'Intan',
			'alamat' => 'ponorogo',
			'divisi' => 'multimedia'
		],
		[
			'nama' => 'joko',
			'alamat' => 'lampung',
			'divisi' => 'Backend'
		]
	];
	function getInfo($index)
	{
		return "Nama : {$this->santri[$index]['nama']} | Alamat : {$this->santri[$index]['alamat']} | Divisi : {$this->santri[$index]['divisi']}";
	}
}

/**
 * 
 */
class Register extends DataSantri
{
	public function __construct() {
		echo "=============================" . "\n";
		echo "||  Program inout data     ||" . "\n";
		echo "==============================" . "\n";
	}
	
	public function daftar( $nama)
	{
		if ($nama == null) {
			throw new Exception("Error Processing Request", 1);
		}
		return "Selamat Datang di Pondok IT" . "\n";
	}
	public function lihatProfile( $nama)
	{
		if ($nama == null) {
			throw new Exception("Error Processing Request", 1);
		}
		return "Terima Kasih Telah Berkunjung";
	}
	public function hapus($index)
	{
		if ($pilih == null) {
			throw new Exception("Error Processing Request", 1);
		}	
		return "Kamu Berhasil mengupdate data : {$this->getInfo[$index]}";
		array_splice($santri, ($index -1), 1);
		print_r($santri);
	}
}


	

