<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template {
	
	public function load($v_content)
	{
		$ci =& get_instance();
		$ci->load->view('layouts/header');
		$ci->load->view('layouts/side');
		$ci->load->view($v_content);
		$ci->load->view('layouts/footer');
		
	}
}