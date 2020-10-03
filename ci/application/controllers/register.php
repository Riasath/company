<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function user_register()
	{
	
	$this->load->view('pages/userform');


	}
	public function admin_login_area(){

     $adminname=$this->input->post('adminname',true);
     $adminpassword=$this->input->post('adminpassword',true);
     $this->load->model('admin_model');
    $result= $this->admin_model->admin_login_info($adminname,$adminpassword);
     
    if($result){
       
    $this->load->view('pages/adminview');
    	
    }
   else{

   	echo"Your Email or Password Invaild";
   }



}
 public function save_users(){

 	 $this->admin_model->save_users_info();
   $sdata=array();
  redirect('','refresh');
 }

  

public function users_login_area(){

     $username=$this->input->post('username',true);
     $password=$this->input->post('password',true);
     $this->load->model('admin_model');
    $result= $this->admin_model->users_login_info($username,$password);
     
    if($result){
       
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
   else{

   	echo"Your Email or Password Invaild";
   }



}
public function add_admin(){

$this->load->view('pages/add_admin');

}
public function save_admin(){
$this->admin_model->save_admin_info();
   $sdata=array();
  redirect('','refresh');

}

public function manage_admin(){


    $data=array();
    $data['all_admin_info']=$this->admin_model->all_admin_info();
$data['admin_index']=$this->load->view('pages/manage_admin','data',true);
   
     $this->load->view('pages/manage_admin',$data);
}
public function slider_image(){


  $this->load->view('pages/sliderimage');
}
public function save_slider_image(){

$this->admin_model->save_slider_info();
   $sdata=array();
  redirect('','refresh');



}
public function slider_page(){


$this->load->view('pages/sliderarea');
}
public function manage_users(){


    $data=array();
    $data['all_users_info']=$this->admin_model->all_users_info();
$data['admin_index']=$this->load->view('pages/manage_users','data',true);
   
     $this->load->view('pages/manage_users',$data);
  
}

  



	

}
