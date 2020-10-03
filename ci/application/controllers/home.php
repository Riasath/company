<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()



	{
            $data=array();
            $data['title']='RTSOFTBD - Software And System Designs';
            $data['header_section']='pages/header';
            $data['popup_section']='pages/popup';
            $data['menu_section']='pages/menu';
            $data['slider_section']='pages/slider';
            $data['infobox_section']='pages/box';
            $data['footer_page']='pages/footer';
            $data['testimonial_section']='pages/testimonial';
            $data['blog_section']='pages/blog';
            $data['counter_section']='pages/counter';
            $data['client_section']='pages/client';
            $data['subscribe_section']='pages/subscribe';
            $data['signup_section']='pages/signup';
			$this->load->view('site',$data);

     }
     public function home_menu(){

 
            $data['title']='RTSOFTBD - Software And System Designs';
            $data['header_section']='pages/header';
            $data['popup_section']='pages/popup';
            $data['menu_section']='pages/menu';
            $data['slider_section']='pages/slider';
            $data['infobox_section']='pages/box';
            $data['footer_page']='pages/footer';
            $data['testimonial_section']='pages/testimonial';
            $data['blog_section']='pages/blog';
            $data['counter_section']='pages/counter';
            $data['client_section']='pages/client';
            $data['subscribe_section']='pages/subscribe';
            $data['signup_section']='pages/signup';
			$this->load->view('site',$data);
    
     }
     public function blog_menu(){
             
                 $data['title']='RTSOFTBD - Software And System Designs';
            $data['header_section']='pages/header';
            $data['popup_section']='pages/popup';
            $data['menu_section']='pages/menu';
            $data['slider_section']='pages/slider';
            $data['footer_page']='pages/footer';
            $data['blog_section']='pages/blog';
          $data['client_section']='pages/client';
           $data['signup_section']='pages/signup';

           $this->load->view('pages/blogpage',$data);

     }

    
}
