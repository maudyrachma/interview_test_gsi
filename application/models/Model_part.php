<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_part extends CI_Model{
    
    public function add($data){
        return $this->db->insert('part', $data);
    }

    public function edit($data){
    	$this->db->where('id', $_POST['id']);
        return $this->db->update('part',$data);
    }

    public function getAllPart(){
    	$this->db->from('part');
    	$data = $this->db->get();
    	return $data;
    }

}

