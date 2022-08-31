<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kat_masalah extends CI_Model{
    
    public function add($data){
        return $this->db->insert('kat_masalah', $data);
    }

    public function edit($data){
    	$this->db->where('id', $_POST['id']);
        return $this->db->update('kat_masalah',$data);
    }

    public function getAllKatMasalah(){
    	$this->db->from('kat_masalah');
    	$data = $this->db->get();
    	return $data;
    }

}

