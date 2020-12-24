<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
public function __construct(){

  parent::__construct();
  $this->load->model('Dropdown_model','menu_model','TRUE');
}
	public function about(){


$data['abc']='xyz';
//dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['mainlogo']=$this->admin_model->select_logo();
$data['all_db_story']=$this->admin_model->select_short_story(); 
$data['all_foundation']=$this->admin_model->select_all_foundation(); 
$data['all_expert']=$this->admin_model->select_all_expert(); 
$data['all_work']=$this->admin_model->select_all_work(); 
$data['all_team']=$this->admin_model->select_all_team(); 
$data['all_promo']=$this->admin_model->select_all_promo(); 
$data['all_vision']=$this->admin_model->select_all_vision(); 
$data['all_feedback']=$this->admin_model->select_all_feedback(); 
$data['all_partner']=$this->admin_model->select_all_partner(); 
$data['all_partner_image']=$this->admin_model->select_all_partner_image(); 
 $data['sidebar']=$this->admin_model->select_sidebar();

$data['content'] = $this->load->view('pages/about',$data, TRUE);

$data['footer_top']=$this->admin_model->footer_top_info();
$data['short_stoty_variable']=$this->admin_model->select_short_story();
$data['footer_bottom']=$this->admin_model->footer_bottom_info();
$data['footer_icon']=$this->admin_model->footer_icon();
$data['footermenu']=$this->admin_model->footermenu();
$data['copyright']=$this->admin_model->copyright_info();

$this->load->view('main_layout',$data);
	

	}
public function service(){


 
 $data['abc']='xyz';
 //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
  $data['popup']=$this->admin_model->select_popup();
     $data['popupicon']=$this->admin_model->select_popupicon();
  $data['mainlogo']=$this->admin_model->select_logo();
 $data['all_service']=$this->admin_model->select_all_service(); 
 $data['all_feature']=$this->admin_model->select_all_feature(); 
 $data['all_product']=$this->admin_model->select_all_product(); 
 $data['all_tools']=$this->admin_model->select_all_tools(); 
 $data['all_tools_box']=$this->admin_model->select_all_tools_box(); 
 $data['all_contact']=$this->admin_model->select_all_contact(); 
 $data['all_agency']=$this->admin_model->select_all_agency(); 
 $data['all_quality']=$this->admin_model->select_all_quality();
 $data['all_qualityitem']=$this->admin_model->select_all_qualityitem();  
$data['sidebar']=$this->admin_model->select_sidebar();
$data['content'] = $this->load->view('pages/service',$data, TRUE);

$data['footer_top']=$this->admin_model->footer_top_info();
$data['footermenu']=$this->admin_model->footermenu();
$data['footer_bottom']=$this->admin_model->footer_bottom_info();
$data['footer_icon']=$this->admin_model->footer_icon();
$data['copyright']=$this->admin_model->copyright_info();

$this->load->view('main_layout',$data);
	

	}

	public function digital_service(){


 
 $data['abc']='xyz';
 //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
  $data['popup']=$this->admin_model->select_popup();
     $data['popupicon']=$this->admin_model->select_popupicon();
$data['all_dservice']=$this->admin_model->select_all_dservice();
$data['mainlogo']=$this->admin_model->select_logo(); 
$data['all_description']=$this->admin_model->select_all_description(); 
$data['all_tell']=$this->admin_model->select_all_tell(); 
$data['all_levels']=$this->admin_model->select_all_levels(); 
$data['all_levelsbox']=$this->admin_model->select_all_levelsbox(); 
$data['all_accordon']=$this->admin_model->select_all_accordon(); 
$data['all_brand']=$this->admin_model->select_all_brand(); 
$data['all_brandbox']=$this->admin_model->select_all_brandbox(); 

$data['sidebar']=$this->admin_model->select_sidebar();

$data['content'] = $this->load->view('pages/digital_service',$data, TRUE);

$data['footer_top']=$this->admin_model->footer_top_info();
$data['footermenu']=$this->admin_model->footermenu();
$data['footer_bottom']=$this->admin_model->footer_bottom_info();
$data['footer_icon']=$this->admin_model->footer_icon();
$data['copyright']=$this->admin_model->copyright_info();

$this->load->view('main_layout',$data);
	

	}
