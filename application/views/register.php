
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

  <form  action="" method="POST">
    <div class="col-md-4 col-md-offset-4">
      <h3 style="text-align:center; color:rgb(238, 221, 68)">Registrasi Akun</h3>
        <div class="form-group">
         <label> Username : </label>
         <input type="text" class="form-control" placeholder="Username" name="username" required>
         <br>
         <label> Password : </label>
         <input type="password" class="form-control" placeholder="Password" name="password" required>
       </div>
        <td><input type="submit" value="Tambah" onclick="test()"></td>
    </div>

    <script>
      function test(){
        swal('Good job!', 'Berhasil terdaftar', 'success');
      }
    </script>
  </form>

  <div class="col-md-4 col-md-offset-4">
    <a href="<?php echo base_url('register/back'); ?>"> <td><input type="submit" value="Back"></td></a>
  </div>
</body>
