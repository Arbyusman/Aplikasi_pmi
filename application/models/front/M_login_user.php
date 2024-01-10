<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login_user extends CI_Model {

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

}

/* End of file M_login.php */
/* Location: ./application/models/front/M_login.php */