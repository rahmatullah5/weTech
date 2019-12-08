<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends MY_Controller {
	public function index()
	{
		$content['body'] = $this->load->view('admin/inventory/indsex', null, true);

		$this->load->view('admin/layout/container', $content);
	}

}