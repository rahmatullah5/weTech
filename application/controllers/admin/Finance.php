<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends MY_Controller {
	public function index(){
        $this->template->load('admin/layout/container','admin/finance/view_receipt');
    }
    
    public function form_receipt(){
        $content['body'] = $this->load->view('admin/finance/form_receipt', null, true);
        
        $this->template->load('admin/layout/container','admin/finance/form_receipt');
    }
}