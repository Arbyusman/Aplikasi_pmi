<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_tentang');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
		
	}

	public function index()
	{
		$data['tampil'] = $this->M_tentang->Tampildataperid();

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/tentang', $data);
	}

	public function aksiInsertTentang()
	{
		$prof = $this->input->post('profil');
		$visi_misi = $this->input->post('visimisi');
		
		$now = date('Y-m-d H:i:s'); 
		$data = array(
			'profil' => $prof,
			'visimisi' => $visi_misi,
			'created_by' => $this->session->nama,
			'created_at' => $now,
		);

		// simpan data
		$save = $this->M_tentang->inputTentang($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('tentang_admin');

	}


	public function form_edit_tentang($id)
	{

		$editkets = $this->M_tentang->getTampilTentang($id);

		$data = array('keterangan' => $editkets);


		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/edit_ket_darah', $data);

	}


	public function aksiUpdateTentang()
	{
		$now = date('Y-m-d H:i:s'); 
		$id = $this->input->post('id');
		$prof = $this->input->post('profil');
		$vs = $this->input->post('visimisi');

		$data = array(
			'profil' => $prof,
			'visimisi' => $vs,
			'updated_by' => $this->session->nama,
			'updated_at' => $now,
		);	


		//print_r($data);
		$update = $this->M_tentang->updateTentang($data, $id);
		$this->session->set_flashdata('flash', 'Diupdate');
		redirect('tentang_admin');	
	}




}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */