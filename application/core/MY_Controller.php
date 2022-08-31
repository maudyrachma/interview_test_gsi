<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    public function __construct(){
		parent::__construct();

        $this->authenticated();
    }
    
    public function authenticated(){ 
        if($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != ''){
            
            if( ! $this->session->userdata('authenticated'))  
                redirect('auth/login');
        }
    }
}
