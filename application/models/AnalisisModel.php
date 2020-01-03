<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AnalisisModel extends CI_Model {

	function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function getLarisProduct()
	{
		$data = $this
			->db
			->query(
				"select products.product_id, products.name, count(*) as total from products".
				" left join order_transaction on products.product_id = order_transaction.product_id".
				" group by products.product_id order by total desc"
			)
			->result_array();

		return $data;
	}

	public function getTidakLarisProduct()
	{
		$data = $this
			->db
			->query(
				"select products.product_id, products.name, count(*) as total from products".
				" left join order_transaction on products.product_id = order_transaction.product_id".
				" group by products.product_id order by total asc"
			)
			->result_array();

		return $data;
	}
	
}