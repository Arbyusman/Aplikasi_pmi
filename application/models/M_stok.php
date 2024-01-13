<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_stok extends CI_Model
{

	public function getDataStok()
	{
		// , jumlah_darah_jenis.id as jumlah_darah_jenis_id, jumlah_darah_jenis.total as jumlah_darah_jenis_total
		$this->db->select('*, stok_darah.id as stok_darah_id, darah.id as darah_id, darah.name as darah_name, jenis_darah.id as jenis_darah_id, jenis_darah.name as jenis_darah_name');
		$this->db->from('stok_darah');
		$this->db->join('darah', 'stok_darah.darah_id = darah.id');
		$this->db->join('jenis_darah', 'stok_darah.jenis_darah_id = jenis_darah.id');
		$this->db->join('jadwal_kegiatan', 'stok_darah.jadwal_id = jadwal_kegiatan.id');
		// $this->db->join('jumlah_darah_jenis', 'stok_darah.jumlah_darah_jenis_id = jumlah_darah_jenis.id');
		$query = $this->db->get();
		return $query->result();
	}


	public function getStokId($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get();
		return $result;
	}
	public function createStok($data)
	{
		$result = $this->db->insert('stok_darah', $data);
		return $result;
	}
	public function updateStok($data, $id)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('stok_darah', $data);
		return $result;
	}

	public function deleteStok($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->delete('stok_darah');
		return $result;
	}
}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */