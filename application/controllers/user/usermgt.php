<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermgt extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('InventoryModel');
		
	}

	public function index()
	{
		// print_r('test');die();
		$data = $this->InventoryModel->getSelling();
		$api = [];
		foreach($data as $index => $d){
			array_push($api, array(
				'product_id' => $data[$index]->product_id,
				'code' => $data[$index]->code,
				'type' => $data[$index]->type,
				'name' => $data[$index]->name,
				'price' => $data[$index]->price,
				'date' => $data[$index]->date,
				'spesifikasi' => $data[$index]->spesifikasi,
				'pictures' => explode(',', $data[$index]->pictures),
				)
			);
		}

		$p_data['product'] = $api;	
		// print_r($p_data);die();
        $content['body'] = $this->load->view('user/dashboard', $p_data);

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
			header('location:'.base_url());
		}
 
	}

	public function productdetail(){

		$json = file_get_contents('http://localhost/weTech/admin/inventory/getDetailProduk/'.$_GET["product_id"]);
        $obj['product_detail'] = json_decode($json);
		$this->load->view('user/productdetail',$obj);

	}
}