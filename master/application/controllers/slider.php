<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{


	public function manage_slider()
	{
		$data = array();
		$data['all_slider_info'] = $this->slider_model->all_slider_info();
		$data['slider_info'] = $this->load->view('master/manage_slider', '$data', true);
		$this->load->view('master/manage_slider', $data);

	}

	public function edit_slider($slider_id)
	{

		$data = array();
		$data['all_slider_info_by_id'] = $this->slider_model->all_slider_info_by_id($slider_id);
		$data['slider_info'] = $this->load->view('master/edit_slider', $data, true);
		$this->load->view('master/edit_slider', $data);

	}

	public function update_slider_info()
	{

		$this->slider_model->update_slider();
		$this->load->view('master/dashboard');


	}

	public function delete_slider($slider_id)
	{

		$data = array();
		$this->slider_model->slider_delete_by_id($slider_id);

		redirect('Slider/update_slider_info');
//		$this->load->view('Slider/dashboard');


	}
	public function view_slider($slider_id){

         $data = array();
		$data['all_slider_view_by_id'] = $this->slider_model->all_slider_view_by_id($slider_id);
		$data['slider_info'] = $this->load->view('master/view_slider', $data, true);
		$this->load->view('master/view_slider', $data);
		  
	}
	public function add_testimonials(){

	$this->load->view('master/add_testimonials');
	}
	public function save_testimonials(){

    
   $data['all_testimonials']=$this->admin_model->save_testimonials_info();
 

	}
	public function add_client(){

   $this->load->view('master/add_client');
	}
	public function save_client_image(){

$this->admin_model->save_client_info();
     $this->load->view('master/dashboard');

	}
	public function show_client(){


		   $data['all_client_image']=$this->admin_model->all_client_image();
	}
	public function add_footer(){
            $this->load->view('footer/main_footer');

	}
	public function add_footer_heading(){
       $this->load->view('footer/add_footer_heading');

	}
	public function save_footer_heading(){
$this->admin_model->save_footer_heading();
     $this->load->view('footer/main_footer');

	}
	public function main_footer_load(){

		$this->load->view('footer/main_footer');
	}
	public function footer_menu(){


		$this->load->view('footer/footer_menu');
	}
   public function save_footer_menu(){

$this->admin_model->save_footer_menu();
     $this->load->view('footer/main_footer');
	}
	public function add_icon(){

		$this->load->view('footer/add_icon');
	}
	public function save_footer_icon(){

    $this->admin_model->save_icon_info();
     $this->load->view('footer/main_footer');
	}
	public function add_copyright(){

	$this->load->view('footer/copyright');
	}
	public function save_copyright(){

$this->admin_model->save_copyright();
     $this->load->view('footer/main_footer');


	}
	public function add_blog(){
$this->load->view('blog/add_blog');
	}
	public function save_blog(){

$this->admin_model->save_blog_info();
     $this->load->view('master/dashboard');

	}
	public function manage_testimonials(){


          $data = array();
		$data['all_db_testimonials'] = $this->admin_model->select_all_testimonials_info();
		$data['testi_info'] = $this->load->view('master/manage_testimonials', $data, true);
		
		$this->load->view('master/manage_testimonials', $data);

	}
	public function edit_testimonials($testi_id){


		   $data = array();
		$data['all_db_testimonials_by_id'] = $this->admin_model->select_all_testimonials_info_by_id($testi_id);
		$data['testi_info'] = $this->load->view('master/edit_testimonials', $data, true);
		
		
$this->load->view('master/edit_testimonials',$data);

	}
	public function update_testimonials(){


		$this->admin_model->update_testimonials_info();
		redirect('Slider/manage_testimonials');
	}
	public function delete_testimonials($testi_id){


   $data = array();
	$this->admin_model->delete_testimonials_info_by_id($testi_id);
	redirect('Slider/manage_testimonials');
	
	
	}
	public function view_testimonials($testi_id){

         $data = array();
		$data['all_testimonials_view_by_id'] = $this->admin_model->all_testimonials_view_by_id($testi_id);
		$data['testimonials_info'] = $this->load->view('master/view_testimonials', $data, true);
		$this->load->view('master/view_testimonials', $data);
		  
	}
	public function client_image(){



          $data = array();
		$data['all_client_image'] = $this->admin_model->all_client_image_info();
		$data['client_info'] = $this->load->view('master/client_image', $data, true);
		
		$this->load->view('master/client_image', $data);
		
	}
	public function edit_client_image($client_id){

     $data = array();
		$data['all_client_image_by_id'] = $this->admin_model->all_client_image_info_by_id($client_id);
		$data['client_info'] = $this->load->view('master/edit_client_image', $data, true);
		$this->load->view('master/edit_client_image', $data);
	}
	public function update_client_image(){

		$this->admin_model->update_client_image();
		$this->load->view('master/dashboard');
	}
	public function manage_footer_heading(){

		  	$data = array();
		$data['all_footer_heading'] = $this->admin_model->all_footer_heading();
		$data['heading_info'] = $this->load->view('master/manage_heading', '$data', true);
		$this->load->view('master/manage_heading', $data);
	}
	public function edit_heading($footer_id){


$data = array();
		$data['all_heading_by_id'] = $this->admin_model->all_heading_by_id($footer_id);
		$data['footer_info'] = $this->load->view('master/edit_footer_heading', $data, true);
		$this->load->view('master/edit_footer_heading', $data);
	}
	public function update_heading(){
	$this->admin_model->update_heading_info();
		$this->load->view('master/dashboard');

	}
	public function manage_icon(){

   
          $data = array();
		$data['all_saved_icon'] = $this->admin_model->all_saved_icon();
		$data['icon_info'] = $this->load->view('master/manage_icon', $data, true);
		
		$this->load->view('master/manage_icon', $data);

	}
    public function edit_avatar($id){

     $data = array();
		$data['all_avatar_by_id'] = $this->admin_model->all_avatar_by_id($id);
		$data['avatar_info'] = $this->load->view('master/edit_avatar', $data, true);
		$this->load->view('master/edit_avatar', $data);
	}
  public function update_avatar(){
   $this->admin_model->update_avatar_info();
		$this->load->view('master/dashboard');

  }
  public function manage_fmenu(){
      $data = array();
		$data['all_saved_fmenu'] = $this->admin_model->all_saved_fmenu();
		$data['fmenu_info'] = $this->load->view('master/manage_fmenu', $data, true);
		
		$this->load->view('master/manage_fmenu', $data);

  }
  public function edit_fmenu($id){
  
     $data = array();
		$data['all_fmenu_by_id'] = $this->admin_model->all_fmenu_by_id($id);
		$data['fmenu_info'] = $this->load->view('master/edit_fmenu_items', $data, true);
		$this->load->view('master/edit_fmenu_items', $data);

  }
  public function update_fmenu(){
  	$this->admin_model->update_all_fmenu();
		$this->load->view('master/dashboard');

  }
  public function manage_copyright(){

        $data = array();
		$data['manage_all_copyright'] = $this->admin_model->manage_all_copyright();
		$data['copy_info'] = $this->load->view('master/manage_copyright', $data, true);
		
		$this->load->view('master/manage_copyright', $data);
  }
  public function edit_copyright($id){

  	  $data = array();
		$data['all_copyright_by_id'] = $this->admin_model->all_copyright_by_id($id);
		$data['copyright_info'] = $this->load->view('master/edit_copyright', $data, true);
		$this->load->view('master/edit_copyright', $data);
  }
  public function update_copyright(){

$this->admin_model->update_all_copyright();
		$this->load->view('master/dashboard');

  }
  public function delete_client($client_id){
    $data = array();
	$this->admin_model->delete_client_info_by_id($client_id);
	$this->load->view('master/dashboard');

  }
  public function delete_heading($footer_id){
    $data = array();
	$this->admin_model->delete_heading_info_by_id($footer_id);
	$this->load->view('master/dashboard');

  }
  public function delete_avatar($id){
  $data = array();
	$this->admin_model->delete_avatar_info_by_id($id);
	$this->load->view('master/dashboard');

  }
  public function delete_fmenu($id){
  $data = array();
	$this->admin_model->delete_fmenu_info_by_id($id);
	$this->load->view('master/dashboard');

  }
  public function delete_copyright($id){
  $data = array();
	$this->admin_model->delete_copyright_info_by_id($id);
	$this->load->view('master/dashboard');

  }
  public function view_client($client_id){

        $data = array();
		$data['client_view_by_id'] = $this->admin_model->client_view_by_id($client_id);
		$data['client_info'] = $this->load->view('master/view_client', $data, true);
		$this->load->view('master/view_client', $data);

  }
   public function view_heading($footer_id){

        $data = array();
		$data['heading_view_by_id'] = $this->admin_model->heading_view_by_id($footer_id);
		$data['heading_info'] = $this->load->view('master/view_heading', $data, true);
		$this->load->view('master/view_heading', $data);

  }
  public function view_avatar($id){

        $data = array();
		$data['avatar_view_by_id'] = $this->admin_model->avatar_view_by_id($id);
		$data['avatar_info'] = $this->load->view('master/view_avatar', $data, true);
		$this->load->view('master/view_avatar', $data);

  }
  public function view_fmenu($id){

        $data = array();
		$data['fmenu_view_by_id'] = $this->admin_model->fmenu_view_by_id($id);
		$data['fmenu_info'] = $this->load->view('master/view_fmenu', $data, true);
		$this->load->view('master/view_fmenu', $data);

  }
   public function view_copyright($id){

        $data = array();
		$data['copyright_view_by_id'] = $this->admin_model->copyright_view_by_id($id);
		$data['copyright_info'] = $this->load->view('master/view_copyright', $data, true);
		$this->load->view('master/view_copyright', $data);

  }
  public function manage_blog(){



        $data = array();
		$data['manage_all_blog'] = $this->admin_model->manage_all_blog();
		$data['blog_info'] = $this->load->view('master/manage_blog', $data, true);
		
		$this->load->view('master/manage_blog', $data);
  }
  public function edit_blog($id){



  	     $data = array();
		$data['edit_all_blog_by_id'] = $this->admin_model->edit_all_blog_by_id($id);
		$data['blog_info'] = $this->load->view('master/edit_blog', $data, true);
		$this->load->view('master/edit_blog', $data);

  }
  public function update_blog(){

$this->admin_model->update_all_blog();
		$this->load->view('master/dashboard');

  }
  
  

  
  

}
