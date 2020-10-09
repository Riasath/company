<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_controller extends CI_Controller
{


	public function index()
	{


      



//		echo "skjbskjdb";

		$data['abc'] = 'xyz';
		 $data['all_db_slider']=$this->slider_model->select_all_slider_info();
		$data['content'] = $this->load->view('index',$data, TRUE);

		$this->load->view('main_layout',$data);
	}



}
