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
		$stok = $this->input->post('stok');

		$data = array(

			'nama_golongan' => $gol_darah,
			'wb' => $wb,
			'prc' => $prc,
			'tc' => $tc,
			'belum_serologi' => $belum_serologi,
			'stok' => $stok

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
		$stok = $this->input->post('stok');

		$data = array(
			'nama_golongan' => $gol,
			'wb' => $wb,
			'prc' => $prc,
			'tc' => $tc,
			'belum_serologi' => $belum_serologi,
			'stok' => $stok
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

/* End of file Golongan_darah.php */
/* Location: ./application/controllers/Golongan_darah.php */