<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_stok extends CI_Model
{

	public function getDataStok()
	{
		// , jumlah_darah_jenis.id as jumlah_darah_jenis_id, jumlah_darah_jenis.total as jumlah_darah_jenis_total
		$this->db->select('*,stok_darah.id as stok_darah_id, jadwal_kegiatan.id as jadwal_kegiatan_id');
		$this->db->from('stok_darah');
		$this->db->join('jadwal_kegiatan', 'stok_darah.jadwal_id = jadwal_kegiatan.id');
		$query = $this->db->get();

		return $query->result();
	}
	public function getDataStokByDetailValue()
	{
		// , jumlah_darah_jenis.id as jumlah_darah_jenis_id, jumlah_darah_jenis.total as jumlah_darah_jenis_total
		$this->db->select('*, jumlah_darah_jenis.id as jumlah_darah_jenis_id, darah.id as darah_id, darah.name as darah_name, jenis_darah.id as jenis_darah_id, jenis_darah.name as jenis_darah_name, stok_darah.id as stok_darah_id');
		$this->db->from('jumlah_darah_jenis');
		$this->db->join('darah', 'jumlah_darah_jenis.darah_id = darah.id');
		$this->db->join('jenis_darah', 'jumlah_darah_jenis.jenis_darah_id = jenis_darah.id');
		$this->db->join('jadwal_kegiatan', 'jumlah_darah_jenis.jadwal_id = jadwal_kegiatan.id');
		$this->db->join('stok_darah', 'jumlah_darah_jenis.stok_darah_id = stok_darah.id');
		$query = $this->db->get();

		return $query->result();
	}


	public function getStokId($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('stok_darah');

		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}
	public function createStok($data)
	{
		$result = $this->db->insert('stok_darah', $data);

		if ($result) {
			$insertedId = $this->db->insert_id();

			$insertedData = $this->getStokId(intval($insertedId));

			return $insertedData;
		} else {
			return false;
		}
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