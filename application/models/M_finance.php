<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_finance extends CI_Model {
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
    
    public function insertjurnal($id, $no, $posisi, $nominal){
        $data = array(
            'order_id'      => $id,
            'account_code'  => $no,
            'tgl'           => date('Y-m-d H:i:s'),
            'posisi'        => $posisi,
            'nominal'       => $nominal
        );
        $this->db->insert('jurnal', $data);
    }

    public function countRevenue(){
        $date	=	$_POST['tahun'];
		$sql 	= $this->db->query(
			"
			SELECT
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=1 AND YEAR(tgl)=$date),0) AS `January`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=2 AND YEAR(tgl)=$date),0) AS `February`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=3 AND YEAR(tgl)=$date),0) AS `Marc`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=4 AND YEAR(tgl)=$date),0) AS `April`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=5 AND YEAR(tgl)=$date),0) AS `May`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=6 AND YEAR(tgl)=$date),0) AS `Juny`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=7 AND YEAR(tgl)=$date),0) AS `July`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=8 AND YEAR(tgl)=$date),0) AS `August`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=9 AND YEAR(tgl)=$date),0) AS `September`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=10 AND YEAR(tgl)=$date),0) AS `October`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=11 AND YEAR(tgl)=$date),0) AS `November`,
			IFNULL((SELECT SUM(nominal) FROM jurnal WHERE account_code = 411 AND MONTH(tgl)=12 AND YEAR(tgl)=$date),0) AS `December`
			FROM jurnal AS a GROUP BY YEAR(tgl)
        ")->result_array();
        return $sql;
    }
    
}

?>