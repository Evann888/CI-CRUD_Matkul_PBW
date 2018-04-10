<?php
  // require 'function.php';
  // validate($_POST);
defined('BASEPATH') OR exit('No direct script access allowed');
  class Register extends CI_Controller{
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

      $data = array(
        'Nama' => $this->input->post('username'),
        'Password' => $this->input->post('password'),
        'date' => date("Y-m-d")
      );

     if($this->input->method() == "post") {
        $this->action->insert_record($data);
        redirect('login');
     }
    }

    public function back()
    {
      redirect('login');
    }
  }
?>
