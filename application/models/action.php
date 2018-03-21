<?php
// session_start();

  class action extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_data(){
      $query =$this->db->query('select * from data order by `id` DESC');
      return $query->result_array();
    }

    public function insert_record($data = array()){
        $this->load->helper('url');
        return $this->db->insert("data", $data);
      }

    public function update_comment($data = array(), $id){
      $this->db->where('id', $id);
      return $this->db->update("data", $data);
    }

    public function delete_record($Nama)
    {
      $this->load->database();
      $this->db->where('Nama', $Nama);
      return $this->db->delete("");
    }

  	function cek_login($table,$where){
  		return $this->db->get_where($table,$where);
  	}	
  }

  // $obj = new dataOperation;

//   if(isset($_POST["submit"])){
//      // var_dump($_POST);
//     // SEBENARNYA TELAH JADI ARRAY TETAPI UNTUK MENAMBAHKAN htmlspecialchars
//     $myArray = array( //Pakai cara ini biar bisa rename array_keys
//       "Nama" => htmlspecialchars($_POST["username"]), //nama yg mau di implode => name di form
//       "Password" => htmlspecialchars($_POST["password"])
//     );
//      // print_r($myArray);
//     if($obj->insert_record("data",$myArray)){
//       header("Location: ../index.php");
//       exit;
//     };
//
//   }
//
//   if(isset($_POST["submitc"])){
//     // SEBENARNYA TELAH JADI ARRAY TETAPI UNTUK MENAMBAHKAN htmlspecialchars
//      $komentar = htmlspecialchars($_POST["comment"]);
//       if($obj->update_comment("data",$komentar)){
//         header("Location: ../index.php");
//         exit;
//       }
//   }
//
//   if(isset($_POST["submith"])){
//     // SEBENARNYA TELAH JADI ARRAY TETAPI UNTUK MENAMBAHKAN htmlspecialchars
//       if($obj->delete_record("data")){
//
//       } else{
//         echo "<script>
//                 alert('Komentar telah terhapus');
//               </script>";
//       }
//   }
// ?>
