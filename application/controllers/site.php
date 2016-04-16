<?php

class Site extends CI_Controller
{

	/*--- The main 'index' function that the controller will default to ---*/
	
	function index()
	{	
		$this->load->view('home');
	}

	/*--- Showroom function that pulls the car records for the car index page ---*/

	function showroom()
	{
		$data = array();

		if ($query = $this->site_model->get_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('showroom', $data);
	}

	/*--- Function to pull news stories for the 'home' page ---*/

	function news()
	{
		$data = array();

		if ($query = $this->site_model->get_news()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('home', $data);
	}

	/*
		if ($this->form_validation->run()===FALSE)
		{
			echo "error";
			$this->load->view('sign_up');
			echo "error";
		}
		else
		{
			/*$username = $this->input->post('user_name');
			$password = $this->input->post('password');
			$result = $this->site_model->get_user($username, $password);

			if ($result === TRUE){
				redirect(base_url().'landing');
			}else{
				$data ['error_message'] = "Invalid Username and Password";
				redirect('site/login_success'); 
			}
		}
	*/

	/*--- When validation checks out, this function writes user details to the database ---*/

	function signup()
	{

		$userdata =  array(

			'user_forename' => $this->input->post('fname'),
			'user_surname' => $this->input->post('sname'),
			'user_email' => $this->input->post('email'),
			'user_mobile' => $this->input->post('mobile'),
			'user_home_phone' => $this->input->post('home'),
			'user_username' => $this->input->post('uname'),
			'user_password' => $this->input->post('pword')
			);

			$this->site_model->add_user($userdata);
			$this->index();
	}

	/*--- Validates login details and either starts session or return an error ---*/

	function login()
	{
		$this->form_validation->set_rules('uname', 'Username','required|trim|max_length[50]|xss_clean');
		$this->form_validation->set_rules('pword', 'Password','required|trim|max_length[50]|xss_clean');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if ($this->form_validation->run()===FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			$username = $this->input->post('user_name');
			$password = $this->input->post('password');
			$result = $this->site_model->get_user($username, $password);

			if ($result === TRUE){
				redirect(base_url().'landing');
			}else{
				$data ['error_message'] = "Invalid Username and Password";
				redirect('site/login_fail'); 
			}
		}
	}
			/*extract($_POST);
			$user_info = $this->site_model->check_login($uname, $pword);

			if(! $user_info)
			{
				//login failed message
				$this->session->set_flashdata('login_error',TRUE);
				redirect('site/login_fail');

			}
			else
			{
				//login 
				$sessiondata = array (
				
					'logged in' => TRUE,
					'user_id' => $this->session->userdata('user_id'),
					'fname' => $this->session->userdata('user_forename')	
				);
					$this->session->set_userdata($sessiondata);
				
				
				redirect('site/login_success',$sessiondata);
			}
		}
	}
	*/

	/*--- Writes car details to the stock data base ---*/

	function create()
	{
		$data =  array(

			'car_make' => $this->input->post('make'),
			'car_model' => $this->input->post('model'),
			'car_miles' => $this->input->post('miles'),
			'car_year' => $this->input->post('year'),
			'car_price' => $this->input->post('price'),
			'car_transmission' => $this->input->post('trans'),
			'special_id' => $this->input->post('special'),
			);

			$this->site_model->add_record($data);
			$this->car_db();
	}

	/*--- Deletes a car record from the data base ---*/

	function delete()
	{
		$this->site_model->delete_row();
		$this->car_db();
	}

	/*--- Pulls the selected record for editing ---*/

	function edit()
	{
		$data = array();
		if ($query = $this->site_model->edit_record()){
			$data['record'] = $query;
		}

		$this->load->view('car_update', $data);
	}

	/*--- Allows the editing of a record in the car database ---*/

	function update() 
	{
		$data =  array(
			'car_id' => $this->input->post('id'),
			'car_make' => $this->input->post('make'),
			'car_model' => $this->input->post('model'),
			'car_miles' => $this->input->post('miles'),
			'car_year' => $this->input->post('year'),
			'car_price' => $this->input->post('price'),
			'car_transmission' => $this->input->post('trans'),
			'special_id' => $this->input->post('special'));
		
			$this->site_model->update_record($data);
			$this->car_db();		
	}

	/*--- Controller to the SIGN UP Page ---*/
	function sign_up()
	{
		$this->load->view('sign_up');
	}

	/*--- Controller to the ABOUT US Page ---*/
	function about()
	{
		$this->load->view('about');
	}

	/*--- Controller to the CONTACT US Page ---*/
	function contact()
	{
		$this->load->view('contact');
	}

	/*--- Controller to the LOG IN Page ---*/
	function log_in()
	{
		$this->load->view('login');
	}

	/*--- Controller to the HOME/LANDING Page ---*/
	function home()
	{	
		$this->load->view('home');
	}

	/*--- Controller to the INDIVIDUAL CAR PAGE Page ---*/
	function view_item()
	{
		$this->load->view('car_item_view');
	}

	/*--- Controller to the ADMIN DASHBOARD Page ---*/
	function admin()
	{
		$this->load->view('admin');
	}

	/*--- Controller to the STAFF DASHBOARD Page ---*/
	function staff()
	{
		$this->load->view('staff_dashboard');
	}

	/*--- Controller to the ADD A CAR Page ---*/
	function add_car()
	{
		$this->load->view('add_car');
	}

	/*--- Controller to the ADD NEWS PAGE Page ---*/
	function news_page()
	{
		$this->load->view('add_news');
	}

	/*--- Controller to the CAR STOCK TABLE Page ---*/
	function car_db()
	{
		{
		$data = array();

		if ($query = $this->site_model->get_records()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('car_database',$data);
	}
	/*--- / end load views set ---*/
	}

/*--- NEWS RELATED CONTROLS -> MOVE TO NEWS CONTROLLER LATER ---*/

	function add_news()
		{
			
			$data =  array(

				'article_title' => $this->input->post('art_tit'),
				'article_body' => $this->input->post('art_body'),
				'user_id' => $this->input->post('author'),
				'post_time' => $this->input->post('stamp')

				);

				$this->site_model->add_news($data);
				$this->news_db();
		}

	function news_db()
		{
		$data = array();

		if ($query = $this->site_model->get_news()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('news_database', $data);
	}

	function news_delete()
	{
		$this->site_model->delete_news();
		$this->news_db();
	}


	function news_edit()
	{
		$data = array();
		if ($query = $this->site_model->edit_news()){
			$data['record'] = $query;
		}

		$this->load->view('news_update', $data);
	}

	function update_news() 
		{
			$data =  array(
				'news_id' => $this->input->post('id'),
				'article_title' => $this->input->post('art_tit'),
				'article_body' => $this->input->post('art_body'),
				'user_id' => $this->input->post('author'),
				'post_time' => $this->input->post('stamp')
				);
			
				$this->site_model->update_news($data);
				$this->news_db();		
		}
}














