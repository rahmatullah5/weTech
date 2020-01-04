<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_finance extends CI_Model {
	var $table = 'account'; 
    var $column_order = array(null,'name','parent_account','account_code'); //field yang ada di table user
    var $column_search = array('name','parent_account','account_code'); //field yang diizin untuk pencarian 
	var $order = array('id_account' => 'asc'); // default order 

	private function _get_datatables_query(){
        $this->db->select('*');
        $this->db->from($this->table);

        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables(){
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered(){
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all(){
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function saveaccount($update){
		if ($update) {
			//update tb daftar kelompok
			$udaftar	= array(
				'id_account'			=> $_POST['id_account'],
				'account_code'          => $_POST['account_code'],
				'parent_account'        => $_POST['parent_account'],
				'nama'                  => $_POST['account_name'],
			);
			$this->db->where('id_account', $_POST['id_account']);
			$this->db->update('account', $udaftar);
		}else{
			$dklmpok	= array(
				'account_code'          => $_POST['account_code'],
				'parent_account'        => $_POST['parent_account'],
				'nama'                  => $_POST['account_name'],
				'created_by'			=> $this->session->userdata('username'),
				'created_date'			=> date('Y-m-d H:i:s')
			);
			$this->db->insert('account', $dklmpok);
		}
	}
    
}

?>