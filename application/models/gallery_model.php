<?php

class Gallery_model extends CI_Model {

	var $gallery_path;

		function Gallery_model() {
			parent::__construct();

			$this->gallery_path = realpath(APPPATH . '../car_stock_images');

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

		function get_images() {
			$files = s

		}

}
/* https://www.youtube.com/watch?v=4kaNVfPxYkU (22.25) */