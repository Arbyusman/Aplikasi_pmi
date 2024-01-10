<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pendonor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/M_datapendonor');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['data_pendonor'] = $this->M_datapendonor->getDataDonor();

		
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/data_donor', $data);
	}


	public function aksi_pencarian() {
        // Ambil data pencarian dari form
		$golongan_darah = $this->input->post('golongan_darah');
		$umur = $this->input->post('umur');
		$jenis_kelamin = $this->input->post('jenis_kelamin');

        // Panggil model atau lakukan query sesuai dengan kriteria pencarian
		$data['data_pendonor'] = $this->M_datapendonor->cari_data_pendonor($golongan_darah, $umur, $jenis_kelamin);

		// Jika tidak ada hasil pencarian, muat semua data
		if (empty($data['data_pendonor'])) {
			$data['data_pendonor'] = $this->M_datapendonor->getDataDonor();
		}

		$this->load->view('frontend/data_donor', $data);
	}


	// public function Aksi_form_donor()
	// {

	// }

}

/* End of file Data_pendonor.php */
/* Location: ./application/controllers/front/Data_pendonor.php */