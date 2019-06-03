<?php
class Home extends CI_controller{

	public function index(){

		$data['main_content'] ='home';
		$this->load->view('layouts/main',$data);
	}

	public function contact(){

		$data['main_content'] = 'contact';
		$this->load->view('layouts/main',$data);
	}

}

?>