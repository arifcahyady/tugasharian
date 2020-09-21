<?php 
/**
 * 
 */
class Santri
{
	protected  static $santri = [
		 1 => [
			'nik' => '001',
			'nama' => 'arif',
			'divisi' => 'backend',
		],
		[
			'nik' => '002',
			'nama' => 'apa',
			'divisi' => 'backend',
		],
		[
			'nik' => '003',
			'nama' => 'api',
			'divisi' => 'backend',
		]
	];
}

/**
 * 
 */
class Progress extends Santri
{
	
	public function register($santri)
	{
		if ($user = null) {
			throw new Exception("Error Processing Request", 1);
		}
		for ($k = 1; $k <= $santri; $k++) { 
			echo "data ke $k" . "\n";
			echo "Masukan nik : ";
			$data['nik'] = trim(fgets(STDIN));
			echo "Masukan nama : ";
			$data['nama'] = trim(fgets(STDIN));
			echo "Masukan divisi : ";
			$data['divisi'] = trim(fgets(STDIN));
			
			self::$santri[] = $data;
		}
		print_r(self::$santri);
	}

	public function update($index) {
		if ($index > count(self::$santri) or $index <= 0) {
			throw new Exception("Error Processing Request", 1);
		}
		echo "Nama baru : ";
		self::$santri[$index]['nama'] = trim(fgets(STDIN));
		echo "Divisi baru : ";
		self::$santri[$index]['divisi'] = trim(fgets(STDIN));

		
		print_r(self::$santri);
	}
	public function delete($index) {
		if ($index > count(self::$santri)) {
			throw new Exception("Error Processing Request", 1);
		}
		array_splice(self::$santri, $index -1,1);
		print_r(self::$santri);
	}
}

/**
 * 
 */
class Construct
{
	
	public function __construct()
	{
		echo "===============================================" . "\n";
		echo "Program Data Santri" . "\n";
		echo "===============================================" . "\n";
	}
}

$cons = new Construct;
echo "1.Tambah data \n2.Update data \n3.Delete data" . "\n";
echo "Mau Ngerjakan apa  : ";
$quest = trim(fgets(STDIN));

switch ($quest) {
	case '1':
		$admin = new Progress;
		echo "Mau input berapa : ";
		$reg = trim(fgets(STDIN));

		try {
			echo $admin->register($reg);
		}catch(Exception $error) {
			echo $error->getMessage();
		}
		echo "Data has been registered";
		break;
	case '2':
		$admin = new Progress;
		echo "pilih data yang ingin kamu update : ";
		$upt = trim(fgets(STDIN));

		try {
			echo $admin->update($upt);
		}catch(Exception $error) {
			$error->getMessage();
		}
		echo "Data has been update";
		break;
		case '3':
			$admin = new Progress;

			echo "Pilih data yang mau di hapus : ";
			$del = trim(fgets(STDIN));

			try {
				echo $admin->delete($del);
			}catch(Exception $error) {	
			echo $error->getMessage();
			}
			echo "Data has been deleted";
			break;
	default:
		echo "You input code is wrong";
		break;
}