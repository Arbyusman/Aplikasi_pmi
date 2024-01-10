<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/daftar', $data);
	}

	public function AksiInsertuser()
	{
		$emails = $this->input->post('email');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'email' => $emails,
			'password' => md5($password),
			'nama_lengkap' => $nama_lengkap,
			'no_hp' => $no_hp,
		);

		$this->db->insert('user',$data);
	}


	public function MockupRegisterNew()
	{
		$this->load->view('frontend/mock');
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/front/Register.php */