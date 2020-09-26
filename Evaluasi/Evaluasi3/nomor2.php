<?php 

class connectPdo
{
	protected $server = "localhost",
	$username = "root",
	$password = "";

	public function __construct()
	{
		$this->connect = new PDO("mysql:host=$this->server; dbname=sekolah", $this->username, $this->password);
		
	}
	public function registrasi() {
		
		
		$query = "INSERT INTO santri (nama,divisi,nilai) VALUES  (?,?,?)";
		$show = $this->connect->prepare($query);
		echo "mau berapa santri :";
		$get = trim(fgets(STDIN));
		for ($i=1; $i <= $get; $i++) { 
			echo "nama :";
			$nama = trim(fgets(STDIN));
			echo "divisi :";
			$divisi = trim(fgets(STDIN));
			echo "nilai : ";
			$nilai = trim(fgets(STDIN));
		$show->execute([$nama , $divisi , $nilai]);			
		}

		// $result = $show->fetchAll(pdo::FETCH_ASSOC);
		// print_r($result);
	}


	public function count() {
		$query = "SELECT COUNT(id) FROM santri";
		$show = $this->connect->prepare($query);
		$show->execute();
		$result = $show->fetchAll(pdo::FETCH_COLUMN);
		echo "Jumlah data = ";
		foreach ($result as $hasil) {
			echo $hasil;
		}
	}

	public function average() {
		$query = "SELECT AVG(nilai) FROM santri";
		$show = $this->connect->prepare($query);
		$show->execute();
		$result = $show->fetchAll(pdo::FETCH_COLUMN);
		echo "Jumlah rata-rata nilai santri = ";
		foreach ($result as $hasil) {
			echo $hasil;
		}
	}
	public function maksNilai() {
		$query = "SELECT * FROM santri WHERE nilai > 80";
		$show = $this->connect->prepare($query);
		$show->execute();
		$result = $show->fetchAll(pdo::FETCH_ASSOC);
		echo "Jumlah santri di atas 80 = ";
		print_r($result);
	}
	public function minNilai() {
		$query = "SELECT * FROM santri WHERE nilai <= 65";
		$show = $this->connect->prepare($query);
		$show->execute();
		$result = $show->fetchAll(pdo::FETCH_ASSOC);
		echo "Jumlah santri di bawah 65 = ";
		print_r($result);
	}
}

$kondisi = new connectPdo;

// $kondisi->registrasi();
// $kondisi->count();
// $kondisi->average();
// $kondisi->maksNilai();
$kondisi->minNilai();
?>