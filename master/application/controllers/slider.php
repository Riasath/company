<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	
	public function manage_slider(){
    $data=array();
    $data['all_slider_info']=$this->slider_model->all_slider_info();
    $data['slider_info']= $this->load->view('master/manage_slider','$data',true);
        $this->load->view('master/manage_slider',$data);
   
  }
  public function edit_slider($slider_id){

            $data=array();
             $data['all_slider_info_by_id']=$this->slider_model->all_slider_info_by_id($slider_id);
       $data['slider_info']=$this->load->view('master/edit_slider',$data,true);
       $this->load->view('master/edit_slider',$data);

  }
  public function update_slider_info(){

$this->slider_model->update_slider();
$this->load->view('master/dashboard');


  }
  public function delete_slider($slider_id){

       $data=array();
        $this->slider_model->slider_delete_by_id($slider_id);
     $this->load->view('master/dashboard');
   

  }

 
}
