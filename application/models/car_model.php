<?php

class car_model extends CI_Model {

function __construct()

{

parent::__construct();

$this->load->database();

}

public function get_all_cars()

{

$query = $this->db->get('car_details_table');

return $query->result();

}

}