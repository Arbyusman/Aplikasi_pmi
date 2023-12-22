<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan_darah extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_golongan');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
		
	}
	public function index()
	{

		$tampilData = $this->M_golongan->getDataGolongan();

		$data = array('tampilkan' => $tampilData);
		

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/form_golongan', $data);
	}

	public function aksiInsertDarah()
	{
		$gol_darah = $this->input->post('golongan_darah');
		$wb = $this->input->post('wb');
		$prc = $this->input->post('prc');
		$tc = $this->input->post('tc');
		$belum_serologi = $this->input->post('belum_serologi');

		$data = array(

			'nama_golongan' => $gol_darah,
			'wb' => $wb,
			'prc' => $prc,
			'tc' => $tc,
			'belum_serologi' => $belum_serologi

		);

		// simpan data
		$save = $this->M_golongan->inputGol($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('golongan_darah');

	}

}

/* End of file Golongan_darah.php */
/* Location: ./application/controllers/Golongan_darah.php */