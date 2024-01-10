<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_password extends CI_Model {

	public function update($username, $data, $table) {
		$this->db->where('username', $username);
		$this->db->update($table, $data);
	}

	public function check_old_password($old_password_hash) {
		$this->db->where('password', $old_password_hash);
		$query = $this->db->get('users'); 
		return $query->num_rows() > 0;
	}

	public function update_password($new_password_hash) {
		$data = array('password' => $new_password_hash);
		$this->db->where('user_id', $this->session->userdata('user_id')); 
		$this->db->update('users', $data); 
		return $this->db->affected_rows() > 0;
	}

}

/* End of file M_password.php */
/* Location: ./application/models/M_password.php */