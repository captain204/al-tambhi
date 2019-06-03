<?php
class Graduates extends CI_controller{

	public function index(){
		$data['graduates'] = $this->Graduates_model->get_graduates();
		$data['main_content'] ='graduates';
		$this->load->view('layouts/main_nav.php',$data);
	}

	public function year_one(){
		$year ='2018';
		$data['graduates'] = $this->Graduates_model->get_year($year);
		$data['main_content'] ='graduates';
		$this->load->view('layouts/main_nav.php',$data);	
	}

	public function year_two(){

		$year ='2019';
		$data['graduates'] = $this->Graduates_model->get_year($year);
		$data['main_content'] ='graduates';
		$this->load->view('layouts/main_nav.php',$data);
	}

	public function year_three(){

		$year ='2020';
		$data['graduates'] = $this->Graduates_model->get_year($year);
		$data['main_content'] ='graduates';
		$this->load->view('layouts/main_nav.php',$data);
	}

	public function login(){

		$this->form_validation->set_rules('id_number','ID number','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]');
		$id_number = $this->input->post('id_number');
		$password = $this->input->post('password');
		if($this->form_validation->run()==false){
			$data['main_content'] = 'login';
			$this->load->view('graduate_login');
		}else{

			$user = $this->Graduates_model->login($id_number,$password);

			if($user){


				$data = array(

				'user_id' => $user,
				'user_name'=>$username,
				'logged_in'=> true,
				);
				$this->session->set_userdata($data);
				// Set message

				$this->session->set_flashdata('user_login','You are currently logged in');
				redirect('graduates');
			}else{

				$this->session->set_flashdata('login_fail','Invalid username or password');
				redirect('graduates/login');
			}

		}


	}


	public function logout(){

		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('home');
	}


}


?>