<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}
	public function login_register(){


		$this->load->view('master/loginregister');
	}
	public function save_user(){

      
   $this->admin_model->save_users_info();
   redirect('login');

	}
	public function users_login_area(){

     $username=$this->input->post('username',true);
     $password=$this->input->post('password',true);
     $this->load->model('admin_model');
    $result= $this->admin_model->users_login_info($username,$password);
     
    if($result){
       
      $this->load->view('master/dashboard');
      
 
    	
    }
   else{

   	echo"Your Email or Password Invaild";
   }
}


public function add_slider(){

	$this->load->view('master/addslider');
}
public function save_slider(){

	$this->admin_model->save_slider_info();
      
  redirect('login');
}
}
