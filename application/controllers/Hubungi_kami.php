<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi_kami extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kontak');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$tampilData = $this->M_kontak->getDataKontak();

		$data = array('tampil' => $tampilData);

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/hubungi', $data);
		
	}

	public function AksiInserHubungi()
	{

		$nama_pengirim = $this->input->post('nama_pengirim');
		$telepon_pengirim = $this->input->post('telepon_pengirim');
		$email_pengirim = $this->input->post('email_pengirim');
		$pesan_pengirim = $this->input->post('pesan_pengirim');


		$data = array(
			'nama_pengirim' => $nama_pengirim,
			'telepon_pengirim' => $telepon_pengirim,
			'email_pengirim' => $email_pengirim,
			'pesan_pengirim' => $pesan_pengirim
		);
		$this->db->insert('pesan',$data);
	}




}

/* End of file Hubungi_kami.php */
/* Location: ./application/controllers/front/Hubungi_kami.php */