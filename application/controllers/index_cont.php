<?php
static $username ='$_SESSION["username"]';
// if(!isset($_SESSION["Login"])){
//   header("Location: login.php");
//   exit;
// }

if(isset($_POST["submitc"])){
  if(!isset($_SESSION["Login"])){
    echo "<script>
            alert('Mohon Login terlebih dahulu');
          </script>";
  }
}

defined('BASEPATH') OR exit('No direct script access allowed');
class index_cont extends CI_Controller {
    public function index()
    {
      $this->load->view('index');
    }
}
?>
