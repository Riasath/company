<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    private $main_layout = 'backend/master_layout';
    private $side_menu = 'backend/admin/side_menu';
    public function index()
	{
       $data = $this->engine->store_nav('dashboard', 'Nothing', 'Welcome to dashboard');
		$path = 'backend/admin/dashboard';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
    
    public function list_slider()
	{
        $data = $this->engine->store_nav('appearance', 'slider_list', 'Slider List');
        $data['sliderList'] = $this->Common->get_data('slider');
        $path = 'backend/admin/slider/list';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_slider()
	{
        $data = $this->engine->store_nav('appearance', 'slider', 'Create New Slider');
		$path = 'backend/admin/slider/add';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
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
	

     //edit slider

	


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
	public function edit_footericon($id)
	{
        $data = array();
		$data['edit_footericon_by_id'] = $this->slider_model->edit_footericon_by_id($id);
		$this->load->view('backend/admin/footer/edit_footericon', $data);

	}
	public function update_footericon()
	{

		$this->slider_model->update_footericonlist();
		redirect('Admin/footer_icon');
           

	}
	public function save_footericon(){

    $this->slider_model->save_footericon();
    	redirect('Admin/footer_icon');
     
	}
	public function edit_footer_copyright($id)
	{
        $data = array();
		$data['edit_footer_copyright_by_id'] = $this->slider_model->edit_footer_copyright_by_id($id);
		$this->load->view('backend/admin/footer/edit_footer_copyright', $data);

	}
	public function update_footer_copyright()
	{

		$this->slider_model->update_footer_copyright_list();
		redirect('Admin/footer');
           

	}
	public function save_footer_copyright(){

    $this->slider_model->save_footer_copyright();
    	redirect('Admin/footer');
     
	}

	//delete all items



	public function delete_testimonials_list($testi_id)
	{

		
		$data = array();
		$this->slider_model->testimonials_delete_by_id($testi_id);

		redirect('Admin/testimonials');

	}
	public function delete_blog_list($id)
	{

		
		$data = array();
		$this->slider_model->blog_delete_by_id($id);

		redirect('Admin/blog');

	}
	public function delete_client_list($client_id)
	{

		
		$data = array();
		$this->slider_model->client_delete_by_id($client_id);

		redirect('Admin/client');

	}
	public function delete_footertop_list($footer_id)
	{

		
		$data = array();
		$this->slider_model->delete_footertop_by_id($footer_id);

		redirect('Admin/footer_top');

	}
	public function delete_footerbottom_list($id)
	{

		
		$data = array();
		$this->slider_model->delete_footerbottom_by_id($id);

		redirect('Admin/footer_bottom');

	}
	public function delete_footericon_list($id)
	{

		
		$data = array();
		$this->slider_model->delete_footericon_by_id($id);

		redirect('Admin/footer_icon');

	}
	public function delete_footercopyright_list($id)
	{

		
		$data = array();
		$this->slider_model->delete_footercopyright_by_id($id);

		redirect('Admin/footer');

	}



	//view items


	public function view_testimonials_list($testi_id){

         $data = array();
		$data['all_testimonials_view_by_id'] = $this->slider_model->all_testimonials_view_by_id($testi_id);
		$data['testimonials_info'] = $this->load->view('backend/admin/testimonials/view_testimonials', $data, true);
		$this->load->view('backend/admin/testimonials/view_testimonials', $data);
		  
	}

	public function view_blog_list($id){

         $data = array();
		$data['all_blog_view_by_id'] = $this->slider_model->all_blog_view_by_id($id);
		$data['blog_info'] = $this->load->view('backend/admin/blog/view_blog', $data, true);
		$this->load->view('backend/admin/blog/view_blog', $data);
		  
	}
	public function view_client_list($client_id){

         $data = array();
		$data['all_client_view_by_id'] = $this->slider_model->all_client_view_by_id($client_id);
		$data['client_info'] = $this->load->view('backend/admin/client/view_client', $data, true);
		$this->load->view('backend/admin/client/view_client', $data);
		  
	}
	public function view_footertop_list($footer_id){

         $data = array();
		$data['all_footertop_view_by_id'] = $this->slider_model->all_footertop_view_by_id($footer_id);
		$data['footertop_info'] = $this->load->view('backend/admin/footer/view_footertop', $data, true);
		$this->load->view('backend/admin/footer/view_footertop', $data);
		  
	}
	public function view_footerbottom_list($id){

         $data = array();
		$data['all_footerbottom_view_by_id'] = $this->slider_model->all_footerbottom_view_by_id($id);
		$data['footerbottom_info'] = $this->load->view('backend/admin/footer/view_footerbottom', $data, true);
		$this->load->view('backend/admin/footer/view_footerbottom', $data);
		  
	}
	public function view_footericon_list($id){

         $data = array();
		$data['all_footericon_view_by_id'] = $this->slider_model->all_footericon_view_by_id($id);
		$data['footericon_info'] = $this->load->view('backend/admin/footer/view_footericon', $data, true);
		$this->load->view('backend/admin/footer/view_footericon', $data);
		  
	}
	public function view_footercopyright_list($id){

         $data = array();
		$data['all_footercopyright_view_by_id'] = $this->slider_model->all_footercopyright_view_by_id($id);
		$data['footercopyright_info'] = $this->load->view('backend/admin/footer/view_footercopyright', $data, true);
		$this->load->view('backend/admin/footer/view_footercopyright', $data);
		  
	}
  


  //about page


	//short story

	 public function short_story()
	{
        $data = $this->engine->store_nav('about page', 'short_story', 'welcome to about page');
        $data['shortstoryList'] = $this->Common->get_data('short_story');
        $path = 'backend/admin/short_story/short_story_page';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_short_story()
	{
        $data = $this->engine->store_nav('about page', 'short_story', 'Create New short story');
		$path = 'backend/admin/short_story/add_short_story';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_short_story()
	{


		$this->admin_model->save_short_story();

	}
	 public function edit_shortstory_list($id)
	{
        $data = array();
		$data['all_shortstory_list_by_id'] = $this->admin_model->all_shortstory_list_by_id($id);
		$this->load->view('backend/admin/short_story/edit_shortstory_list', $data);

	}
	public function update_shortstory_list()
	{

		$this->admin_model->update_shortstory_list();
		redirect('Admin/short_story');
           

	}
	public function delete_shortstory_list($id)
	{

		
		$data = array();
		$this->admin_model->delete_shortstory_by_id($id);

		redirect('Admin/short_story');

	}
	public function view_shortstory_list($id){

         $data = array();
		$data['all_shortstory_view_by_id'] = $this->admin_model->all_shortstory_view_by_id($id);
		$data['shortstory_info'] = $this->load->view('backend/admin/short_story/view_shortstory', $data, true);
		$this->load->view('backend/admin/short_story/view_shortstory', $data);
		  
	}

	

	//foundation
	 public function foundation
	 ()
	{
$data = $this->engine->store_nav('about page', 'foundation', 'welcome to foundation info');
$data['foundationList'] = $this->Common->get_data('foundation');
$path = 'backend/admin/foundation/foundation_page';
$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	 public function add_foundation
	 ()
	{
$data = $this->engine->store_nav('about page', 'foundation', 'Create New foundation');
		$path = 'backend/admin/foundation/add_foundation';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function save_foundation()
	{


		$this->admin_model->save_foundation();

	}
	 public function edit_foundation_list($id)
	{
        $data = array();
		$data['all_foundation_list_by_id'] = $this->admin_model->all_foundation_list_by_id($id);
		$this->load->view('backend/admin/foundation/edit_foundation_list', $data);

	}
	public function update_foundation_list()
	{

		$this->admin_model->update_foundation_list();
		redirect('Admin/foundation');
           

	}
	public function view_foundation_list($id){

         $data = array();
		$data['all_foundation_view_by_id'] = $this->admin_model->all_foundation_view_by_id($id);
		$data['foundation_info'] = $this->load->view('backend/admin/foundation/view_foundation', $data, true);
		$this->load->view('backend/admin/foundation/view_foundation', $data);
		  
	}
	public function delete_foundation_list($id)
	{

		
		$data = array();
		$this->admin_model->delete_foundation_by_id($id);

		redirect('Admin/foundation');

	}
	//our work
  
 public function work
	 ()
	{
$data = $this->engine->store_nav('about page', 'work', 'welcome to our 
	work ');
$data['workList'] = $this->Common->get_data('work');
$path = 'backend/admin/work/work_page';
$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	 public function add_work
	 ()
	{
$data = $this->engine->store_nav('about page', 'work', 'Create New work');
		$path = 'backend/admin/work/add_work';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function save_work()
	{


		$this->admin_model->save_work();

	}
	public function edit_work($id)
	{
        $data = array();
		$data['all_work_by_id'] = $this->admin_model->all_work_by_id($id);
		$this->load->view('backend/admin/work/edit_work', $data);

	}
	public function update_work()
	{

		$this->admin_model->update_work();
		redirect('Admin/work');
           

	}
	public function view_work($id){

         $data = array();
		$data['all_work_view_by_id'] = $this->admin_model->all_work_view_by_id($id);
		$data['work_info'] = $this->load->view('backend/admin/work/view_work', $data, true);
		$this->load->view('backend/admin/work/view_work', $data);
		  
	}
	public function delete_work($id)
	{

		
		$data = array();
		$this->admin_model->delete_work_by_id($id);

		redirect('Admin/work');

	}
	//expert 

 public function expert()
	{
$data = $this->engine->store_nav('about page', 'expert', 'welcome to our expert ');
$data['expertList'] = $this->Common->get_data('expert');
$path = 'backend/admin/expert/expert_page';
$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	 public function add_expert
	 ()
	{
$data = $this->engine->store_nav('about page', 'expert', 'Create New expert');
		$path = 'backend/admin/expert/add_expert';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function save_expert()
	{


		$this->admin_model->save_expert();
	

}
public function edit_expert($id)
	{
        $data = array();
		$data['all_expert_by_id'] = $this->admin_model->all_expert_by_id($id);
		$this->load->view('backend/admin/expert/edit_expert', $data);

	}
	public function update_expert()
	{

		$this->admin_model->update_expert();
		redirect('Admin/expert');
           

	}
	public function view_expert($id){

         $data = array();
		$data['all_expert_view_by_id'] = $this->admin_model->all_expert_view_by_id($id);
		$data['expert_info'] = $this->load->view('backend/admin/expert/view_expert', $data, true);
		$this->load->view('backend/admin/expert/view_expert', $data);
		  
	}
	public function delete_expert($id)
	{

		
		$data = array();
		$this->admin_model->delete_expert_by_id($id);

		redirect('Admin/expert');

	}
	//team
	public function team()
	{
$data = $this->engine->store_nav('about page', 'team', 'welcome to our team ');
$data['teamList'] = $this->Common->get_data('team');
$path = 'backend/admin/team/team_page';
$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	 public function add_team
	 ()
	{
$data = $this->engine->store_nav('about page', 'team', 'Create New team');
		$path = 'backend/admin/team/add_team';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
public function save_team()
	{


		$this->admin_model->save_team();
	

}
public function edit_team($id)
	{
        $data = array();
		$data['all_team_by_id'] = $this->admin_model->all_team_by_id($id);
		$this->load->view('backend/admin/team/edit_team', $data);

	}
	public function update_team()
	{

		$this->admin_model->update_team();
		redirect('Admin/team');
           

	}
	public function view_team($id){

         $data = array();
		$data['all_team_view_by_id'] = $this->admin_model->all_team_view_by_id($id);
		$data['team_info'] = $this->load->view('backend/admin/team/view_team', $data, true);
		$this->load->view('backend/admin/team/view_team', $data);
		  
	}
	public function delete_team($id)
	{

		
		$data = array();
		$this->admin_model->delete_team_by_id($id);

		redirect('Admin/team');

	}

	//promo
	public function promo()
	{
$data = $this->engine->store_nav('about page', 'promo', 'welcome to our promo ');
$data['promoList'] = $this->Common->get_data('promo');
$path = 'backend/admin/promo/promo_page';
$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	 public function add_promo
	 ()
	{
$data = $this->engine->store_nav('about page', 'promo', 'Create New promo');
		$path = 'backend/admin/promo/add_promo';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function save_promo()
	{


		$this->admin_model->save_promo();
	

}
public function edit_promo($id)
	{
        $data = array();
		$data['all_promo_by_id'] = $this->admin_model->all_promo_by_id($id);
		$this->load->view('backend/admin/promo/edit_promo', $data);

	}
	public function update_promo()
	{

		$this->admin_model->update_promo();
		redirect('Admin/promo');
           

	}
	public function view_promo($id){

         $data = array();
		$data['all_promo_view_by_id'] = $this->admin_model->all_promo_by_id($id);
		$data['promo_info'] = $this->load->view('backend/admin/promo/view_promo', $data, true);
		$this->load->view('backend/admin/promo/view_promo', $data);
		  
	}
	public function delete_promo($id)
	{

		
		$data = array();
		$this->admin_model->delete_promo_by_id($id);

		redirect('Admin/promo');

	}
	//vision
	public function vision()
	{
$data = $this->engine->store_nav('about page', 'vision', 'welcome to our vision ');
$data['visionList'] = $this->Common->get_data('vision');
$path = 'backend/admin/vision/vision_page';
$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_vision
	 ()
	{
$data = $this->engine->store_nav('about page', 'vision', 'Create New vision');
		$path = 'backend/admin/vision/add_vision';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
		public function save_vision()
	{


		$this->admin_model->save_vision();
	

}
public function edit_vision($id)
	{
        $data = array();
		$data['all_vision_by_id'] = $this->admin_model->all_vision_by_id($id);
		$this->load->view('backend/admin/vision/edit_vision', $data);

	}
	public function update_vision()
	{

		$this->admin_model->update_vision();
		redirect('Admin/vision');
           

	}
	public function view_vision($id){

         $data = array();
		$data['all_vision_view_by_id'] = $this->admin_model->all_vision_by_id($id);
		$data['vision_info'] = $this->load->view('backend/admin/vision/view_vision', $data, true);
		$this->load->view('backend/admin/vision/view_vision', $data);
		  
	}
	public function delete_vision($id)
	{

		
		$data = array();
		$this->admin_model->delete_vision_by_id($id);

		redirect('Admin/vision');

	}
	//feedback
	public function feedback()
	{
$data = $this->engine->store_nav('about page', 'feedback', 'welcome to our feedback ');
$data['feedbackList'] = $this->Common->get_data('feedback');
$path = 'backend/admin/feedback/feedback_page';
$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_feedback
	 ()
	{
$data = $this->engine->store_nav('about page', 'feedback', 'Create New feedback');
		$path = 'backend/admin/feedback/add_feedback';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function save_feedback()
	{


		$this->admin_model->save_feedback();
	

}
public function edit_feedback($id)
	{
        $data = array();
		$data['all_feedback_by_id'] = $this->admin_model->all_feedback_by_id($id);
		$this->load->view('backend/admin/feedback/edit_feedback', $data);

	}
	public function update_feedback()
	{

		$this->admin_model->update_feedback();
		redirect('Admin/feedback');
           

	}
	public function view_feedback($id){

         $data = array();
		$data['all_feedback_view_by_id'] = $this->admin_model->all_feedback_view_by_id($id);
		$data['feedback_info'] = $this->load->view('backend/admin/feedback/view_feedback', $data, true);
		$this->load->view('backend/admin/feedback/view_feedback', $data);
		  
	}
	public function delete_feedback($id)
	{
      $data = array();
		$this->admin_model->delete_feedback_by_id($id);

		redirect('Admin/feedback');

	}
	//partner
	public function partner()
	{
$data = $this->engine->store_nav('about page', 'partner', 'welcome to our partner ');
$data['partnerList'] = $this->Common->get_data('partner');
$path = 'backend/admin/partner/partner_page';
$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_partner
	 ()
	{
$data = $this->engine->store_nav('about page', 'partner', 'Create New partner');
		$path = 'backend/admin/partner/add_partner';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function save_partner()
	{


		$this->admin_model->save_partner();
	

}
public function edit_partner($id)
	{
        $data = array();
		$data['all_partner_by_id'] = $this->admin_model->all_partner_by_id($id);
		$this->load->view('backend/admin/partner/edit_partner', $data);

	}
	public function update_partner()
	{

		$this->admin_model->update_partner();
		redirect('Admin/partner');
           

	}
	public function view_partner($id){

         $data = array();
		$data['all_partner_view_by_id'] = $this->admin_model->all_partner_view_by_id($id);
		$data['partner_info'] = $this->load->view('backend/admin/partner/view_partner', $data, true);
		$this->load->view('backend/admin/partner/view_partner', $data);
		  
	}
	public function delete_partner($id)
	{
      $data = array();
		$this->admin_model->delete_partner_by_id($id);

		redirect('Admin/partner');

	}
	//partner image

  	public function partner_image()
	{
$data = $this->engine->store_nav('about page', 'partner_image', 'welcome to our partner_image ');
$data['partnerimageList'] = $this->Common->get_data('partner_image');
$path = 'backend/admin/partner_image/partner_image';
$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_partner_image
	 ()
	{
$data = $this->engine->store_nav('about page', 'partner', 'Create New partner');
		$path = 'backend/admin/partner_image/add_partner_image';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function save_partner_image()
	{


		$this->admin_model->save_partner_image();
	

}
public function edit_partner_image($id)
	{
        $data = array();
		$data['all_partner_image_by_id'] = $this->admin_model->all_partner_image_by_id($id);
		$this->load->view('backend/admin/partner_image/edit_partner_image', $data);

	}
	public function update_partner_image()
	{

		$this->admin_model->update_partner_image();
		redirect('Admin/partner_image');
           

	}
	public function view_partner_image($id){

         $data = array();
		$data['all_partner_image_view_by_id'] = $this->admin_model->all_partner_image_view_by_id($id);
		$data['partner_image_info'] = $this->load->view('backend/admin/partner_image/view_partner_image', $data, true);
		$this->load->view('backend/admin/partner_image/view_partner_image', $data);
		  
	}
	public function delete_partner_image($id)
	{
      $data = array();
		$this->admin_model->delete_partner_image_by_id($id);

		redirect('Admin/partner_image');

	}
	//service pages
	public function eservice_box()
	{
        $data = $this->engine->store_nav('eservice', 'eservice_box', 'welcome to eservice page');
        $data['eserviceList'] = $this->Common->get_data('eservice');
        $path = 'backend/admin/eservice/eservice_page';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_service()
	{
        $data = $this->engine->store_nav('eservice', 'eservice_box', 'Create New eservice');
		$path = 'backend/admin/eservice/add_eservice';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	//digital service
	public function dservice()
	{
        $data = $this->engine->store_nav('dservice', 'dservice', 'welcome to dservice page');
        $data['eserviceList'] = $this->Common->get_data('dservice');
        $path = 'backend/admin/dservice/dservice_page';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_dservice()
	{
        $data = $this->engine->store_nav('dservice', 'dservice', 'Create New dservice');
		$path = 'backend/admin/dservice/add_deservice';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}



}
