<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datapendonor extends CI_Model
{

	public function getDataDonor()
	{

		$this->db->select('*, darah.id as darah_id, form_pendonor.id as form_pendonor_id, 
                   admin_create.username as created_by_username,
                   admin_update.username as updated_by_username,
                   form_pendonor.email as form_pendonor_email',
				
				);
		$this->db->from('form_pendonor');
		$this->db->join('darah', 'form_pendonor.golongan_darah_id = darah.id');
		$this->db->join('admin as admin_create', 'form_pendonor.created_by = admin_create.id', 'right');
		$this->db->join('admin as admin_update', 'form_pendonor.updated_by = admin_update.id', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_pendonor($golongan_darah_id, $umur, $jenis_kelamin)
	{

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user.umur', $umur);
		$this->db->where('user.jenis_kelamin', $jenis_kelamin);
		$this->db->join('form_pendonor', 'form_pendonor.user_id = user.id');
		$this->db->where('form_pendonor.golongan_darah_id', $golongan_darah_id);
		$query = $this->db->get();

		return $query->result();
	}


	public function getTampilDon($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('form_pendonor');
		return $query->row();
	}


	public function updateDon($data, $id)
	{

		$this->db->where('id', $id);
		$this->db->update('form_pendonor', $data);
	}


	public function deleteDon($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->delete('form_pendonor');

		return $result;
	}
}

/* End of file M_datapendonor.php */
/* Location: ./application/models/front/M_datapendonor.php */