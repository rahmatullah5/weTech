<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{

        $content['body'] = $this->load->view('admin/dashboard', null, true);

		$this->load->view('admin/layout/container', $content);
	}
}