<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tentang extends CI_Model {


	public function getDataTentang() 
	{
		$this->db->select('*');
		$this->db->from('tentang');
		$query = $this->db->get();
		return $query->result();
	}


	public function inputTentang($data) 
	{

		return $this->db->insert('tentang', $data);
	}


	public function Tampildataperid()
	{
		$query = $this->db->get_where('tentang', array('id_tentang' => 1));
		$row = $query->result();
		return $row;
	}


	public function updateTentang($data, $id) 
	{

		$this->db->where('id_tentang', $id);
		$this->db->update('tentang', $data);

	}
	


}

/* End of file M_tentang.php */
/* Location: ./application/models/M_tentang.php */