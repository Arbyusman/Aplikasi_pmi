<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jumlah_darah_jenis extends CI_Model
{

	public function getDataJumlahJenisDarah()
	{
		$this->db->select('*, jumlah_darah_jenis.id as jumlah_darah_jenis_id,jumlah_darah_jenis.total as jumlah_darah_jenis_total, darah.id as darah_id, darah.name as darah_name, jenis_darah.id as jenis_darah_id, jenis_darah.name as jenis_darah_name, stok_darah.id as stok_darah_id');
		$this->db->from('jumlah_darah_jenis');
		$this->db->join('darah', 'jumlah_darah_jenis.darah_id = darah.id');
		$this->db->join('jenis_darah', 'jumlah_darah_jenis.jenis_darah_id = jenis_darah.id');
		$this->db->join('jadwal_kegiatan', 'jumlah_darah_jenis.jadwal_id = jadwal_kegiatan.id');
		$this->db->join('stok_darah', 'jumlah_darah_jenis.stok_darah_id = stok_darah.id');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getJumlahJenisDarahByJadwal($id)
{
    $this->db->select('*');
    $this->db->from('jumlah_darah_jenis');
    $this->db->where('jadwal_id', $id);
    $query = $this->db->get();
    
    if ($query->num_rows() > 0) {
        return $query->result(); 
    } else {
        return array(); 
    }
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
