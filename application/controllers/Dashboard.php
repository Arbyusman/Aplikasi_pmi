<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('M_ketersediaan');
		$this->load->model('M_darah');
		$this->load->model('M_jenis_darah');
		$this->load->model('M_jumlah_darah_jenis');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
	}

	public function index()
	{
		// $tampilData = $this->M_ketersediaan->getDataKetersediaan();

		// $data = array('tampil' => $tampilData);

		// $data['darah1'] = $this->db->query("SELECT SUM(IF(golongan_darah_id LIKE 'A', stok_darah, 0)) AS stok_darahs FROM `ketersediaan_darah`")->row_array();
		// $data['darah2'] = $this->db->query("SELECT SUM(IF(golongan_darah_id LIKE 'B', stok_darah, 0)) AS stok_darahs FROM `ketersediaan_darah`")->row_array();
		// $data['darah3'] = $this->db->query("SELECT SUM(IF(golongan_darah_id LIKE 'AB', stok_darah, 0)) AS stok_darahs FROM `ketersediaan_darah`")->row_array();
		// $data['darah4'] = $this->db->query("SELECT SUM(IF(golongan_darah_id LIKE 'O', stok_darah, 0)) AS stok_darahs FROM `ketersediaan_darah`")->row_array();


	
		$data['darah'] = $this->M_darah->getDataDarah();
		$data['jenis_darah'] = $this->M_jenis_darah->getDataJenisDarah();
		$data['data'] = $this->M_jumlah_darah_jenis->getJumlahJenisDarahByJenisCount();
		$data['stok'] = $this->M_jumlah_darah_jenis->getDataJumlahJenisDarahAll();

		$data['tampil'] = $this->M_ketersediaan->getGroupData();

		
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/dashboards', $data);

	}



}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */