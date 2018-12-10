<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function login($username,$password){
    $this->db->where('username',$username);
    $this->db->join('tb_role', 'tb_role.id_role = tb_user.id_role');
    return $this->db->get('tb_user')->row_array();
  }

  function get_user(){
    $this->db->join('tb_role', 'tb_role.id_role = tb_user.id_role');
    $this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_user.id_jenis_kelamin');
    return $this->db->get('tb_user')->result();
  }

  function get_jumlah_user(){
    return $this->db->count_all('tb_user');
  }

  function get_jenis_kelamin(){
    return $this->db->get('tb_jenis_kelamin')->result();
  }

  function get_role(){
    return $this->db->get('tb_role')->result();
  }

  function add_user(){
    $this->db->where('username', $this->input->post('username'));
    $cek = $this->db->get('tb_user')->num_rows();
    if ($cek>0) {
      return 'username_sama';
    }
    else if ($this->input->post('password')==$this->input->post('rpt_password')) {
      $data=array(
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password')),
        'nama' => $this->input->post('nama'),
        'id_jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'id_role' => $this->input->post('role'),
      );
      $insert = $this->db->insert('tb_user',$data);
      if ($insert) return 'berhasil';
    }
    else return 'password_beda';
  }

  function delete_user($username){
    $this->db->where('username', $username);
    return $this->db->delete('tb_user');
  }

  function update_user(){
    $username = $this->input->post('username');
    $data=array(
      'nama' => $this->input->post('nama'),
      'id_jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'id_role' => $this->input->post('role'),
    );
    $this->db->where('username', $username);
    return $this->db->update('tb_user',$data);
  }

  function ajax_get_user(){
    $this->db->where('username', $this->input->post('username'));
    $this->db->join('tb_role', 'tb_role.id_role = tb_user.id_role');
    $this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_user.id_jenis_kelamin');
    return $this->db->get('tb_user')->result();
  }
}
