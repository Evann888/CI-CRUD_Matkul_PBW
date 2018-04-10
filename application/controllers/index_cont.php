<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Index_cont extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('url_helper');
        $this->load->model('action');
        $this->load->helper('download');
    }

    public function index()
    {
      $data['user'] = $this->action->get_data();
      if($this->session->userdata('status') != "login"){
          redirect(base_url("login"));
      } else{
          $this->load->view('index',$data);
      }
    }

    public function update()
    {
      $data = array(
        'Komentar' => $this->input->post('comment'),
      );

     $name = $this->session->userdata("nama");
     if($this->input->method() == "post") {
        $this->action->update_comment($data,$name,'data');
     }
     redirect(base_url("login/index_cont"));
    }

    public function delete()
    {
      $name = $this->session->userdata("nama");
      $this->action->delete_akun("data",$name);
    	redirect(base_url("login"));
    }

    public function report()
    {
      $data = array("user"=> $this->action->get_data());
          $filename = "comment.xls";
          // Set headers
          $this->output->set_content_type('application/ms-excel')
                       ->set_header('Content-Disposition: attachment; filename='.$filename);

          $this->load->view("Komentar", $data); // Send data to the browser
    }
}
?>
