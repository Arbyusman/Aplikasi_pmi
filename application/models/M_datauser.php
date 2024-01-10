<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datauser extends CI_Model {

	public function getDataUser() {
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getTampilUse($id) {
		$this->db->where('id_user', $id);
		$query = $this->db->get('user');
		return $query->row();
	}


}

/* End of file M_datauser.php */
/* Location: ./application/models/M_datauser.php */