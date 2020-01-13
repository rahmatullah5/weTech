<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrderModel extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAllOrder($param){
		
		$this->db->select('*');
		$this->db->from('order_transaction');
		$this->db->join('users', 'users.user_id = order_transaction.user_id');
		$this->db->join('products', 'products.product_id = order_transaction.product_id');
		
		if ($param['shipping']) {
			$this->db->join('shippings', 'shippings.shipping_id = order_transaction.shipping_id');
		}
		
		if ($param['order_id']) {
			$this->db->where('order_id',$param['order_id']);
		}

		if ($param['status']) {
			$this->db->where('order_status',$param['status']);
		}

		if ($param['user_id']) {
			$this->db->where('user_id',$param['user_id']);
		}

		$query = $this->db->get();
		return $query->result(); 
	}

	public function saveOrder($user){
		return $this->db->insert('order_transaction', $user);
	}

	public function updateTransaction($param){

		$this->db->where('order_id', $param['order_id']);
		return $this->db->update('order_transaction', $param);
	}

	public function initShippingOnRelatedOrder($id){
			    $shipping_id = $this->OrderModel->updateOrderAndCreateShipping($id);
			 	redirect('/admin/shippings/show/'.$shipping_id);		
		}

	public function updateOrderAndCreateShipping($id) {
			$this->db->insert('shippings', [
		                    'courier' => 'JNE',
		                    'receiver' => 'Rahmat',
		                    'depart' => 'cimahi',
		                    'destination' => 'bandung',
		                    'status' => 'Pending',
		                    'order_id' => $id
		                ]);
			$ship_id = $this->db->insert_id();
			$this->db->where('order_id', $id);
			$this->db->update('order_transaction', ['order_status' => 'TOSHIPPING', 'ship_id' => $ship_id]);
			return $ship_id;
	}		

}