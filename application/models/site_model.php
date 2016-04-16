<?php

class site_model extends CI_Model {
	
	function get_records()
	{
		$query = $this->db->get('car_details_table');
		return $query->result();
	}

	function get_news()
	{
		$query = $this->db->get('news_details_table');
		return $query->result();
	}

	function add_record($data)
	{
		$this->db->insert('car_details_table', $data);
		return;
	}

	function add_user($userdata)
	{
		$this->db->insert('user_accounts_table', $userdata);
		return;
	}

	function get_user($username, $password)
	{

		$query = $this->db->get_where('user_accounts_table', array('user_username'=>$username));
		if ($query->num_rows() > 0){
			$query = $query->row_array();
			$user_name = $query['user_username'];
			$password = $query['user_password'];

				if ($username === $user_name){
					$userdata = array ('user_name' => $user_name);
					$this->session->set_userdata($userdata);
					return TRUE;
				}else{
					return FALSE;
				}
			}
	}
	/*function check_login($uname, $pword)
	{
		$var_password = ($pword);

		$query_str = "SELECT user_id FROM user_accounts_table WHERE user_username = ? and user_password = ?";
		$result = $this->db->query($query_str, array($uname, $var_password));

		if ($result->num_rows() == 1)
		{
			return $result->row(0)->user_id;
		}
		else
		{
			return false;
		}
	}*/

	function delete_row()
	{
		$this->db->where('car_id', $this->uri->segment(3));
		$this->db->delete('car_details_table');
	}

	function edit_record()
	{
		$this->db->where('car_id', $this->uri->segment(3));
		$query = $this->db->get('car_details_table');
		return $query->result();

	}

	function update_record($data){
		$this->db->where('car_id', $data['car_id']);
		//$this->db->where('car_id', $this->uri->segment(3));
		$this->db->update('car_details_table', $data);
	}

	function add_news($data)
	{
		$this->db->insert('news_details_table', $data);
		return;
	}


	function delete_news()
	{
		$this->db->where('news_id', $this->uri->segment(3));
		$this->db->delete('news_details_table');
	}

	function edit_news()
	{
		$this->db->where('news_id', $this->uri->segment(3));
		$query = $this->db->get('news_details_table');
		return $query->result();

	}

	function update_news($data){
		$this->db->where('news_id', $data['news_id']);
		//$this->db->where('car_id', $this->uri->segment(3));
		$this->db->update('news_details_table', $data);
	}



/*
function add_user($data)
	{
		$this->db->insert('user_accounts_table', $data);
		return;
	}*/

	function get_users()
	{
		$query = $this->db->get('user_accounts_table');
		return $query->result();
	}

	function user_delete()
	{
		$this->db->where('user_id', $this->uri->segment(3));
		$this->db->delete('user_accounts_table');
	}

	function edit_user()
	{
		$this->db->where('user_id', $this->uri->segment(3));
		$query = $this->db->get('user_accounts_table');
		return $query->result();

	}

	function update_user($data){
		$this->db->where('user_id', $data['user_id']);
		//$this->db->where('car_id', $this->uri->segment(3));
		$this->db->update('user_accounts_table', $data);
	}

	/* Section for calling car details for individual items*/

	function calling_car()
	{
		$this->db->where('car_id', $this->uri->segment(3));
		$query = $this->db->get('car_details_table');
		return $query->result();
	}
}