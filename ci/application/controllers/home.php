<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function index()
  {


  $data['abc'] = 'xyz';
    $data['content'] = $this->load->view('indexpage',$data, TRUE);
    $this->load->view('site',$data);
  
  }
     public function homee(){

 
      $data=array();
      $data['content']=$this->load->view('indexpage',$data, TRUE);
      
			$this->load->view('site',$data);
    
     }
     public function blog(){
             
               
     $data=array();
      $data['content']=$this->load->view('indexpage',$data, TRUE);
      
      $this->load->view('site',$data);
          

     }

    
}
