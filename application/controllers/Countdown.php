<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countdown extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_countdown');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$targetDatetime = $this->M_countdown->getTargetDatetimeCoutdown();


           // Kirim data ke view
		$data['targetDatetime'] = $targetDatetime;
		$this->load->view('frontend/countdown_view', $data);
		
	}


	public function mockup_jadwal()
	{
		$this->load->view('frontend/mock_jadwal');
	}

}

/* End of file Countdown.php */
/* Location: ./application/controllers/Countdown.php */