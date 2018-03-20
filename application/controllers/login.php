<?php
// class login extends CI_Controller{
session_start();
  require 'function.php';


class login extends CI_Controller {
    public function index()
    {
      $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }
  }

if(isset($_POST['login'])) {
  $username = $_POST["username"];
  $_SESSION['username'] = $username;
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM data WHERE Nama = '$username'");
    // var_dump($result); exit();
  if(mysqli_num_rows($result) === 1){
    // $row =  mysqli_fetch_assoc($result); //jadi ke arr assoc
      $_SESSION["Login"] = true; //1 terus masuk ke atas
      if($_SESSION["Login"] = true){
        header("Location: index.php");
        exit;
      }
    } else{
      echo "<script>
              alert('Password atau Username Salah');
            </script>";
    }
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
