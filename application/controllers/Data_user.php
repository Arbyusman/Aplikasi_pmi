<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_datauser');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
		
	}

	public function index()
	{

		$tampilData = $this->M_datauser->getDataUser();

		$data = array('tampil' => $tampilData);

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/datausers', $data);

	}


	public function tampil_data($id)
	{
		$editkets = $this->M_datauser->getTampilUse($id);

		$data = array('dat_user' => $editkets);

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/form_send_wa', $data);
	}


	public function AksiInsertNotif()
	{
		$hp = $this->input->post('hp_wa');
		$pesan = $this->input->post('pesan_wa');

		$result = file_get_contents('https://web.whatsapp.com/send?phone='.$hp.'&text='.$pesan);



		// simpan data
		if ($result) {
			$this->session->set_flashdata('flash', 'Notifikasi Berhasil dikirim');
			redirect('data_user');
		}else{
			echo "Gagal!";
		}
	}

}

/* End of file Data_user.php */
/* Location: ./application/controllers/Data_user.php */