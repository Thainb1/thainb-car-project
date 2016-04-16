<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cars extends CI_Controller {

function __construct()

{

parent::__construct();

#$this->load->helper('url');

$this->load->model('car_model');

}

public function index()

{

$data['car_list'] = $this->car_model->get_all_cars();

$this->load->view('show_cars', $data);

}

}
