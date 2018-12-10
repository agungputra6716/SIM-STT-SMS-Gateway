<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller{
    public function draft_pesan(){
		$this->load->view('pengaturan/draf-pesan.html');
    }
   
}