<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_password_user extends CI_Model {

	public function update($user_id, $data, $table) {
		$this->db->where('id', $user_id);
		$this->db->update($table, $data);
	}

}

/* End of file M_password_user.php */
/* Location: ./application/models/M_password_user.php */