<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermgt extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function insert(){

		$user['fullname'] 	= $this->input->post('fullname');
		$user['username'] 	= $this->input->post('username');
		$user['password'] 	= md5($this->input->post('password'));
		$user['email'] 		= $this->input->post('email');
		$user['user_type'] 	= 'user';
 
		$query = $this->UserModel->insertuser($user);
 
		if($query){
			header('location:'.base_url());
		}
 
	}

	public function productdetail(){

		$this->load->view('user/productdetail');

	}
}