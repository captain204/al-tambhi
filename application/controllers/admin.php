<?php
class Admin extends CI_controller{

	public function index(){

		$this->load->view('index');
	}

	public function add(){
		$this->form_validation->set_rules('firstname','First Name','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[25]');
		$this->form_validation->set_rules('password1','Confirm password','trim|required|min_length[4]|max_length[25]|matches[password]');
		$this->form_validation->set_rules('status','Priviledge','required');
		$this->form_validation->set_rules('phone','Phone Number','trim|required|min_length[11]|max_length[14]');

		if ($this->form_validation->run()==false) {
			
			$data['main_content'] = 'add_admin';
			$this->load->view('admin/main',$data);
		} else{

			if ($this->Admin_model->add_admin()) {
				$this->session->set_flashdata('added','Admin added');
				redirect('admin/add');
			}
		}
	}


	public function list(){
		$data['admin'] = $this->Admin_model->list_admin();
		$data['main_content'] = 'list';
		$this->load->view('admin/main',$data);
	}

	public function update($id){
		$data['update'] = $this->Admin_model->update($id);
		$this->form_validation->set_rules('firstname','First Name','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[25]');
		$this->form_validation->set_rules('status','Priviledge','required');
		$this->form_validation->set_rules('phone','Phone Number','trim|required|min_length[11]|max_length[14]');

		if ($this->form_validation->run()==false) {
			
			$data['main_content'] = 'update';
			$this->load->view('admin/main',$data);	
		} else{

			if ($this->Admin_model->update_field($id)) {					
				redirect('admin/list');
				$this->session->set_flashdata('update','Update Successfull');
			}			
		}		
	}

	public function add_graduates(){

		
		$image = $this->upload->data('file_name');
		$this->form_validation->set_rules('firstname','First Name','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('hobbies','Hobbies','trim|required');
		$this->form_validation->set_rules('age','Age','trim|required|min_length[2]|max_length[5]');
		$this->form_validation->set_rules('quote','Quote','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('phone','Phone','trim|required|max_length[15]');
		$this->form_validation->set_rules('ambition','Ambition','trim|required');
		$this->form_validation->set_rules('year','Year','required');
		if( $this->form_validation->run()==false){

		$data['main_content'] ='add_graduates';
		$this->load->view('admin/main',$data);
		array('error'=>'');

		}else{

				$config['upload_path'] = './assets/images/graduates';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->upload->initialize($config);
				if($this->upload->do_upload('image')){
				$file_data = $this->upload->data();
				$file_name = $file_data['file_name'];
				}else{

					echo'error';
				}

				$image = $file_data['file_name'];
				print_r($image);
					$data = array(
						 'first_name'=>$this->input->post('firstname'),
						 'last_name'=>$this->input->post('lastname'),
						 'age'=>$this->input->post('age'),
						 'quote'=>$this->input->post('quote'),
						 'image'=>$file_data['file_name'],
						 'address'=>$this->input->post('address'),	
						 'hobbies'=>$this->input->post('hobbies'),
						 'phone'=>$this->input->post('phone'),
						 'ambition'=>$this->input->post('ambition'),
						 'year'=>$this->input->post('year'),				
						);
					$this->Admin_model->add_graduate($data);
					redirect('admin/add_graduates');
					$this->session->set_flashdata('success','Graduate added successfully');
				
			}

		}
	public function list_graduate(){
		$data['graduate'] = $this->Admin_model->list_graduate();
		$data['main_content'] = 'list_graduates';
		$this->load->view('admin/main',$data);
	}

	public function delete_graduate($id){

		if($this->Admin_model->delete_graduate($id)){
		redirect('admin/list_graduate');
	  }else{
	  	$this->session->set_flashdata('delete','Unable to delete graduate data');
	  	echo "unable to delete";
	  }
}

	public function update_student($id){
		$data['update_student'] =$this->Admin_model->graduate($id);
		$this->form_validation->set_rules('firstname','Firstname','trim|required');
		$this->form_validation->set_rules('lastname','Lastname','trim|required');
		$this->form_validation->set_rules('hobbies','Hobbies','trim|required');
		$this->form_validation->set_rules('age','Age','trim|required');
		$this->form_validation->set_rules('quote','Quote','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('phone','Phone','trim|required|max_length[15]');
		$this->form_validation->set_rules('ambition','Ambition','trim|required');
		$this->form_validation->set_rules('year','Year','required');
		if ($this->form_validation->run()==false) {	
			$data['main_content'] = 'update_student';
			$this->load->view('admin/main',$data);
		} else{

				$config['upload_path'] = './assets/images/graduates';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->upload->initialize($config);
				if($this->upload->do_upload('image')){
				$file_data = $this->upload->data();
				$file_name = $file_data['file_name'];				
				} else{

					echo'error';
				}

				$data = array(

					'first_name' => $this->input->post('firstname'),
					'last_name' => $this->input->post('lastname'),  
					'age' => $this->input->post('age'),
					'quote' => $this->input->post('quote'),
					'image' => $file_data['file_name'],
					'address'=> $this->input->post('address'),
					'hobbies' => $this->input->post('hobbies'),
					'phone' => $this->input->post('phone'),
					'ambition' =>$this->input->post('ambition'),
					'year' => $this->input->post('year'),

					);

					$id = $this->input->post('id');

				$this->Admin_model->update_graduate($id,$data);
				$this->session->set_flashdata('update_student','Update successfull');
				redirect('admin/list_graduate');
		}

	}

	public function login(){
		
		
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->form_validation->run()==false){
			$data['main_content'] = 'login';
			$this->load->view('login');	
		}else{


		$user_id = $this->Admin_model->login($username,$password);


		//Vallidating users data

		if($user_id){

			$data = array(
				'user_id' => $user_id,
				'user_name' => $username,
				'logged_in' => true,
				);
			// Set session user_data

			$this->session->set_userdata($data);

			// Set message
			$this->session->set_flashdata('login','You are currently logged in');
			redirect('admin');			
		}	else{

			// Set login error

			$this->session->set_flashdata('fail','Invalid user name or password');
			redirect('admin/login');
		}

	}
}

	public function logout(){

		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('Username');
		$this->session->sess_destroy();
		redirect('admin/login');

		}


    

}


	
?>