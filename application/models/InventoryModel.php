<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InventoryModel extends CI_Model {
	private $tabelName = "products";

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		$query = $this->db->get('products');
		return $query; 
	}
	
	public function getSelling(){
		$this->db->where('stock >=', 1);
		$query = $this->db->get('products');
		return $query->result();
	}

	public function save($data){
		return $this->db->insert('products', $data);
	}
	
	public function saveProcurement($data){
		return $this->db->insert('products_entered', $data);
	}
	
	public function saveSold($data){
		return $this->db->insert('products_out', $data);
	}

	public function getById($id){
		$query = $this->db->get_where('products', array('product_id'=>$id));
		return $query->result(); 
	}
	
	public function getReport(){
		$this->db->select('a.*, b.qty as masuk, c.qty as keluar');
    $this->db->from('products a'); 
    $this->db->join('products_entered b', 'b.product_id = a.product_id', 'left');
    $this->db->join('products_out c', 'c.product_id = a.product_id', 'left');
		$query = $this->db->get();
		return $query;
	}

	public function getReportByDate($month, $year){
		$this->db->select('a.*, b.qty as masuk, c.qty as keluar');
    $this->db->from('products a'); 
    $this->db->join('barang_masuk b', 'b.product_id = a.product_id', 'left');
    $this->db->join('barang_keluar c', 'c.product_id = a.product_id', 'left');
		$this->db->where('a.date LIKE','%'.$month.'-'.$year);
		$query = $this->db->get();
		return $query;
	}
	
	public function update($data, $where){
		$data = $this->db->update($this->tabelName, $data, $where);
    return $data;
	}

	public function delete($where){
		$data = $this->db->delete($this->tabelName, $where);
		return $data;
	}
}