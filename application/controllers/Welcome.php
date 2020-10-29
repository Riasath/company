<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $main_layout = 'backend/master_layout';
	private $side_menu = 'backend/admin/side_menu';
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test()
	{
		
		$data = $this->engine->store_nav('dashboard', 'Nothing', 'Welcome to dashboard');
		$path = 'backend/admin/dashboard';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

	public function test_main_menu()
	{
		
		$data = $this->engine->store_nav('test_main_menu', 'test_main_menu', 'Welcome to dashboard');
		$path = 'backend/admin/test_menu';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

	public function test_sub_menu_one()
	{
		
		$data = $this->engine->store_nav('test_main_menu', 'test_sub_menu_one', 'Welcome to dashboard');
		$path = 'backend/admin/test_menu';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

	public function test_sub_menu_two()
	{
		
		$data = $this->engine->store_nav('test_main_menu', 'test_sub_menu_two', 'Welcome to dashboard');
		$path = 'backend/admin/test_sub_one';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
}
