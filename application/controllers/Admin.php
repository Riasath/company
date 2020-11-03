<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    private $main_layout = 'backend/master_layout';
    private $side_menu = 'backend/admin/side_menu';
    
    public function list_slider()
	{
        $data = $this->engine->store_nav('appearance', 'slider_list', 'Slider List');
        $data['sliderList'] = $this->Common->get_data('slider');
        $path = 'backend/admin/slider/list';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	  public function testimonials()
	{
        $data = $this->engine->store_nav('appearance', 'testimonials', 'Welcome to testimonials');
        $data['testimonialsList'] = $this->Common->get_data('testimonials');
        $path = 'backend/admin/testimonials/testimonials';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	 public function blog()
	{
        $data = $this->engine->store_nav('appearance', 'blog', 'Welcome to blog');
        $data['blogList'] = $this->Common->get_data('blog');
        $path = 'backend/admin/blog/blog';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
	 public function client()
	{
        $data = $this->engine->store_nav('appearance', 'client', 'Welcome to client');
        $data['clientList'] = $this->Common->get_data('client_img');
        $path = 'backend/admin/client/client';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}


 public function footer ()
	{
        $data = $this->engine->store_nav('appearance', 'footer', 'Welcome to footer');
        $data['footerList'] = $this->Common->get_data('copyright');
        $path = 'backend/admin/footer/footer';

		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	 public function footer_top ()
	{
        $data = $this->engine->store_nav('appearance', 'footer_top', 'Welcome to footer top');
        $data['footertopList'] = $this->Common->get_data('footer');
        $path = 'backend/admin/footer/footer_top';

		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
 public function footer_bottom ()
	{
        $data = $this->engine->store_nav('appearance', 'footer_bottom', 'Welcome to footer bottom');
        $data['footerbottomList'] = $this->Common->get_data('footer_bottom');
        $path = 'backend/admin/footer/footer_bottom';

		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function footer_icon ()
	{
        $data = $this->engine->store_nav('appearance', 'footer_icon', 'Welcome to footer Icon');
        $data['footericonList'] = $this->Common->get_data('footer_img');
        $path = 'backend/admin/footer/footer_icon';

		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}





	public function add_slider()
	{
        $data = $this->engine->store_nav('appearance', 'slider', 'Create New Slider');
		$path = 'backend/admin/slider/add';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function add_testimonials()
	{
        $data = $this->engine->store_nav('appearance', 'tetimonials', 'Create New tetimonials');
		$path = 'backend/admin/testimonials/add_testimonials';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function add_blog()
	{
        $data = $this->engine->store_nav('appearance', 'blog', 'Create New blog');
		$path = 'backend/admin/blog/add_blog';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function add_client()
	{
        $data = $this->engine->store_nav('appearance', 'client', 'Create New client');
		$path = 'backend/admin/client/add_client';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function add_footer_top()
	{
        $data = $this->engine->store_nav('appearance', 'footer', 'Create New footer top');
		$path = 'backend/admin/footer/add_footer_top';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function add_footer_bottom()
	{
        $data = $this->engine->store_nav('appearance', 'footer', 'Create New footer top');
		$path = 'backend/admin/footer/add_footer_bottom';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function add_footer()
	{
        $data = $this->engine->store_nav('appearance', 'footer', 'Create New footer');
		$path = 'backend/admin/footer/add_footer';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function add_footer_icon()
	{
        $data = $this->engine->store_nav('appearance', 'footer_icon', 'Create New footer icon');
		$path = 'backend/admin/footer/add_footer_icon';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_slider()
	{

		$this->admin_model->save_slider_info();
		redirect('Admin/list_slider');
	}
	public function add_slides_item()
	{
		$this->load->view('master/add_slides_item');
	}
	public function save_slides_item()
	{

		$this->admin_model->save_slides_item_info();
	}

     //edit slider

	public function edit_slider_list($slider_id)
	{
        $data = array();
		$data['all_slider_info_by_id'] = $this->Common->all_slider_list_by_id($slider_id);
		$this->load->view('backend/admin/edit_slider/edit_slider_list', $data);

		
         // $data = $this->engine->store_nav('appearance', 'slider', 'Create New Slider');
       
		//$path = 'backend/admin/edit_slider/edit_slider_list';
		//$this->engine->render_view($data, $path,$this->side_menu, $this->main_layout);
	
	}

	public function update_slider_list_info()
	{

		$this->Common->update_slider_list();
		redirect('Admin/list_slider');


	}
	public function delete_slider_list($slider_id)
	{

		$data = array();
		$this->Common->slider_delete_by_id($slider_id);

		redirect('Admin/list_slider');

	}
	public function view_slider_list($slider_id){

         $data = array();
		$data['all_slider_view_by_id'] = $this->slider_model->all_slider_view_by_id($slider_id);
		$data['slider_info'] = $this->load->view('backend/admin/edit_slider/view_slider', $data, true);
		$this->load->view('backend/admin/edit_slider/view_slider', $data);
		  
	}



	//for testimonials
     public function edit_testimonials_list($testi_id)
	{
        $data = array();
		$data['all_testimonials_list_by_id'] = $this->slider_model->all_testimonials_list_by_id($testi_id);
		$this->load->view('backend/admin/testimonials/edit_testimonials_list', $data);

	
	}
	public function save_testimonials_list()
	{

		$this->slider_model->save_testimonials_list();
	     redirect('Admin/testimonials');
	}

	public function update_testimonials_list()
	{

		$this->slider_model->update_testimonials_list();
		redirect('Admin/testimonials');
           

	}
	 public function edit_blog_list($id)
	{
        $data = array();
		$data['all_blog_list_by_id'] = $this->slider_model->all_blog_list_by_id($id);
		$this->load->view('backend/admin/blog/edit_blog_list', $data);

	
	}
	public function update_blog_list()
	{

		$this->slider_model->update_blog_list();
		redirect('Admin/blog');
           

	}
	public function save_blog_list()
	{

		$this->slider_model->save_blog_list();
	     redirect('Admin/blog');
	}
	  public function edit_client_list($client_id)
	{
        $data = array();
		$data['all_client_list_by_id'] = $this->slider_model->all_client_list_by_id($client_id);
		$this->load->view('backend/admin/client/edit_client_list', $data);

	
	}
	public function update_client_list()
	{

		$this->slider_model->update_client_list();
		redirect('Admin/client');
           

	}
	public function save_client_list()
	{

		$this->slider_model->save_client_list();
	     redirect('Admin/client');
	}
	  public function edit_footertop_list($footer_id)
	{
        $data = array();
		$data['all_footertop_list_by_id'] = $this->slider_model->all_footertop_list_by_id($footer_id);
		$this->load->view('backend/admin/footer/edit_footertop_list', $data);

	}
	public function save_footertop()
	{

		$this->slider_model->save_footertop();
	     redirect('Admin/footer_top');
	}
	public function update_footertop_list()
	{

		$this->slider_model->update_footertop_list();
		redirect('Admin/footer_top');
           

	}
	  public function edit_footerbottom_list($id)
	{
        $data = array();
		$data['all_footerbottom_list_by_id'] = $this->slider_model->all_footerbottom_list_by_id($id);
		$this->load->view('backend/admin/footer/edit_footerbottom_list', $data);

	}
	public function save_footerbottom()
	{

		$this->slider_model->save_footerbottom();
	     redirect('Admin/footer_bottom');
	}
	public function update_footerbottom()
	{

		$this->slider_model->update_footerbottom();
		redirect('Admin/footer_bottom');
           

	}
  

	


	

}
