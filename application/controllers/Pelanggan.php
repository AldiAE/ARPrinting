<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('master_data/pelanggan');
		$this->load->view('footer');
	}
}
