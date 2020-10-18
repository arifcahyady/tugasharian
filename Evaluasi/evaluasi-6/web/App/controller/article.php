<?php 

/**
 * 
 */
class Article extends Controller
{
	public function index()
	{
		$data['manga'] = $this->model('User_model')->getJenis();
		$data['title'] = 'Daftar article';
		$this->view('templates/header', $data);
		$this->view('article/index', $data);
		$this->view('templates/footer');
	}
	public function page()
	{
		$this->view('article/page');
	}

	public function detail($id) {
		$data['get'] = $this->model('Library_model')->getLibraryById($id);
		$data['title'] = 'Detail article';
		$this->view('templates/header', $data);
		$this->view('article/detail', $data);
		$this->view('templates/footer');
	}

	public function cartoon() {
		$data['title'] = 'Daftar article';
		$this->view('templates/header', $data);
		$this->view('article/cartoon1', $data);
		$this->view('templates/footer');
	}
}