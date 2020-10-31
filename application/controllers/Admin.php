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
	public function add_footer()
	{
        $data = $this->engine->store_nav('appearance', 'footer', 'Create New footer');
		$path = 'backend/admin/footer/add_footer';
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
}
