<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donor_darah extends CI_Model {

	public function get_autocomplete($title)
	{
		$this->db->like('no_ktp', $title, 'BOTH');
		$this->db->order_by('id', 'asc');
		$this->db->limit(10);
		return $this->db->get('user')->result();
	}

	public function get_ketersediaanD()
	{

		$this->db->select('t2.no_telepon,t1.no_telepon_kantor,k.golongan_darah_id, SUM(k.stok_darah) as stok_darah', FALSE);
		$this->db->from('ketersediaan_darah k');
		$this->db->join('form_pendonor t1', 't1.golongan_darah_id = k.golongan_darah_id', 'LEFT'); 
		$this->db->join('user t2', 't2.username = t1.user_id', 'LEFT'); 
		$this->db->group_by('k.golongan_darah_id');
		return $result = $this->db->get()->result();

	}


	public function get_user($id)
	{
		$this->db->select('id,email,nama_lengkap,no_hp');
		$this->db->from('user');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}



}

/* End of file M_donor_darah.php */
/* Location: ./application/models/front/M_donor_darah.php */