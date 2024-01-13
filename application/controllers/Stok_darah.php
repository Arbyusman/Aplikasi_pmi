<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok_darah extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_ketersediaan');
    $this->load->model('M_golongan');
    $this->load->model('front/M_datapendonor');
    $this->load->model('M_jadwal');
    $this->load->model('M_stok');
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
    $data['stok'] = $this->M_stok->getDataStok();

    // jadwal
    $data['jadwal'] = $this->M_jadwal->getDataJadwal();
    // title
    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/stok_darah', $data);
  }

  public function detail_stok()
  {

    $update = $this->M_ketersediaan->updateKeteranganAjax($data, $ketersediaan_darah_id);

    $this->load->view('backend/stok_darah', $data);
  }

  public function create_stok()
  {
    $jenisDarah = $this->M_jenis_darah->getDataJenisDarah();
    $darah = $this->M_darah->getDataDarah();
    $jadwal_kegiatan_id = intval($this->input->post('jadwal_kegiatan_id'));

    foreach ($darah as $darahItem) {
      foreach ($jenisDarah as $jenisDarahItem) {
        $dataJumlahDarah = [
          'jenis_darah_id' => $jenisDarahItem->id,
          'darah_id' => $darahItem->id,
          'jadwal_id' => $jadwal_kegiatan_id,
          'total' => 3,
        ];
        $this->M_jumlah_darah_jenis->createJumlahJenisDarah($dataJumlahDarah);
      }
    }

    $jumlahJenisDarahByJadwal = $this->M_jumlah_darah_jenis->getJumlahJenisDarahByJadwal($jadwal_kegiatan_id);

    $total = 0;
    foreach ($jumlahJenisDarahByJadwal as $jumlahJenisDarahByJadwalItem) {
      var_dump($jumlahJenisDarahByJadwalItem);
      $total += $jumlahJenisDarahByJadwalItem->total;
    }

    $dataInputStok = [
      'jenis_darah_id' => 1, // Assuming you have a specific jenis_darah_id here
      'darah_id' => 1, // Assuming you have a specific darah_id here
      'jadwal_id' => $jadwal_kegiatan_id,
      'total' => $total,
    ];

    $this->M_stok->createStok($dataInputStok);

    // title
    $data['title'] = 'PMI - Provinsi Sultra';

    redirect(base_url('Stok_darah'));
  }


  public function update_stok()
  {
    $data['stok'] = $this->M_stok->getDataStok();

    // jadwal
    $data['jadwal'] = $this->M_jadwal->getDataJadwal();
    // title
    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/stok_darah', $data);
  }

  public function delete_stok()
  {
    $data['stok'] = $this->M_stok->getDataStok();

    // jadwal
    $data['jadwal'] = $this->M_jadwal->getDataJadwal();
    // title
    $data['title'] = 'PMI - Provinsi Sultra';

    $this->load->view('backend/stok_darah', $data);
  }
}

  /* End of file Ketersediaan.php */
/* Location: ./application/controllers/Ketersediaan.php */