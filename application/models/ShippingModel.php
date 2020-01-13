<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShippingModel extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		$query = $this->db->get('shippings');
		return $query->result(); 
	}

	public function save($shipping){
		return $this->db->insert('shippings', $shipping);
	}

	public function getById($id){
		$query = $this->db->get_where('shippings',array('shipping_id'=>$id));
		return $query->row_array();
	}

	public function update($shipping, $id){
		$this->db->get_where('order_transaction',array('shipping_id'=>$id));
		$this->db->update('order_transaction', ['order_status' => 'TOCUSTOMER ']);
		$this->db->get_where('shippings',array('shipping_id'=>$id));
		// $this->db->where('shippings', $id);
		return $this->db->update('shippings', $shipping);
	}

	public function delete($id){
		$this->db->where('shipping_id', $id);
		return $this->db->delete('shippings');
	}

	public function getRelatedOrder($id){
		$query = $this->db->get_where('order_transaction',array('shipping_id'=>$id));
		return $query->row_array();
	}

}