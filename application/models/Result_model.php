<?php

class Result_model extends CI_model{


	public function add_result($data){

		$insert = $this->db->insert('results',$data);
		return $insert;
	}


	public function list_results(){

		$this->db->from('student');
		$this->db->join('results', 'results.id = student.id');
		$query = $this->db->get();
		return $query->result();

	}


	public function student_results($student_id){
		$this->db->from('results');
		$this->db->where('student_id',$student_id);		
		$query  = $this->db->get();
		return $query->result();
	}
}







?>