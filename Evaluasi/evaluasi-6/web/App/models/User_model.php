<?php 

class User_model {
	private $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function getUser() 
	{
		return $this->nama;
	}

	public function getJenis()
	{
		$this->db->query("SELECT * FROM library");
		
		return $this->db->resultSet();
	}


	// public function getEducation($query)
	// {
	// 	$this->db->query("SELECT * FROM library WHERE jenis = 'education'");
		
	// 	return $this->db->resultSet();
	// }


	// public function getMotivation()
	// {
	// 	$this->db->query("SELECT * FROM library WHERE jenis = 'motivation'");
		
	// 	return $this->db->resultSet();
	// }

}