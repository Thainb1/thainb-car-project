<?php

class Sessions_controller extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();		
	}
	
	
	function customer_dash() {
		$this->load->view('home');		
	}
	
	function staff_dash() {
		$this->load->view('staff_dashboard');	
	}
	
	function admin_dash() {
		$this->load->view('admin');	
	}
	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			die();
		}
		
		i
		
	}
	
}