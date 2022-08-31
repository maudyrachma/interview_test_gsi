<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->model('Model_auth');
  }

  public function login(){
    if($this->session->userdata('authenticated')) 
      redirect('dashboard');

    $this->load->view('login/index');
  }

  public function proses_login(){
    $username = $this->input->post('username'); 
    $password = md5($this->input->post('password'));

    $user = $this->Model_auth->get($username);

    if(empty($user)){ 
      echo '<script>alert("Username tidak ditemukan.");window.location.href="'.base_url('/auth/login').'";</script>';
    }else{
      if($password == $user->password){ 
        $session = array(
          'authenticated'=> true, 
          'username'     => $user->username, 
          'nama'         => $user->nama, 
          'jabatan'      => $user->jabatan 
        );

        $this->session->set_userdata($session);
        $getUsers = $this->Model_auth->getAllUser();
        $_SESSION['users_data'] = $getUsers->row();
        redirect('dashboard');
      }else{
        echo '<script>alert("Password yang Anda masukan salah.");window.location.href="'.base_url('/auth/login').'";</script>';
      }
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    echo '<script>alert("Sukses! Anda berhasil logout."); window.location.href="'.base_url('auth/login').'";
    </script>';
  }
}
