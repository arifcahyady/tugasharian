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
	$db_name  = "produk";

	$this->conn = new PDO("mysql:host=$server;dbname=$db_name", $username, $password);
	}

	public function show() {
	$sql = "SELECT * FROM data";
	$query = $this->conn->prepare($sql);
	$query->execute();
	$hasil = $query->fetchAll(PDO::FETCH_ASSOC);
	return $hasil;
	}

	public function insert($nama ,$harga,$tujuan) {
		$sql = "INSERT INTO data (nama_barang,harga,tujuan) VALUES (?,?,?)";
		$query = $this->conn->prepare($sql);
		$query->bindParam(1,$nama);
		$query->bindParam(2,$harga);
		$query->bindParam(3,$tujuan);
		$query->execute();

		return $query->rowCount();
	}
	public function delete($id) {
		$sql = "DELETE FROM data WHERE id=$id";
		$query = $this->conn->prepare($sql);
		$query->execute();
		return $query->rowCount();
	}

	public function update($id,$nama,$harga,$tujuan) {
		$sql = "UPDATE data SET nama_barang = '$nama', harga = '$harga', tujuan = '$tujuan' WHERE id= $id";
		$query = $this->conn->prepare($sql);
		$query->execute();
		// var_dump($query);
		return $query->rowCount();
	}
}

 ?>