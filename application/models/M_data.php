<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_data extends CI_Model{
	function ambil_data(){
		$data=$this->db->query('select * from barang');
	   return $data->result_array();
    }
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
    
   /* function upload($data,$table){
        $this->db->insert($table, $data);
    }*/
    function tampilkan(){
        
        $data=$this->db->query('SELECT * FROM (
  SELECT * FROM barang ORDER BY id_barang DESC LIMIT 3
) as r ORDER BY id_barang');
	   return $data->result_array();
        
    }
    
     function cek_data($id){
         $data=$this->db->query('select * from barang where id_barang='.$id);
		return $data->result_array();
	}	
    	public function InsertData($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
	public function UpdateData($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}

	public function DeleteData($tableName,$data,$where){
		$res = $this->db->delete($tableName,$data,$where);
        
		return $res;
	}
    public function decrement(){
    $res=$this->db->query('ALTER TABLE barang AUTO_INCREMENT = 1');
        return $res;
    }
}

?>