<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Komentar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('action');
    }

    public function index()
    {
      $data['user'] = $this->action->get_data();
      if($this->session->userdata('status') != "login"){
          redirect(base_url("login"));
      } else{
          $this->load->view('Komentar',$data);
      }
    }

    function dl()
    {
      $filename ="reportkomentar.xls";
      // $contents = $this->load->view("Komentar", $data);
      header('Content-type: application/ms-excel');
      header('Content-Disposition: attachment; filename='.$filename);
    }

}
?>
