<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('OrderModel');
		$this->load->model('InventoryModel');
		$this->load->model('VoucherModel');
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
		$p_data['voucherList'] = $this->VoucherModel->getAll();

		// print_r($p_data);die();
        $content['body'] = $this->load->view('user/dashboard', $p_data);

		$this->load->view('user/dashboard', $content);
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

		$json = file_get_contents('http://localhost/weTech/admin/inventory/getDetailProduk/'.$_GET["product_id"]);
        $obj['product_detail'] = json_decode($json);
		$this->load->view('user/productdetail',$obj);

	}

	public function checkout(){

		$this->load->view('user/checkout');

	}

	public function transdetail(){

		$this->load->view('user/transdetail');

	}

}