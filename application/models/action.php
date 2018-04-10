<?php
// session_start();

  class action extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get_data(){
      $query =$this->db->query('SELECT * FROM data');
      return $query->result();
    }

    public function insert_record($data = array()){
        return $this->db->insert("data", $data);
      }

    public function update_comment($data,$where,$table){
      $this->db->where('Nama= ', $where);
      $this->db->update($table,$data);
    }

    public function delete_akun($table,$Nama)
    {
      $query =$this->db->query('Delete FROM '.$table." Where Nama = '$Nama'");
    }

  	function cek_login($table,$where){
  		return $this->db->get_where($table,$where);
  	}

    function report(){
      $this->load->database();
      $query = $this->db->query("SELECT MONTH(date) AS bulan, COUNT(*) AS nilai
      FROM data
      GROUP BY MONTH(date);");
      if($query->num_rows() > 0){
      foreach($query->result() as $data){
          $hasil[] = $data;
      }
      return $hasil;
    }
    // return $this->db->query("SELECT * from report");
    //
    // if($query->num_rows() > 0){
    //     foreach($query->result() as $data){
    //         $hasil[] = $data;
    //     }
    //     return $hasil;
    // }
}
  }
 ?>
