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

	public function checkoutAct(){

		$order['order_status'] 		= $this->input->post('order_status');
		$order['user_id'] 			= $this->input->post('user_id');
		$order['product_id'] 		= $this->input->post('product_id');
		$order['date_transaction']	= date("Y-m-d H:i:s");
		$order['pay_by'] 			= $this->input->post('pay_by');
		$order['ship_id'] 			= $this->input->post('ship_id');
		$order['price'] 			= $this->input->post('price');
		$order['discount'] 			= $this->input->post('discount');
 
		$query = $this->OrderModel->saveOrder($order);
 
		if($query){
			$result = array( 	'code' => 0,
                                'info' => 'Berhasil',
                                'data' => array(    
                                                
                                            ) 
                                ); 
		}else{
			$result = array( 	'code' => 1,
                                'info' => 'Gagal',
                                'data' => array(    
                                                
                                            ) 
                                );
		}
    	
    	echo json_encode($result);

	}

}