<?php
  // require 'function.php';
  // validate($_POST);
defined('BASEPATH') OR exit('No direct script access allowed');
  class register extends CI_Controller{
    public function __construct()
    {
      parent::__construct();
      $this->load->library('session');
      $this->load->model('action');
      $this->load->helper('url_helper');
    }

    public function index()
    {
      // $data['data'] = $this->news_model->get_data();
      // echo 'test';
      $this->load->helper('form');
      $this->load->view('register');
      // Load session library


      $data = array(
        'Nama' => $this->input->post('username'),
        'Password' => $this->input->post('password')
      );

     if($this->input->method() == "post") {
        $this->action->insert_record($data);
        redirect('login');
     }
    }
  }
?>
