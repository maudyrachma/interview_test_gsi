<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model{
    
    public function laporan($data){
        return $this->db->insert('laporan', $data);
    }

    public function getAllLaporan(){
    	$this->db->from('laporan');
    	$data = $this->db->get();
    	return $data;
    	//print_r($data);die;
    }

}