<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak extends CI_Model {


	public function getDataKontak() {
		$this->db->select('*');
		$this->db->from('kontak');
		$query = $this->db->get();
		return $query->result();
	}

	public function inputkontak($data) {

		return $this->db->insert('kontak', $data);
	}


	public function Tampildataperidkontak()
	{
		$query = $this->db->get_where('kontak', array('id' => 1));
		$row = $query->result();
		return $row;
	}


	public function updateDataKontak($data, $id) {

		$this->db->where('id', $id);
		$this->db->update('kontak', $data);

	}

}

/* End of file M_kontak.php */
/* Location: ./application/models/M_kontak.php */