<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_golongan extends CI_Model {


	public function getDataGolongan() {
		$this->db->select('*');
		$this->db->from('gol_darah');
		$query = $this->db->get();
		return $query->result();
	}

	
	public function inputGol($data) {

		return $this->db->insert('gol_darah', $data);

	}


	public function DataGolongan($id)
	{
		$this->db->where('id_gol', $id);
		$query = $this->db->get('gol_darah');
		return $query->row();
	}


	public function updateGol($data, $id)
	{
		$this->db->where('id_gol', $id);
		$this->db->update('gol_darah', $data);
	}

	public function deleteGol($id)
	{
		$this->db->where('id_gol', $id);
		$this->db->delete('gol_darah');
	}



}

/* End of file M_golongan.php */
/* Location: ./application/models/M_golongan.php */