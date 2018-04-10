<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      // $this->load->library('session'); sudah di autoload
      $this->load->model('Action');
      $this->load->helper('url_helper');
    }

    public function index()
    {
      $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }


    public function logout(){
      $this->session->sess_destroy();
      redirect('login');
    }

    public function aksi_login(){
  		$username = $this->input->post('username');
  		$password = $this->input->post('password');
  		$where = array(
  			'Nama' => $username,
  			'password' => $password
  			);
  		$cek = $this->Action->cek_login("data",$where)->num_rows();

  		if($cek > 0){
  			$data_session = array(
  				'nama' => $username,
  				'status' => "login"
  				);

  			$this->session->set_userdata($data_session);

  			redirect(base_url("login/index_cont"));

  		}else{
  			echo "Username dan password salah !";
  		}
  	}
  }
?>
