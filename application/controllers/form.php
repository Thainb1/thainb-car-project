<?php

class Form extends CI_Controller {
	
	function index()
	{

        $this->form_validation->set_rules(
        'fname', 'First Name',
        'required',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );

        $this->form_validation->set_rules(
        'sname', 'Surname',
        'required',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );

        $this->form_validation->set_rules(
        'uname', 'Username',
        'required|min_length[5]|max_length[12]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );

        $this->form_validation->set_rules('pword', 'Password', 'required');
        $this->form_validation->set_rules('rpword', 'Password Confirmation', 'required|matches[password]');

        $this->form_validation->set_rules('email-ad', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('home-ph', 'Home Phone', 'required');
        $this->form_validation->set_rules('mobile-ph', 'Mobile Phone', 'required');

        $this->form_validation->set_error_delimiters('<div class="error"><span class = "test"><i class="fa fa-ban"></i></span>', '</div>');

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('sign_up');
                }
                else
                {
                        $this->load->view('login_success');
                }
	}

    function account_create(){
        
        $data =  array(

            'user_forename' => $this->input->post('fname'),
            'user_surname' => $this->input->post('sname'),
            'user_email' => $this->input->post('email-ad'),
            'user_mobile' => $this->input->post('mobile-ph'),
            'user_home_phone' => $this->input->post('home-ph'),
            'user_username' => $this->input->post('uname'),
            'user_password' => $this->input->post('pword'),
            'user_status' => $this->input->post('status')
            );

            $this->site_model->add_user($data);
            $this->users();
    }

    function users()
    {
        $this->load->view('account_create');
    }

    function users_db()
        {
        $data = array();

        if ($query = $this->site_model->get_users()) 
        {
            $data['records'] = $query;
        }
        $this->load->view('account_database', $data);
    }

    function user_delete(){
        $this->site_model->user_delete();
        $this->users_db();

    }

    function user_edit()
    {
        $data = array();
        if ($query = $this->site_model->edit_user()){
            $data['record'] = $query;
        }

        $this->load->view('account_edit', $data);
    }

    function user_update() 
        {
            $data =  array(
            'user_id' => $this->input->post('id'),
            'user_forename' => $this->input->post('fname'),
            'user_surname' => $this->input->post('sname'),
            'user_email' => $this->input->post('email-ad'),
            'user_mobile' => $this->input->post('mobile-ph'),
            'user_home_phone' => $this->input->post('home-ph'),
            'user_username' => $this->input->post('uname'),
            'user_password' => $this->input->post('pword'),
            'user_status' => $this->input->post('status')
                );
            
                $this->site_model->update_user($data);
                $this->users_db();       
        }

}

?>