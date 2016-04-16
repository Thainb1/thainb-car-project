<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class car_controller extends CI_Controller{
function __construct(){
parent::__construct();
}
function you(){
$this->load->view('car_view');
}
}
?>