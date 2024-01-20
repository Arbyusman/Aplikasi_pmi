<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donor_darah extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/M_donor_darah');
		$this->load->model('M_ketersediaan');
		$this->load->model('M_golongan');
		$this->load->model('front/M_datapendonor');
		$this->load->model('M_jadwal');
		$this->load->model('M_darah');
		$this->load->model('M_jenis_darah');
		$this->load->model('M_jumlah_darah_jenis');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		if ($this->session->userdata('status') != "login") {
			echo "<script>
			alert('Harus Login Terlebih Dahulu!');
			window.location='" . site_url('auth_login') . "'
			</script>";
		}
	}

	public function index()
	{
		//$data['tampil'] = $this->M_donor_darah->get_ketersediaanD();


		// $id = $this->session->userdata('id');

		// $data['tampil'] = $this->M_donor_darah->get_user($id);


		$data['title'] = 'PMI - Provinsi Sultra';

		$this->load->view('frontend/form_donor', $data);
	}

	public function testautocomplete()
	{
		$this->load->view('frontend/autocomplete');
	}

	public function get_autocompletes()
	{

		if (isset($_GET['term'])) {
			$result = $this->M_donor_darah->get_autocomplete($_GET['term']);
			if (count($result) > 0) {
				foreach ($result as $row)
					$result_array[] = array(
						'label' => $row->no_ktp,
						'nama' => $row->nama_lengkap,
						'tgl' => $row->tgl_lahir,
						'jk' => $row->jenis_kelamin,
						'mail' => $row->email,
						'alamat' => $row->alamat_rumah,
						'no_hp' => $row->no_telepon,
						'kerja' => $row->pekerjaan,
						'tempatlahir' => $row->tempat_lahir,
						'umur' => $row->umur,
					);

				echo json_encode($result_array);
			}
		}
	}

	public function AksiInsertDonor()
	{

		$user_id = $this->input->post('user_id');
		$no_kartudonor = $this->input->post('no_kartudonor');
		$golongan_darah_id = $this->input->post('golongan_darah_id');
		$bersedia_donor_puasa = $this->input->post('bersedia_donor_puasa');
		$bersedia_donor_diluar_rutin = $this->input->post('bersedia_donor_diluar_rutin');
		$donor_terakhir = $this->input->post('donor_terakhir');
		$donor_keberapa = $this->input->post('donor_keberapa');
		$no_ktp = $this->input->post('no_ktp');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
		$jenis_kelamin = $this->input->post('flexRadioDefault');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat_kantor = $this->input->post('alamat_kantor');
		$no_telepon_kantor = $this->input->post('no_telepon_kantor');


		$now = date('Y-m-d H:i:s');
		$data = array(
			'user_id' => $user_id,
			'no_kartudonor' => $no_kartudonor,
			'alamat_kantor' => $alamat_kantor,
			'no_telepon_kantor' => $no_telepon_kantor,
			'golongan_darah_id' => $golongan_darah_id,
			'bersedia_donor_puasa' => $bersedia_donor_puasa,
			'bersedia_donor_diluar_rutin' => $bersedia_donor_diluar_rutin,
			'donor_terakhir' => $donor_terakhir,
			'donor_keberapa' => $donor_keberapa,
			'no_ktp' => $no_ktp,
			'alamat_rumah' => $alamat,
			'pekerjaan' => $pekerjaan,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'donor_terakhir' => $donor_terakhir,
			'tgl_lahir' => $tgl_lahir,
			'created_by' => $this->session->nama,
			'created_at' => $now,
		);


		$save = $this->M_ketersediaan->inputFormDonadm($data);
		// var_dump($save);
		// die;exech z
	}

	public function AksiInsertDonorUser()
	{


		var_dump($this->input->post('no_kartu'));
		$email = $this->input->post('email');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');

		$no_kartu = $this->input->post('no_kartu');
		$golongan_darah_id = $this->input->post('golongan_darah_id');
		$bersedia_donor_puasa = $this->input->post('bersedia_donor_puasa');
		$bersedia_donor_diluar_rutin = $this->input->post('bersedia_donor_diluar_rutin');
		$donor_terakhir = $this->input->post('donor_terakhir');
		$donor_keberapa = $this->input->post('donor_keberapa');
		$no_ktp = $this->input->post('no_ktp');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
		$jenis_kelamin = $this->input->post('flexRadioDefault');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat_kantor = $this->input->post('alamat_kantor');
		$no_telepon_kantor = $this->input->post('no_telepon_kantor');


		$now = date('Y-m-d H:i:s');
		$data = array(
			'email' => $email,
			'nama_lengkap' => $nama_lengkap,
			'no_hp' => $no_hp,
			'no_kartudonor' => $no_kartu,
			'alamat_kantor' => $alamat_kantor,
			'no_telepon_kantor' => $no_telepon_kantor,
			'golongan_darah_id' => intval($golongan_darah_id),
			'bersedia_donor_puasa' => $bersedia_donor_puasa,
			'bersedia_donor_diluar_rutin' => $bersedia_donor_diluar_rutin,
			'donor_terakhir' => $donor_terakhir,
			'donor_keberapa' => $donor_keberapa,
			'no_ktp' => $no_ktp,
			'alamat_rumah' => $alamat,
			'pekerjaan' => $pekerjaan,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'created_by' => $nama_lengkap,
			'created_at' => $now,
		);


		$save = $this->M_ketersediaan->inputFormDonadm($data);
		redirect('Donor_darah/AksiInsertDonorUser');
	}
}

/* End of file Donor_darah.php */
/* Location: ./application/controllers/front/Donor_darah.php */
