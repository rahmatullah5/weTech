<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shippings extends MY_Controller {
  public function __construct(){    parent::__construct();        $this->load->model('ShippingModel'); // Load SiswaModel ke controller ini  
	}

	public function index()
	{
		// dd
	    $data['shippings'] = $this->ShippingModel->getAll();		
        $content['body'] = $this->load->view('admin/shippings/index', $data);

		$this->load->view('admin/layout/container', $content);
	}	

	public function show()
	{
        $this->uri->segment(3);
        $content['body'] = $this->load->view('admin/shippings/show', null, true);

		$this->load->view('admin/layout/container', $content);
	}

	public function update($id)
	{
        $content['body'] = $this->load->view('admin/shippings/index', null, true);

		$this->load->view('admin/layout/container', $content);
	}	


	public function destroy($id)
	{
        $content['body'] = $this->load->view('admin/shippings/index', null, true);

		$this->load->view('admin/layout/container', $content);
	}
}