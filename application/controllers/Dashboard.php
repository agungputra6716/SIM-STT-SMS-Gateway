<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('M_keanggotaan','M_aktivitas'));
		//Codeigniter : Write Less Do More
	}
	public function index(){
		if ($this->session->userdata('is_login')==TRUE) {
			$data['num_anggota'] = $this->M_keanggotaan->get_jumlah_anggota();
			$data['num_latihan'] = $this->M_aktivitas->get_jumlah_aktivitas('LAT');
			$data['num_lomba'] = $this->M_aktivitas->get_jumlah_aktivitas('LOM');

			$lomba = $this->M_aktivitas->get_newest_aktivitas('LOM');
			$lomba_baru = array();
			foreach ($lomba as $key) {
				if (($key->waktu_pelaksanaan)>date('Y-m-d')) {
					array_push($lomba_baru,$key);
				}
			}

			$latihan = $this->M_aktivitas->get_newest_aktivitas('LAT');
			$latihan_baru = array();
			foreach ($latihan as $key) {
				if (($key->waktu_pelaksanaan)>date('Y-m-d')) {
					array_push($latihan_baru,$key);
				}
			}

			$data['latihan'] = $latihan_baru;
			$data['lomba'] = $lomba_baru;
			$this->load->view('index',$data);
		}
		else {
			$this->load->view('login');
		}
	}

	function login(){
		$this->load->view('login');
	}
}
