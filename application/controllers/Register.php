<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_register');
		$this->load->helper('url');
		$this->load->library(array('form_validation','session'));
	}

	public function index()
	{
		$data['page'] = 'Register';
		$this->load->view('register/add', $data);
	}

	public function data_personel()
	{
		$data['page'] = 'Data Personel';
		$data["data_personel"] = $this->Model_register->getAllRegister()->result();
		$this->load->view('register/index', $data);
	}

	public function proses_register(){
    	$this->form_validation->set_rules('nama', 'Nama', 'required');
    	$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[15]|is_unique[user.username]');
    	$this->form_validation->set_rules('password', 'Password', 'required|trim');
    
    	if ($this->form_validation->run() == FALSE) {
	      $errors = $this->form_validation->error_array();
	      $this->session->set_flashdata('errors', $errors);
	      $this->session->set_flashdata('input', $this->input->post());
          redirect('register/index');
      } else {
	      $username      = $this->input->post('username');
	      $nama          = $this->input->post('nama');
	      $password      = md5($this->input->post('password'));
	      $email		 = $this->input->post('email');
	      $nik           = $this->input->post('nik');
	      $jenis_kelamin = $this->input->post('jenis_kelamin');
	      $agama         = $this->input->post('agama');
	      $tempat_lahir  = $this->input->post('tempat_lahir');
	      $tanggal_lahir = $this->input->post('tanggal_lahir');
	      $join          = $this->input->post('join');
	      $telp          = $this->input->post('telp');
        $assesment     = $this->input->post('assesment');
	      //$jabatan       = $this->input->post('jabatan');
	      //$photo         = $this->request->getFile('photo');
	      //$filepath		 = WRITEPATH . 'public_assets/dist/img/'.$photo;
	   
	      $data = array(
          	'username'      => $username,
          	'nama'          => $nama,
          	'password'      => $password,
          	'email'         => $email,
          	'nik'           => $nik,
          	'jenis_kelamin' => $jenis_kelamin,
          	'agama'         => $agama,
          	'tempat_lahir'  => $tempat_lahir,
          	'tanggal_lahir' => $tanggal_lahir,
          	'join'          => $join,
          	'telp'          => $telp,
            'assesment'     => $assesment
          	//'jabatan'       => $jabatan,
          	//'photo'         => $photo
        	);

       	$insert = $this->Model_register->register($data);
       	if ($insert) {
       		echo '<script>alert("Sukses! Anda berhasil melakukan register.");window.location.href="'.base_url('register/index').'";</script>';
       	}
	   }
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
    	$this->form_validation->set_rules('email', 'email', 'required');
    	$this->form_validation->set_rules('nik', 'nik', 'required');

        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data gagal diupdate.");
            redirect('register/data_personel');
        }else{
          	$username      = $this->input->post('username');
	      	$nama          = $this->input->post('nama');
	      	$password      = md5($this->input->post('password'));
	      	$email		   = $this->input->post('email');
	      	$nik           = $this->input->post('nik');
	      	$jenis_kelamin = $this->input->post('jenis_kelamin');
	      	$agama         = $this->input->post('agama');
	      	$tempat_lahir  = $this->input->post('tempat_lahir');
	      	$tanggal_lahir = $this->input->post('tanggal_lahir');
	      	$join          = $this->input->post('join');
	      	$telp          = $this->input->post('telp');
          $assesment     = $this->input->post('assesment');
	      	//$jabatan       = $this->input->post('jabatan');  

	        $data = array(
          	'username'      => $username,
          	'nama'          => $nama,
          	'password'      => $password,
          	'email'         => $email,
          	'nik'           => $nik,
          	'jenis_kelamin' => $jenis_kelamin,
          	'agama'         => $agama,
          	'tempat_lahir'  => $tempat_lahir,
          	'tanggal_lahir' => $tanggal_lahir,
          	'join'          => $join,
          	'telp'          => $telp,
            'assesment'     => $assesment
          	//'jabatan'       => $jabatan,
          	//'photo'         => $photo
        	);

	        $update = $this->Model_register->edit($data);
	       	if ($update) {
	       		$this->session->set_flashdata('sukses',"Data berhasil disimpan.");
            	redirect('register/data_personel');
	       	}
        }
    }

    public function delete($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Anda gagal dihapus.");
            redirect('register/data_personel');
        }else{
            $this->db->where('id', $id);
            $this->db->delete('user');
            $this->session->set_flashdata('sukses',"Data berhasil dihapus.");
            redirect('register/data_personel');
        }
    }
}
