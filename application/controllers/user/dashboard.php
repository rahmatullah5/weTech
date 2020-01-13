<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('OrderModel');
	}

	public function index()
	{

        $content['body'] = $this->load->view('user/dashboard', null, true);

		$this->load->view('user/dashboard', $content);
	}

	public function insert(){

		$user['fullname'] 	= $this->input->post('fullname');
		$user['username'] 	= $this->input->post('username');
		$user['password'] 	= md5($this->input->post('password'));
		$user['email'] 		= $this->input->post('email');
		$user['user_type'] 	= 'user';
 
		$query = $this->UserModel->insertuser($user);
 
		if($query){
			header('location:'.base_url().$this->index());
		}
 
	}
 
	public function edit($id){
		$data['user'] = $this->UserModel->getUser($id);
		$this->load->view('editform', $data);
	}
 
	public function update($id){
		$user['username'] = $this->input->post('username');
		$user['password'] = $this->input->post('password');
		$user['fname'] 	  = $this->input->post('fname');
 
		$query = $this->UserModel->updateuser($user, $id);
 
		if($query){
			header('location:'.base_url().$this->index());
		}
	}
 
	public function delete($id){
		$query = $this->UserModel->deleteuser($id);
 
		if($query){
			header('location:'.base_url().$this->index());
		}
	}

	public function productdetail(){

		$this->load->view('user/productdetail');

	}

	public function checkout(){

		$this->load->view('user/checkout');

	}

}