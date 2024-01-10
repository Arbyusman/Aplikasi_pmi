<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');


class Beranda extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ketersediaan');
		$this->load->model('M_jadwal');
		$this->load->model('M_jumbotron');
		$this->load->model('M_countdown');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		
		// batas
		$data['jadwal'] = $this->M_jadwal->getDataJadwal3();

		$isiket = $this->M_jadwal->getDataJadwal1();

		$data['tampil'] = $this->M_ketersediaan->getGroupData();
		
		$data['jumbotron'] = $this->M_jumbotron->getDataJumboId();


		// script coutdown
		$Datetime = $this->M_countdown->getTargetDatetimeCoutdown();

		$targetDatetime = $Datetime->waktu;

		$targetinstansi = $Datetime->instansi;

		$targetkeg = $Datetime->tempat_kegiatan;

		$targetket = $isiket->ket;


        // parsing data
		$data['targetDatetime'] = $targetDatetime;
		$data['instansi'] = $targetinstansi;
		$data['kegiatan'] = $targetkeg;
		$data['ket'] = $targetket;


		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/home', $data);
	}


	public function AksiInsertdatehariini()
	{

		$data['jadwal'] = $this->M_jadwal->getDataJadwalFront($datetime);

		$data['tampil'] = $this->M_ketersediaan->getGroupData();

		$data['jumbotron'] = $this->M_jumbotron->getDataJumboId();

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/home_tampil', $data);
	}


	public function TampilJadwalKegiatan()
	{

		$data['jadwal'] = $this->M_jadwal->getDataJadwal();

		$data['tampil'] = $this->M_ketersediaan->getGroupData();

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/tampil_kegiatan', $data);
	}

	public function Coming_Soon()
	{
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/Comming_soon',$data);
	}


	public function Countdown()
	{
		
	}
}

/* End of file Beranda.php */
/* Location: ./application/controllers/front/Beranda.php */