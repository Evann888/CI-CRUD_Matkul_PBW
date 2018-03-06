<?php
  // $conn = mysqli_connect("sql113.epizy.", "epiz_21575012", "webku00", "epiz_21575012_belajarphp");
  $conn = mysqli_connect("localhost","root","","belajarphp");

  function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $arr = [];
    while($isi = mysqli_fetch_assoc($result)) {
      $arr[] = $isi;
    }
    return $arr;
  }

  function tambah($data){
    global $conn;

    //var_dump($_POST);
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = upload();

    if(!$gambar){
      return false;
    }

    $query = "INSERT INTO mahasiswa VALUES ('','$nama','$nrp','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }

  function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM mahasiswa where id=$id");
    return mysqli_affected_rows($conn);
  }

  function edit($data,$id){
    global $conn;

    //var_dump($_POST);
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', email='$email', jurusan='$jurusan' WHERE id=$id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }

  function upload(){
    $nama = $_FILES['gambar']['name'];
    $asal = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];
    $size = $_FILES['gambar']['size'];
    $format = $_FILES['gambar']['type'];
    $namafiledifolder = 'img/'.$nama;
    $ekstensifileygdiperbolehkan = ['jpg','jpeg','png'];
    $ekstensifileygdiupload = explode('.', $nama); //memisahkan string jadi array
    $ekstensifileygdiupload = strtolower(end($ekstensifileygdiupload)); //mengambil arr terakhir dari file yg diupload
                                                                      //dan dijadikan hrf kecil
    $time = time();

    if($error==0){
      if($size < 1000000){ //dlm byte 1MB
        if(in_array($ekstensifileygdiupload,$ekstensifileygdiperbolehkan)){
          if(file_exists($namafiledifolder)){
            $namafiledifolder = str_replace(".jpg", "", $namafiledifolder);
            $namafiledifolder = $namafiledifolder . "_" . $time . ".jpg";
          }
          move_uploaded_file($asal, $namafiledifolder);
          return $nama;
          echo "<br>Upload Success!";
        }
        else {
          echo "<script> alert('Tolong upload file berektensi jpg, jpeg, atau png') </script>";
          return false;
        }
      }
      else{
        echo "Ukuran file terlalu besar";
        return false;
      }
    }
    else{
      // var_dump($error);
      // echo "ada error";
      return false;
    }
  }

  function test_input($data) {
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = myqli_real_escape_string($data);
    return $data;
  }

  // function notification(){
  //   echo "<script>  swal({
  //   title: 'Gb!',
  //   text: 'You clicked the button!',
  //   icon: 'success',
  //   });</script>";
  //   // return "<script>
  //   //           swal({
  //   //             title: "$title",
  //   //             text: "$text",
  //   //             icon: "$type",
  //   //             window.location.href(index.php);
  //   //           });
  //   //        </script>";
  // }

  function register($data){
    global $conn;
    $username = test_input($data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //cek duplikat user
    $result = mysqli_query($conn, "SELECT Username FROM users WHERE Username = '$username'");

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
    $password2 = test_input($data["password2"]);

    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$username)) {
     echo "<script> alert('$err') </script>";
     return false;
   } else{
      if (!preg_match("/^[a-zA-Z0-9 ]*$/",$password)) {
        echo "<script> alert('$err') </script>";
        return false;
      } else{
        if($password == $password2){
          return true;
        } else {
          echo "<script> alert('Konfirmasi password tidak sesuai') </script>";
          return false;
        }
      }
    }
  }
 ?>
