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
        $data = $this->engine->store_nav('appearance', 'slider_list', 'Create New Slider');
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
        //$data = array();
		//$data['slider_info'] = $this->load->view('backend/admin/edit_slider/view_slider', $data, true);
		//$this->load->view('backend/admin/edit_slider/view_slider', $data);
		$data = $this->engine->store_nav('appearance', 'slider_list', 'Create New Slider');
		$data['all_slider_view_by_id'] = $this->slider_model->all_slider_view_by_id($slider_id);
		$path = 'backend/admin/edit_slider/view_slider';
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
        $data = $this->engine->store_nav('appearance', 'testimonials', 'Create New testimonials');
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

  //footer menu 
	 public function footermenu()
	{
        $data = $this->engine->store_nav('appearance', 'footermenu', 'footermenu List');
        $data['footermenuList'] = $this->Common->get_data('footermenu');
        $path = 'backend/admin/footermenu/footermenu';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_footermenu()
	{
        $data = $this->engine->store_nav('appearance', 'footermenu', 'Create New footermenu');
		$path = 'backend/admin/footermenu/add_footermenu';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_footermenu()
	{


		$this->admin_model->save_footermenu();

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
$data = $this->engine->store_nav('about page', 'partner_image', 'Create New partner');
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
	//agency
	public function agency()
	{
        $data = $this->engine->store_nav('software service', 'agency', 'welcome to agency page');
        $data['agencyList'] = $this->Common->get_data('agency');
        $path = 'backend/admin/agency/agency';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_agency()
	{
        $data = $this->engine->store_nav('software service', 'agency', 'Create New agency');
		$path = 'backend/admin/agency/add_agency';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}


	public function save_agency()
	{


		$this->admin_model->save_agency();
	

    }
    public function edit_agency($id)
	{
        $data = array();
		$data['all_agency_by_id'] = $this->admin_model->all_agency_by_id($id);
		$this->load->view('backend/admin/agency/edit_agency', $data);

	}
	public function update_agency()
	{

		$this->admin_model->update_agency();
		redirect('Admin/agency');
           

	}
	public function view_agency($id){

         $data = array();
		$data['all_agency_view_by_id'] = $this->admin_model->all_agency_view_by_id($id);
		$data['agency_info'] = $this->load->view('backend/admin/agency/view_agency', $data, true);
		$this->load->view('backend/admin/agency/view_agency', $data);
		  
	}
	public function delete_agency($id)
	{
      $data = array();
		$this->admin_model->delete_agency_by_id($id);

		redirect('Admin/agency');

	}
	//service pages
	public function eservice_box()
	{
        $data = $this->engine->store_nav('software service', 'eservice_box', 'welcome to eservice page');
        $data['eserviceList'] = $this->Common->get_data('eservice');
        $path = 'backend/admin/eservice/eservice_page';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_service()
	{
        $data = $this->engine->store_nav('software service', 'eservice_box', 'Create New eservice');
		$path = 'backend/admin/eservice/add_eservice';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_eservice()
	{


		$this->admin_model->save_eservice();
	

}
public function edit_eservice($id)
	{
        $data = array();
		$data['all_eservice_by_id'] = $this->admin_model->all_eservice_by_id($id);
		$this->load->view('backend/admin/eservice/edit_eservice', $data);

	}
	public function update_eservice()
	{

		$this->admin_model->update_eservice();
		redirect('Admin/eservice_box');
           

	}
	public function view_eservice($id){

         $data = array();
		$data['all_eservice_view_by_id'] = $this->admin_model->all_eservice_view_by_id($id);
		$data['eservice_info'] = $this->load->view('backend/admin/eservice/view_eservice', $data, true);
		$this->load->view('backend/admin/eservice/view_eservice', $data);
		  
	}
	public function delete_eservice($id)
	{

		
		$data = array();
		$this->admin_model->delete_eservice_by_id($id);

		redirect('Admin/eservice_box');

	}
//product
public function product()
	{
        $data = $this->engine->store_nav('software service', 'product', 'welcome to product page');
        $data['productList'] = $this->Common->get_data('product');
        $path = 'backend/admin/product/product';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_product()
	{
        $data = $this->engine->store_nav('software service', 'product', 'Create New product');
		$path = 'backend/admin/product/add_product';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_product()
	{


		$this->admin_model->save_product();
	

}
 public function edit_product($id)
	{
        $data = array();
		$data['all_product_by_id'] = $this->admin_model->all_product_by_id($id);
		$this->load->view('backend/admin/product/edit_product', $data);

	}
	public function update_product()
	{

		$this->admin_model->update_product();
		redirect('Admin/product');
           

	}
	public function view_product($id){

         $data = array();
		$data['all_product_view_by_id'] = $this->admin_model->all_product_view_by_id($id);
		$data['product_info'] = $this->load->view('backend/admin/product/view_product', $data, true);
		$this->load->view('backend/admin/product/view_product', $data);
		  
	}
	public function delete_product($id)
	{
      $data = array();
		$this->admin_model->delete_product_by_id($id);

		redirect('Admin/product');

	}














//feature 

public function feature()
	{
        $data = $this->engine->store_nav('software service', 'feature', 'welcome to feature page');
        $data['featureList'] = $this->Common->get_data('feature');
        $path = 'backend/admin/feature/feature';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_feature()
	{
        $data = $this->engine->store_nav('software service', 'feature', 'Create New feature');
		$path = 'backend/admin/feature/add_feature';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_feature()
	{


		$this->admin_model->save_feature();
	

}
public function edit_feature($id)
	{
        $data = array();
		$data['all_feature_by_id'] = $this->admin_model->all_feature_by_id($id);
		$this->load->view('backend/admin/feature/edit_feature', $data);

	}
	public function update_feature()
	{

		$this->admin_model->update_feature();
		redirect('Admin/feature');
           

	}
	public function view_feature($id){

         $data = array();
		$data['all_feature_view_by_id'] = $this->admin_model->all_feature_view_by_id($id);
		$data['feature_info'] = $this->load->view('backend/admin/feature/view_feature', $data, true);
		$this->load->view('backend/admin/feature/view_feature', $data);
		  
	}
	public function delete_feature($id)
	{

		
		$data = array();
		$this->admin_model->delete_feature_by_id($id);

		redirect('Admin/feature');

	}

//quality
public function quality()
	{
        $data = $this->engine->store_nav('software service', 'quality', 'welcome to quality page');
        $data['qualityList'] = $this->Common->get_data('quality');
        $path = 'backend/admin/quality/quality';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_quality()
	{
        $data = $this->engine->store_nav('software service', 'quality', 'Create New quality');
		$path = 'backend/admin/quality/add_quality';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_quality()
	{


		$this->admin_model->save_quality();
	}
	 public function edit_quality($id)
	{
        $data = array();
		$data['all_quality_by_id'] = $this->admin_model->all_quality_by_id($id);
		$this->load->view('backend/admin/quality/edit_quality', $data);

	}
	public function update_quality()
	{

		$this->admin_model->update_quality();
		redirect('Admin/quality');
           

	}
	public function view_quality($id){

         $data = array();
		$data['all_quality_view_by_id'] = $this->admin_model->all_quality_view_by_id($id);
		$data['quality_info'] = $this->load->view('backend/admin/quality/view_quality', $data, true);
		$this->load->view('backend/admin/quality/view_quality', $data);
		  
	}
	public function delete_quality($id)
	{
      $data = array();
		$this->admin_model->delete_quality_by_id($id);

		redirect('Admin/quality');

	}

	//qualityitem
public function qualityitem()
	{
        $data = $this->engine->store_nav('software service', 'qualityitem', 'welcome to qualityitem page');
        $data['qualityitemList'] = $this->Common->get_data('qualityitem');
        $path = 'backend/admin/qualityitem/qualityitem';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_qualityitem()
	{
        $data = $this->engine->store_nav('software service', 'qualityitem', 'Create New qualityitem');
		$path = 'backend/admin/qualityitem/add_qualityitem';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_qualityitem()
	{


		$this->admin_model->save_qualityitem();
	}
	public function edit_qualityitem($id)
	{
        $data = array();
		$data['all_qualityitem_by_id'] = $this->admin_model->all_qualityitem_by_id($id);
		$this->load->view('backend/admin/qualityitem/edit_qualityitem', $data);

	}
	public function update_qualityitem()
	{

		$this->admin_model->update_qualityitem();
		redirect('Admin/qualityitem');
           

	}
	public function view_qualityitem($id){

         $data = array();
		$data['all_qualityitem_view_by_id'] = $this->admin_model->all_qualityitem_view_by_id($id);
		$data['qualityitem_info'] = $this->load->view('backend/admin/qualityitem/view_qualityitem', $data, true);
		$this->load->view('backend/admin/qualityitem/view_qualityitem', $data);
		  
	}
	public function delete_qualityitem($id)
	{

		
		$data = array();
		$this->admin_model->delete_qualityitem_by_id($id);

		redirect('Admin/qualityitem');

	}



//tools
	public function tools()
	{
        $data = $this->engine->store_nav('software service', 'tools', 'welcome to tools page');
        $data['toolsList'] = $this->Common->get_data('tools');
        $path = 'backend/admin/tools/tools';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_tools()
	{
        $data = $this->engine->store_nav('software service', 'tools', 'Create New tools');
		$path = 'backend/admin/tools/add_tools';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_tools()
	{


		$this->admin_model->save_tools();
	

}
public function edit_tools($id)
	{
        $data = array();
		$data['all_tools_by_id'] = $this->admin_model->all_tools_by_id($id);
		$this->load->view('backend/admin/tools/edit_tools', $data);

	}
	public function update_tools()
	{

		$this->admin_model->update_tools();
		redirect('Admin/tools');
           

	}
	public function view_tools($id){

         $data = array();
		$data['all_tools_view_by_id'] = $this->admin_model->all_tools_view_by_id($id);
		$data['tools_info'] = $this->load->view('backend/admin/tools/view_tools', $data, true);
		$this->load->view('backend/admin/tools/view_tools', $data);
		  
	}
	public function delete_tools($id)
	{
      $data = array();
		$this->admin_model->delete_tools_by_id($id);

		redirect('Admin/tools');

	}

//tools_box
	public function tools_box()
	{
        $data = $this->engine->store_nav('software service', 'tools_box', 'welcome to tools_box page');
        $data['toolsboxList'] = $this->Common->get_data('tools_box');
        $path = 'backend/admin/tools_box/tools_box';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_tools_box()
	{
        $data = $this->engine->store_nav('software service', 'tools_box', 'Create New tools_box');
		$path = 'backend/admin/tools_box/add_tools_box';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}

	public function save_tools_box()
	{


		$this->admin_model->save_tools_box();
	

}
public function edit_tools_box($id)
	{
        $data = array();
		$data['all_tools_box_by_id'] = $this->admin_model->all_tools_box_by_id($id);
		$this->load->view('backend/admin/tools_box/edit_tools_box', $data);

	}
	public function update_tools_box()
	{

		$this->admin_model->update_tools_box();
		redirect('Admin/tools_box');
           

	}
	public function view_tools_box($id){

         $data = array();
		$data['all_tools_box_view_by_id'] = $this->admin_model->all_tools_box_view_by_id($id);
		$data['tools_box_info'] = $this->load->view('backend/admin/tools_box/view_tools_box', $data, true);
		$this->load->view('backend/admin/tools_box/view_tools_box', $data);
		  
	}
	public function delete_tools_box($id)
	{

		
		$data = array();
		$this->admin_model->delete_tools_box_by_id($id);

		redirect('Admin/tools_box');

	}
//contact
	public function contact()
	{
        $data = $this->engine->store_nav('software service', 'contact', 'welcome to contact page');
        $data['contactList'] = $this->Common->get_data('contact');
        $path = 'backend/admin/contact/contact';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_contact()
	{
        $data = $this->engine->store_nav('software service', 'contact', 'Create New contact');
		$path = 'backend/admin/contact/add_contact';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}

	
	public function save_contact()
	{


		$this->admin_model->save_contact();
	

}
public function edit_contact($id)
	{
        $data = array();
		$data['all_contact_by_id'] = $this->admin_model->all_contact_by_id($id);
		$this->load->view('backend/admin/contact/edit_contact', $data);

	}
	public function update_contact()
	{

		$this->admin_model->update_contact();
		redirect('Admin/contact');
           

	}
	public function view_contact($id){

         $data = array();
		$data['all_contact_view_by_id'] = $this->admin_model->all_contact_view_by_id($id);
		$data['contact_info'] = $this->load->view('backend/admin/contact/view_contact', $data, true);
		$this->load->view('backend/admin/contact/view_contact', $data);
		  
	}
	public function delete_contact($id)
	{

		
		$data = array();
		$this->admin_model->delete_contact_by_id($id);

		redirect('Admin/contact');

	}




//contact form 

public function information()
	{
        $data = $this->engine->store_nav('software service', 'information', 'welcome to information page');
        $data['informationList'] = $this->Common->get_data('information');
        $path = 'backend/admin/information/information';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

public function save_contact_form()
	{


	$this->admin_model->save_contact_form();
	

}


//digital service
	public function dservice()
	{
        $data = $this->engine->store_nav('dservice', 'service', 'welcome to dservice page');
        $data['dserviceList'] = $this->Common->get_data('dservice');
        $path = 'backend/admin/dservice/dservice';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_dservice()
	{
        $data = $this->engine->store_nav('dservice', 'service', 'Create New dservice');
		$path = 'backend/admin/dservice/add_dservice';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_dservice()
	{


		$this->admin_model->save_dservice();
	

}
public function edit_dservice($id)
	{
        $data = array();
		$data['all_dservice_by_id'] = $this->admin_model->all_dservice_by_id($id);
		$this->load->view('backend/admin/dservice/edit_dservice', $data);

	}
	public function update_dservice()
	{

		$this->admin_model->update_dservice();
		redirect('Admin/dservice');
           

	}
	public function view_dservice($id){

         $data = array();
		$data['all_dservice_view_by_id'] = $this->admin_model->all_dservice_view_by_id($id);
		$data['dservice_info'] = $this->load->view('backend/admin/dservice/view_dservice', $data, true);
		$this->load->view('backend/admin/dservice/view_dservice', $data);
		  
	}
	public function delete_dservice($id)
	{

		
		$data = array();
		$this->admin_model->delete_dservice_by_id($id);

		redirect('Admin/dservice');

	}
//description
public function description()
	{
        $data = $this->engine->store_nav('dservice', 'description', 'welcome to description page');
        $data['descriptionList'] = $this->Common->get_data('description');
        $path = 'backend/admin/description/description';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
	public function add_description()
	{
        $data = $this->engine->store_nav('dservice', 'description', 'Create New description');
		$path = 'backend/admin/description/add_description';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_description()
	{


		$this->admin_model->save_description();
	

}
public function edit_description($id)
	{
        $data = array();
		$data['all_description_by_id'] = $this->admin_model->all_description_by_id($id);
		$this->load->view('backend/admin/description/edit_description', $data);

	}
	public function update_description()
	{

		$this->admin_model->update_description();
		redirect('Admin/description');
           

	}
	public function view_description($id){

         $data = array();
		$data['all_description_view_by_id'] = $this->admin_model->all_description_view_by_id($id);
		$data['description_info'] = $this->load->view('backend/admin/description/view_description', $data, true);
		$this->load->view('backend/admin/description/view_description', $data);
		  
	}
	public function delete_description($id)
	{

		
		$data = array();
		$this->admin_model->delete_description_by_id($id);

		redirect('Admin/description');

	}
//Tell Us
public function tell()
	{
        $data = $this->engine->store_nav('dservice', 'tell', 'welcome to tell page');
        $data['tellList'] = $this->Common->get_data('tell');
        $path = 'backend/admin/tell/tell';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
	public function add_tell()
	{
        $data = $this->engine->store_nav('dservice', 'tell', 'Create New tell');
		$path = 'backend/admin/tell/add_tell';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_tell()
	{


		$this->admin_model->save_tell();
	

}
public function edit_tell($id)
	{
        $data = array();
		$data['all_tell_by_id'] = $this->admin_model->all_tell_by_id($id);
		$this->load->view('backend/admin/tell/edit_tell', $data);

	}
	public function update_tell()
	{

		$this->admin_model->update_tell();
		redirect('Admin/tell');
           

	}
	public function view_tell($id){

         $data = array();
		$data['all_tell_view_by_id'] = $this->admin_model->all_tell_view_by_id($id);
		$data['tell_info'] = $this->load->view('backend/admin/tell/view_tell', $data, true);
		$this->load->view('backend/admin/tell/view_tell', $data);
		  
	}
	public function delete_tell($id)
	{

		
		$data = array();
		$this->admin_model->delete_tell_by_id($id);

		redirect('Admin/tell');

	}
//Levels
public function levels()
	{
        $data = $this->engine->store_nav('dservice', 'levels', 'welcome to levels page');
        $data['levelsList'] = $this->Common->get_data('levels');
        $path = 'backend/admin/levels/levels';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
	public function add_levels()
	{
        $data = $this->engine->store_nav('dservice', 'levels', 'Create New levels');
		$path = 'backend/admin/levels/add_levels';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_levels()
	{


		$this->admin_model->save_levels();
	

}
public function edit_levels($id)
	{
        $data = array();
		$data['all_levels_by_id'] = $this->admin_model->all_levels_by_id($id);
		$this->load->view('backend/admin/levels/edit_levels', $data);

	}
	public function update_levels()
	{

		$this->admin_model->update_levels();
		redirect('Admin/levels');
           

	}
	public function view_levels($id){

         $data = array();
		$data['all_levels_view_by_id'] = $this->admin_model->all_levels_view_by_id($id);
		$data['levels_info'] = $this->load->view('backend/admin/levels/view_levels', $data, true);
		$this->load->view('backend/admin/levels/view_levels', $data);
		  
	}
	public function delete_levels($id)
	{

		
		$data = array();
		$this->admin_model->delete_levels_by_id($id);

		redirect('Admin/levels');

	}
//levelsbox
public function levelsbox()
	{
        $data = $this->engine->store_nav('dservice', 'levelsbox', 'welcome to levelsbox page');
        $data['levelsboxList'] = $this->Common->get_data('levelsbox');
        $path = 'backend/admin/levelsbox/levelsbox';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
	public function add_levelsbox()
	{
        $data = $this->engine->store_nav('dservice', 'levelsbox', 'Create New levelsbox');
		$path = 'backend/admin/levelsbox/add_levelsbox';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_levelsbox()
	{


		$this->admin_model->save_levelsbox();
	

}
public function edit_levelsbox($id)
	{
        $data = array();
		$data['all_levelsbox_by_id'] = $this->admin_model->all_levelsbox_by_id($id);
		$this->load->view('backend/admin/levelsbox/edit_levelsbox', $data);

	}
	public function update_levelsbox()
	{

		$this->admin_model->update_levelsbox();
		redirect('Admin/levelsbox');
           

	}
	public function view_levelsbox($id){

         $data = array();
		$data['all_levelsbox_view_by_id'] = $this->admin_model->all_levelsbox_view_by_id($id);
		$data['levelsbox_info'] = $this->load->view('backend/admin/levelsbox/view_levelsbox', $data, true);
		$this->load->view('backend/admin/levelsbox/view_levelsbox', $data);
		  
	}
	public function delete_levelsbox($id)
	{

		
		$data = array();
		$this->admin_model->delete_levelsbox_by_id($id);

		redirect('Admin/levelsbox');

	}
//accordon
public function accordon()
	{
        $data = $this->engine->store_nav('dservice', 'accordon', 'welcome to accordon page');
        $data['accordonList'] = $this->Common->get_data('accordon');
        $path = 'backend/admin/accordon/accordon';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
	
	public function add_accordon()
	{
        $data = $this->engine->store_nav('dservice', 'accordon', 'Create New accordon');
		$path = 'backend/admin/accordon/add_accordon';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_accordon()
	{


		$this->admin_model->save_accordon();
	

}
public function edit_accordon($id)
	{
        $data = array();
		$data['all_accordon_by_id'] = $this->admin_model->all_accordon_by_id($id);
		$this->load->view('backend/admin/accordon/edit_accordon', $data);

	}
	public function update_accordon()
	{

		$this->admin_model->update_accordon();
		redirect('Admin/accordon');
           

	}
	public function view_accordon($id){

         $data = array();
		$data['all_accordon_view_by_id'] = $this->admin_model->all_accordon_view_by_id($id);
		$data['accordon_info'] = $this->load->view('backend/admin/accordon/view_accordon', $data, true);
		$this->load->view('backend/admin/accordon/view_accordon', $data);
		  
	}
	public function delete_accordon($id)
	{

		
		$data = array();
		$this->admin_model->delete_accordon_by_id($id);

		redirect('Admin/accordon');

	}
//brand

public function brand()
	{
        $data = $this->engine->store_nav('dservice', 'brand', 'welcome to brand page');
        $data['brandList'] = $this->Common->get_data('brand');
        $path = 'backend/admin/brand/brand';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
	
	public function add_brand()
	{
        $data = $this->engine->store_nav('dservice', 'brand', 'Create New brand');
		$path = 'backend/admin/brand/add_brand';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_brand()
	{


		$this->admin_model->save_brand();
	

}
public function edit_brand($id)
	{
        $data = array();
		$data['all_brand_by_id'] = $this->admin_model->all_brand_by_id($id);
		$this->load->view('backend/admin/brand/edit_brand', $data);

	}
	public function update_brand()
	{

		$this->admin_model->update_brand();
		redirect('Admin/brand');
           

	}
	public function view_brand($id){

         $data = array();
		$data['all_brand_view_by_id'] = $this->admin_model->all_brand_view_by_id($id);
		$data['brand_info'] = $this->load->view('backend/admin/brand/view_brand', $data, true);
		$this->load->view('backend/admin/brand/view_brand', $data);
		  
	}
	public function delete_brand($id)
	{

		
		$data = array();
		$this->admin_model->delete_brand_by_id($id);

		redirect('Admin/brand');

	}
//brandbox

public function brandbox()
	{
        $data = $this->engine->store_nav('dservice', 'brandbox', 'welcome to brandbox page');
        $data['brandboxList'] = $this->Common->get_data('brandbox');
        $path = 'backend/admin/brandbox/brandbox';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
	
	
	public function add_brandbox()
	{
        $data = $this->engine->store_nav('dservice', 'brandbox', 'Create New brandbox');
		$path = 'backend/admin/brandbox/add_brandbox';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_brandbox()
	{


		$this->admin_model->save_brandbox();
	

}
public function edit_brandbox($id)
	{
        $data = array();
		$data['all_brandbox_by_id'] = $this->admin_model->all_brandbox_by_id($id);
		$this->load->view('backend/admin/brandbox/edit_brandbox', $data);

	}
	public function update_brandbox()
	{

		$this->admin_model->update_brandbox();
		redirect('Admin/brandbox');
           

	}
	public function view_brandbox($id){

         $data = array();
		$data['all_brandbox_view_by_id'] = $this->admin_model->all_brandbox_view_by_id($id);
		$data['brandbox_info'] = $this->load->view('backend/admin/brandbox/view_brandbox', $data, true);
		$this->load->view('backend/admin/brandbox/view_brandbox', $data);
		  
	}
	public function delete_brandbox($id)
	{

		
		$data = array();
		$this->admin_model->delete_brandbox_by_id($id);

		redirect('Admin/brandbox');

	}



}
