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
    $this->load->model('M_darah');
    $this->load->model('M_jenis_darah');
    $this->load->model('M_jumlah_darah_jenis');
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


    // var_dump($stok_darah);
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

    // var_dump($data);
    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/data_pendonor_darah', $data);
  }


  public function Create_datapendonor()
  {

    $data['tampil_user'] = $this->M_ketersediaan->get_user();
    $data['darah'] = $this->M_darah->getDataDarah();

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

    $email = $this->input->post('email');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$no_hp = $this->input->post('no_hp');

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
      'email' => $email,
			'nama_lengkap' => $nama_lengkap,
			'no_hp' => $no_hp,
      'no_kartudonor' => $no_kartudonor,
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
      'created_by' => $this->session->nama,
			'created_at' => $now,
    );


    // simpan data
    $save = $this->M_ketersediaan->inputFormDonadm($data);
    // var_dump($save);
    // die;
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

    $result = $this->M_datapendonor->deleteDon(intval($id));
    // var_dump($result);
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

    // $data['data'] = $this->M_ketersediaan->getDataKetersediaan();

    // $data = array('tampil' => $tampilData);

    // golongan
    // $data['golongan'] = $this->M_golongan->getDataGolongan();
    $data['darah'] = $this->M_darah->getDataDarah();
    $data['data'] = $this->M_jumlah_darah_jenis->getDataJumlahJenisDarahAll();
    

    // var_dump($data);
    // jadwal
    $data['jadwal'] = $this->M_jadwal->getDataJadwal();

    // title
    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/halaman_baru', $data);
  }
  public function stok_darah()
  {


    // jadwal
    $data['jadwal'] = $this->M_jadwal->getDataJadwal();

    // title
    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/stok_darah', $data);
  }


  public function stok_jadwal($id)
  {

    $data = $this->M_jumlah_darah_jenis->getJumlahJenisDarahCount($id);
    $this->output->set_content_type('application/json')->set_output(json_encode($data));
  }

  public function stok_darah_detail($id)
  {

    // jadwal
    // $data['semua'] = $this->M_jumlah_darah_jenis->getDataJumlahJenisDarah(intval($id));
    $data['darah'] = $this->M_darah->getDataDarah();
    $data['jenis_darah'] = $this->M_jenis_darah->getDataJenisDarah();
    // $data['data'] = $this->M_golongan->getDataGolongan();
    $data['jadwal'] = $this->M_jadwal->getDataJadwalById(intval($id));
    
    // var_dump($data);
    // die;
    $data['stok'] = $this->M_jumlah_darah_jenis->getJumlahJenisDarahCount($id);
    
    $data['data'] = $this->M_jumlah_darah_jenis->getDataJumlahJenisDarah(intval($id));
    
    // var_dump($data['data']);
    // title
    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/stok_detail.php', $data);
  }

  public function create_stok_darah()
  {
    $jadwal_id = intval($this->input->post('jadwal_id'));
    $darah_id = intval($this->input->post('darah_id'));
    $jenis_darah_id = $this->input->post('jenis_darah_id');
    $value = intval($this->input->post('value'));

    $result = $this->M_jumlah_darah_jenis->getJumlahJenisDarah($jadwal_id, $darah_id, $jenis_darah_id);


    $now = date('Y-m-d H:i:s'); 
    $dataInput = [
      'jadwal_id' => intval($jadwal_id),
      'darah_id' => intval($darah_id),
      'jenis_darah_id' => intval($jenis_darah_id),
      'total' => floatval($value),
      'created_by' => $this->session->nama,
			'created_at' => $now,
    ];
    $dataUpdate = [
      'total' => floatval($value),
      'updated_by' => $this->session->nama,
			'updated_at' => $now,
    ];
    if ($result === null) {
      $createStok = $this->M_jumlah_darah_jenis->createJumlahJenisDarah($dataInput);
      $response = ['status' => 'success', 'message' => 'Stok Darah created successfully'];
    } else {
      $updateStok = $this->M_jumlah_darah_jenis->updateJumlahJenisDarah($dataUpdate, $jadwal_id, $darah_id, $jenis_darah_id);
      $response = ['status' => 'success', 'message' => 'Stok Darah updated successfully'];
    }

    $this->output->set_content_type('application/json')->set_output(json_encode($response));
  }




  public function getDataGabunganAjax()
  {

    $tampilData = $this->M_ketersediaan->getDataKetersediaan();

    $data = array('tampil' => $tampilData);

    // golongan
    $data['golongan'] = $this->M_golongan->getDataGolongan();

    // jadwal
    $data['jadwal'] = $this->M_jadwal->getDataJadwal();

    // title

    $this->output->set_content_type('application/json')->set_output(json_encode($data));
  }

  public function aksiUpdateKeteranganAjax()
  {
    try {
      $ketersediaan_darah_id = intval($this->input->post('ketersediaan_darah_id'));
      // $instansi = $this->input->post('instansi');
      $golongan_darah_id = intval($this->input->post('golongan_darah_id'));
      $stok_darah = intval($this->input->post('stok_darah'));


      $wb = intval($this->input->post('wb'));
      $prc = intval($this->input->post('prc'));
      $tc = intval($this->input->post('tc'));


      $data = array(
        'golongan_darah_id' => $golongan_darah_id,
        'stok_darah' => $stok_darah,
      );

      $dataDarah = array(
        'wb' => $wb,
        'prc' => $prc,
        'tc' => $tc,
        'stok' => $stok_darah,
      );


      $update = $this->M_ketersediaan->updateKeteranganAjax($data, $ketersediaan_darah_id);

      $updateDarah = $this->M_golongan->updateGol($dataDarah, $golongan_darah_id);

      if ($update && $updateDarah) {
        $response = array('status' => 'success', 'message' => 'Data updated successfully');
      } else {
        $response = array('status' => 'error', 'message' => 'Failed to update data');
      }

      $this->output->set_content_type('application/json')->set_output(json_encode($response));
    } catch (Exception $e) {
      // Handle the exception
      $response = array('status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage());
      $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
  }



  public function aksiUpdateStokAjax()
  {
    try {
      $darah_id = intval($this->input->post('darah_id'));
      $jadwal_id = intval($this->input->post('jadwal_id'));
      $prc = intval($this->input->post('prc'));
      $wb = intval($this->input->post('wb'));
      $tc = intval($this->input->post('tc'));



      $dataDarah = array(
        'darah_id' => $darah_id,
        'jadwal_id' => $jadwal_id,
        'wb' => $wb,
        'prc' => $prc,
        'tc' => $tc,
        'stok' => 0,
      );



      $updateDarah = $this->M_golongan->inputGol($dataDarah);
      // $updateDarah = $this->M_golongan->updateGol($dataDarah, $golongan_darah_id);

      if ($updateDarah) {
        $response = array('status' => 'success', 'message' => 'Data updated successfully');
      } else {
        $response = array('status' => 'error', 'message' => 'Failed to update data');
      }

      $this->output->set_content_type('application/json')->set_output(json_encode($response));
    } catch (Exception $e) {
      // Handle the exception
      $response = array('status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage());
      $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
  }
}
  /* End of file Ketersediaan.php */
/* Location: ./application/controllers/Ketersediaan.php */