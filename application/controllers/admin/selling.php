<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Selling extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('OrderModel');
	}

	public function getAllOrder(){

	    $data['orders'] 	= $this->OrderModel->getAllOrder();		
        $content['body'] 	= $this->load->view('admin/selling/reporting', $data);

		$this->load->view('admin/layout/container', $content);

	}

	public function getTransaction(){

		$param['status'] 	= $this->input->post('status');
		$param['user_id'] 	= $this->input->post('user_id');
		$param['order_id'] 	= $this->input->post('order_id');
		$param['shipping'] 	= $this->input->post('shipping');

	    $data 	= $this->OrderModel->getAllOrder($param);

		if($data){
			$result = array( 	'code' => 0,
                                'info' => 'Berhasil',
                                'data' => $data 
                                ); 
		}else{
			$result = array( 	'code' => 1,
                                'info' => 'Data tidak ditemukan!',
                                'data' => $data  
                                );
		}
    	
    	echo json_encode($result);

	}

	public function updTransaction(){

		$param['order_id'] 		= $this->input->post('order_id');

		if ($this->input->post('status')) {
			$param['order_status'] 	= $this->input->post('status');
		}

		if ($this->input->post('shipping_id')) {
			$param['shipping_id'] 	= $this->input->post('shipping_id');
		}

	    $data 	= $this->OrderModel->updateTransaction($param);
	    // print_r($data);die();
		if($data){
			$result = array( 	'code' => 0,
                                'info' => 'Berhasil',
                                'data' => array(    
                                                
                                            )
                            ); 
		}else{
			$result = array( 	'code' => 1,
                                'info' => 'Gagal update transaksi',
                                'data' => array(    
                                                
                                            )  
                            );
		}
    	
    	echo json_encode($result);

	}

}