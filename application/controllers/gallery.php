<?php

class Gallery extends CI_Controller{
	
	function index() {

		$this->load->model('Gallery_model');

		if($this->input->post('upload')) {
			$this->Gallery_model->do_upload();
		}
		//Getting the images in order to display in gallery: triggering the "get_images"
		//function in the model (Gallery_Model)
		$data['images'] = $this->Gallery_model->get_images();
		//Once the upload has been carried out, the user is directed to the gallery view
		$this->load->view('add_pics', $data);

	}
	
	/* Delivers the information to the add_pics page to give the image name info (the car_id) */
	
	function add_car_pics()
	
	{
		$data = array();

		if ($query = $this->site_model->calling_car()) 
		{
			$data['records'] = $query;
		}
		$this->load->view('add_pics', $data);
	}
	
}
