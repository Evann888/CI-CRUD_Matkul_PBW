<?php
  require 'function.php';
  // validate($_POST);
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Halaman Registrasi</title>
</head>

<style>
  body{
  font-family: "roboto";
  /* background: rgb(24, 89, 87); */
  background-repeat: no-repeat;
  height: 700px;
  background-image: url("img/regbg.jpg");
  background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }

  label{
    font-family: sans-serif;
    color:rgb(238, 221, 68);
    font-size: 14px;
  }
</style>
<body>

  <form  action="class/action.php" method="POST">
    <div class="col-md-4 col-md-offset-4">
      <h3 style="text-align:center; color:rgb(238, 221, 68)">Registrasi Akun</h3>
        <div class="form-group">
         <label> Username : </label>
         <input type="text" class="form-control" placeholder="Username" name="username" required>
         <br>
         <label> Password : </label>
         <input type="password" class="form-control" placeholder="Password" name="password" required>
       </div>
       <div class="text-center">
         <button id="submit" type="submit" class="btn btn-primary active btn-block" name="submit" onclick="test()";>Submit</button>
       </div>
    </div>

    <script>
      function test(){
        swal('Good job!', 'You clicked the button!', 'success');
      }
    </script>
  </form>
</body>
