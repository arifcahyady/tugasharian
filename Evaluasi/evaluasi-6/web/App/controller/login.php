<?php 

class Login extends Controller {
	public function index() {

		$data['title'] = 'login';
		
		$this->view('login/index', $data);
		$this->view('templates/footer');
	}

	public function log() {
		$this->model('Login_model')->login($_POST);
	}

	public function register() {
		$data['title'] = 'Sign up';
		
		$this->view('login/register', $data);
		$this->view('templates/footer');
	}

	public function daftar() {
		$this->model('Login_model')->register($_POST);
	}
}