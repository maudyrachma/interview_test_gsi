<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function index()
	{
		$data['page'] = 'Dashboard';
		$this->load->view('dashboard/index', $data);
	}
}
