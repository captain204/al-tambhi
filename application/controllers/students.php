<?php
class Students extends CI_controller{

	public function add_student(){

		$this->form_validation->set_rules('firstname','Firstname','trim|required|min_length[2]|max_length[35]');
		$this->form_validation->set_rules('middlename','Middle name','trim|required|min_length[2]|max_length[35]');
		$this->form_validation->set_rules('lastname','Lastname','trim|required|min_length[2]|max_length[35]');
		$this->form_validation->set_rules('phone','Phone number','trim|required|min_length[2]|max_length[35]');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('student_id','Student id','trim');
		$this->form_validation->set_rules('bg','Blood group','trim');
		$this->form_validation->set_rules('class','Class','trim|required');
		$this->form_validation->set_rules('genotype','Genotype','required');
		$this->form_validation->set_rules('dob','Date of birth','trim|required');

		if($this->form_validation->run()== false){

			$data['main_content'] = 'add_students';				
			$this->load->view('admin/main',$data);

		}else{

				$config['upload_path'] = './assets/images/students';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$this->upload->initialize($config);
				if($this->upload->do_upload('image')){
				$file_data = $this->upload->data();
				$file_name = $file_data['file_name'];				
				} else{

					echo'error';
				}


				$data = array(
						'firstname' =>$this->input->post('firstname'),
						'middlename'=>$this->input->post('middlename'),
						'lastname'=>$this->input->post('lastname'),
						'parent_phone'=>$this->input->post('phone'),
						'address'=>$this->input->post('address'),
						'student_id'=>$this->input->post('student_id'),
						'blood_group'=>$this->input->post('bg'),
						'class'=>$this->input->post('class'),
						'genotype'=>$this->input->post('genotype'),
						'image'=>$file_data['file_name'],
						'date_birth'=>$this->input->post('dob'),
					);

				if($this->Student_model->add_student($data)){
				$this->session->set_flashdata('add_student','New student added successfully');
				redirect('admin');
			}else{

				echo "error in adding student";
			}

		}


	}


	public function list(){

	$data['students'] = $this->Student_model->list_student();
	$data['main_content'] = 'list_students';
	$this->load->view('admin/main',$data);	


	}


	public function login(){

		$this->form_validation->set_rules('student_id','Student ID','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
		$student_id = $this->input->post('student_id');
		$password = $this->input->post('password');
		if($this->form_validation->run()==false){

			$data['main_content'] = 'student_login';
			$this->load->view('student_login');	
		}else{
		$user_id = $this->Student_model->login($student_id,$password);
		//$data['students'] = $this->Student_model->profile($student_id,$password);

		//Vallidating users data

		if($user_id){

			$data = array(
				'user_id' => $user_id,
				'student_id' => $student_id,
				'logged_in' => true,
				'password' =>$password,
				//'lastname' =>$lastname,
				//'class' => $class,
				);
			// Set session user_data

			$this->session->set_userdata($data);

			// Set message
			$this->session->set_flashdata('login','You are currently logged in');
			//print_r($this->session->userdata());
			redirect('students/profile');			
		}	else{

			// Set login error

			$this->session->set_flashdata('fail','Invalid user name or password');
			redirect('students/login');
		}

		}
	}




	public function profile(){
		
		$student_id = $this->session->userdata('student_id');
		$password = $this->session->userdata('password');
		$data['students'] =$this->Student_model->profile($student_id,$password);
		$data['results'] = $this->Result_model->student_results($student_id); 
		$data['main_content'] ='profile';
		$this->load->view('layouts/main_nav.php',$data);

	
	}





	public function logout(){

		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('firstname');
		$this->session->unset_userdata('student_id');
		$this->session->unset_userdata('class');
		$this->session->unset_userdata('password');
		redirect('home');


	}

}


?>