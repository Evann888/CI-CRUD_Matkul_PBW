<?php
  spl_autoload_register(function($class_name){
    include $class_name . '.php';
  });

  class dataOperation extends Database{

    public function insert_record($table,$fields){
      //"INSERT INTO table_name (, , ) VALUES ('m_name','qty')";
      print_r(array_keys  ($fields));
      $sql = "INSERT INTO ".$table;
      $sql .= "(".implode(",", array_keys($fields)).") VALUES "; //implode = change array to string ditambahi ","
      $sql .= "('".implode("','", array_values($fields))."')";
      echo $sql;
      $query = mysqli_query($this->conn,$sql);
      if($query){
        return true;
      }
    }

    public function show_record($table){
      $sql = "SELECT * FROM " .$table;
    }
  }
  $obj = new dataOperation;

  if(isset($_POST["submit"])){
     var_dump($_POST);
    // SEBENARNYA TELAH JADI ARRAY TETAPI UNTUK MENAMBAHKAN htmlspecialchars
    $myArray = array( //Pakai cara ini biar bisa rename array_keys
      "Nama" => htmlspecialchars($_POST["nama"]), //nama yg mau di implode => name di form
      "Password" => htmlspecialchars($_POST["password"]),
      "Email" => htmlspecialchars($_POST["email"]),
      "Komentar" => htmlspecialchars($_POST["comment"])
    );
     print_r($myArray);
    $obj->insert_record("data",$myArray);
    // if($obj->insert_record("medicines",$myArray)){
    //   header("location:index.php?msg=Record Inserted");
    // }
  }
?>
