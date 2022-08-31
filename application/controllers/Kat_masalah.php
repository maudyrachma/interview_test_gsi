<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kat_masalah extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_kat_masalah');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['page'] = 'Kategori Masalah';
		$data["data_kategori"] = $this->Model_kat_masalah->getAllKatMasalah()->result(); 
		$this->load->view('kat_masalah/index', $data);
	}

	public function add(){
    	$this->form_validation->set_rules('kategori_masalah', 'kategori_masalah', 'required');
    
	    if ($this->form_validation->run() == FALSE) {
	      $this->session->set_flashdata('error', "Data gagal ditambahkan.");
	      redirect('Kat_masalah');
	    } else {
	        $kategori_masalah = $this->input->post('kategori_masalah');

	        $data = array(
	          'kategori_masalah' => $kategori_masalah,
	        );

	       	$insert = $this->Model_kat_masalah->add($data);
	       	if ($insert) {
	       		$this->session->set_flashdata('sukses',"Data berhasil disimpan.");
            	redirect('Kat_masalah');
	       	}
		}
   	}

   	public function update()
    {
        $this->form_validation->set_rules('kategori_masalah', 'kategori_masalah', 'required');
    
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data gagal diupdate.");
            redirect('Kat_masalah');
        }else{
            $kategori_masalah = $this->input->post('kategori_masalah');

	        $data = array(
	          'kategori_masalah' => $kategori_masalah,
	        );

	        $update = $this->Model_kat_masalah->edit($data);
	       	if ($update) {
	       		$this->session->set_flashdata('sukses',"Data berhasil disimpan.");
            	redirect('Kat_masalah');
	       	}
        }
    }

    public function delete($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda gagal dihapus.");
            redirect('Kat_masalah');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('kat_masalah');
            $this->session->set_flashdata('sukses',"Data berhasil dihapus.");
            redirect('Kat_masalah');
        }
    }

}
