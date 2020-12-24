<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {
  public function save_popup(){

 $data=array();
$data['mobile']=$this->input->post('mobile',true);   
$data['gmail']=$this->input->post('gmail',true);   
$data['day']=$this->input->post('day',true);   
$data['time']=$this->input->post('time',true);   
   
 $this->db->insert('popup',$data);

  }
  
  public function select_popup(){


  $this->db->select('*');
  $this->db->from('popup');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;
}
public function all_popup_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('popup');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_popup(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['mobile']=$this->input->post('mobile',true);
    $data['gmail']=$this->input->post('gmail',true);
    $data['day']=$this->input->post('day',true);
   
    $data['time']=$this->input->post('time',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('popup',$data);

  }
   public function all_popup_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('popup');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_popup_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('popup');

  }
  //popup icon
   public function save_popupicon(){

 $data=array();
   $data['link']=$this->input->post('link',true);
    $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/popup_images/';
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
   
 $this->db->insert('popupicon',$data);

  }
  
  public function select_popupicon(){


  $this->db->select('*');
  $this->db->from('popupicon');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;
}
public function all_popupicon_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('popupicon');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_popupicon(){


    $data=array();
    $id=$this->input->post('id',true);
    $data['link']=$this->input->post('link',true);
    
    $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/popup_images/';
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
    $this->db->WHERE('id',$id);
  $this->db->update('popupicon',$data);

  }
   public function all_popupicon_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('popupicon');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_popupicon_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('popupicon');

  }
  //signup
   public function save_signup(){

 $data=array();
$data['fname']=$this->input->post('fname',true);   
$data['lname']=$this->input->post('lname',true);   
$data['gmail']=$this->input->post('gmail',true);   
$data['password']=$this->input->post('password',true);   
$data['gender']=$this->input->post('gender',true);   
$data['terms']=$this->input->post('terms',true);   
   
   
   


   $this->db->insert('signup',$data);

  }
  //sidebar
   
    public function save_sidebar(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
$data['mobile']=$this->input->post('mobile',true); 
$data['gmail']=$this->input->post('gmail',true); 
$data['address']=$this->input->post('address',true); 

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/sidebar_images/';
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

            $this->db->insert('sidebar',$data);
             redirect('Admin/sidebar');

      }
       public function select_sidebar(){


  $this->db->select('*');
  $this->db->from('sidebar');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_sidebar_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('sidebar');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
     public function update_sidebar(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
    $data['mobile']=$this->input->post('mobile',true);
    $data['gmail']=$this->input->post('gmail',true);
    $data['address']=$this->input->post('address',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/sidebar_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('sidebar',$data);

  }
  public function delete_sidebar_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('sidebar');

  }


//admin login
public function admin_model_data($username,$password){

$this->db->select('*');
$this->db->from('admin');
$this->db->where('username',$username);
$this->db->where('password',md5($password));
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

                $data['link']=$this->input->post('link',true);
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
  //footermenu
  public function save_footermenu(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['link']=$this->input->post('link',true); 



  $this->db->insert('footermenu',$data);
 


      }
 public function footermenu(){


  $this->db->select('*');
  $this->db->from('footermenu');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function select_all_footermenu(){


  $this->db->select('*');
  $this->db->from('footermenu');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_footermenu_list_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('footermenu');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_footermenu(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['link']=$this->input->post('link',true);
    

   

    $this->db->WHERE('id',$id);
  $this->db->update('footermenu',$data);

  }
   public function all_footermenu_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('footermenu');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_footermenu_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('footermenu');

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
      $data['link']=$this->input->post('link',true);
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
     //about page
     public function save_short_story(){



    $data=array();
    $data['short_story_heading']=$this->input->post('short_story_heading',true);
    $data['short_story_title']=$this->input->post('short_story_title',true);
    $data['short_story_subtitle1']=$this->input->post('short_story_subtitle1',true);
    $data['short_story_subtitle2']=$this->input->post('short_story_subtitle2',true);
  

        $this->db->insert('short_story',$data);

        redirect('Admin/short_story');

      }
      public function select_short_story(){


  $this->db->select('*');
  $this->db->from('short_story');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;
}
 public function all_shortstory_list_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('short_story');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function update_shortstory_list(){


     $data=array();
   $id=$this->input->post('id',true);
   $data['short_story_heading']=$this->input->post('short_story_heading',true);
   $data['short_story_title']=$this->input->post('short_story_title',true);
    $data['short_story_subtitle1']=$this->input->post('short_story_subtitle1',true);
     $data['short_story_subtitle2']=$this->input->post('short_story_subtitle2',true);

  $this->db->WHERE('id',$id);
  $this->db->update('short_story',$data);
  }
  public function delete_shortstory_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('short_story');

  }
  public function all_shortstory_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('short_story');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }

  //foundation 
    public function save_foundation(){

$data=array();
$data['date']=$this->input->post('date',true);   
$data['foundation_title']=$this->input->post('foundation_title',true); 
$data['foundation_details']=$this->input->post('foundation_details',true); 

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/foundation_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('foundation_image')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['foundation_image']=$config['upload_path'].$sdata['file_name'];
             }

            $this->db->insert('foundation',$data);

      


      }
       public function select_all_foundation(){


  $this->db->select('*');
  $this->db->from('foundation');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;
}
 public function all_foundation_list_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('foundation');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_foundation_list(){


    $data=array();
    $id=$this->input->post('id',true);
    $data['date']=$this->input->post('date',true);
    $data['foundation_title']=$this->input->post('foundation_title',true);
    $data['foundation_details']=$this->input->post('foundation_details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/foundation_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('foundation_image')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['foundation_image']=$config['upload_path'].$sdata['file_name'];
             }

    $this->db->WHERE('id',$id);
  $this->db->update('foundation',$data);

  }
    public function all_foundation_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('foundation');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_foundation_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('foundation');

  }

  //work

   public function save_work(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/work_images/';
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

            $this->db->insert('work',$data);

      


      }
        public function select_all_work(){


  $this->db->select('*');
  $this->db->from('work');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;
}
 public function all_work_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('work');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_work(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/work_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('work',$data);

  }
   public function all_work_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('work');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_work_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('work');

  }
   public function save_expert(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
  $this->db->insert('expert',$data);
 redirect('Admin/expert');


      }
      public function select_all_expert(){


  $this->db->select('*');
  $this->db->from('expert');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
 public function all_expert_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('expert');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_expert(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   

    $this->db->WHERE('id',$id);
  $this->db->update('expert',$data);

  }

 public function all_expert_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('expert');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_expert_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('expert');

  }

   public function save_team(){

$data=array();
  
$data['name']=$this->input->post('name',true); 
$data['post']=$this->input->post('post',true); 
 $data['fblink']=$this->input->post('fblink',true);
$data['ylink']=$this->input->post('ylink',true);
$data['glink']=$this->input->post('glink',true);
$data['tlink']=$this->input->post('tlink',true);

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
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
                 $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('fbimage')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['fbimage']=$config['upload_path'].$sdata['file_name'];
             }
                 $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('yimage')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['yimage']=$config['upload_path'].$sdata['file_name'];
             }
                 $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('gimage')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['gimage']=$config['upload_path'].$sdata['file_name'];
             }
                 $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('timage')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['timage']=$config['upload_path'].$sdata['file_name'];
             }

            $this->db->insert('team',$data);




      }
       public function select_all_team(){


  $this->db->select('*');
  $this->db->from('team');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
 public function all_team_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('team');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_team(){

    $data=array();
    $id=$this->input->post('id',true);
    
    $data['name']=$this->input->post('name',true);
    $data['post']=$this->input->post('post',true);
    $data['fblink']=$this->input->post('fblink',true);
    $data['ylink']=$this->input->post('ylink',true);
    $data['glink']=$this->input->post('glink',true);
    $data['tlink']=$this->input->post('tlink',true);
   
   
 $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
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

         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('fbimage')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['fbimage']=$config['upload_path'].$sdata['file_name'];
             }

         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('yimage')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['yimage']=$config['upload_path'].$sdata['file_name'];
             }

         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('gimage')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['gimage']=$config['upload_path'].$sdata['file_name'];
             }

         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/team_member_img/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('timage')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['timage']=$config['upload_path'].$sdata['file_name'];
             }

    $this->db->WHERE('id',$id);
  $this->db->update('team',$data);


  }

 public function all_team_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('team');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_team_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('team');

  }
  //promo
    public function save_promo(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/promo_images/';
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

            $this->db->insert('promo',$data);
            

      }
       public function select_all_promo(){


  $this->db->select('*');
  $this->db->from('promo');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_promo_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('promo');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
     public function update_promo(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/promo_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('promo',$data);

  }
  public function delete_promo_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('promo');

  }
  //vision
   public function save_vision(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/vision_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('image1')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['image1']=$config['upload_path'].$sdata['file_name'];
             }
              $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/vision_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('image2')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['image2']=$config['upload_path'].$sdata['file_name'];
             }

            $this->db->insert('vision',$data);
          

      }
         public function select_all_vision(){


  $this->db->select('*');
  $this->db->from('vision');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}

     public function update_vision(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/vision_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('image1')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['image1']=$config['upload_path'].$sdata['file_name'];
             }
              $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/vision_images/';
             $config['allowed_types']           ='gif|jpg|png';
             $config['max_size']                =100000;
             $config['max_width']               =2048; 
             $config['max_height']              =1024; 
             $this->load->library('upload',$config);


             if( ! $this->upload->do_upload('image2')){

              $error=$this->upload->display_errors();
             }
             else{

              $sdata=$this->upload->data();
              $data['image2']=$config['upload_path'].$sdata['file_name'];
             }

    $this->db->WHERE('id',$id);
  $this->db->update('vision',$data);

  }
  public function all_vision_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('vision');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_vision_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('vision');

  }
  //feedback
   public function save_feedback(){

           $data=array();
      $data['description']=$this->input->post('description',true); 
$data['author']=$this->input->post('author',true); 
$data['market']=$this->input->post('market',true); 
             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/feedback_images/';
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

            $this->db->insert('feedback',$data);
            

      }
      public function select_all_feedback(){


  $this->db->select('*');
  $this->db->from('feedback');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_feedback_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('feedback');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
      public function update_feedback(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['description']=$this->input->post('description',true);
    $data['author']=$this->input->post('author',true);
    $data['market']=$this->input->post('market',true);

   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/feedback_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('feedback',$data);

  }
   public function all_feedback_view_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('feedback');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_feedback_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('feedback');

  }
  //partner
  public function save_partner(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
  $this->db->insert('partner',$data);
 redirect('Admin/partner');


      }
        public function select_all_partner(){


  $this->db->select('*');
  $this->db->from('partner');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_partner_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('partner');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function update_partner(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   

    $this->db->WHERE('id',$id);
  $this->db->update('partner',$data);

  }
   public function all_partner_view_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('partner');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_partner_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('partner');

  }
  //partner image
   public function save_partner_image(){

          
             $data=array();
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/partner_images/';
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

            $this->db->insert('partner_image',$data);
            

      }
       public function select_all_partner_image(){


  $this->db->select('*');
  $this->db->from('partner_image');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_partner_image_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('partner_image');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_partner_image(){

    $data=array();
    $id=$this->input->post('id',true);
    $image=$this->input->post('image',true);


    $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/partner_images/';
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
  
   
    $this->db->WHERE('id',$id);
    $this->db->update('partner_image',$data);
  }
    public function all_partner_image_view_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('partner_image');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_partner_image_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('partner_image');

  }
