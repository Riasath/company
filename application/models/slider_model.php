<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_model {



public function select_all_slider_info(){


	$this->db->select('*');
	$this->db->from('slider');
	$query_result=$this->db->get();
	$result=$query_result->result();


	return $result;
}
public function select_all_slides_info(){


	$this->db->select('*');
	$this->db->from('slides_item');
	$query_result=$this->db->get();
	$result=$query_result->result();


	return $result;
}
public function all_slider_info(){


$this->db->SELECT('*');
$this->db->FROM('slider');
$query_result=$this->db->get();
 $slider_info=$query_result->result();
 return $slider_info;



	}	
public function all_slider_info_by_id($slider_id){

$this->db->SELECT('*');
$this->db->FROM('slider');
$this->db->WHERE('slider_id',$slider_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;



	}
	public function update_slider(){

		$data=array();
		$slider_id=$this->input->post('slider_id',true);
		$slider_image=$this->input->post('slider_image',true);


		$sdata=array();
             $error="";
             $config['upload_path']             = 'assets/slider_images/';
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
	
		$data['slider_descriptions']=$this->input->post('slider_descriptions',true);
		$data['slider_about']=$this->input->post('slider_about',true);
		$this->db->WHERE('slider_id',$slider_id);
		$this->db->update('slider',$data);
	}
	public function slider_delete_by_id($slider_id){


$this->db->where('slider_id',$slider_id);
$this->db->delete('slider');

	}
	public function all_slider_view_by_id($slider_id){

$this->db->SELECT('*');
$this->db->FROM('slider');
$this->db->WHERE('slider_id',$slider_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;


	}

//footer icon 
	public function all_footericon_by_id($id){

  $this->db->SELECT('*');
$this->db->FROM('footer_img');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;

  }
   public function update_footericon(){


    $data=array();
    $id=$this->input->post('id',true);
    $footer_images=$this->input->post('footer_images',true);


    $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/footer_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('footer_images')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['footer_images']=$config['upload_path'].$sdata['file_name'];
             }
  
   
    $this->db->WHERE('id',$id);
    $this->db->update('footer_img',$data);

  }










}
