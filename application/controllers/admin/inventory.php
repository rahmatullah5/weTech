<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends CI_Controller {
  public function __construct() {    
		parent::__construct();
		$this->load->model('InventoryModel');
		$this->load->model('OrderModel');
		$this->load->model('ShippingModel');
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
		$date = date('Y-m-d H:i:s');
		$pengirim = $_POST['pengirim'];
		$no_faktur = $_POST['no_faktur'];
		$save_data = array(
			'product_id' => $product_id,
			'qty' => $qty,
			'pengirim' => $pengirim,
			'no_faktur' => $no_faktur,
			'date' => $date,
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
		$poto = [];
		if (isset($_FILES)) {
      foreach($_FILES as $index => $data){
			if ($_FILES[$index]['name'] !== '') {
					#upload photo
					$photo_name = date("YmdHis").$_FILES[$index]['name'];
					$config['upload_path']      = './assets/uploads/';
					$config['allowed_types']    = 'gif|jpg|png|jpeg';
					$config['maintain_ratio']   = TRUE;
					$config['file_name']        = $photo_name;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					$this->upload->do_upload($index);
					array_push($poto, $photo_name);
				}
			}
		}
		$code = $_POST['code'];
		$name = $_POST['name'];
		$type = $_POST['type'];
		$stock = $_POST['stock'];
		$price = $_POST['price'];
		$spesifikasi = $_POST['spesifikasi'];
		$date = date('Y-m-d H:i:s');
		$save_data = array(
				'code' => $code,
				'name' => $name,
				'type' => $type,
				'stock' => $stock,
				'price' => $price,
				'date' => $date,
				'spesifikasi' => $spesifikasi,
				'pictures' => implode(",", $poto)
		);
		$data = $this->InventoryModel->save($save_data);
		$insert_id = $this->db->insert_id();

		$pengirim = $_POST['pengirim'];
		$no_faktur = $_POST['no_faktur'];
		$save_data = array(
			'product_id' => $insert_id,
			'qty' => $stock,
			'pengirim' => $pengirim,
			'no_faktur' => $no_faktur,
			'date' => $date,
		);
		$this->InventoryModel->saveProcurement($save_data);
		
		redirect('admin/inventory/index', 'refresh');
	}

	public function sold() {
		$data['page'] = 'sold';
		$this->db->select('*');
		$this->db->from('order_transaction');
		$this->db->join('users', 'users.user_id = order_transaction.user_id');
		$this->db->join('products', 'products.product_id = order_transaction.product_id');
		$this->db->where('order_status','CONFIRMED');
		$query = $this->db->get();
		$data['inventory'] = $query;
		$content['body'] = $this->load->view('admin/inventory/sold', $data);

		$this->load->view('admin/layout/container', $content);
	}
	
	public function soldAdd($product_id) {
		$qty =  $_POST['qty'];
		$order_id =  $_POST['order_id'];
		$qty_ = $_POST['qty_'];

		// UPDATE TO PRODUCTS
		$save_data = array(
			'stock' => $qty_ - $qty,
		);
		$where = array('product_id' => $product_id);
		$this->InventoryModel->update($save_data, $where);
		
		// SAVE TO BARANG KELUAR
		$save_data = array(
			'product_id' => $product_id,
			'qty' => $qty,
			'date' => date('Y-m-d H:i:s')
		);
		$this->InventoryModel->saveSold($save_data);

		// INSERT TO SHIPPING
		$save_data = array(
			'order_id' => $order_id
		);
		$this->db->insert('shippings', $save_data);
		$insert_id = $this->db->insert_id();
		
		//update status table order transaction
		$this->db->set('order_status','TOSHIPPING');
		$this->db->set('shipping_id',$insert_id);
		$this->db->where('order_id', $order_id);
		$this->db->update('order_transaction');

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

	public function getProduk() {
		$data = $this->InventoryModel->getSelling();
		$api = [];
		foreach($data as $index => $d){
			array_push($api, array(
				'product_id' => $data[$index]->product_id,
				'code' => $data[$index]->code,
				'type' => $data[$index]->type,
				'name' => $data[$index]->name,
				'price' => $data[$index]->price,
				'date' => $data[$index]->date,
				'spesifikasi' => $data[$index]->spesifikasi,
				'pictures' => explode(',', $data[$index]->pictures),
				)
			);
		}
		echo json_encode($api, TRUE);
	}
	
	public function getDetailProduk($id) {
		$data = $this->InventoryModel->getById($id);
		$api = array(
			'product_id' => $data[0]->product_id,
			'code' => $data[0]->code,
			'type' => $data[0]->type,
			'name' => $data[0]->name,
			'price' => $data[0]->price,
			'date' => $data[0]->date,
			'spesifikasi' => $data[0]->spesifikasi,
			'pictures' => explode(',', $data[0]->pictures),
			);
		echo json_encode($api, TRUE);
	}

}