public function portfolio()
	{
	 $data['abc']='xyz';
	 //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
$data['sidebar']=$this->admin_model->select_sidebar();
      $data['popup']=$this->admin_model->select_popup();
         $data['popupicon']=$this->admin_model->select_popupicon();
      $data['mainlogo']=$this->admin_model->select_logo();
      $data['android_items']=$this->admin_model->select_android_items();
      $data['web_development']=$this->admin_model->select_web_development_items();
       $data['web_design']=$this->admin_model->select_web_design_items();
       $data['software']=$this->admin_model->select_software_items();
       $data['demo']=$this->admin_model->select_demo_items();
		$data['content'] = $this->load->view('pages/portfolio',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		       $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
public function erpsolutions()
	{
	 $data['abc']='xyz';
	 //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
$data['sidebar']=$this->admin_model->select_sidebar();
$data['mainlogo']=$this->admin_model->select_logo();
      $data['popup']=$this->admin_model->select_popup();
         $data['popupicon']=$this->admin_model->select_popupicon();
		$data['content'] = $this->load->view('pages/erp',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		       $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function micro_finance()
	{
		
		

 $data['abc']='xyz';
 //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
  $data['popup']=$this->admin_model->select_popup();
     $data['popupicon']=$this->admin_model->select_popupicon();
  $data['mainlogo']=$this->admin_model->select_logo();
$data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
     $data['sidebar']=$this->admin_model->select_sidebar();
		$data['content'] = $this->load->view('pages/micro_finance',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
$data['footermenu']=$this->admin_model->footermenu();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function office_mgt()
	{
		
		
 $data['abc']='xyz';
 //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['mainlogo']=$this->admin_model->select_logo();
 $data['sidebar']=$this->admin_model->select_sidebar();
   $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/office_mgt',$data, TRUE);
		$data['footermenu']=$this->admin_model->footermenu();
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function e_commerce()
	{
	   $data['abc']='xyz';
	   //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['mainlogo']=$this->admin_model->select_logo();
 $data['sidebar']=$this->admin_model->select_sidebar();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/e_commerce',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function school_mgt()
	{
	    $data['abc']='xyz';
	    //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['mainlogo']=$this->admin_model->select_logo();
 $data['sidebar']=$this->admin_model->select_sidebar();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/school_mgt',$data, TRUE);
		$data['footermenu']=$this->admin_model->footermenu();
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function point_sale()
	{
	    $data['abc']='xyz';
	    //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['mainlogo']=$this->admin_model->select_logo();
$data['sidebar']=$this->admin_model->select_sidebar();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/point_sale',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function storage()
	{
		$data['abc']='xyz';
		//dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/storage',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	  
	}
	public function testimonials()
	{
		$data['abc']='xyz';
		//dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['mainlogo']=$this->admin_model->select_logo();
 $data['sidebar']=$this->admin_model->select_sidebar();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/testimonials',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	   
	}
	public function mobile_app()
	{
	   $data['abc']='xyz';
	   //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/mobile_app',$data, TRUE);
		$data['footermenu']=$this->admin_model->footermenu();
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}

public function cloud_app()
	{
	      $data['abc']='xyz';
	      //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/cloud_app',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function pay_per()
	{
	   $data['abc']='xyz';
	   //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['mainlogo']=$this->admin_model->select_logo();
 $data['sidebar']=$this->admin_model->select_sidebar();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/pay_per',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function iot_app()
	{
	  $data['abc']='xyz';
	  //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/iot_app',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function local_seo()
	{
	   $data['abc']='xyz';
	   //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['mainlogo']=$this->admin_model->select_logo();
 $data['sidebar']=$this->admin_model->select_sidebar();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/local_seo',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function seo()
	{
	    $data['abc']='xyz';
	    //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/seo',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function media_marketing()
	{
	    $data['abc']='xyz';
	    //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/media_marketing',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function email_marketing()
	{  $data['abc']='xyz';
	//dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/email_marketing',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function contact()
	{
	   $data['abc']='xyz';
	   //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
$data['contact_heading']=$this->admin_model->select_contact_heading();
$data['form_heading']=$this->admin_model->select_form_heading();
  $data['contact_address']=$this->admin_model->select_contact_address();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/contact',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function blog()
	{
	  
	   $data['abc']='xyz';
	   //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/blog',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}
	public function service_promo()
	{
	    	   $data['abc']='xyz';
	    	   //dropdown
  $data['dropdowns']=$this->menu_model->dropdown_menu();
  $data['dropdown_items']=$this->menu_model->dropdown_menu_item();
 $data['popup']=$this->admin_model->select_popup();
    $data['popupicon']=$this->admin_model->select_popupicon();
 $data['sidebar']=$this->admin_model->select_sidebar();
 $data['mainlogo']=$this->admin_model->select_logo();
     $data['all_db_slider']=$this->slider_model->select_all_slider_info();
  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/service_promo',$data, TRUE);
		  $data['footer_top']=$this->admin_model->footer_top_info();
		     $data['footer_bottom']=$this->admin_model->footer_bottom_info();
		     $data['footermenu']=$this->admin_model->footermenu();
		      $data['footer_icon']=$this->admin_model->footer_icon();
		       $data['copyright']=$this->admin_model->copyright_info();

		$this->load->view('main_layout',$data);
	}

 





	
}
