<?php
class Graduates_model extends CI_model{

/*
*	Get all graduates regardless of year of graduation
*/
	public function get_graduates(){

		$this->db->select('*');
		$this->db->from('graduates');
		$query = $this->db->get();
		return $query->result();
	}

/*
*	Get all graduates by particular year
*/

	public function get_year($year){
		$this->db->select('*');
		$this->db->from('graduates');
		$this->db->where('year',$year);
		$query = $this->db->get();
		return $query->result();
	}


	public function login($id_number,$password){

		$this->db->where('id_number',$id_number);
		$this->db->where('password',$password);
		$result = $this->db->get('graduates');
		if($result->num_rows()==1){
			return $result->row(0)->id;
		} else{
			return false;
		}
	}



}

?>