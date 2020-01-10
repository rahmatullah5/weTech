<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrderModel extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAllOrder(){
		$query = $this->db->get('order_transaction');
		return $query->result(); 
	}

	public function saveOrder($user){
		return $this->db->insert('order_transaction', $user);
	}

	public function getOrderById($id){
		$query = $this->db->get_where('order_transaction',array('order_id'=>$id));
		return $query->row_array();
	}

	public function updateOrder($user, $id){
		$this->db->where('order_id', $id);
		return $this->db->update('order_transaction', $user);
	}

	public function updateOrderAndCreateShipping($id) {
			$this->db->where('order_id', $id);
			$this->db->update('order_status', 'sent');
			$this->db->insert('shippings', {
		                    courier: 'JNE',
		                    reciever: 'Rahmat',
		                    depart: 'cimahi',
		                    destination: 'bandung',
		                    status: 'Pending'
		                    order_id: $id
		                });

	}
}