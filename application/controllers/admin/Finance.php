<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends MY_Controller {
	public function index(){
        $content['body'] = $this->load->view('admin/finance/view_receipt', null, true);

        $this->load->view('admin/layout/container', $content);
    }
    
    public function form_receipt(){
        $content['body'] = $this->load->view('admin/finance/form_receipt', null, true);
        
        $this->load->view('admin/layout/container', $content);
    }
}