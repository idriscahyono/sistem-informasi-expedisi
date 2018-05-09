<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct() {
		parent::__construct();
		//load model Pelanggan_m
		$this->load->model('Pelanggan_model');
		//load helper form
		$this->load->helper('form');	
	}

	public function index()
	{
		$data['getData'] = $this->Pelanggan_model->getData();
		$this->load->view('home/about', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */