<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ganti_password extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_password');
		$this->load->helper('form');
		$this->load->library('form_validation');

		// validation login
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
	}


	public function index()
	{

		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/ganti_pass', $data);
	}

	public function change_password()
	{

		$username = $this->session->userdata['nama'];

		$this->form_validation->set_rules('pw_baru','password baru','required');
		$this->form_validation->set_rules('cpw_baru','password kedua','required|matches[pw_baru]');

		$this->form_validation->set_message('required','%s wajib diisi');

		$this->form_validation->set_error_delimiters('<p class="alert" style="color:red;">','</p>');


		if($this->form_validation->run() == FALSE){
			$this->load->view('backend/ganti_pass');
		} else {
			$post = $this->input->post();

			$data = array(
				'password' => md5($post['pw_baru']),
			);

			$this->M_password->update($username, $data['password'], 'admin');


			echo "<script>
			alert('Password Berhasil Diganti!');
			window.location='" . site_url('ganti_password') . "'
			</script>";

			//redirect('ganti_password');

		}

	}


	public function ganti_password()
	{

		$this->form_validation->set_rules('pw_baru', 'Password Baru', 'required');
		$this->form_validation->set_rules('cpw_baru', 'Password Baru', 'required|matches[pw_baru]');
		$this->form_validation->set_message('required', '%s wajib diisi');
		$this->form_validation->set_error_delimiters('<p class="alert" style="color:red;">', '</p>');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('backend/ganti_pass');
		} else {
			$username = $this->session->userdata('nama');


			$password_baru = $this->input->post('pw_baru');

			$data = array('password' => md5($password_baru));

			$this->M_password->update($username, $data, 'admin');

			echo "<script>
			alert('Password Berhasil Diganti!');
			window.location='" . site_url('ganti_password') . "'
			</script>";
		}
	}


	public function form_ganti_password()
	{
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/ganti_password', $data);
	}


	


}



/* End of file Ganti_password.php */
/* Location: ./application/controllers/Ganti_password.php */