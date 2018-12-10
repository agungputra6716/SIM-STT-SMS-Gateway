<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktivitas extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('M_aktivitas','M_keanggotaan'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    
  }

  function latihan(){
    $data['data'] = $this->M_aktivitas->get_aktivitas('LAT');
    $this->load->view('aktivitas/list-latihan',$data);
  }

  function lomba(){
    $data['data'] = $this->M_aktivitas->get_aktivitas('LOM');
	  $this->load->view('aktivitas/list-lomba',$data);
  }

  function add_aktivitas($type){
    $data = $this->M_aktivitas->add_aktivitas($type);
    if ($data) {
      $this->session->set_flashdata('success', 'Kegiatan baru telah ditambahkan!');
    }
    else {
      $this->session->set_flashdata('error', 'Gagal menambah kegiatan!');
    }
    if ($type=='LAT') redirect('Aktivitas/latihan');
    else redirect('Aktivitas/lomba');
  }

  function update_aktivitas($type){
    $data = $this->M_aktivitas->update_aktivitas($type);
    if ($data) {
      $this->session->set_flashdata('success', 'Kegiatan berhasil diedit!');
    }
    else {
      $this->session->set_flashdata('error', 'Gagal mengedit kegiatan!');
    }
    if ($type=='LAT') redirect('Aktivitas/latihan');
    else if($type=='LOM') redirect('Aktivitas/lomba');
    else redirect('Dashboard');
  }

  function delete_aktivitas($type,$id_aktivitas){
    $data = $this->M_aktivitas->delete_aktivitas($id_aktivitas);
    if ($data) {
      $this->session->set_flashdata('success', 'Kegiatan berhasil dihapus!');
    }
    else {
      $this->session->set_flashdata('error', 'Gagal menghapus kegiatan!');
    }
    if ($type=='LAT') redirect('Aktivitas/latihan');
    else if($type=='LOM') redirect('Aktivitas/lomba');
    else redirect('Dashboard');
  }

  function send_message($type,$id_aktivitas){
    $anggota = $this->M_keanggotaan->get_anggota();
    $aktivitas = $this->M_aktivitas->get_presend_aktivitas($id_aktivitas);
    foreach ($anggota as $key) {
      $command = 'gammu sendsms TEXT '.$key->no_telp.' -text "[--'.$aktivitas[0]->nama_aktivitas.'-- Tanggal '.$aktivitas[0]->waktu_pelaksanaan.', Tempat : '.$aktivitas[0]->tempat_pelaksanaan.'] '.$aktivitas[0]->detail_aktivitas.'"';
      exec($command);
    }
    $this->session->set_flashdata('success', 'Sms kegiatan '.$aktivitas[0]->nama_aktivitas.' telah terkirim ke semua kontak anggota STT!');
    if ($type=='LAT') redirect('Aktivitas/latihan');
    else if($type=='LOM') redirect('Aktivitas/lomba');
    else redirect('Dashboard');
  }

  function ajax_get_aktivitas(){
    $data = $this->M_aktivitas->ajax_get_aktivitas();
    echo json_encode($data[0]);
  }
}
