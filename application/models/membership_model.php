<?php

class Membership_model extends CI_Model{
	
		function validate() {
			
			$this->db->where('user_username', $this->input->post('uname'));
			$this->db->where('user_password', md5($this->input->post('pword')));
			$query = $this->db->get('user_accounts_table');
			
			if ($query->num_rows() == 1)
			{
				return true;		
			}
		}
	
}