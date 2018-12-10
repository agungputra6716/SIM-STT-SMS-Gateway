<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keanggotaan extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_anggota(){
    $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_anggota.id_jabatan');
    $this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_anggota.id_jenis_kelamin');
    return $this->db->get('tb_anggota')->result();
  }

  function get_jumlah_anggota(){
    return $this->db->count_all('tb_anggota');
  }

  function get_jenis_kelamin(){
    return $this->db->get('tb_jenis_kelamin')->result();
  }

  function get_jabatan(){
    return $this->db->get('tb_jabatan')->result();
  }

  function add_anggota(){
    $data=array(
      'nama' => $this->input->post('nama'),
      'id_jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'id_jabatan' => $this->input->post('jabatan'),
      'no_telp' => $this->input->post('no_telp')
    );
    return $this->db->insert('tb_anggota',$data);    
  }

  function delete_anggota($id_anggota){
    $this->db->where('id_anggota', $id_anggota);
    return $this->db->delete('tb_anggota');
  }

  function update_anggota(){
    $id_anggota = $this->input->post('id_anggota');
    $data=array(
      'nama' => $this->input->post('nama'),
      'id_jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'id_jabatan' => $this->input->post('jabatan'),
      'no_telp' => $this->input->post('no_telp')
    );
    $this->db->where('id_anggota', $id_anggota);
    return $this->db->update('tb_anggota',$data);
  }

  function ajax_get_anggota(){
    $this->db->where('id_anggota', $this->input->post('id_anggota'));
    $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_anggota.id_jabatan');
    $this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_anggota.id_jenis_kelamin');
    return $this->db->get('tb_anggota')->result();
  }

}
