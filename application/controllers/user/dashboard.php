<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{

        $content['body'] = $this->load->view('user/dashboard', null, true);

		$this->load->view('user/dashboard', $content);
	}
}