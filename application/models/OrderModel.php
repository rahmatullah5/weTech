<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrderModel extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAllOrder($param){
		
		$this->db->select('t.*,products.*,products.*,users.*,shippings.code_resi');
		$this->db->from('order_transaction t');
		$this->db->join('users', 'users.user_id = t.user_id');
		$this->db->join('products', 'products.product_id = t.product_id');
		$this->db->join('shippings', 'shippings.shipping_id = t.shipping_id' ,'left outer');
		
		
		if ($param['order_id']) {
			$this->db->where('t.order_id',$param['order_id']);
		}

		if ($param['status']) {
			$this->db->where('order_status',$param['status']);
		}

		if ($param['user_id']) {
			$this->db->where('t.user_id',$param['user_id']);
		}

		$query = $this->db->get();
		// print_r($query->result());die();
		// print_r($this->db->last_query()); die();
		return $query->result(); 
	}

	public function saveOrder($user){
		$this->db->insert('order_transaction', $user);
		
		return $this->db->insert_id();
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

	public function getAllOrderAdmin(){

		$query = $this->db->get('order_transaction');
		return $query->result(); 
	}

}