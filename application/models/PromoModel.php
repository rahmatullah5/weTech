<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PromoModel extends CI_Model {

	function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function update($id, $discount)
	{
		$this->db->where('product_id', $id);
		return $this->db->update('products', [
			'discount' => $discount
		]);
	}

	public function getAll()
	{
		$data = $this
			->db
			->get_where('products', [
				'discount !=' => 0
			])
			->result();

		return $data;
	}

	public function getAllProduct()
	{
		$data = $this
			->db
			->get_where('products', [
				'discount' => 0
			])
			->result();

		return $data;
	}
	
}