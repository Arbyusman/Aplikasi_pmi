<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jumbotron extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jumbotron');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
		
	}

	public function index()
	{

		$data['tampil'] = $this->M_jumbotron->Tampildataperid();

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/jumbo', $data);
	}

	public function aksiInsertJumbo()
	{
		$isian1 = $this->input->post('isian_1');
		$isian2 = $this->input->post('isian_2');


		$data = array(
			'isian_1' => $isian1,
			'isian_2' => $isian2
		);


		// simpan data
		$save = $this->M_jumbotron->inputJumbo($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('jumbotron');
	}


	public function aksiUpdateJumbo()
	{
		$id = $this->input->post('id');
		$isian1 = $this->input->post('isian_1');
		$isian2 = $this->input->post('isian_2');



		$data = array(
			'isian_1' => $isian1,
			'isian_2' => $isian2
		);	


		$update = $this->M_jumbotron->updateIsiJumbo($data, $id);
		$this->session->set_flashdata('flash', 'Diupdate');
		redirect('jumbotron');	
	}

}

/* End of file Jumbotron.php */
/* Location: ./application/controllers/Jumbotron.php */