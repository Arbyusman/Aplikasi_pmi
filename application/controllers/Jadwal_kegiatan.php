<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_kegiatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jadwal');
		$this->load->model('M_jumbotron');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['jadwal'] = $this->M_jadwal->getDataJadwal();


		$data['jumbotron'] = $this->db->query("SELECT * FROM `jumbotron`")->row_array();


		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/jadwal_kegiatan', $data);
		
	}

	public function Detailjadwal($id)
	{

		$editkets = $this->M_jadwal->getTampilkeg($id);

		$data = array('detail_ket' => $editkets);


		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/detail_jadwal_kegiatan', $data);
		
	}

}

/* End of file Jadwal_kegiatan.php */
/* Location: ./application/controllers/front/Jadwal_kegiatan.php */