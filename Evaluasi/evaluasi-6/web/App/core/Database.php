<?php 

class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	private $dbh;
	private $stmt;

	public function __construct(){
		$dsn = 'mysql:host=' . $this->host .';dbname=' . $this->db_name;

		$option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try {
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
		}catch(PDOException $e) {
			die($e->getMessage());
		}
	}
	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($params, $value, $type = null) 
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value) :
				$type = PDO::PARAM_INT;
				break;

				case is_bool($value) :
				$type = PDO::PARAM_BOOL;
				break;

				case is_null($value) :
				$type = PDO::PARAM_NULL;
				break;

				default :
				$type = PDO::PARAM_STR;
			}
		} 

		$this->stmt->bindValue($params, $value, $type);
	}

	public function execute()
	{
		$this->stmt->execute();
	}

	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function single()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function rowCount()
	{
		return $this->stmt->rowCount();
	}

	public function auth($nama, $password) {
		$sql = $this->dbh->query("SELECT * FROM user WHERE username = '$nama' ");

		$result = $sql->fetch(PDO::FETCH_ASSOC);

		if ($sql->rowCount() == 1) {
			if ($password === $result['password']);
			session_start();
			$_SESSION['status'] = true;
			header('location: ' . BASEURL . "/library");
		}else {
			header('location: ' . BASEURL . "/login");
		}
	}

	public function reg($nama, $password) {
		$sql = $this->dbh->query("SELECT username FROM user WHERE username = '$nama'");

		$result = $sql->fetch(PDO::FETCH_ASSOC);

		if ($sql->rowCount() == 1) {
			echo "<script>
				alert('Username sudah terdaftar');
				document.location.href = '". BASEURL ."/login/register" ."'
			</script>";
			exit;
		}

		 $this->dbh->query("INSERT INTO user (username, password) VALUES ('$nama', '$password')");
		echo "<script>
				alert('Account has been registered');
				document.location.href = '". BASEURL ."/login/" ."'
			</script>";
	}

}