//software development menu
  //service box

 public function save_eservice(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/eservice_images/';
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

            $this->db->insert('eservice',$data);



      }
       public function select_all_service(){


  $this->db->select('*');
  $this->db->from('eservice');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_eservice_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('eservice');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_eservice(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/eservice_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('eservice',$data);

  }
   public function all_eservice_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('eservice');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_eservice_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('eservice');

  }
//quality
  public function save_quality(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

  $this->db->insert('quality',$data);
 redirect('Admin/quality');


      }
      public function select_all_quality(){


  $this->db->select('*');
  $this->db->from('quality');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_quality_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('quality');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function update_quality(){
 
 
    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('quality',$data);
   

  }
   public function all_quality_view_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('quality');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_quality_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('quality');

  }
  //qualityitem
 public function save_qualityitem(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['value']=$this->input->post('value',true); 



  $this->db->insert('qualityitem',$data);
 


      }
 public function select_all_qualityitem(){


  $this->db->select('*');
  $this->db->from('qualityitem');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_qualityitem_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('qualityitem');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_qualityitem(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['value']=$this->input->post('value',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('qualityitem',$data);

  }
   public function all_qualityitem_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('qualityitem');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_qualityitem_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('qualityitem');

  }
//agency
  public function save_agency(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

  $this->db->insert('agency',$data);
 redirect('Admin/agency');


      }
      public function select_all_agency(){


  $this->db->select('*');
  $this->db->from('agency');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_agency_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('agency');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function update_agency(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   

    $this->db->WHERE('id',$id);
  $this->db->update('agency',$data);

  }
   public function all_agency_view_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('agency');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_agency_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('agency');

  }
//feature
 public function save_feature(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/feature_images/';
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

            $this->db->insert('feature',$data);

      


      }
       public function select_all_feature(){


  $this->db->select('*');
  $this->db->from('feature');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_feature_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('feature');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_feature(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/feature_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('feature',$data);

  }
   public function all_feature_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('feature');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_feature_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('feature');

  }
//our product
   public function save_product(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
$data['section1']=$this->input->post('section1',true); 
$data['section2']=$this->input->post('section2',true); 
  $this->db->insert('product',$data);
 redirect('Admin/product');


      }
      public function select_all_product(){


  $this->db->select('*');
  $this->db->from('product');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_product_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('product');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function update_product(){
 
 
    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
    $data['section1']=$this->input->post('section1',true);
    $data['section2']=$this->input->post('section2',true);
   

    $this->db->WHERE('id',$id);
  $this->db->update('product',$data);
   

  }
   public function all_product_view_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('product');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_product_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('product');

  }
//tools
  public function save_tools(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

  $this->db->insert('tools',$data);
 redirect('Admin/tools');


      }
      public function select_all_tools(){


  $this->db->select('*');
  $this->db->from('tools');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_tools_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('tools');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function update_tools(){
 
 
    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('tools',$data);
   

  }
   public function all_tools_view_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('tools');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_tools_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('tools');

  }
//tools_box
 public function save_tools_box(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/tools_box_images/';
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

            $this->db->insert('tools_box',$data);



      }
       public function select_all_tools_box(){


  $this->db->select('*');
  $this->db->from('tools_box');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_tools_box_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('tools_box');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_tools_box(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/tools_box_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('tools_box',$data);

  }
   public function all_tools_box_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('tools_box');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_tools_box_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('tools_box');

  }
//contact
  public function save_contact(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

  $this->db->insert('contact',$data);
 redirect('Admin/contact');


      }
      public function select_all_contact(){


  $this->db->select('*');
  $this->db->from('contact');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_contact_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('contact');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function update_contact(){
 
 
    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('contact',$data);
   

  }
   public function all_contact_view_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('contact');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_contact_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('contact');

  }
//contact form
public function save_contact_form(){

$data=array();
  
$data['permalink']=$this->input->post('permalink',true); 
$data['name']=$this->input->post('name',true); 
$data['phone']=$this->input->post('phone',true); 
$data['email']=$this->input->post('email',true); 
$data['company']=$this->input->post('company',true); 
$data['message']=$this->input->post('message',true); 

  $this->db->insert('information',$data);
 //redirect('Admin/contact');
}
//Subscribe form
  public function save_subscribe(){

$data=array();
  
$data['gmail']=$this->input->post('gmail',true); 
 

  $this->db->insert('subscribe',$data);
 redirect('');


      }
      
      //digital service menu 


      //dservice
      public function save_dservice(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/dservice_images/';
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

            $this->db->insert('dservice',$data);

       redirect('Admin/dservice');


      }
       public function select_all_dservice(){


  $this->db->select('*');
  $this->db->from('dservice');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_dservice_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('dservice');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_dservice(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/dservice_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('dservice',$data);

  }
   public function all_dservice_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('dservice');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_dservice_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('dservice');

  }
//description
 public function save_description(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details1']=$this->input->post('details1',true); 
$data['details2']=$this->input->post('details2',true); 

  $this->db->insert('description',$data);
 redirect('Admin/description');


      }
 public function select_all_description(){


  $this->db->select('*');
  $this->db->from('description');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_description_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('description');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_description(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details1']=$this->input->post('details1',true);
    $data['details2']=$this->input->post('details2',true);
   

    $this->db->WHERE('id',$id);
  $this->db->update('description',$data);

  }
   public function all_description_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('description');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_description_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('description');

  }
//tell
 public function save_tell(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 


  $this->db->insert('tell',$data);
 redirect('Admin/tell');


      }
 public function select_all_tell(){


  $this->db->select('*');
  $this->db->from('tell');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_tell_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('tell');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_tell(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('tell',$data);

  }
   public function all_tell_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('tell');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_tell_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('tell');

  }

//levels
 public function save_levels(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 


  $this->db->insert('levels',$data);
 redirect('Admin/levels');


      }
 public function select_all_levels(){


  $this->db->select('*');
  $this->db->from('levels');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_levels_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('levels');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_levels(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('levels',$data);

  }
   public function all_levels_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('levels');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_levels_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('levels');

  }

      //levelsbox
      public function save_levelsbox(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/levelsbox_images/';
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

            $this->db->insert('levelsbox',$data);



      }
       public function select_all_levelsbox(){


  $this->db->select('*');
  $this->db->from('levelsbox');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_levelsbox_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('levelsbox');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_levelsbox(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/levelsbox_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('levelsbox',$data);

  }
   public function all_levelsbox_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('levelsbox');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_levelsbox_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('levelsbox');

  }
//accordon
 public function save_accordon(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
$data['idname']=$this->input->post('idname',true); 


  $this->db->insert('accordon',$data);
 


      }
 public function select_all_accordon(){


  $this->db->select('*');
  $this->db->from('accordon');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_accordon_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('accordon');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_accordon(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
    $data['idname']=$this->input->post('idname',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('accordon',$data);

  }
   public function all_accordon_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('accordon');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_accordon_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('accordon');

  }
//brand
 public function save_brand(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 



  $this->db->insert('brand',$data);
 redirect('Admin/brand');


      }
 public function select_all_brand(){


  $this->db->select('*');
  $this->db->from('brand');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_brand_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('brand');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_brand(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('brand',$data);

  }
   public function all_brand_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('brand');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_brand_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('brand');

  }

//brandbox
 public function save_brandbox(){

$data=array();
  
$data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
$data['value']=$this->input->post('value',true); 



  $this->db->insert('brandbox',$data);



      }
 public function select_all_brandbox(){


  $this->db->select('*');
  $this->db->from('brandbox');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_brandbox_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('brandbox');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_brandbox(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
    $data['value']=$this->input->post('value',true);

   

    $this->db->WHERE('id',$id);
  $this->db->update('brandbox',$data);

  }
   public function all_brandbox_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('brandbox');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_brandbox_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('brandbox');

  }
  //contact page
  //contact form

public function save_contactform(){

 $data=array();
   
$data['name']=$this->input->post('name',true);   
$data['gmail']=$this->input->post('gmail',true);   
$data['phone']=$this->input->post('phone',true);   
$data['message']=$this->input->post('message',true);   
  
   
   
   


   $this->db->insert('contactform',$data);

  }
    //contact address

public function save_address(){

 $data=array();
   
$data['title']=$this->input->post('title',true);   
$data['house']=$this->input->post('house',true);   
$data['cellnum']=$this->input->post('cellnum',true);   
$data['officenum']=$this->input->post('officenum',true);   
$data['supportnum']=$this->input->post('supportnum',true);   
$data['gmail']=$this->input->post('gmail',true);   
$data['address']=$this->input->post('address',true);   
  
   
   
   


   $this->db->insert('address',$data);
   redirect('Admin/address');

  }
   public function select_contact_address(){


  $this->db->select('*');
  $this->db->from('address');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_address_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('address');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
   public function update_address(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['house']=$this->input->post('house',true);
    $data['cellnum']=$this->input->post('cellnum',true);
    $data['officenum']=$this->input->post('officenum',true);
    $data['supportnum']=$this->input->post('supportnum',true);
    $data['gmail']=$this->input->post('gmail',true);
    $data['address']=$this->input->post('address',true);
  


   

    $this->db->WHERE('id',$id);
  $this->db->update('address',$data);

  }
   public function all_address_view_by_id($id){

   
    $this->db->SELECT('*');
$this->db->FROM('address');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
  public function delete_address_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('address');

  }
  //portfolio page
  //android items
  
    public function save_android(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/android_images/';
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

            $this->db->insert('android',$data);
             

      }
       public function select_android_items(){


  $this->db->select('*');
  $this->db->from('android');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_android_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('android');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
     public function update_android(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/android_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('android',$data);

  }
  public function delete_android_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('android');

  }
  //Web development
    public function save_web_development(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/web_development_images/';
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

            $this->db->insert('web_development',$data);
             

      }
       public function select_web_development_items(){


  $this->db->select('*');
  $this->db->from('web_development');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_web_development_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('web_development');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
     public function update_web_development(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/web_development_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('web_development',$data);

  }
  public function delete_web_development_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('web_development');

  }


   //Web design
    public function save_web_design(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/web_design_images/';
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

            $this->db->insert('web_design',$data);
           

      }
       public function select_web_design_items(){


  $this->db->select('*');
  $this->db->from('web_design');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_web_design_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('web_design');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
     public function update_web_design(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/web_design_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('web_design',$data);

  }
  public function delete_web_design_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('web_design');

  }
   //software
    public function save_software(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/software_images/';
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

            $this->db->insert('software',$data);
             

      }
       public function select_software_items(){


  $this->db->select('*');
  $this->db->from('software');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_software_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('software');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
     public function update_software(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/software_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('software',$data);

  }
  public function delete_software_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('software');

  }
   //demo
    public function save_demo(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
             
             $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/demo_images/';
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

            $this->db->insert('demo',$data);
            

      }
       public function select_demo_items(){


  $this->db->select('*');
  $this->db->from('demo');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_demo_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('demo');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
     public function update_demo(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   


         $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/demo_images/';
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

    $this->db->WHERE('id',$id);
  $this->db->update('demo',$data);

  }
  public function delete_demo_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('demo');

  }
//menu
  //main menu

 public function save_mainmenu(){

$data=array();
  
$data['m_name']=$this->input->post('m_name',true); 
$data['m_url']=$this->input->post('m_url',true); 
$data['m_desc']=$this->input->post('m_desc',true); 

  $this->db->insert('menu',$data);



      }
      public function select_all_mainmenu(){


  $this->db->select('*');
  $this->db->from('menu');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_mainmenu_by_id($m_id){


$this->db->SELECT('*');
$this->db->FROM('menu');
$this->db->WHERE('m_id',$m_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }
     public function update_mainmenu(){


    $data=array();
    $m_id=$this->input->post('m_id',true);
    
    $data['m_name']=$this->input->post('m_name',true);
    $data['m_url']=$this->input->post('m_url',true);
    $data['m_desc']=$this->input->post('m_desc',true);
   

    $this->db->WHERE('m_id',$m_id);
  $this->db->update('menu',$data);

  }
  public function delete_mainmenu_by_id($m_id){

   $this->db->where('m_id',$m_id);
      $this->db->delete('menu');

  }

  //dropdown menu items

 public function save_dropdown(){

$data=array();
  $data['m_id']=$this->input->post('m_id',true); 
$data['m_item_name']=$this->input->post('m_item_name',true); 
$data['m_item_url']=$this->input->post('m_item_url',true); 
$data['m_item_desc']=$this->input->post('m_item_desc',true); 


  $this->db->insert('menu_item',$data);



      }
    public function all_dropdown_list_by_id($m_item_id){

$this->db->SELECT('*');
$this->db->FROM('menu_item');
$this->db->WHERE('m_item_id',$m_item_id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;




  }
     public function select_all_dropdown(){


  $this->db->select('*');
  $this->db->from('menu_item');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}

     public function update_dropdown(){


    $data=array();
    $m_item_id=$this->input->post('m_item_id',true);
    
    $data['m_id']=$this->input->post('m_id',true);
    $data['m_item_name']=$this->input->post('m_item_name',true);
    $data['m_item_url']=$this->input->post('m_item_url',true);
    $data['m_item_desc']=$this->input->post('m_item_desc',true);
   

    $this->db->WHERE('m_item_id',$m_item_id);
  $this->db->update('menu_item',$data);

  }
  public function delete_dropdown_by_id($m_item_id){

   $this->db->where('m_item_id',$m_item_id);
      $this->db->delete('menu_item');

  }

  //extra section add
   //testimonial heading
   
    public function save_testimonial_head(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
 
   $this->db->insert('testimonial_head',$data);
             redirect('Admin/testimonial_head');

      }
       public function select_testimonial_heading(){


  $this->db->select('*');
  $this->db->from('testimonial_head');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_testimonial_head_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('testimonial_head');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }

     public function update_testimonial_head(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   
   $this->db->WHERE('id',$id);
  $this->db->update('testimonial_head',$data);

  }
  public function delete_testimonial_head_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('testimonial_head');

  }
  //client heading
   public function save_client_head(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
 
   $this->db->insert('client_head',$data);
             redirect('Admin/client_head');

      }
       public function select_client_heading(){


  $this->db->select('*');
  $this->db->from('client_head');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_client_head_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('client_head');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }

     public function update_client_head(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   
   $this->db->WHERE('id',$id);
  $this->db->update('client_head',$data);

  }
  public function delete_client_head_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('client_head');

  }
   //contact heading
   public function save_contact_head(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
 
   $this->db->insert('contact_head',$data);
             redirect('Admin/contact_head');

      }
       public function select_contact_heading(){


  $this->db->select('*');
  $this->db->from('contact_head');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_contact_head_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('contact_head');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }

     public function update_contact_head(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   
   $this->db->WHERE('id',$id);
  $this->db->update('contact_head',$data);

  }
  public function delete_contact_head_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('contact_head');

  }
    //Contact form heading
   public function save_form_head(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 
 
   $this->db->insert('form_head',$data);
             redirect('Admin/form_head');

      }
       public function select_form_heading(){


  $this->db->select('*');
  $this->db->from('form_head');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_form_head_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('form_head');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }

     public function update_form_head(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);
   
   $this->db->WHERE('id',$id);
  $this->db->update('form_head',$data);

  }
  public function delete_form_head_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('form_head');

  }
  //counter
   public function save_counter(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['value']=$this->input->post('value',true); 
$data['data']=$this->input->post('data',true); 
$data['units']=$this->input->post('units',true); 
 
   $this->db->insert('counter',$data);
             redirect('Admin/counter');

      }
       public function select_counter(){


  $this->db->select('*');
  $this->db->from('counter');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_counter_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('counter');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }

     public function update_counter(){


    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['value']=$this->input->post('value',true);
    $data['data']=$this->input->post('data',true);
    $data['units']=$this->input->post('units',true);
  
   
   $this->db->WHERE('id',$id);
  $this->db->update('counter',$data);

  }
  public function delete_counter_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('counter');

  }
