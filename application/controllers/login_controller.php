<?php

class Login_controller extends CI_Controller{
	
	function index(){
		$this->load->view('site/index');	
	}
	
	function test(){
		$this->load->view('test_page');	
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect ('site/index');
	}
	
	
	function validate_credentials(){
		
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		$status = $this->membership_model->get_status();
		
		if($query == true)
		{
			session_start();
			$session_id = $this->session->session_id;
			
			$data = array(
				
				'username' => $this->input->post('uname'),
				'privilege' => $status,
				'session_id' => $session_id,
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			
			$this->membership_model->store_sess_id($session_id);
		
			redirect('login_controller/test');
		}
		else
		{
		echo "There is an error, Here!";	
		}
	}
	
	/*
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
	*/
}