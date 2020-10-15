<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_controller extends CI_Controller
{


	public function index()
	{


$data['abc']='xyz';

$data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		  $data['all_db_testimonials']=$this->admin_model->select_all_testimonials_info(); 
		   $data['all_client_image']=$this->admin_model->all_client_image_info();
		$data['content'] = $this->load->view('index',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	



}
