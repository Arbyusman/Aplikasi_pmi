<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('M_ketersediaan');

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


		$data['tampil'] = $this->M_ketersediaan->getGroupData();

		
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/dashboards', $data);

	}



}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */