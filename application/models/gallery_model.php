<?php

class Gallery_model extends CI_Model 
{

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
		
		function calling_car_dir()
		{
			$this->db->where('car_id', $this->uri->segment(3));
			$query = $this->db->get('car_details_table');
			
			$path = (FCPATH . 'car_stock_images/' . $this->uri->segment(3));

				if(!is_dir($path)) //create the folder if it's not already exists
			{	
				mkdir ($path,0755,TRUE);
			}
			
			return $query->result();
		}
		
		function image_upload(){
			
			if(isset($_FILES['image']))
			{
				//if no errors...
				if(!$_FILES['image']['error'])
				{
					//now is the time to modify the future file name and validate the file
					$valid_file =true;
					$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
					$new_file_name = uniqid(rand(), true) . '.' . $ext; //rename file
						if($_FILES['image']['size'] > (1024000)) //can't be larger than 1 MB
						{
							$valid_file = false;
							$message = 'Oops!  Your file size is to large.';
						}
		
					//if the file has passed the test
					if($valid_file)
					{
			
						//move it to where we want it to be
						move_uploaded_file($_FILES['image']['tmp_name'], $this->gallery_path_url . $this->uri->segment(3) . $new_file_name);
						$message = 'Congratulations!  Your file was accepted.';
					}
				}
				//if there is an error...
				else
				{
					//set that to be the returned message
					$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['image']['error'];
				}
			
				echo $message; ?><br><?php
				echo "File uploaded under the name: " . $new_file_name;
			}
		}
		
		function get_details($c_id)
		{
			
			$this->db->where('car_id', $c_id);
			$query = $this->db->get('car_details_table');
			return $query->result();		
		}
}