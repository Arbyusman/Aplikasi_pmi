<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jumlah_darah_jenis extends CI_Model
{

	public function getDataJumlahJenisDarah()
	{
		$this->db->select('*');
		$this->db->from('jumlah_darah_jenis');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getJumlahJenisDarahByJadwal($id)
	{
		$this->db->select('*');
		$this->db->from('jumlah_darah_jenis');
		$this->db->where('jadwal_id', $id);
		$result = $this->db->get();
		return $result;
	}
	public function getJumlahJenisDarahId($id)
	{
		$this->db->select('*');
		$this->db->from('jumlah_darah_jenis');
		$this->db->where('id', $id);
		$result = $this->db->get();
		return $result;
	}
	public function createJumlahJenisDarah($data)
	{
		$result = $this->db->insert('jumlah_darah_jenis', $data);
		return $result;
	}
	public function updateJumlahJenisDarah($data, $id)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('jumlah_darah_jenis', $data);
		return $result;
	}

	public function deleteJumlahJenisDarah($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->delete('jumlah_darah_jenis');
		return $result;
	}
}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */
