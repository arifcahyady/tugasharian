<?php 
/**
 * 
 */
class Connection
{
	
	public function __construct()
	{
	$server = "localhost";
	$username = "root";
	$password = "";
	$db_name  = "pondok";

	$this->conn = new PDO("mysql:host=$server;dbname=$db_name", $username, $password);
	}

	public function get() {
	$sql = "SELECT * FROM santri";
	$query = $this->conn->prepare($sql);
	$query->execute();
	$hasil = $query->fetchAll(PDO::FETCH_ASSOC);
	return $hasil;
	}

	public function insert($nama ,$divisi,$asal) {
		$sql = "INSERT INTO santri (nama,divisi,asal) VALUES (?,?,?)";
		$query = $this->conn->prepare($sql);
		$query->bindParam(1,$nama);
		$query->bindParam(2,$divisi);
		$query->bindParam(3,$asal);
		$query->execute();

		return $query->rowCount();
	}
	public function delete($id) {
		$sql = "DELETE FROM santri WHERE id=$id";
		$query = $this->conn->prepare($sql);
		$query->execute();
		return $query->rowCount();
	}

	public function update($id,$nama,$divisi,$asal) {
		$sql = "UPDATE santri SET nama = '$nama', divisi = '$divisi', asal = '$asal' WHERE id=$id";
		$query = $this->conn->prepare($sql);
		$query->execute();
		// var_dump($query);
		return $query->rowCount();
	}
}

 ?>