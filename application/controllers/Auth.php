<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('backend/v_login', $data);
	}

	public function aksi_login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		$user = $this->M_login->cek_login("admin", $where)->row();
		if ($user > 0) {
			$data_session = array(
				'id' => $user->id,
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("dashboard"));
		} else {
			echo "<script>
			alert('username dan Password Salah!');
			window.location='" . site_url('auth') . "'
			</script>";
		}
	}

	public function addAdmin()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		$cek = $this->M_login->cek_login("admin", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("dashboard"));
		} else {
			echo "<script>
			alert('username dan Password Salah!');
			window.location='" . site_url('auth') . "'
			</script>";
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */