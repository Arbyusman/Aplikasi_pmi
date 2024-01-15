<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_golongan extends CI_Model
{


	public function getDataGolonganById($jadwal_id, $darah_id)
	{
		$this->db->where('jadwal_id', $jadwal_id);
		$this->db->where('darah_id', $darah_id);
		$this->db->select('*, gol_darah.id as gol_darah_id, jadwal_kegiatan.id as jadwal_kegiatan_id');
		$this->db->from('gol_darah');
		$this->db->join('jadwal_kegiatan', 'gol_darah.jadwal_id = jadwal_kegiatan.id');
		$query = $this->db->get();

		return $query->row();
	}
	public function getDataGolongan()
	{
		$this->db->select('*, gol_darah.id as gol_darah_id, jadwal_kegiatan.id as jadwal_kegiatan_id');
		$this->db->from('gol_darah');
		$this->db->join('jadwal_kegiatan', 'gol_darah.jadwal_id = jadwal_kegiatan.id');
		$query = $this->db->get();
		return $query->result();
	}

	public function getDataInput($jadwal_id, $darah_id)
	{
		$this->db->where('darah_id', $darah_id);
		$this->db->where('jadwal_id', $jadwal_id);
		$this->db->from('gol_darah');
		$query = $this->db->get();
		return $query->result();
	}


	public function inputGol($data)
	{

		$result = $this->db->insert('gol_darah', $data);
		return $result;
	}


	public function DataGolongan($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('gol_darah');
		return $query->row();
	}


	public function updateGol($dataInput, $jadwal_id)
	{
		$this->db->where('jadwal_id', $jadwal_id);
		return $this->db->update('gol_darah', $dataInput);
	}

	public function deleteGol($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('gol_darah');
	}
}

/* End of file M_golongan.php */
/* Location: ./application/models/M_golongan.php */