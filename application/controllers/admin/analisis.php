<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Analisis extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AnalisisModel');
	}

	public function index()
	{
		$laris = $this->AnalisisModel->getLarisProduct();
		$tidakLaris = $this->AnalisisModel->getTidakLarisProduct();
		$data = [
			'laris' => $laris,
			'tidakLaris' => $tidakLaris
		];

        $content['body'] = $this->load->view('admin/advertising/analisis/index.php', $data, true);

		$this->load->view('admin/layout/container', $content);
	}
}