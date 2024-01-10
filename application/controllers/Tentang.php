<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_tentang');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$tampilData = $this->M_tentang->getDataTentang();

		$data = array('tampil' => $tampilData);

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/tentang', $data);	
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/front/Tentang.php */