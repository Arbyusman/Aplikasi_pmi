<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datapendonor extends CI_Model {

	public function getDataDonor() {

		$this->db->select('*');
		$this->db->from('form_pendonor');
		$this->db->join('user', 'form_pendonor.user_id = user.id_user');
		$query = $this->db->get();
		return $query->result();

	}

	public function cari_data_pendonor($golongan_darah, $umur, $jenis_kelamin) {

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user.umur', $umur);
		$this->db->where('user.jenis_kelamin', $jenis_kelamin);
		$this->db->join('form_pendonor', 'form_pendonor.user_id = user.id_user');
		$this->db->where('form_pendonor.golongan_darah', $golongan_darah); 
		$query = $this->db->get();

		return $query->result();
	}


	public function getTampilDon($id) {
		$this->db->where('id_pendonor', $id);
		$query = $this->db->get('form_pendonor');
		return $query->row();
	}


	public function updateDon($data, $id) {

		$this->db->where('id_pendonor', $id);
		$this->db->update('form_pendonor', $data);

	}


	public function deleteDon($id)
	{
		$this->db->where('id_pendonor', $id);
		$this->db->delete('form_pendonor');
	}



}

/* End of file M_datapendonor.php */
/* Location: ./application/models/front/M_datapendonor.php */