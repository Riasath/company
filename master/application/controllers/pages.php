<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function erpsolutions()
	{
		
		


      $data['abc']='xyz';

   
		$data['content'] = $this->load->view('pages/erp',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function micro_finance()
	{
		
		


      $data['abc']='xyz';

            $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/micro_finance',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function office_mgt()
	{
		
		


      $data['abc']='xyz';

            $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/office_mgt',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function e_commerce()
	{
	    $data['abc']='xyz';
		$data['content'] = $this->load->view('pages/e_commerce',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function school_mgt()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/school_mgt',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function point_sale()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/point_sale',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function storage()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/storage',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function testimonials()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/testimonials',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function mobile_app()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/mobile_app',$data, TRUE);

		$this->load->view('main_layout',$data);
	}

public function cloud_app()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/cloud_app',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function pay_per()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/pay_per',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function iot_app()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/iot_app',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function local_seo()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/local_seo',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function seo()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/seo',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function media_marketing()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/media_marketing',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function email_marketing()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/email_marketing',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function contact()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/contact',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function blog()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/blog',$data, TRUE);

		$this->load->view('main_layout',$data);
	}
	public function service_promo()
	{
	    $data['abc']='xyz';
	     $data['all_db_slider']=$this->slider_model->select_all_slider_info();	
		  $data['all_db_slides']=$this->slider_model->select_all_slides_info();
		$data['content'] = $this->load->view('pages/service_promo',$data, TRUE);

		$this->load->view('main_layout',$data);
	}

 





	
}