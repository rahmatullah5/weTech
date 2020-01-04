<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Selling extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('OrderModel');
	}

	public function getAllOrder(){

	    $data['orders'] = $this->OrderModel->getAllOrder();		
        $content['body'] = $this->load->view('admin/selling/reporting', $data);

		$this->load->view('admin/layout/container', $content);

	}
}