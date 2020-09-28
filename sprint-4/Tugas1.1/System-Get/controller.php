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
	$sql = "SELECT * FROM pengiriman";
	$query = $this->conn->prepare($sql);
	$query->execute();
	$hasil = $query->fetchAll(PDO::FETCH_ASSOC);
	return $hasil;
	}

	public function insert($nama_kurir ,$nama_pengirim,$asal,$tujuan) {
		$sql = "INSERT INTO pengiriman (nama_kurir,nama_pengirim,asal,tujuan) VALUES (?,?,?,?)";
		$query = $this->conn->prepare($sql);
		$query->bindParam(1,$nama_kurir);
		$query->bindParam(2,$nama_pengirim);
		$query->bindParam(3,$asal);
		$query->bindParam(4,$tujuan);
		$query->execute();

		return $query->rowCount();
	}
}

 ?>