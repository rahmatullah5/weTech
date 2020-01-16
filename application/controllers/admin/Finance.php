<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends MY_Controller {
	public function index(){
        $this->db->where('order_status', 'SUBMITTED');
        $data['result'] = $this->db->get('order_transaction')->result_array();
        $this->template->load('admin/layout/container','admin/finance/index', $data);
    }

    public function view_account(){
        $data['result'] = $this->db->get('account')->result_array();
        $this->template->load('admin/layout/container','admin/finance/view_account', $data);
    }

    public function saveaccount(){
        if ($_POST['id_account'] != NULL) {  $update     = true; }
        else {  $update     = false;  }
        
        $result = $this->M_finance->saveaccount($update);
        echo json_encode($result);
    }

    public function upstatus(){
        //update status table order transaction
        $this->db->set('order_status','CONFIRMED');
        $this->db->where('order_id', $_POST['id']);
        $this->db->update('order_transaction');
        
        //insert jurnal
        $this->M_finance->insertjurnal($_POST['id'], 111, 'd', $_POST['nominal']);
        $this->M_finance->insertjurnal($_POST['id'], 411, 'c', $_POST['nominal']);
        
        $result = 0;
        echo json_encode($result);
    }

    public function countRevenue(){
        $result = $this->M_finance->countRevenue();
        $row   = array();
        foreach ($result as $data) {
            $row['total'] = $data;
        }

        echo json_encode($row);
    }

}