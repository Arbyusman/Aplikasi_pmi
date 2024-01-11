<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jumbotron extends CI_Model {

	public function inputJumbo($data) {

		return $this->db->insert('jumbotron', $data);
	}

	public function getDataJumbo() {
		$this->db->select('*');
		$this->db->from('jumbotron');
		$query = $this->db->get();
		return $query->result();
	}

	public function getDataJumboId() {
		$this->db->select('*');
		$this->db->from('jumbotron');
		$this->db->where('id', 1);
		$query = $this->db->get();
		return $query->result();

	}

	public function Tampildataperid()
	{
		$query = $this->db->get_where('jumbotron', array('id' => 1));
		$row = $query->result();
		return $row;
	}

	public function updateIsiJumbo($data, $id) {

		$this->db->where('id', $id);
		$this->db->update('jumbotron', $data);

	}
	

}

/* End of file M_jumbotron.php */
/* Location: ./application/models/M_jumbotron.php */