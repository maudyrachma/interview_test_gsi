<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_auth extends CI_Model {
    
    public function get($username){
        $this->db->where('username', $username); 
        $result = $this->db->get('user')->row(); 

        return $result;
    }

    public function getAllUser(){
        $this->db->from('user');
        $data = $this->db->get();
        return $data;
    }
}
