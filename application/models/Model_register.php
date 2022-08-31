<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model{
    
    public function register($data){
        return $this->db->insert('user', $data);
    }

    public function getAllRegister(){
    	$this->db->from('user');
    	$data = $this->db->get();
    	return $data;
    	//print_r($data);die;
    }

    public function edit($data){
    	$this->db->where('id', $_POST['id']);
        return $this->db->update('user',$data);
    }
}