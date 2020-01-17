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
		#upload image
		$imageName = date("YmdHis").preg_replace('/\s/', '', $_FILES['image']['name']);
		$config['upload_path'] = './assets/uploads/voucher/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['maintain_ratio'] = TRUE;
		$config['file_name'] = $imageName;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('image');

		$data = [
			'name' => $this->input->post('name'),
			'code' => $this->input->post('code'),
			'description' => $this->input->post('description'),
			'discount' => $this->input->post('discount'),
			'image' => $imageName,
		];	

		$this->VoucherModel->insert($data);

		$this->session->set_flashdata('response', [
			'error' => false,
			'msg' => 'Data berhasil disimpan'
		]);
	
		redirect('/admin/voucher');
	}

	public function action_edit()
	{
		$imageName = '';
		if (file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
			#upload image
			$imageName = date("YmdHis").preg_replace('/\s/', '', $_FILES['image']['name']);
			$config['upload_path'] = './assets/uploads/voucher/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['maintain_ratio'] = TRUE;
			$config['file_name'] = $imageName;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('image');
		}

		$data = [
			'name' => $this->input->post('name'),
			'code' => $this->input->post('code'),
			'description' => $this->input->post('description'),
			'discount' => $this->input->post('discount'),
		];	

		if (!empty($imageName)) {
			$data['image'] = $imageName;
		}

		$this->VoucherModel->update($this->input->post('voucher_id'), $data);

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