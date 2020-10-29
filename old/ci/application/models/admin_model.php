<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {

	public function admin_login_info($adminname,$adminpassword){

$this->db->select('*');
$this->db->from('tbl_admin');
$this->db->where('adminname',$adminname);


$this->db->where('adminpassword',$adminpassword);


$query_result=$this->db->get();
$result=$query_result->row();
return $result;
	}

public function save_users_info(){



		$data=array();
		$data['first_name']=$this->input->post('first_name',true);
		$data['last_name']=$this->input->post('last_name',true);
		$data['username']=$this->input->post('username',true);
		$data['password']=$this->input->post('password',true);

$sdata=array();
             $error="";
             $config['upload_path']             = 'users_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('image')){

                  $error=$this->upload->display_errors();
             }
             else{

                  $sdata=$this->upload->data();
                  $data['image']=$config['upload_path'].$sdata['file_name'];
             }


          

            $this->db->insert('users',$data);
      }
	public function all_users_info(){


$this->db->SELECT('*');
$this->db->FROM('users');
$query_result=$this->db->get();
 $users_info=$query_result->result();
 return $users_info;



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
	

	public function save_admin_info(){

           $data=array();
           $data['adminname']=$this->input->post('adminname',true);   
           $data['adminpassword']=$this->input->post('adminpassword',true); 


             $sdata=array();
             $error="";
             $config['upload_path']             = 'images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('adminimage')){

             	$error=$this->upload->display_errors();
             }
             else{

             	$sdata=$this->upload->data();
             	$data['adminimage']=$config['upload_path'].$sdata['file_name'];
             }

            $this->db->insert('tbl_admin',$data);




			}
			public function all_admin_info(){


			$this->db->SELECT('*');
			$this->db->FROM('tbl_admin');
			$query_result=$this->db->get();
			$admin_info=$query_result->result();
			return $admin_info;



			}


	public function save_slider_info(){

$data=array();
$data['slider_descriptions']=$this->input->post('slider_descriptions',true);   



             $sdata=array();
             $error="";
$config['upload_path']             = 'slider-image/';
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

	



}
