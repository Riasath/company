<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {



public function save_users_info(){



		$data=array();
		$data['first_name']=$this->input->post('first_name',true);
		$data['last_name']=$this->input->post('last_name',true);
		$data['username']=$this->input->post('username',true);
		$data['password']=$this->input->post('password',true);

        $this->db->insert('users',$data);
      }



      public function users_login_info($username,$password){

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username',$username);


			$this->db->where('password',$password);


			$query_result=$this->db->get();
			$result=$query_result->row();
			return $result;
	}
	public function save_slider_info(){

           $data=array();
$data['slider_descriptions']=$this->input->post('slider_descriptions',true);   
$data['slider_about']=$this->input->post('slider_about',true); 
             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'slider_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('slider_image')){

             	$error=$this->upload->display_errors();
             }
             else{

             	$sdata=$this->upload->data();
             	$data['slider_image']=$config['upload_path'].$sdata['file_name'];
             }

            $this->db->insert('slider',$data);




			}
                  public function save_slides_item_info(){



      $data=array();
      $data['slides_title']=$this->input->post('slides_title',true);
      $data['slides_number']=$this->input->post('slides_number',true);


                    $this->db->insert('slides_item',$data);
                    $this->load->view('master/dashboard');
      }



public function save_testimonials_info(){



    $data=array();
    $data['testi_text']=$this->input->post('testi_text',true);
    $data['testi_author']=$this->input->post('testi_author',true);
    $data['testi_company']=$this->input->post('testi_company',true);
  

        $this->db->insert('testimonials',$data);

         $this->load->view('master/dashboard');

      }
      public function select_all_testimonials_info(){


  $this->db->select('*');
  $this->db->from('testimonials');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;
}
  public function save_client_info(){

           $data=array();

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'client_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('client_image')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['client_image']=$config['upload_path'].$sdata['file_name'];
             }

            $this->db->insert('client_img',$data);




      }
      public function all_client_image_info(){




      $this->db->select('*');
  $this->db->from('client_img');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;



      

      }


}