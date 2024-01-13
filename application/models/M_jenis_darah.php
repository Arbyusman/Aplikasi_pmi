<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jenis_darah extends CI_Model
{

	public function getDataJenisDarah()
	{
		$this->db->select('*');
		$this->db->from('jenis_darah');
		$query = $this->db->get();
		return $query->result();
	}

	public function getJenisDarahId($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get();
		return $result;
	}
	public function createJenisDarah($data)
	{
		$result = $this->db->insert('jenis_darah', $data);
		return $result;
	}
	public function updateJenisDarah($data, $id)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('jenis_darah', $data);
		return $result;
	}

	public function deleteJenisDarah($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->delete('jenis_darah');
		return $result;
	}
}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */