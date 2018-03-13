<?php
session_start();
  spl_autoload_register(function($class_name){
    include $class_name . '.php';
  });

  class dataOperation extends Database{

    public function insert_record($table,$fields){
      //"INSERT INTO table_name (, , ) VALUES ('m_name','qty')";
      // print_r(array_keys  ($fields));
      $sql = "INSERT INTO ".$table;
      $sql .= "(".implode(",", array_keys($fields)).") VALUES "; //implode = change array to string ditambahi ","
      $sql .= "('".implode("','", array_values($fields))."')";
      // echo $sql;
      $query = mysqli_query($this->conn,$sql);
      if($query){
        return true;
        header("Location: ../index.php");
        exit;
      }
    }

    public function update_comment($table,$comment){
      // var_dump($comment);
      $username = $_SESSION["username"];
      var_dump($username);
      $sql = "UPDATE ".$table;
      $sql .= " SET Komentar = '$comment'";
      $sql .= " WHERE Nama = '$username'";
       echo $sql;
      $query = mysqli_query($this->conn,$sql);
      if($query){
        return true;
      }
    }

    public function show_record($table){
      $sql = "SELECT * FROM " .$table;
      $array = array();
      $query = mysqli_query($this->conn,$sql);
      while ($row = mysqli_fetch_assoc($query)) {
         $array[] = $row;
      }
      return $array;
    }


      public function delete_record($table)
      {
        $username = $_SESSION["username"];
        $sql = "DELETE FROM " .$table;
        $sql .=  " WHERE Nama= '$username'";
        $query = mysqli_query($this->conn,$sql);
        // echo $sql; exit();
          header("Location: ../logout.php");
      }
  }

  $obj = new dataOperation;

  if(isset($_POST["submit"])){
     // var_dump($_POST);
    // SEBENARNYA TELAH JADI ARRAY TETAPI UNTUK MENAMBAHKAN htmlspecialchars
    $myArray = array( //Pakai cara ini biar bisa rename array_keys
      "Nama" => htmlspecialchars($_POST["username"]), //nama yg mau di implode => name di form
      "Password" => htmlspecialchars($_POST["password"])
    );
     // print_r($myArray);
    if($obj->insert_record("data",$myArray)){
      header("Location: ../index.php");
      exit;
    };

  }

  if(isset($_POST["submitc"])){
    // SEBENARNYA TELAH JADI ARRAY TETAPI UNTUK MENAMBAHKAN htmlspecialchars
     $komentar = htmlspecialchars($_POST["comment"]);
      if($obj->update_comment("data",$komentar)){
        header("Location: ../index.php");
        exit;
      }
  }

  if(isset($_POST["submith"])){
    // SEBENARNYA TELAH JADI ARRAY TETAPI UNTUK MENAMBAHKAN htmlspecialchars
      if($obj->delete_record("data")){
    
      } else{
        echo "<script>
                alert('Komentar telah terhapus');
              </script>";
      }
  }
?>
