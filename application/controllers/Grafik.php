<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grafik extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('action');
    }

    public function index()
    {
        $data['report'] = $this->action->report();
        $this->load->view('grafik', $data);
    }

    public function back()
    {
        redirect('index_cont');
    }
}
