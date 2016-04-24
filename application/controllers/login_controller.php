<?php

class Login_controller extends CI_Controller{
	
	function index(){
		$this->load->view('site/index');	
	}
	
	function login(){
		$data['error']=0;
		if($_POST){
			$this->load->model('membership_model');
			$user_username = $this->input->post('uname', true);
			$user_password = $this->input->post('pword', true);
			$user = $this->user->login($user_username, $user_password);
			if(!$user){
				$data['error']=1;
			} else {
				$this->session->set_userdata('user_id', $user['user_id']);
				$this->session->set_userdata('user_status', $user['user_status']);
				redirect ('site/index');
			}
		}
		
		$this->load->view('site/index');
		
	}

	
	function logout(){
		$this->session->sess_destroy();
		redirect ('site/index');
	}
	
	
	function validate_credentials(){
		
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query == true)
		{
			
			
			
			$data = array(
				
				'username' => $this->input->post('uname'),
				'privilage' => $status,
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