//infobox1
   public function save_infobox1(){

           $data=array();
      $data['title']=$this->input->post('title',true); 
$data['details']=$this->input->post('details',true); 

$sdata=array();
             $error="";
             $config['upload_path']             = 'assets/infobox1_images/';
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


 
   $this->db->insert('infobox1',$data);
             redirect('Admin/infobox1');

      }
       public function select_infobox1(){


  $this->db->select('*');
  $this->db->from('infobox1');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_infobox1_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('infobox1');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }

     public function update_infobox1(){



    $data=array();
    $id=$this->input->post('id',true);
    
    $data['title']=$this->input->post('title',true);
    $data['details']=$this->input->post('details',true);

     $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/infobox1_images/';
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
   
  
   
   $this->db->WHERE('id',$id);
  $this->db->update('infobox1',$data);

  }
  public function delete_infobox1_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('infobox1');

  }

  //logo
   public function save_logo(){

           $data=array();
      

$sdata=array();
             $error="";
             $config['upload_path']             = 'assets/logo_images/';
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
     $this->db->insert('logo',$data);
          

      }
       public function select_logo(){


  $this->db->select('*');
  $this->db->from('logo');
  $query_result=$this->db->get();
  $result=$query_result->result();


  return $result;

}
public function all_logo_by_id($id){


$this->db->SELECT('*');
$this->db->FROM('logo');
$this->db->WHERE('id',$id);
$query_result=$this->db->get();
 $result=$query_result->row();
 return $result;
  }

     public function update_logo(){



     $data=array();
    $id=$this->input->post('id',true);
    $image=$this->input->post('image',true);

    $sdata=array();
             $error="";
             $config['upload_path']             = 'assets/logo_images/';
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
   
  
   
   $this->db->WHERE('id',$id);
  $this->db->update('logo',$data);

  }
  public function delete_logo_by_id($id){

   $this->db->where('id',$id);
      $this->db->delete('logo');

  }


      










}