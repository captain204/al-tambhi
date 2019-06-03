<?php
class Results extends CI_controller{


	public function add_results(){

		$this->form_validation->set_rules('class','Class','required');
		$this->form_validation->set_rules('student_id','Student id','trim|required');
		$this->form_validation->set_rules('student_name','Student Name','trim');

		if ($this->form_validation->run()==false) {
			
			$data['main_content'] = 'add_results';
			$this->load->view('admin/main',$data);
		} else{

			$config['upload_path'] = './assets/file/results';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 0;
			$this->upload->initialize($config);
			if($this->upload->do_upload('userfile')){
				$file_data = $this->upload->data();
				$file_name = $file_data['file_name'];
				//print_r($file_data);
			}else{

				echo "error";
			}

			$data = array(

					'class' => $this->input->post('class'),
					'file' => $file_data['file_name'],
					'student_id'=> $this->input->post('student_id'),
					'student_name' => $this->input->post('student_name'),
				);
			$this->Result_model->add_result($data);
			$this->session->set_flashdata('add_result','Results added successully');
			redirect('results/add_results');

		}


	}


	public function list(){

		$data['results'] = $this->Result_model->list_results();
		$data['main_content'] = 'list_results';
		$this->load->view('admin/main',$data);
	}



}




?>