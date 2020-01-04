<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shippings extends MY_Controller {
  public function __construct(){    parent::__construct();        $this->load->model('ShippingModel'); // Load SiswaModel ke controller ini  
	}

	public function index()
	{
	    $data['shippings'] = $this->ShippingModel->getAll();		
        $content['body'] = $this->load->view('admin/shippings/index', $data);

		$this->load->view('admin/layout/container', $content);
	}	

	public function show($id)
	{

	$data['shipping'] = $this->ShippingModel->getById($id);
	$data['order'] = $this->ShippingModel->getRelatedOrder($id);
        $content['body'] = $this->load->view('admin/shippings/show', $data);

		$this->load->view('admin/layout/container', $content);
	}

	public function update($id)
	{

		$data = [
			'status' => $this->input->post('status'),
			'code_resi' => $this->input->post('code_resi')
		];	
		$this->ShippingModel->update($data, $id);
		$this->session->set_flashdata('response', [
			'error' => false,
			'msg' => 'Data berhasil disimpan'
		]);
	
		redirect('/admin/shippings/show/'.$id);	
		// $data['shippings'] = $this->ShippingModel->update($id);
  //       $content['body'] = $this->load->view('admin/shippings/index', null, true);

		// $this->load->view('admin/layout/container', $content);
	}	


	public function destroy($id)
	{
		$data['shippings'] = $this->ShippingModel->delete($id);
        redirect('/admin/shippings/index');
	}
}