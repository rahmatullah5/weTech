<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel');
	}

	public function index()
	{
		if (isset($this->session->userdata['login'])) {
			redirect('/admin/dashboard');
		}

		$this->load->view('admin/login');
	}

	public function action_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$checkUser = $this->AuthModel->checkUser($username, $password);

		if ($checkUser->num_rows() === 1) {
			$userData = $checkUser->row();
			$sessionData = [
				'id' => $userData->user_id,
				'username' => $userData->username,
				'type' => $userData->user_type,
			];

			$this->session->set_userdata('login', $sessionData);
			
			if ($userData->user_type == 'user') {
				redirect('/');
			}else{
				redirect('/admin/dashboard');
			}
		} else {
			$this->session->set_flashdata('response', [
				'error' => true,
				'msg' => 'Username atau password salah'
			]);

			redirect('/admin/auth');
		}
	}

	public function logout()
	{
		if ($this->session->userdata['login']['type'] == 'user') {
			$page = '/user';
		}else{
			$page = '/admin/auth';
		}

		$this->session->sess_destroy();

		redirect($page);
	}
}