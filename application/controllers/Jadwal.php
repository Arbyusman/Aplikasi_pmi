<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jadwal');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
		
	}

	public function index()
	{

		$tampilData = $this->M_jadwal->getDataJadwal();


		$data = array('tampil' => $tampilData);


		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/jadwal_kegiatan', $data);
		
	}


	public function aksiInsertJad()
	{
		$wkt = $this->input->post('waktu');
		$ins = $this->input->post('instansi');
		$tempat = $this->input->post('tempat_kegiatan');
		$ktg = $this->input->post('ket');


		$now = date('Y-m-d H:i:s'); 
		$data = array(
			'waktu' => $wkt,
			'instansi' => $ins,
			'tempat_kegiatan' => $tempat,
			'ket' => $ktg,
			'created_by' => $this->session->nama,
			'created_at' => $now,
		);


		// simpan data
		$save = $this->M_jadwal->inputJad($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('jadwal');
	}


	public function getAllJAdwal()
	{
		
		$data = $this->M_jadwal->getDataJadwalByTime();
		$this->output->set_content_type('application/json')->set_output(json_encode($data));

	}


	public function form_edit_jad($id)
	{
		$editkets = $this->M_jadwal->getTampilkeg($id);

		$data = array('jadwal' => $editkets);


		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/edit_kegiatan', $data);

	}


	public function aksiUpdateKeg()
	{

		$id = $this->input->post('id');
		$wkt = $this->input->post('waktu');
		$ins = $this->input->post('instansi');
		$tempat = $this->input->post('tempat_kegiatan');
		$ktg = $this->input->post('ket');
		$update_by = $this->input->post('update_by');
		$update_at = $this->input->post('update_at');

		$now = date('Y-m-d H:i:s'); 

		$data = array(
			'waktu' => $wkt,
			'instansi' => $ins,
			'tempat_kegiatan' => $tempat,
			'ket' => $ktg,
			'updated_by' => $this->session->nama,
			'updated_at' => $now,
		);	
		

		//print_r($data);
		$update = $this->M_jadwal->updateJadwal($data, $id);
		$this->session->set_flashdata('flash', 'Diupdate');
		redirect('jadwal');

	}

	
	public function aksiHapusKeg($id) {

		$this->M_jadwal->deleteKeg($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('jadwal');
	}

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/Jadwal.php */