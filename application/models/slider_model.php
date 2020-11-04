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


	public function all_testimonials_list_by_id($testi_id){

$this->db->SELECT('*');
$this->db->FROM('testimonials');
$this->db->WHERE('testi_id',$testi_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;



	}
	public function save_testimonials_list(){



    $data=array();
    $data['testi_text']=$this->input->post('testi_text',true);
    $data['testi_author']=$this->input->post('testi_author',true);
    $data['testi_company']=$this->input->post('testi_company',true);
  

        $this->db->insert('testimonials',$data);

        

      }
	  public function update_testimonials_list(){
  
   $data=array();
   $testi_id=$this->input->post('testi_id',true);
   $data['testi_text']=$this->input->post('testi_text',true);
   $data['testi_author']=$this->input->post('testi_author',true);
   $data['testi_company']=$this->input->post('testi_company',true);
  $this->db->WHERE('testi_id',$testi_id);
  $this->db->update('testimonials',$data);

  }
  public function all_blog_list_by_id($id){

$this->db->SELECT('*');
$this->db->FROM('blog');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;



	}
	 public function update_blog_list(){


    $data=array();
    $id=$this->input->post('id',true);
    $data['date']=$this->input->post('date',true);
    $data['blog_title']=$this->input->post('blog_title',true);
    $data['blog_details']=$this->input->post('blog_details',true);
    $data['posted_by']=$this->input->post('posted_by',true);


    $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/blog_avatar/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('avatar')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['avatar']=$config['upload_path'].$sdata['file_name'];
             }

    $this->db->WHERE('id',$id);
  $this->db->update('blog',$data);

  }
   public function save_blog_list(){
         $data=array();
$data['date']=$this->input->post('date',true);   
$data['blog_title']=$this->input->post('blog_title',true);   
$data['blog_details']=$this->input->post('blog_details',true);   
$data['posted_by']=$this->input->post('posted_by',true);   
   

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/blog_avatar/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('avatar')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['avatar']=$config['upload_path'].$sdata['file_name'];
             }

            $this->db->insert('blog',$data);

  }
   public function all_client_list_by_id($client_id){

$this->db->SELECT('*');
$this->db->FROM('client_img');
$this->db->WHERE('client_id',$client_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;



	}
	 public function update_client_list(){

    $data=array();
    $client_id=$this->input->post('client_id',true);
    $client_image=$this->input->post('client_image',true);


    $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/client_images/';
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
  
   
    $this->db->WHERE('client_id',$client_id);
    $this->db->update('client_img',$data);
  }
  public function save_client_list(){

           $data=array();

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/client_images/';
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
      public function all_footertop_list_by_id($footer_id){

$this->db->SELECT('*');
$this->db->FROM('footer');
$this->db->WHERE('footer_id',$footer_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function save_footertop(){



    $data=array();
    $data['footer_heading']=$this->input->post('footer_heading',true);
    $data['footer_details']=$this->input->post('footer_details',true);
  
  

        $this->db->insert('footer',$data);

         redirect('Admin/footer_top');

      }
      public function update_footertop_list(){


     $data=array();
   $footer_id=$this->input->post('footer_id',true);
   $data['footer_heading']=$this->input->post('footer_heading',true);
   $data['footer_details']=$this->input->post('footer_details',true);

  $this->db->WHERE('footer_id',$footer_id);
  $this->db->update('footer',$data);
  }
    public function all_footerbottom_list_by_id($id){

$this->db->SELECT('*');
$this->db->FROM('footer_bottom');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function  save_footerbottom(){




    $data=array();
    $data['mobile']=$this->input->post('mobile',true);
    $data['gmail']=$this->input->post('gmail',true);
    $data['address']=$this->input->post('address',true);
  
  

        $this->db->insert('footer_bottom',$data);

         redirect('Admin/footer_bottom');
}
public function update_all_fmenu(){

         $data=array();
   $id=$this->input->post('id',true);
   $data['mobile']=$this->input->post('mobile',true);
   $data['gmail']=$this->input->post('gmail',true);
   $data['address']=$this->input->post('address',true);

  $this->db->WHERE('id',$id);
  $this->db->update('footer_bottom',$data);
  }
  public function update_footerbottom(){

         $data=array();
   $id=$this->input->post('id',true);
   $data['mobile']=$this->input->post('mobile',true);
   $data['gmail']=$this->input->post('gmail',true);
   $data['address']=$this->input->post('address',true);

  $this->db->WHERE('id',$id);
  $this->db->update('footer_bottom',$data);
  }
   public function edit_footericon_by_id($id){

  $this->db->SELECT('*');
$this->db->FROM('footer_img');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;

  }
   public function update_footericonlist(){


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
  public function save_footericon(){

           $data=array();

             
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

            $this->db->insert('footer_img',$data);

      }
      public function edit_footer_copyright_by_id($id){

      $this->db->SELECT('*');
$this->db->FROM('copyright');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;

}
 public function update_footer_copyright_list(){

  $data=array();
   $id=$this->input->post('id',true);
   $data['year']=$this->input->post('year',true);
   $data['company_name']=$this->input->post('company_name',true);
   $data['design']=$this->input->post('design',true);
   $data['developed']=$this->input->post('developed',true);
   $data['only_on']=$this->input->post('only_on',true);

  $this->db->WHERE('id',$id);
  $this->db->update('copyright',$data);
  }
  
    public function save_footer_copyright(){


 $data=array();
    $data['year']=$this->input->post('year',true);
    $data['company_name']=$this->input->post('company_name',true);
    $data['design']=$this->input->post('design',true);
    $data['developed']=$this->input->post('developed',true);
    $data['only_on']=$this->input->post('only_on',true);
  
  

        $this->db->insert('copyright',$data);

        

  }


  //delete all items


public function testimonials_delete_by_id($testi_id){


$this->db->where('testi_id',$testi_id);
$this->db->delete('testimonials');


	}
	public function blog_delete_by_id($id){


$this->db->where('id',$id);
$this->db->delete('blog');


	}
	public function client_delete_by_id($client_id){


$this->db->where('client_id',$client_id);
$this->db->delete('client_img');


	}
	public function delete_footertop_by_id($footer_id){


$this->db->where('footer_id',$footer_id);
$this->db->delete('footer');


	}
	public function delete_footerbottom_by_id($id){


$this->db->where('id',$id);
$this->db->delete('footer_bottom');


	}
	public function delete_footericon_by_id($id){


$this->db->where('id',$id);
$this->db->delete('footer_img');


	}
	public function delete_footercopyright_by_id($id){


$this->db->where('id',$id);
$this->db->delete('copyright');


	}










}
