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
			$deets['records'] = $query;
		}
		
		if ($query0 = $this->Gallery_model->get_db_pics($c_id)) 
			{
				$deets['pics'] = $query0;
			}
		
		$this->load->view('add_pics', $deets);
	}
	
	function maintain_deets(){
		$c_id = "";
		$deets = array();
		
		$c_id = $this->input->post('id_p');
		
		if ($query1 = $this->Gallery_model->get_details($c_id))
			{
				$deets['records'] = $query1;
			}
			
		if ($query2 = $this->Gallery_model->get_db_pics($c_id)) 
			{
				$deets['pics'] = $query2;
			}
			
		$this->Gallery_model->image_upload($c_id);
		
		$this->load->view('add_pics', $deets);
	}
		
}
