<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model {


	public function getDataPesan() {
		$this->db->select('*');
		$this->db->from('pesan');
		$query = $this->db->get();
		return $query->result();
	}


	public function deletePes($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pesan');
	}

	

}

/* End of file M_pesan.php */
/* Location: ./application/models/M_pesan.php */