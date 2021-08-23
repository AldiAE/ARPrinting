<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('master_data/supplier');
		$this->load->view('footer');
	}
}
