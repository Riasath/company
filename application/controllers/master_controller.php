<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_controller extends CI_Controller
{
public function __construct(){

  parent::__construct();
  $this->load->model('Dropdown_model','menu_model','TRUE');
}

	public function index()
	{


  $data['abc']='xyz';
//dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
//hompage infobox
  $data['infobox1']=$this->admin_model->select_infobox1();
 $data['mainlogo']=$this->admin_model->select_logo();
   $data['popup']=$this->admin_model->select_popup();
   $data['sidebar']=$this->admin_model->select_sidebar();

  $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  	
  $data['testimonial_heading']=$this->admin_model->select_testimonial_heading(); 
   $data['client_heading']=$this->admin_model->select_client_heading(); 
   $data['counter']=$this->admin_model->select_counter(); 
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
