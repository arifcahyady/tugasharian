<?php 

class Library extends Controller{
	public function index(){

		$data['title'] = 'Library Article';
		$data['mhs'] = $this->model('Library_model')->getAllLibrary();
		$this->view('templates/header', $data);
		$this->view('library/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id){

		$data['title'] = 'Daftar library';
		$data['mhs'] = $this->model('Library_model')->getLibraryById($id);
		$this->view('templates/header', $data);
		$this->view('library/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if($this->model('Library_model')->tambahDataLibrary($_POST) > 0)
		{
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/library');
		} else {
			{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/library');
		}
		}
	}

		public function hapus($id)
	{
		if($this->model('Library_model')->hapusDataLibrary($id) > 0)
		{
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/library');
		} else {
			{
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASEURL . '/library');
		}
		}
	}

	public function edit($id)
	{
		
	$data['get'] = $this->model('Library_model')->getUbah($id);


		$data['title'] = 'Edit';
		$this->view('templates/header', $data);
		$this->view('library/edit', $data);
		$this->view('templates/footer');

	}

	public function ubah() {
		$this->model('Library_model')->update($_POST);

		if ($this->model('Library_model')->update($_POST) > 0) {
			echo "Data Has been updated";
			echo "<script>
				document.location.href = '"
				. BASEURL . "/library;" . "
			</script>";
		}
	}
	
}