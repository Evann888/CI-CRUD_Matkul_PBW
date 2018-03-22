<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class index_cont extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('action');

    }
    public function index()
    {
      $data['user'] = $this->action->get_data()->result();
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
    }

    public function delete()
    {
      $name = $this->session->userdata("nama");
      $this->action->delete_akun("data",$name);
    	redirect(base_url("login"));
    }
}
?>
