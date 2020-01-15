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

			if ($param['order_status']  == 'FINISH') {
				$param['date_receipt']	= date("Y-m-d H:i:s");
			}
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

	public function checkoutAct(){

		$order['order_status'] 		= $this->input->post('order_status');
		$order['order_desc'] 		= $this->input->post('order_desc');
		$order['user_id'] 			= $this->input->post('user_id');
		$order['product_id'] 		= $this->input->post('product_id');
		$order['date_transaction']	= date("Y-m-d H:i:s");
		$order['pay_by'] 			= $this->input->post('pay_by');
		$order['price'] 			= $this->input->post('price');
		$order['receiver'] 			= $this->input->post('fullname');
		$order['address'] 			= $this->input->post('address');
		$order['no_mobile'] 		= $this->input->post('mobile');
 
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