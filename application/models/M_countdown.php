<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_countdown extends CI_Model {


	public function getTargetDateTime()
	{
		$this->db->select('waktu');
		$this->db->from('jadwal_kegiatan');
		$query = $this->db->get();
		return $query->row('waktu');
	}

	public function getTargetDatetimeCoutdown() {

		$this->db->select('waktu,instansi,ket,tempat_kegiatan,ket');
		$this->db->from('jadwal_kegiatan');
		$query = $this->db->get();
		return $query->row();

	}
	

}

/* End of file M_countdown.php */
/* Location: ./application/models/M_countdown.php */