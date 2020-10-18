<?php 

class Login_model {
	private $user;
	private $password;
	private $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function login($data) {
		$this->user = $data['username'];
		$this->password = $data['password'];

		$this->db->auth($this->user, $this->password);
	}

	public function register($data) {
		$this->user = $data['username'];
		$this->password = $data['password'];

		$this->db->reg($this->user, $this->password);
	}
}