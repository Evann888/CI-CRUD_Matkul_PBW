<?php
// class login extends CI_Controller{
// session_start();
  require 'function.php';

defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      // $this->load->library('session'); sudah di autoload
      $this->load->model('action');
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
  		$cek = $this->action->cek_login("data",$where)->num_rows();

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
  // $obj = new login;

if(isset($_POST['login'])) {
  // $obj->aksi_login();
  // $username = $_POST["username"];
  // $_SESSION['username'] = $username;
  // $password = $_POST["password"];
  // $result = mysqli_query($conn, "SELECT * FROM data WHERE Nama = '$username'");
  //   // var_dump($result); exit();
  // if(mysqli_num_rows($result) === 1){
  //   // $row =  mysqli_fetch_assoc($result); //jadi ke arr assoc
  //     // $_SESSION["Login"] = true; //1 terus masuk ke atas
  //
  //     if($_SESSION["Login"] = true){
  //       $this->session->set_userdata('logged_in', $session_data);
  //       header("Location: login/index_cont");
  //       exit;
  //     }
  //   } else{
  //     echo "<script>
  //             alert('Password atau Username Salah');
  //           </script>";
  //   }
  }
  // if(isset($_POST["register"])){
  //   echo "<a href=http:localhost:8000/tekinf-ci/login.php/navigate_button/nav_register> <a>";
  // }

// }
// if(isset($_SESSION["Login"])){
//   header("Location:index.php");
//   exit;
// }
?>
