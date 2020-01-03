<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voucher extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('VoucherModel');
	}

	public function index()
	{
		$voucher = $this->VoucherModel->getAll();
		$data = [
			'voucher' => $voucher
		];

        $content['body'] = $this->load->view('admin/advertising/voucher/index.php', $data, true);

		$this->load->view('admin/layout/container', $content);
	}

	public function action_insert()
	{
		$data = [
			'name' => $this->input->post('name'),
			'code' => $this->input->post('code'),
			'description' => $this->input->post('description'),
			'discount' => $this->input->post('discount'),
		];	

		$this->VoucherModel->insert($data);

		$this->session->set_flashdata('response', [
			'error' => false,
			'msg' => 'Data berhasil disimpan'
		]);
	
		redirect('/admin/voucher');
	}

	public function action_delete($id)
	{
		$this->VoucherModel->delete($id);

		$this->session->set_flashdata('response', [
			'error' => false,
			'msg' => 'Data berhasil dihapus'
		]);
	
		redirect('/admin/voucher');
	}
}