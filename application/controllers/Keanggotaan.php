<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keanggotaan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_keanggotaan');
    //Codeigniter : Write Less Do More
  }

  function index(){
    $data['data'] = $this->M_keanggotaan->get_anggota();
    $data['jenis_kelamin'] = $this->M_keanggotaan->get_jenis_kelamin();
    $data['jabatan'] = $this->M_keanggotaan->get_jabatan();
    $this->load->view('keanggotaan/list-anggota',$data);
  }

  function add_anggota(){
    $data = $this->M_keanggotaan->add_anggota();
    if ($data) {
      $this->session->set_flashdata('success', 'Anggota baru terlah ditambahkan!');
    }
    else {
      $this->session->set_flashdata('error', 'Gagal menambah anggota!');
    }
    redirect('Keanggotaan');
  }

  function delete_anggota($id_anggota){
    $hasil = $this->M_keanggotaan->delete_anggota($id_anggota);
    //var_dump($hasil);
    if ($hasil) {
      $this->session->set_flashdata('success', 'Anggota berhasil dihapus!');
    }
    else {
      $this->session->set_flashdata('error', 'Gagal menghapus anggota!');
    }
    redirect('Keanggotaan');
  }

  function update_anggota(){
    $hasil = $this->M_keanggotaan->update_anggota();
    if ($hasil) {
      $this->session->set_flashdata('success', 'Anggota berhasil diedit!');
    }
    else {
      $this->session->set_flashdata('error', 'Gagal mengedit anggota!');
    }
    redirect('Keanggotaan');
  }

  function ajax_get_anggota(){
    $data = $this->M_keanggotaan->ajax_get_anggota();
    echo json_encode($data[0]);
  }

}
