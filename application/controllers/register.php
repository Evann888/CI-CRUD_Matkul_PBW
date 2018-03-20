<?php
  require 'function.php';
  // validate($_POST);

  class register extends CI_Controller{
    public function index()
    {
      $this->load->view('register');
    }
  }

  if(isset($_POST["submit"])){
    if(validate($_POST)){
      if(register($_POST) > 0){
          echo "<script>
                  alert('Data berhasil ditambahkan!');
                  document.location.href = 'login.php'
                </script>";
          // echo "<script>           test(); </script>";
          // echo notification('Success!','akun akan didaftarkan','success','index.php');
      }
    }
  }
?>
