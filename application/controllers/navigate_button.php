<?php

class navigate_button extends CI_Controller{
  public function __construct()
  {
    # code...
  }

  public function nav_index()
  {
    $this->load->view('index');
  }

  public function nav_register()
  {
    $this->load->view('register');
  }

  public function nav_login()
  {
    $this->load->view('login');
  }
}

?>
