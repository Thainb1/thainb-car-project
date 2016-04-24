<?php

class Gallery extends CI_Controller{
	
	function index() {

		

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
		
		$c_id = $this->uri->segment(3);
		
		if ($query = $this->Gallery_model->calling_car_dir($c_id)) 
		{
			$data['records'] = $query;
		}
		
		$this->load->view('add_pics', $data);
	}
	
	function maintain_deets(){
		
		$deets = array();
		
		$c_id = $this->input->post('id_p');
		
		if ($query = $this->Gallery_model->get_details($c_id))
			{
				$deets['deet_rec'] = $query;
			}

		$this->Gallery_model->image_upload($c_id);
		
		$this->load->view('add_pics', $deets);
	}
	
	
	function get_pics(){
		
		$existing_pics = array();

		if ($query = $this->Gallery_model->get_db_pics()) 
			{
				$existing_pics['records'] = $query;
			}
		
		$this->load->view('add_pics',$existing_pics);
	}
	
}
