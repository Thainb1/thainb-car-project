<?php

class Gallery_model extends CI_Model {

	var $gallery_path;
	var $gallery_path_url;
	

		function Gallery_model() {
			parent::__construct();

			$this->gallery_path = realpath(APPPATH . '../car_stock_images');
			$this->gallery_path_url = base_url().'car_stock_images/';
		}

		function do_upload() {

			$config = array(
					'allowed_types' => 'jpg|jpeg|gif|png', 
					'upload_path' => $this->gallery_path,
					'max_size' => 3000
				);

			$this->load->library('upload', $config);
			$this->upload->do_upload();
			$image_data = $this->upload->data();


			$config = array(
				'source_image' => $image_data['full_path'],
				'new_image' => $this->gallery_path . '/thumbs',
				'maintain_ration' => true,
				'width' => 150,
				'height' => 100
			);

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

		}
		
		function add_pictures()
		{
			$this->db->where('car_id', $this->uri->segment(3));
			$query = $this->db->get('car_details_table');
			return $query->result();
		}

		function get_images(){
			
			//Scandir is a PHP function that returns ALL the values of a specified path,
			//in this case, the image folder INCLUDING the thubs folder
			$files = scandir($this->gallery_path);
			//Because the file URL's are going to have dots (nesting) we must substract these
			//once the data has been retrieved.
			$files = array_diff($files, array('.', '..', 'thumbs'));
			
			$images = array();
			
			foreach ($files as $file) {
				$images[]= array (
					'url' => $this->gallery_path_url . $file,
					'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file 
				);								
			}
			
			return $images;			
		}
	}