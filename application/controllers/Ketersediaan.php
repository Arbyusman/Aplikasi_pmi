<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ketersediaan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_ketersediaan');
    $this->load->model('M_golongan');
    $this->load->model('front/M_datapendonor');
    $this->load->model('M_jadwal');
    $this->load->helper('form');
    $this->load->library('form_validation');

    // validation login
    if ($this->session->userdata('status') != "login") {
      redirect(base_url("auth"));
    }
  }

  public function index()
  {

    // ketersediaan
    $tampilData = $this->M_ketersediaan->getDataKetersediaan();

    $data = array('tampil' => $tampilData);

    // golongan
    $data['golongan'] = $this->M_golongan->getDataGolongan();

    // jadwal
    $data['jadwal'] = $this->M_jadwal->getDataJadwal();

    // title
    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/ket_darah', $data);
  }


  public function getstok_darahDarah()
  {

    $id = $this->input->post('golongan_darah_id');

    $stok_darah = $this->M_ketersediaan->get_stok_darahDarah($id);


    var_dump($stok_darah);
    exit();

    // Return the stok_darah as JSON
    echo json_encode(array('stok_darah' => $stok_darah));
  }

  public function aksiInsertKet()
  {
    $gol_darah = $this->input->post('golongan_darah_id');
    $stok_darah = $this->input->post('stok_darah');
    $update_time = $this->input->post('update_time');
    $update_by = $this->input->post('update_by');
    $uptd = $this->input->post('instansi');

    $data = array(
      'golongan_darah_id' => $gol_darah,
      'stok_darah' => $stok_darah,
      'update_time' => $update_time,
      'update_by' => $update_by,
      'jadwal_kegiatan' => $uptd
    );


    // simpan data
    $save = $this->M_ketersediaan->inputKet($data);
    $this->session->set_flashdata('flash', 'Disimpan');
    redirect('Ketersediaan');
  }


  public function form_edit_ket($id)
  {
    $editkets = $this->M_ketersediaan->getTampilket($id);

    $data = array('keterangan' => $editkets);

    $data['golongan'] = $this->M_golongan->getDataGolongan();
    $data['jadwal'] = $this->M_jadwal->getDataJadwal();

    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/edit_ket_darah', $data);
  }

  public function aksiUpdateKet()
  {
    $id = $this->input->post('id');
    $instansi = $this->input->post('instansi');
    $gol_darah = $this->input->post('golongan_darah_id');
    $stok_darah = $this->input->post('stok_darah');
    $update_time = $this->input->post('update_time');
    $update_by = $this->input->post('update_by');
    $instansi = $this->input->post('instansi');

    $data = array(
      'jadwal_kegiatan' => $instansi,
      'golongan_darah_id' => $gol_darah,
      'stok_darah' => $stok_darah,
      'update_time' => $update_time,
      'update_by' => $update_by,
      'jadwal_kegiatan' => $instansi
    );


    //print_r($data);
    $update = $this->M_ketersediaan->updateKeter($data, $id);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ketersediaan');
  }

  public function aksiHapusKet($id)
  {

    $this->M_ketersediaan->deleteKet($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('Ketersediaan');
  }


  public function datapendonor()
  {
    $data['data_pendonor'] = $this->M_datapendonor->getDataDonor();

    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/data_pendonor_darah', $data);
  }


  public function Create_datapendonor()
  {

    $data['tampil_user'] = $this->M_ketersediaan->get_user();

    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/create_datapendonor', $data);
  }



  public function getDataByUserEmail()
  {
    $email = $this->input->post('email'); // Ambil nilai email dari permintaan AJAX

    // Panggil model atau load data dari database
    $this->load->model('Your_model_name'); // Gantilah 'Your_model_name' dengan nama model yang sesuai
    $data = $this->M_ketersediaan->getDataByUserEmail($email);

    // Kirim data sebagai JSON ke JavaScript
    echo json_encode($data);
  }


  public function Aksi_inputform()
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
      'tgl_lahir' => $tgl_lahir
    );


    // simpan data
    $save = $this->M_ketersediaan->inputFormDonadm($data);
    $this->session->set_flashdata('flash', 'Disimpan');
    redirect('Ketersediaan/datapendonor');
  }


  public function formedit_datapendonor($id)
  {

    $editpen = $this->M_datapendonor->getTampilDon($id);

    $data = array('pendonor' => $editpen);

    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/edit_pendonor', $data);
  }

  public function aksiUpdateDon()
  {
    $id = $this->input->post('id');
    $no_kartu = $this->input->post('no_kartudonor');
    $alamat_kantor = $this->input->post('alamat_kantor');
    $no_telepon_kantor = $this->input->post('no_telepon_kantor');
    $golongan_darah_id = $this->input->post('golongan_darah_id');
    $bersedia_donor_puasa = $this->input->post('bersedia_donor_puasa');
    $bersedia_donor_diluar_rutin = $this->input->post('bersedia_donor_diluar_rutin');
    $donor_terakhir = $this->input->post('donor_terakhir');
    $donor_keberapa = $this->input->post('donor_keberapa');


    $data = array(
      'no_kartudonor' => $no_kartu,
      'alamat_kantor' => $alamat_kantor,
      'no_telepon_kantor' => $no_telepon_kantor,
      'golongan_darah_id' => $golongan_darah_id,
      'bersedia_donor_puasa' => $bersedia_donor_puasa,
      'bersedia_donor_diluar_rutin' => $bersedia_donor_diluar_rutin,
      'donor_terakhir' => $donor_terakhir,
      'donor_keberapa' => $donor_keberapa
    );

    //print_r($data);
    $update = $this->M_datapendonor->updateDon($data, $id);
    $this->session->set_flashdata('flash', 'Diupdate');
    redirect('Ketersediaan/datapendonor');
  }



  public function aksiHapusDon($id)
  {

    $this->M_datapendonor->deleteDon($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('Ketersediaan/datapendonor');
  }


  public function form_admin_donor()
  {
    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/form_admin_donor', $data);
  }


  public function aksiInsertDonor()
  {
    $email = $this->input->post('email');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $no_hp = $this->input->post('no_hp');
    $no_kartudonor = $this->input->post('no_kartudonor');
    $golongan_darah_id = $this->input->post('golongan_darah_id');
    $email = $this->input->post('email');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $no_hp = $this->input->post('no_hp');
    $no_kartudonor = $this->input->post('no_kartudonor');
    $golongan_darah_id = $this->input->post('golongan_darah_id');
    $email = $this->input->post('email');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $no_hp = $this->input->post('no_hp');
    $no_kartudonor = $this->input->post('no_kartudonor');
    $golongan_darah_id = $this->input->post('golongan_darah_id');
    $no_kartudonor = $this->input->post('no_kartudonor');
    $golongan_darah_id = $this->input->post('golongan_darah_id');


    $data = array(
      'golongan_darah_id' => $gol_darah,
      'stok_darah' => $stok_darah,
      'update_time' => $update_time,
      'update_by' => $update_by,
      'jadwal_kegiatan' => $uptd
    );


    // simpan data
    $save = $this->M_ketersediaan->inputKet($data);
    $this->session->set_flashdata('flash', 'Disimpan');
    redirect('Ketersediaan');
  }

  public function detail_instansi($id)
  {
    $data['hasil'] = $this->M_ketersediaan->getTampiDet($id);

    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/form_detail', $data);
  }

  public function get_user_data()
  {

    $user_id = $this->input->post('id');

    $user_data = $this->M_ketersediaan->user_data($user_id);

    echo json_encode($user_data);
  }


  public function gabungan()
  {


    $tampilData = $this->M_ketersediaan->Jadwal_kegitan_model();


    foreach ($tampilData as $row) {

      $row->kegiatan = $this->M_ketersediaan->getDataKetersediaanDarah($row->id);
    }

    $data = array('tampil' => $tampilData);


    // golongan
    $data['golongan'] = $this->M_golongan->getDataGolongan();

    // jadwal
    $data['jadwal'] = $this->M_jadwal->getDataJadwal();


    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/halaman_baru', $data);
  }
}

  /* End of file Ketersediaan.php */
/* Location: ./application/controllers/Ketersediaan.php */