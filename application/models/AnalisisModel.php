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
				"select".
				" products.product_id,".
				" products.name,".
				" coalesce((select count(*) from order_transaction where order_transaction.product_id = products.product_id and order_status='FINISH' group by order_transaction.product_id),0) AS total,".
				" products.stock".
			" FROM".
				" products".
			" ORDER BY".
				" total DESC,". 
				" stock ASC". 
				" LIMIT 5"
			)
			->result_array();

		return $data;
	}

	public function getTidakLarisProduct()
	{
		$data = $this
			->db
			->query(
				"select".
				" products.product_id,".
				" products.name,".
				" coalesce((select count(*) from order_transaction where order_transaction.product_id = products.product_id and order_status='FINISH' group by order_transaction.product_id),0) AS total,".
				" products.stock".
			" FROM".
				" products".
			" ORDER BY".
				" total ASC,". 
				" stock DESC". 
				" LIMIT 5"
			)
			->result_array();

		return $data;
	}
	
}