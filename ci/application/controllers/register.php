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
public function manage_users(){

    $data=array();
    $data['all_users_info']=$this->admin_model->all_users_info();
$data['admin_index']=$this->load->view('pages/manage_users','data',true);
   
     $this->load->view('pages/manage_users',$data);
  
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

	

}
