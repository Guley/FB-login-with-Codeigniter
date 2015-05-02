<?php
class Upload_model extends CI_Model {

// this function will be called instantenneously

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}
	public function upload_path(){

	// code to insert info 
		$title=$this->input->post('title');
		$image_data = $this->upload->data();
		$insert_data = array(
			'name' => $image_data['file_name'],
			'path' => $image_data['full_path'],
			'thumb_path'=> $image_data['file_path'] . 'thumbs/'. $image_data['file_name'],
			'type' =>$image_data['file_type'],
			'is_image'=>$image_data['is_image'],
			'file_ext'=>$image_data['file_ext'],
			'title'=>$title,
			);

          $this->db->insert('upload', $insert_data); //load array to database

      }

      // method to read data from database

  }


  
  ?>