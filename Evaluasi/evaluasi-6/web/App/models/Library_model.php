<?php 

class Library_model {

	private $table = 'library';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllLibrary() {
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
	public function getLibraryById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataLibrary($data) 
	{
		$query= "INSERT INTO library VALUES (null, :nama, :judul, :jenis, :deksripsi)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('jenis', $data['jenis']);
		$this->db->bind('deksripsi', $data['deksripsi']);
		

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataLibrary($id) 
	{
		$query= "DELETE FROM library WHERE id=:id";

		$this->db->query($query);
		$this->db->bind('id',$id);
		
		

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDataLibrary($data) 
	{
		$query = "UPDATE library SET
		nama = :nama,
		judul = :judul,
		jenis = :jenis,
		deksripsi = :deksripsi
		WHERE id= :id";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('jenis', $data['jenis']);
		$this->db->bind('deksripsi', $data['deksripsi']);
		$this->db->bind('id', $data['id']);
		

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function getUbah($id) {
		$this->db->query("SELECT * FROM library WHERE id=:id");

		$this->db->bind('id', $id);

		return $this->db->single();
	}

	public function update($data) {
		$this->db->query("UPDATE library SET nama = :nama, jenis = :jenis, judul = :judul, deksripsi = :deskripsi WHERE id=:id");

		$this->db->bind('nama', $data['nama']);
		$this->db->bind('jenis', $data['jenis']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('deksripsi', $data['deksripsi']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

}