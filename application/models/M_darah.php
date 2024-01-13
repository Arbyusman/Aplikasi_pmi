<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_darah extends CI_Model
{

	public function getDataDarah()
	{
		$this->db->select('*');
		$this->db->from('darah');
		$query = $this->db->get();
		return $query->result();
	}

	public function getDarahId($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get();
		return $result;
	}
	public function createDarah($data)
	{
		$result = $this->db->insert('darah', $data);
		return $result;
	}
	public function updateDarah($data, $id)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('darah', $data);
		return $result;
	}

	public function deleteDarah($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->delete('darah');
		return $result;
	}
}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */