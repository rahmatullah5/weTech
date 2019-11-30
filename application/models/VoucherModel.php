<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VoucherModel extends CI_Model {

	function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($voucher)
	{
		return $this
			->db
			->insert('voucher', $voucher);
	}

	public function delete($id)
	{
		$this->db->where('voucher_id', $id);
		return $this->db->update('voucher', [
			'is_removed' => 1
		]);
	}

	public function getAll()
	{
		$data = $this
			->db
			->get_where('voucher', [
				'is_removed' => 0
			])
			->result();

		return $data;
	}
}