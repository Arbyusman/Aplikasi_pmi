<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class golongan_darah extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_golongan');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('M_jadwal');
		$this->load->model('M_darah');
		$this->load->model('M_jenis_darah');
		$this->load->model('M_jumlah_darah_jenis');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
		
	}
	public function index()
	{

		$data['darah'] = $this->M_darah->getDataDarah();
		$data['jenis_darah'] = $this->M_jenis_darah->getDataJenisDarah();
		$data['data'] = $this->M_jumlah_darah_jenis->getJumlahJenisDarahByJenisCount();
		$data['stok'] = $this->M_jumlah_darah_jenis->getDataJumlahJenisDarahAll();

		// $data = array('tampilkan' => $tampilData);

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
		$stok_darah = $this->input->post('stok');

		$data = array(

			'nama_golongan' => $gol_darah,
			'wb' => $wb,
			'prc' => $prc,
			'tc' => $tc,
			'belum_serologi' => $belum_serologi,
			'stok' => $stok_darah

		);

		// simpan data
		$save = $this->M_golongan->inputGol($data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('golongan_darah');

	}

	public function form_edit($id)
	{

		$tampilData = $this->M_golongan->DataGolongan($id);

		$data = array('tampil' => $tampilData);

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/form_edit_golongan', $data);

	}


	public function aksiUpdateGolongan()
	{
		$id = $this->input->post('id');
		$gol = $this->input->post('gol_darah');
		$wb = $this->input->post('wb');
		$prc = $this->input->post('prc');
		$tc = $this->input->post('tc');
		$belum_serologi = $this->input->post('belum_serologi');
		$stok_darah = $this->input->post('stok_darah');

		$data = array(
			'nama_golongan' => $gol,
			'wb' => $wb,
			'prc' => $prc,
			'tc' => $tc,
			'belum_serologi' => $belum_serologi,
			'stok_darah' => $stok_darah
		);

		$update = $this->M_golongan->updateGol($data,$id);
		$this->session->set_flashdata('flash', 'Diupdate');
		redirect('golongan_darah');

	}

	public function aksiDeleteGol($id)
	{
		$this->M_golongan->deleteGol($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('golongan_darah');
	}

}

/* End of file golongan_darah.php */
/* Location: ./application/controllers/golongan_darah.php */