<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class car_controller2 extends CI_Controller{
// declare variables or class properties
var $name;
var $color;
function __construct(){
parent::__construct();
// give default value
$this->name="Ben";
$this->color="Blue";
}
function you(){
$data['name']=$this->name;
$data['color']=$this->color;
// define variable sent to views
$this->load->view('car_view2',$data);
}
}
?>