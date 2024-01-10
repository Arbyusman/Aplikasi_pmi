<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pesan');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
		
	}

	public function index()
	{

		$tampilData = $this->M_pesan->getDataPesan();


		$data = array('tampil' => $tampilData);

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/pesan', $data);
	}


	public function aksiHapusPesan($id) {

		$this->M_pesan->deletePes($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('pesan');
	}

}

/* End of file Pesan.php */
/* Location: ./application/controllers/Pesan.php */