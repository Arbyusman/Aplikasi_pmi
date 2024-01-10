<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ganti_password_user extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->load->model('M_password_user');
	}

	public function index()
	{

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/ganti_password', $data);	
	}


	public function Aksiubahpassword()
	{

		 // Set aturan validasi form
		$this->form_validation->set_rules('pass_new', 'Password Baru', 'required');
		$this->form_validation->set_rules('conf_pass', 'Konfirmasi Password', 'required|matches[pass_new]');



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('frontend/ganti_password');
		} else {
			$user_id = $this->session->userdata('id_user');

			$password_baru = $this->input->post('pass_new');

			$data = array('password' => md5($password_baru));

			$this->M_password_user->update($user_id, $data, 'user');


			$this->session->unset_userdata('id_user'); 
			$this->session->sess_destroy();
			echo "<script>
			alert('Password Berhasil Diganti!');
			window.location='" . site_url('auth_login') . "'
			</script>";
		}

		

	}

}

/* End of file Ganti_password_user.php */
/* Location: ./application/controllers/Ganti_password_user.php */