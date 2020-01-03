<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promo extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PromoModel');
	}

	public function index()
	{
		$promo = $this->PromoModel->getAll();
		$products = $this->PromoModel->getAllProduct();
		$data = [
			'promo' => $promo,
			'products' => $products
		];

        $content['body'] = $this->load->view('admin/advertising/promo/index.php', $data, true);

		$this->load->view('admin/layout/container', $content);
	}

	public function action_update()
	{
		$this->PromoModel->update($this->input->post('productId'), $this->input->post('discount'));

		$this->session->set_flashdata('response', [
			'error' => false,
			'msg' => 'Data berhasil disimpan'
		]);
	
		redirect('/admin/promo');
	}

	public function action_delete($id)
	{
		$this->PromoModel->update($id, 0);

		$this->session->set_flashdata('response', [
			'error' => false,
			'msg' => 'Data berhasil dihapus'
		]);
	
		redirect('/admin/promo');
	}
}