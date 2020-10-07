<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_controller extends CI_Controller
{


	public function index()
	{

//		echo "skjbskjdb";

		$data['abc'] = 'xyz';
		$data['content'] = $this->load->view('index',$data, TRUE);
		$this->load->view('main_layout',$data);
	}
	public function blog_menu(){
        

        $data['abc']='xyz';
        $data['content']=$this->load->view('blogpage',$data,TRUE);
		$this->load->view('main_layout',$data);
	}
	public function contact(){


$data['abc']='xyz';
$data['content']=$this->load->view('contact',$data,TRUE);
$this->load->view('main_layout',$data);

	}


}
