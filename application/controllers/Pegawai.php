<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('master_data/pegawai');
		$this->load->view('footer');
	}
}
