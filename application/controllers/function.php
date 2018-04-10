<?php
  function test_input($data) {
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = myqli_real_escape_string($data);
    return $data;
  }

  function register($data){
    global $conn;
    $username = test_input($data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Enkripsi Password
    // $password = password_hash($password, PASSWORD_DEFAULT);

    //cek duplikat user
    $result = mysqli_query($conn, "SELECT Name FROM data WHERE Nama = '$username'");

    if(mysqli_fetch_assoc($result)){
       echo "<script> alert('Username telah dipakai') </script>";
       return false;
    }
    $query = "INSERT INTO users VALUES ('','$username','$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    // notification();
    //echo notification('Success!','akun akan didaftarkan','success','index.php');
  }

  function validate($data){ //memvalidasi char agar tidak diinputkan special char
    global $conn;
    $err = "Only letters,numbers and white space allowed";
    $username = test_input($data["username"]);
    $password = test_input($data["password"]);

    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$username)) {
     echo "<script> alert('$err') </script>";
     return true;
   }
  }
 ?>
