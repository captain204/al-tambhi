<?php
class Admin_model extends CI_model{

	public function add_admin(){

		$data = array(

				'firstname'=> $this->input->post('firstname'),
				'lastname'=>$this->input->post('lastname'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password1'),
				'priviledge'=>$this->input->post('status'),
				'phone'=>$this->input->post('phone'),
			);
		$insert = $this->db->insert('admin',$data);
		return $insert;
		
	}

	public function list_admin(){

		$this->db->select('*');
		$this->db->from('admin');
		$query = $this->db->get();
		return $query->result();
	}

	public function update($id){

		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id',$id);
		$query = $this->db->get();
	   	return $query->result();

	}

	public function update_field($id){

		$data = array(

			'firstname'=>$this->input->post('firstname'),
			'lastname'=>$this->input->post('lastname'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'priviledge'=>$this->input->post('status'),
			'phone'=>$this->input->post('phone'),

			);
		$this->db->where('id',$id);
		$update = $this->db->update('admin',$data);
		return $update;
	}

	public function add_graduate($data){

		$insert = $this->db->insert('graduates',$data);
		return $insert;
	}


	public function list_graduate(){

			$this->db->select('*');
			$this->db->from('graduates');
			$query = $this->db->get();
			return $query->result();

	}


	public function graduate($id){
		$this->db->select('*');
		$this->db->from('graduates');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_graduate($id,$data){

		$this->db->where('id',$id);
		$update = $this->db->update('graduates',$data);
		return $update;
		
	}

	public function delete_graduate($id){
		$this->db->where('id',$id);
		 $this->db->delete('graduates');
		return true;
	}

	public function login($username,$password){

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('admin');
		if($result->num_rows()==1){
			return $result->row(0)->id;
		} else{
			return false;
		}
	}


	public function count_admin(){

		$this->db->select('*');
		$this->db->from('admin');
		$query = $this->db->get();
		return $query->count_all_results();

	}


}

?>