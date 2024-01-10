<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {

	public function getDataJadwal() {
		$this->db->select('*');
		$this->db->from('jadwal_kegiatan');
		$query = $this->db->get();
		return $query->result();
	}


	public function getDataJadwal3()
	{
		$this->db->select('*');
		$this->db->from('jadwal_kegiatan');
		$this->db->order_by('id_keg', 'ASC'); 
		$this->db->limit(3); 
		$query = $this->db->get();
		return $query->result();
	}



	public function getDataJadwal1()
	{
		$this->db->select('*');
		$this->db->from('jadwal_kegiatan');
		$this->db->order_by('id_keg', 'ASC'); 
		$query = $this->db->get();
		return $query->row();
	}



	public function getDataJadwalFront($datetime) {


		 // Konversi input datetime-local ke format datetime MySQL
		$datetimelocal = date('Y-m-d H:i:s', strtotime($datetime));

		$this->db->where('waktu', $datetimelocal);
		$query = $this->db->get('jadwal_kegiatan');

		return $query->result();

	}

	public function inputJad($data) {

		return $this->db->insert('jadwal_kegiatan', $data);

	}

	public function getTampilkeg($id) {
		$this->db->where('id_keg', $id);
		$query = $this->db->get('jadwal_kegiatan');
		return $query->row();
	}

	public function updateJadwal($data, $id) {

		$this->db->where('id_keg', $id);
		$this->db->update('jadwal_kegiatan', $data);

	}

	public function deleteKeg($id)
	{
		$this->db->where('id_keg', $id);
		$this->db->delete('jadwal_kegiatan');
	}

}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */