<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{


	public function manage_slider()
	{
		$data = array();
		$data['all_slider_info'] = $this->slider_model->all_slider_info();
		$data['slider_info'] = $this->load->view('master/manage_slider', '$data', true);
		$this->load->view('master/manage_slider', $data);

	}

	public function edit_slider($slider_id)
	{

		$data = array();
		$data['all_slider_info_by_id'] = $this->slider_model->all_slider_info_by_id($slider_id);
		$data['slider_info'] = $this->load->view('master/edit_slider', $data, true);
		$this->load->view('master/edit_slider', $data);

	}

	public function update_slider_info()
	{

		$this->slider_model->update_slider();
		$this->load->view('master/dashboard');


	}

	public function delete_slider($slider_id)
	{

		$data = array();
		$this->slider_model->slider_delete_by_id($slider_id);

		redirect('Slider/update_slider_info');
//		$this->load->view('Slider/dashboard');


	}
	public function view_slider($slider_id){

         $data = array();
		$data['all_slider_view_by_id'] = $this->slider_model->all_slider_view_by_id($slider_id);
		$data['slider_info'] = $this->load->view('master/view_slider', $data, true);
		$this->load->view('master/view_slider', $data);
		  
	}
	public function add_testimonials(){

	$this->load->view('master/add_testimonials');
	}
	public function save_testimonials(){

    
   $data['all_testimonials']=$this->admin_model->save_testimonials_info();
 

	}
	public function add_client(){

   $this->load->view('master/add_client');
	}
	public function save_client_image(){

$this->admin_model->save_client_info();
     $this->load->view('master/dashboard');

	}
	public function show_client(){


		   $data['all_client_image']=$this->admin_model->all_client_image();
	}


}
