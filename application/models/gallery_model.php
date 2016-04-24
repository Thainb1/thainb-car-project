<?php

class Gallery_model extends CI_Model 
{

	var $gallery_path;
	var $gallery_path_url;
	

		function Gallery_model() {
			parent::__construct();

			$this->gallery_path = realpath(APPPATH . '../car_stock_images');
			$this->gallery_path_url = (FCPATH .'car_stock_images/');
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
			/*
			foreach ($files as $file) {
				$images[]= array (
					'url' => $this->gallery_path_url . $file,
					'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file 
				);								
			}
			*/
			return $images;			
		}
		
		function calling_car_dir($c_id)
		{
			$this->db->where('car_id', $c_id);
			$query = $this->db->get('car_details_table');
			
			$path = (FCPATH . 'car_stock_images/' . $c_id);

				if(!is_dir($path)) //create the folder if it's not already exists
			{	
				mkdir ($path,0755,TRUE);
			}
			
			return $query->result();
		}
		
		function image_upload($c_id){
			
			if(isset($_FILES['photo']['name']))
			{
				//if no errors...
				if(!$_FILES['photo']['error'])
				{
					//now is the time to modify the future file name and validate the file
					$valid_file =true;
					$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
					$new_file_name = uniqid(rand(), true) . '.' . $ext; //rename file
						if($_FILES['photo']['size'] > (5024000)) //can't be larger than 5 MB
						{
							$valid_file = false;
							$message = 'Oops!  Your file size is to large.';
						}
		
					//if the file has passed the test
					if($valid_file)
					{
						$gallery_path_url = FCPATH .'car_stock_images'. DIRECTORY_SEPARATOR . $c_id . DIRECTORY_SEPARATOR . $new_file_name;
						$db_path_url = Base_url() .'car_stock_images'. DIRECTORY_SEPARATOR . $c_id . DIRECTORY_SEPARATOR . $new_file_name;
						
						/*
						
						$config = array(
						'allowed_types' => 'jpg|jpeg|gif|png', 
						'upload_path' => $this->gallery_path,
						'max_size' => 10000000
						'maintain_ration' => true,
						'width' => 150,
						'height' => 100
						);
						
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
						
						*/
						
						//move it to where we want it to be
						move_uploaded_file($_FILES['photo']['tmp_name'], $gallery_path_url);
						$message = 'Congratulations!  Your file was accepted.';
					}
				}
				//if there is an error...
				else
				{
					//set that to be the returned message
					$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
				}
			
				echo $message; ?> <br> <?php
				echo "File uploaded under the name: " . $new_file_name; ?> <br> <?php
				echo $gallery_path_url;
			}
			
			$pic_db = array(
				'car_id' => $c_id,
				'image_src' => $db_path_url  				
			);
			
			$this->db->insert('car_image_table', $pic_db);
			unset($pic_db);
			
		}
		
		function get_details($c_id)
		{
			
			$this->db->where('car_id', $c_id);
			$query = $this->db->get('car_details_table');
			return $query->result();		
		}
		
		function get_db_pics($c_id){
			$this->db->where('car_id', $c_id);
			$query = $this->db->get('car_image_table');
				if ($query->num_rows() > 0)
					{
						echo "Yay! Images found!";
					} else {
						echo "No images currently available, Please Upload!";
					}
				return $query->result();
		}
		
		/* TEST FOR A CLEANER METHOD ------------------------------------------ END */
		
		function get_details2($c_id)
		{
			
			$this->db->where('car_id', $c_id);
			$query = $this->db->get('car_details_table');
			$result = array();
				
			return $result;		
		}
		
		function get_db_pics2($c_id)
		{
			$this->db->where('car_id', $c_id);
			$query = $this->db->get('car_image_table');
			$result = array();
			
			return $result;	
		}
		
		
		
		
		
		
		
		/* TEST FOR A CLEANER METHOD ------------------------------------------ END */
		
		
}