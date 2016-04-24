<?php

class Membership_model extends CI_Model{
	
		var $details;
	
		function create_user($data){
			$this->db->insert('users',$data);
		}
		
		function login($uname, $pword){
			$where = array(
				'user_username' => $uname,
				'user_password' => sha1($pword)
			);
			
			$this->db->select()->from('user_accounts_table')->where($where);
			$query = $this->db->get();
			return $query->first_row('array');
		}
		
		
		function validate() {
			
			$this->db->where('user_username', $this->input->post('uname'));
			$this->db->where('user_password', md5($this->input->post('pword')));
			$query = $this->db->get('user_accounts_table');
			
			if ($query->num_rows() == 1)
			{
			
			
				return true;		
			}
			
			return $query->result;
		}
		
		
	
}