<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aktivitas extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_jumlah_aktivitas($type){
    $this->db->where('id_tipe_aktivitas',$type);
    return $this->db->get('tb_aktivitas')->num_rows();
  }

  function get_aktivitas($type){
    $this->db->join('tb_tipe_aktivitas', 'tb_tipe_aktivitas.id_tipe_aktivitas = tb_aktivitas.id_tipe_aktivitas');
    $this->db->where('tb_aktivitas.id_tipe_aktivitas',$type);
    return $this->db->get('tb_aktivitas')->result();
  }

  function get_presend_aktivitas($id_aktivitas){
    $this->db->where('id_aktivitas',$id_aktivitas);
    return $this->db->get('tb_aktivitas')->result();
  }

  function add_aktivitas($type){
    $data = array(
      'nama_aktivitas' => $this->input->post('nama_aktivitas'),
      'detail_aktivitas' => $this->input->post('detail_aktivitas'),
      'id_tipe_aktivitas' => $type,
      'waktu_pelaksanaan' => $this->input->post('waktu_pelaksanaan'),
      'tempat_pelaksanaan' => $this->input->post('tempat_pelaksanaan'),
    );
    return $this->db->insert('tb_aktivitas', $data);
  }

  function update_aktivitas($type){
    $id_aktivitas = $this->input->post('id_aktivitas');
    $data = array(
      'nama_aktivitas' => $this->input->post('nama_aktivitas'),
      'detail_aktivitas' => $this->input->post('detail_aktivitas'),
      'id_tipe_aktivitas' => $type,
      'waktu_pelaksanaan' => $this->input->post('waktu_pelaksanaan'),
      'tempat_pelaksanaan' => $this->input->post('tempat_pelaksanaan'),
    );
    $this->db->where('id_aktivitas', $id_aktivitas);
    return $this->db->update('tb_aktivitas',$data);
  }

  function delete_aktivitas($id_aktivitas){
    $this->db->where('id_aktivitas', $id_aktivitas);
    return $this->db->delete('tb_aktivitas');
  }

  function ajax_get_aktivitas(){
    $this->db->where('id_aktivitas', $this->input->post('id_aktivitas'));
    return $this->db->get('tb_aktivitas')->result();
  }

  function get_newest_aktivitas($type){
    $this->db->where('id_tipe_aktivitas', $type);
    return $this->db->get('tb_aktivitas')->result();
  }
}
