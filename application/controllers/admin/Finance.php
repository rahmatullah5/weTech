<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends MY_Controller {
	public function index(){
        $data['result'] = $this->db->get('receipt')->result_array();
        $this->template->load('admin/layout/container','admin/finance/view_receipt', $data);
    }
    
    public function form_receipt(){
        $this->template->load('admin/layout/container','admin/finance/form_receipt');
    }

    public function view_account(){
        $data['result'] = $this->db->get('account')->result_array();
        $this->template->load('admin/layout/container','admin/finance/view_account', $data);
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

    public function savereceipt(){
        $_POST['created_by'] = $this->session->userdata('username');
        $_POST['amount']     = str_replace('.','', $_POST['amount']);
        $result = $this->db->insert('receipt', $_POST);
        echo json_encode($result);
    }

}