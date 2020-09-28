<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
         $this->load->view('welcome_message');
	}
	public function admin_slider()

{

 $this->load->view('pages/slider');

}
public function home(){

	$this->load->view('welcome_message');
}
public function custom_logo(){

$this->load->view('welcome_message');

}
public function blog(){

$this->load->view('welcome_message');

}
public function contact(){

$this->load->view('welcome_message');

}
public function digital_marketing(){

$this->load->view('welcome_message');

}
public function software_development(){

$this->load->view('welcome_message');

}

	
}

