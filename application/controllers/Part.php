<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Part extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_part');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['page'] = 'Part';
		$data["data_part"] = $this->Model_part->getAllPart()->result(); 
		$this->load->view('nama_part/index', $data);
	}

	public function add(){
    	$this->form_validation->set_rules('nama_part', 'nama_part', 'required');
    	$this->form_validation->set_rules('qty', 'qty', 'required');
    
    
	    if ($this->form_validation->run() == FALSE) {
	      $this->session->set_flashdata('error', "Data gagal ditambahkan.");
	      redirect('Part');
	    } else {
	        $nama_part = $this->input->post('nama_part');
	        $qty       = $this->input->post('qty');

	        $data = array(
	          'nama_part' => $nama_part,
	          'qty'       => $qty,
	        );

	       	$insert = $this->Model_part->add($data);
	       	if ($insert) {
	       		$this->session->set_flashdata('sukses',"Data berhasil disimpan.");
            	redirect('Part');
	       	}
		}
   	}

   	public function update()
    {
        $this->form_validation->set_rules('nama_part', 'nama_part', 'required');
    	$this->form_validation->set_rules('qty', 'qty', 'required');

        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data gagal diupdate.");
            redirect('Part');
        }else{
            $nama_part = $this->input->post('nama_part');
	        $qty       = $this->input->post('qty');

	        $data = array(
	          'nama_part' => $nama_part,
	          'qty'       => $qty,
	        );

	        $update = $this->Model_part->edit($data);
	       	if ($update) {
	       		$this->session->set_flashdata('sukses',"Data berhasil disimpan.");
            	redirect('Part');
	       	}
        }
    }

    public function delete($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda gagal dihapus.");
            redirect('Part');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('part');
            $this->session->set_flashdata('sukses',"Data berhasil dihapus.");
            redirect('Part');
        }
    }

}
