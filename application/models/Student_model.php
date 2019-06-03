<?php
class Student_model extends CI_model{


	public function add_student($data){

		$insert = $this->db->insert('student',$data);
		return $insert;
	}
	

	public function login($student_id,$password){

		$this->db->where('student_id',$student_id);
		$this->db->where('password',$password);
		$result = $this->db->get('student');
		if($result->num_rows()==1){
			return $result->row(0)->id;
		} else{
			return false;
		}
	}



	public function profile($student_id,$password){

		$this->db->where('student_id',$student_id);
		$this->db->where('password',$password);
		$this->db->from('student');
		$query = $this->db->get();
		return $query->result();
	}


	public function list_student(){

		$this->db->select('*');
		$this->db->from('student');
		$query = $this->db->get();
		return $query->result();
	}

			
}


?>
