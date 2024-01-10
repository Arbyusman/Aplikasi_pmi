<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelender extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function index($tahun = NULL, $bulan = NULL)
	{
		$kalender = array(

			'start_day'  => 'monday',
			'show_next_prev' => TRUE,
			'next_prev_url' => 	base_url()."/kelender/index"

		);

		$this->load->library('calendar', $kalender);

		$data['kalenders'] = $this->calendar->generate($tahun, $bulan);


		$this->load->view('frontend/test_kalendar', $data);
		
	}

}

/* End of file Kelender.php */
/* Location: ./application/controllers/front/Kelender.php */