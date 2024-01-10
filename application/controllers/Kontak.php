<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kontak');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}

	}


	public function index()
	{
		$data['tampil'] = $this->M_kontak->Tampildataperidkontak();

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/contact', $data);
	}

	public function aksiUpdateContact()
	{
		$id = $this->input->post('id');
		$alamats = $this->input->post('alamat');
		$telp = $this->input->post('telepone');
		$email = $this->input->post('email');
		

		$data = array(
			'alamat' => $alamats,
			'telepon' => $telp,
			'email' => $email
		);


		// simpan data
		$update = $this->M_kontak->updateDataKontak($data, $id);
		$this->session->set_flashdata('flash', 'Diupdate');
		redirect('kontak');	

	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */