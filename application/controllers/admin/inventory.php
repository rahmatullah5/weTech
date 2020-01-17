<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends CI_Controller {
  public function __construct() {    
		parent::__construct();
		$this->load->model('InventoryModel');
  }
  
	public function index() {
		$data['page'] = 'index';
    $data['inventory'] = $this->InventoryModel->getAll();
    $content['body'] = $this->load->view('admin/inventory/product_list', $data);

		$this->load->view('admin/layout/container', $content);
	}	

	public function edit($id) {
		$product_id = $id;
		$code = $_POST['code'];
		$name = $_POST['name'];
		$stock = $_POST['stock'];
		$price = $_POST['price'];
		$spesifikasi = $_POST['spesifikasi'];
		$save_data = array(
				'product_id' => $product_id,
				'name' => $name,
				'stock' => $stock,
				'price' => $price,
				'spesifikasi' => $spesifikasi
		);
		$where = array('product_id' => $product_id);
		$data = $this->InventoryModel->update($save_data, $where);
		redirect('admin/inventory/index', 'refresh');
	}

	public function delete($id) {
		$where = array('product_id' => $id);
		$data = $this->InventoryModel->delete($where);
		redirect('admin/inventory/index', 'refresh');
	}

	public function procurement() {
		$data['page'] = 'procurement';
		$data['inventory'] = $this->InventoryModel->getAll();
		$content['body'] = $this->load->view('admin/inventory/procurement', $data);

		$this->load->view('admin/layout/container', $content);
	}
	
	public function procurementAdd($product_id) {
		$qty = $_POST['qty'];
		$qty_ = $_POST['qty_'];
		$save_data = array(
			'product_id' => $product_id,
			'qty' => $qty,
			'date' => date("d-m-Y")
		);
		$this->InventoryModel->saveProcurement($save_data);
		
		$save_data = array(
			'stock' => ($qty + $qty_),
		);
		$where = array('product_id' => $product_id);
		$this->InventoryModel->update($save_data, $where);
		redirect('admin/inventory/procurement/', 'refresh');
	}
	
	public function add() {
		$data['page'] = 'add';
		$content['body'] = $this->load->view('admin/inventory/add', $data);

		$this->load->view('admin/layout/container', $content);
	}
	
	public function inputData() {
		$code = $_POST['code'];
		$name = $_POST['name'];
		$type = $_POST['type'];
		$stock = $_POST['stock'];
		$price = $_POST['price'];
		$spesifikasi = $_POST['spesifikasi'];
		$date = date("d-m-Y");
		$save_data = array(
				'code' => $code,
				'name' => $name,
				'type' => $type,
				'stock' => $stock,
				'price' => $price,
				'date' => $date,
				'spesifikasi' => $spesifikasi
		);
		$data = $this->InventoryModel->save($save_data);
		redirect('admin/inventory/index', 'refresh');
	}

	public function sold() {
		$data['page'] = 'sold';
		$data['inventory'] = $this->InventoryModel->getAll();
		$content['body'] = $this->load->view('admin/inventory/barang_keluar', $data);

		$this->load->view('admin/layout/container', $content);
	}
	
	public function soldAdd($product_id) {
		$qty = $_POST['qty'];
		$qty_ = $_POST['qty_'];
		$save_data = array(
			'product_id' => $product_id,
			'qty' => $qty,
			'date' => date("d-m-Y")
		);
		$this->InventoryModel->saveSold($save_data);
		
		$save_data = array(
			'stock' => $qty_ - $qty,
		);
		$where = array('product_id' => $product_id);
		$this->InventoryModel->update($save_data, $where);
		redirect('admin/inventory/sold', 'refresh');
	}
	
	public function report($filter) {
		$data['page'] = 'report';
		if ($filter) {
			$month = $_GET['month'];
			$year = $_GET['year'];
			$data['inventory'] = $this->InventoryModel->getReportByDate($month, $year);
		} else {
			$data['inventory'] = $this->InventoryModel->getReport();
		}
		$content['body'] = $this->load->view('admin/inventory/reporting', $data);
		$this->load->view('admin/layout/container', $content);
	}
}