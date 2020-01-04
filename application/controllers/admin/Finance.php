<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends MY_Controller {
	public function index(){
        $this->template->load('admin/layout/container','admin/finance/view_receipt');
    }
    
    public function form_receipt(){
        $this->template->load('admin/layout/container','admin/finance/form_receipt');
    }

    public function view_account(){
        $this->template->load('admin/layout/container','admin/finance/view_account');
    }

    public function loadList(){
        $list = $this->M_finance->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            // $no++;
            // $data['no'] = $no;
            $data[]      = $field;
        }
        // echo "<pre>"; print_r($data); echo "</pre>";die();
        
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_finance->count_all(),
            "recordsFiltered" => $this->M_finance->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function saveaccount(){
        if ($_POST['id_account'] != NULL) {  $update     = true; }
        else {  $update     = false;  }
        
        $result = $this->M_finance->saveaccount($update);
        echo json_encode($result);
    }

}