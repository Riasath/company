<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()



	{
           
			$this->load->view('site');

     }
     public function homee(){

 
      $data=array();
      $data['content']='pages/page_content';
      
			$this->load->view('site',$data);
    
     }
     public function blog(){
             
               

           $this->load->view('site');

     }

    
}
