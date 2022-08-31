<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_laporan');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['page'] = 'Laporan';
		$data["data_laporan"] = $this->Model_laporan->getAllLaporan()->result(); 
		$this->load->view('laporan/index', $data);
	}


}
