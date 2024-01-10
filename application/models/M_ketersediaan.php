<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ketersediaan extends CI_Model {
	
	public function getDataKetersediaan() {
		// $this->db->select('*');
		// $this->db->from('ketersediaan_darah');
		// $this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		// $this->db->join('jadwal_kegiatan', 'ketersediaan_darah.jadwal_kegiatan = jadwal_kegiatan.id_keg');
		// $query = $this->db->get();
		// return $query->result();


		// $this->db->select('ketersediaan_darah.*, gol_darah.nama_golongan, gol_darah.wb, gol_darah.tc, gol_darah.prc, jadwal_kegiatan.instansi, GROUP_CONCAT(gol_darah.nama_golongan) as golongan_concat');
		// $this->db->from('ketersediaan_darah');
		// $this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		// $this->db->join('jadwal_kegiatan', 'ketersediaan_darah.jadwal_kegiatan = jadwal_kegiatan.id_keg');
		// $this->db->group_by('jadwal_kegiatan.id_keg');
		$this->db->select('*');
		$this->db->from('ketersediaan_darah');
		$this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		$this->db->join('jadwal_kegiatan', 'ketersediaan_darah.jadwal_kegiatan = jadwal_kegiatan.id_keg');
		$this->db->group_by('jadwal_kegiatan.id_keg');
		$query = $this->db->get();
		return $query->result();

		// $this->db->select('ketersediaan_darah.*, gol_darah.nama_golongan, SUM(ketersediaan_darah.stok_darah) as total_stok');
		// $this->db->from('ketersediaan_darah');
		// $this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		// $this->db->group_by('ketersediaan_darah.golongan_darah');
		// $query = $this->db->get();
		// return $query->result();

	}

	public function getDataKetersediaanDarah($id) {

		// $this->db->join('jadwal_kegiatan', 'ketersediaan_darah.jadwal_kegiatan = jadwal_kegiatan.id_keg');

		$this->db->select('*');
		$this->db->from('ketersediaan_darah');
		$this->db->where('jadwal_kegiatan', $id);
		$this->db->join('gol_darah', 'gol_darah.id_gol = ketersediaan_darah.golongan_darah');
		$query = $this->db->get();
		return $query->result();
	}



	public function Jadwal_kegitan_model()
	{
		$this->db->select('*');
		$this->db->from('jadwal_kegiatan');
		$this->db->join('ketersediaan_darah', 'jadwal_kegiatan.id_keg = ketersediaan_darah.jadwal_kegiatan');
		$query = $this->db->get();	
		return $query->result();
	}

	public function get_dataketersediaan()
	{
		$this->db->select('ketersediaan_darah.*, jadwal_kegiatan.*, gol_darah.*');
		$this->db->from('ketersediaan_darah');
		$this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		$this->db->join('jadwal_kegiatan', 'ketersediaan_darah.jadwal_kegiatan = jadwal_kegiatan.id_keg');
		$query = $this->db->get();
		return $query->result();

	}



	public function tampil_berapa($gol)
	{
		$this->db->select('jadwal_kegiatan.instansi, gol_darah.nama_golongan, gol_darah.wb, gol_darah.prc, gol_darah.tc, ketersediaan_darah.stok_darah');
		$this->db->from('ketersediaan_darah');
		$this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		$this->db->join('jadwal_kegiatan', 'ketersediaan_darah.jadwal_kegiatan = jadwal_kegiatan.id_keg');
		$this->db->where('jadwal_kegiatan.instansi', $gol); 
		$this->db->group_by('jadwal_kegiatan.instansi');
		$query = $this->db->get();
		return $query->result();


	}

	public function inputKet($data) {

		return $this->db->insert('ketersediaan_darah', $data);

	}

	public function inputFormDonadm($data) {

		return $this->db->insert('form_pendonor', $data);

	}

	public function getTampilket($id) {

		$this->db->select('*');
		$this->db->from('ketersediaan_darah');
		$this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		$this->db->join('jadwal_kegiatan', 'ketersediaan_darah.jadwal_kegiatan = jadwal_kegiatan.id_keg');
		$this->db->where('ketersediaan_darah.id_ket', $id);
		$query = $this->db->get();
		return $query->row();

	}

	public function getTampiDet($id) {


		// $this->db->select('*','SUM(ketersediaan_darah.stok_darah) as total_stok_darah');
		// $this->db->from('ketersediaan_darah');
		// $this->db->join('jadwal_kegiatan', 'ketersediaan_darah.jadwal_kegiatan = jadwal_kegiatan.id_keg');
		// $this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		// $this->db->where('jadwal_kegiatan.id_keg', $id);
		// $query = $this->db->get();
		// return $query->row();


		$this->db->select('ketersediaan_darah.update_time, jadwal_kegiatan.instansi, jadwal_kegiatan.tempat_kegiatan, gol_darah.nama_golongan, SUM(ketersediaan_darah.stok_darah) as total_stok_darah');
		$this->db->from('ketersediaan_darah');
		$this->db->join('jadwal_kegiatan', 'ketersediaan_darah.jadwal_kegiatan = jadwal_kegiatan.id_keg');
		$this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		$this->db->where('jadwal_kegiatan.id_keg', $id);
		$this->db->group_by('gol_darah.nama_golongan');
		$query = $this->db->get();
		return $query->result();

	}


	public function updateKeter($data, $id) {

		$this->db->where('id_ket', $id);
		$this->db->update('ketersediaan_darah', $data);

	}

	public function deleteKet($id)
	{
		$this->db->where('id_ket', $id);
		$this->db->delete('ketersediaan_darah');
	}

	public function getGroupData()
	{

// $this->db->select('golongan_darah, SUM(stok_darah) as stok_darah', FALSE);
// $this->db->from('ketersediaan_darah');
// $this->db->group_by('golongan_darah');
// 		$this->db->order_by('id_ket', 'ASC'); // Menambahkan pengurutan berdasarkan abjad (ascending)
// 		return $result = $this->db->get()->result();


		// $this->db->select('gol_darah.nama_golongan, gol_darah.wb, gol_darah.prc, gol_darah.tc, gol_darah.belum_serologi, SUM(ketersediaan_darah.stok_darah) as stok_darah', FALSE);
		// $this->db->from('ketersediaan_darah');
		// $this->db->join('gol_darah', 'ketersediaan_darah.golongan_darah = gol_darah.id_gol');
		// $this->db->group_by('gol_darah.id_gol');
		// $this->db->order_by('gol_darah.id_gol', 'ASC'); // Assuming id_gol is the primary key in gol_darah
		// $result = $this->db->get()->result();
		// return $result;


		$this->db->select('gol_darah.nama_golongan, gol_darah.wb, gol_darah.prc, gol_darah.tc, gol_darah.belum_serologi, gol_darah.stok');
		$this->db->from('gol_darah');
		$this->db->group_by('id_gol');
		$this->db->order_by('id_gol', 'ASC'); 
		$result = $this->db->get()->result();
		return $result;

	}


	public function get_user()
	{
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_email_data($term) {
		$this->db->like('email', $term, 'both');
		$query = $this->db->get('user');
		return $query->result();
	}


	public function getDataByUserEmail($email) {
		$this->db->select('nama_lengkap, no_hp');
		$this->db->from('user'); 
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->row();
	}


	public function user_data($user_id) {

		$query = $this->db->get_where('user', array('id_user' => $user_id));
		return $query->row();
	}


	public function get_autocomplete_data($search_term) {
        // Sesuaikan dengan logika Anda untuk mengambil data dari database
		$this->db->like('email', $search_term);
			$query = $this->db->get('user'); // Gantilah 'your_table' dengan nama tabel Anda

			return $query->result_array();
		}


		public function get_StokDarah($id_gol) {

			$query = $this->db->get_where('gol_darah', array('id_gol' => $id_gol));

			return $query->row_array();
		}

	}

	/* End of file M_ketersediaan.php */
	/* Location: ./application/models/M_ketersediaan.php */