<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shippings extends MY_Controller {
	public function index()
	{
        $content['body'] = $this->load->view('admin/shippings/index', null, true);

		$this->load->view('admin/layout/container', $content);
	}
}