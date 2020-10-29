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
      public function all_client_image_info(){
  $this->db->select('*');
  $this->db->from('client_img');
  $query_result=$this->db->get();
  $result=$query_result->result();
 return $result;
  }
  public function save_footer_heading(){



    $data=array();
    $data['footer_heading']=$this->input->post('footer_heading',true);
    $data['footer_details']=$this->input->post('footer_details',true);
  
  

        $this->db->insert('footer',$data);

         redirect('slider/main_footer_load');

      }
       public function  footer_top_info(){


  $this->db->select('*');
  $this->db->from('footer');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;
}
     
public function  save_footer_menu(){




    $data=array();
    $data['mobile']=$this->input->post('mobile',true);
    $data['gmail']=$this->input->post('gmail',true);
    $data['address']=$this->input->post('address',true);
  
  

        $this->db->insert('footer_bottom',$data);

         redirect('slider/main_footer_load');
}
 public function  footer_bottom_info(){


  $this->db->select('*');
  $this->db->from('footer_bottom');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;
}
  public function save_icon_info(){

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
       public function footer_icon(){
  $this->db->select('*');
  $this->db->from('footer_img');
  $query_result=$this->db->get();
  $result=$query_result->result();
 return $result;
  }
  public function save_copyright(){


 $data=array();
    $data['year']=$this->input->post('year',true);
    $data['company_name']=$this->input->post('company_name',true);
    $data['design']=$this->input->post('design',true);
    $data['developed']=$this->input->post('developed',true);
    $data['only_on']=$this->input->post('only_on',true);
  
  

        $this->db->insert('copyright',$data);

         redirect('slider/main_footer_load');

  }
  public function copyright_info(){


$this->db->select('*');
  $this->db->from('copyright');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

  }
  
 public function save_blog_info(){
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
  public function blog_item_show(){


$this->db->select('*');
  $this->db->from('blog');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

  }
  public function select_all_testimonials_info_by_id($testi_id){

$this->db->select('*');
  $this->db->from('testimonials');
  $this->db->where('testi_id',$testi_id);
  $query_result=$this->db->get();
  $result=$query_result->row();


  return $result;


  }
  public function update_testimonials_info(){
  
   $data=array();
   $testi_id=$this->input->post('testi_id',true);
   $data['testi_text']=$this->input->post('testi_text',true);
   $data['testi_author']=$this->input->post('testi_author',true);
   $data['testi_company']=$this->input->post('testi_company',true);
  $this->db->WHERE('testi_id',$testi_id);
  $this->db->update('testimonials',$data);

  }
  public function delete_testimonials_info_by_id($testi_id){

      $this->db->where('testi_id',$testi_id);
      $this->db->delete('testimonials');

  }
 public function all_testimonials_view_by_id($testi_id){

    $this->db->SELECT('*');
$this->db->FROM('testimonials');
$this->db->WHERE('testi_id',$testi_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;



  }
  public function all_db_client_image_info(){


  $this->db->select('*');
  $this->db->from('client_img');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

  }
  public function all_client_image_info_by_id($client_id){

    $this->db->SELECT('*');
$this->db->FROM('client_img');
$this->db->WHERE('client_id',$client_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;



  }
    public function update_client_image(){

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
  public function all_footer_heading(){


  $this->db->select('*');
  $this->db->from('footer');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

  }
  public function all_heading_by_id($footer_id){

  $this->db->SELECT('*');
$this->db->FROM('footer');
$this->db->WHERE('footer_id',$footer_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;

  }
  public function update_heading_info(){


     $data=array();
   $footer_id=$this->input->post('footer_id',true);
   $data['footer_heading']=$this->input->post('footer_heading',true);
   $data['footer_details']=$this->input->post('footer_details',true);

  $this->db->WHERE('footer_id',$footer_id);
  $this->db->update('footer',$data);
  }
  public function all_saved_icon(){

    $this->db->select('*');
  $this->db->from('footer_img');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;
  }
  public function all_avatar_by_id($id){

  $this->db->SELECT('*');
$this->db->FROM('footer_img');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;

  }
  public function update_avatar_info(){


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
  public function all_saved_fmenu(){

$this->db->select('*');
  $this->db->from('footer_bottom');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

  }
  public function all_fmenu_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('footer_bottom');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
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
  public function manage_all_copyright(){
  $this->db->select('*');
  $this->db->from('copyright');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;


  }
  
 
  
   
public function all_copyright_by_id($id){

      $this->db->SELECT('*');
$this->db->FROM('copyright');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;

}
public function update_all_copyright(){

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
  public function delete_client_info_by_id($client_id){

   $this->db->where('client_id',$client_id);
      $this->db->delete('client_img');

  }
  public function delete_heading_info_by_id($footer_id){

   $this->db->where('footer_id',$footer_id);
      $this->db->delete('footer');


  }
  public function delete_avatar_info_by_id($id){

$this->db->where('id',$id);
      $this->db->delete('footer_img');

  }
  public function delete_fmenu_info_by_id($id){

$this->db->where('id',$id);
      $this->db->delete('footer_bottom');

  }

  public function delete_copyright_info_by_id($id){

$this->db->where('id',$id);
      $this->db->delete('copyright');

  }
  public function client_view_by_id($client_id){

   
    $this->db->SELECT('*');
$this->db->FROM('client_img');
$this->db->WHERE('client_id',$client_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  
  public function heading_view_by_id($footer_id){

   
    $this->db->SELECT('*');
$this->db->FROM('footer');
$this->db->WHERE('footer_id',$footer_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function avatar_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('footer_img');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function fmenu_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('footer_bottom');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function copyright_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('copyright');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function manage_all_blog(){

 $this->db->select('*');
  $this->db->from('blog');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

  }
  public function edit_all_blog_by_id($id){
     
   $this->db->SELECT('*');
$this->db->FROM('blog');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;

  }
  public function update_all_blog(){


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
     public function delete_blog_info_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('blog');

     }
     public function blog_view_by_id($id){
   $this->db->SELECT('*');
$this->db->FROM('blog');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;

     }




}