<?php

class Login_controller extends CI_Controller{
	
	function index(){
		$this->load->view('site/index');	
	}
	
	function validate_credentials(){
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query)
		{
			
			$data = array(
				'username' => $this->input->post('uname'),
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('site/admin');
		}
		else
		{
		echo "There is an error, Here!";	
		}
	}
	
}