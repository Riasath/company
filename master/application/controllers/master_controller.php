<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_controller extends CI_Controller {

	
	public function index()
	{


            $data=array();
            $data['title']='RTSOFTBD - Software And System Designs';

            $data['header']='master/header';
            $data['footer']='master/footer';
          
			$this->load->view('main_layout',$data);
		
	}





	

     
}
