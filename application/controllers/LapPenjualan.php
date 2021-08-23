<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LapPenjualan extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('laporan/penjualan');
		$this->load->view('footer');
	}
}
