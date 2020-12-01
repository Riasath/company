<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_controller extends CI_Controller
{


	public function index()
	{


         $data['abc']='xyz';

   $data['popup']=$this->admin_model->select_popup();
          $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		  $data['all_db_testimonials']=$this->admin_model->select_all_testimonials_info(); 
		   $data['all_client_image']=$this->admin_model->all_client_image_info();
		     $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		      $data['copyright']=$this->admin_model->copyright_info();
		      $data['blog_item']=$this->admin_model->blog_item_show();
		      $data['footermenu']=$this->admin_model->footermenu();
		   
		$data['content'] = $this->load->view('index',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	



}
