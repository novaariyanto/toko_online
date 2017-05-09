<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
class Mahasiswa_model extends CI_Model
{
	

	public function getMahasiswa($table){
		$res = $this->db->get($table);
		return $res;
	}
	public function insert($table,$data){
		$res = $this->db->insert($table,$data);
	}
	public function update($table,$data,$where){
		$res = $this->db->update($table,$data,$where);
		return $res;
	}

	public function delete($table,$where){
		$res = $this->db->delete($table,$where);
	}
	public function getWhere($table,$where){
		$res = $this->db->get_where($table,$where);
		return $res->result_array();
	}

	public function numRows($table){
		return $this->db->count_all_results($table);
	}



}


/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */