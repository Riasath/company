<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    private $main_layout = 'backend/master_layout';
    private $side_menu = 'backend/admin/side_menu';
  
    public function index()
	{
 
		$this->load->view('admin_login');
	}
	public function admin_view(){
 $data = $this->engine->store_nav('dashboard', 'Nothing', 'Welcome to dashboard');
		$path = 'backend/admin/dashboard';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
    
    public function admin_login(){

$username=$this->input->post('username',true);
$password=$this->input->post('password',true);
$this->load->model('admin_model');
$result=$this->admin_model->admin_model_data($username,$password);
if($result){

	redirect('Admin/admin_view');
}else{

	echo "Your username or password invalid";
}





    }
    //logout
    public function logout()
	{
 
		$this->load->view('admin_login');
	}

    //popup
     public function popup()
	{
        $data = $this->engine->store_nav('appearance', 'popup', 'popup List');
        $data['popupList'] = $this->Common->get_data('popup');
        $path = 'backend/admin/popup/popup';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_popup()
	{
        $data = $this->engine->store_nav('appearance', 'popup', 'Create New popup');
		$path = 'backend/admin/popup/add_popup';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}

public function save_popup()
	{


		$this->admin_model->save_popup();
		redirect('Admin/popup');
	

}
public function edit_popup($id)
	{
       $data = $this->engine->store_nav('appearance', 'popup', 'welcome to our  popup ');
$data['all_popup_by_id'] = $this->admin_model->all_popup_by_id($id);
	   	$path = 'backend/admin/popup/edit_popup';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_popup()
	{

		$this->admin_model->update_popup();
		$sdata=array();
		$sdata['message']='Successfully updated data';
		$this->session->set_userdata($sdata);
		redirect('Admin/popup');
           

	}
	public function view_popup($id){

 $data = $this->engine->store_nav('appearance', 'popup', 'welcome to our  popup ');
$data['all_popup_view_by_id'] = $this->admin_model->all_popup_view_by_id($id);
	   	$path = 'backend/admin/popup/view_popup';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);  
	}
	public function delete_popup($id)
	{

		
		$data = array();
		$this->admin_model->delete_popup_by_id($id);

		redirect('Admin/popup');

	}
	 //popupicon
     public function popupicon()
	{
        $data = $this->engine->store_nav('appearance', 'popupicon', 'popupicon List');
        $data['popupList'] = $this->Common->get_data('popupicon');
        $path = 'backend/admin/popupicon/popupicon';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_popupicon()
	{
        $data = $this->engine->store_nav('appearance', 'popupicon', 'Create New popupicon');
		$path = 'backend/admin/popupicon/add_popupicon';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}

public function save_popupicon()
	{


		$this->admin_model->save_popupicon();
		$sdata=array();
		$sdata['message']='Successfully save data';
		$this->session->set_userdata($sdata);
		redirect('Admin/add_popupicon');
	

}
public function edit_popupicon($id)
	{
       $data = $this->engine->store_nav('appearance', 'popupicon', 'welcome to our  popupicon ');
$data['all_popupicon_by_id'] = $this->admin_model->all_popupicon_by_id($id);
	   	$path = 'backend/admin/popupicon/edit_popupicon';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_popupicon()
	{

		$this->admin_model->update_popupicon();
		$sdata=array();
		$sdata['message']='Successfully updated data';
		$this->session->set_userdata($sdata);
		redirect('Admin/popupicon');
           

	}
	public function view_popupicon($id){

 $data = $this->engine->store_nav('appearance', 'popupicon', 'welcome to our  popupicon ');
$data['all_popupicon_view_by_id'] = $this->admin_model->all_popupicon_view_by_id($id);
	   	$path = 'backend/admin/popupicon/view_popupicon';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);  
	}
	public function delete_popupicon($id)
	{

		
		$data = array();
		$this->admin_model->delete_popupicon_by_id($id);

		redirect('Admin/popupicon');

	}
	//signup
	public function save_signup()
	{


		$this->admin_model->save_signup();
		redirect('');
	

}
public function signup()
	{
        $data = $this->engine->store_nav('appearance', 'signup', 'welcome to signup page');
        $data['signupList'] = $this->Common->get_data('signup');
        $path = 'backend/admin/signup/signup';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	  //sidebar
     public function sidebar()
	{
        $data = $this->engine->store_nav('appearance', 'sidebar', 'sidebar List');
        $data['sidebarList'] = $this->Common->get_data('sidebar');
        //$data['all_sidebar_by_id'] = $this->admin_model->all_sidebar_by_id($id);
        $path = 'backend/admin/sidebar/sidebar';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_sidebar()
	{
        $data = $this->engine->store_nav('appearance', 'sidebar', 'Create New sidebar');
		$path = 'backend/admin/sidebar/add_sidebar';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_sidebar()
	{

		$this->admin_model->save_sidebar();
		redirect('Admin/sidebar');
	}
	public function edit_sidebar($id)
	{
     $data = $this->engine->store_nav('appearance', 'sidebar', 'New sidebar');
		$data['all_sidebar_by_id'] = $this->admin_model->all_sidebar_by_id($id);
	   	$path = 'backend/admin/sidebar/edit_sidebar';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_sidebar()
	{

		$this->admin_model->update_sidebar();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/sidebar');
           

	}
	public function view_sidebar($id){

         

		 $data = $this->engine->store_nav('appearance', 'sidebar', 'New sidebar');
		$data['all_sidebar_view_by_id'] = $this->admin_model->all_sidebar_by_id($id);
	   	$path = 'backend/admin/sidebar/view_sidebar';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_sidebar($id)
	{

		
		$data = array();
		$this->admin_model->delete_sidebar_by_id($id);

		redirect('Admin/sidebar');

	}
	//slider


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
      


		$data = $this->engine->store_nav('appearance', 'slider_list', 'Create New Slider');
		$data['all_slider_info_by_id'] = $this->Common->all_slider_list_by_id($slider_id);
	   	$path = 'backend/admin/edit_slider/edit_slider_list';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
        
		  
	
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
	public function update_slider_list_info()
	{

		$this->Common->update_slider_list();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/list_slider');


	}
	public function delete_slider_list($slider_id)
	{

		$data = array();
		$this->Common->slider_delete_by_id($slider_id);

		redirect('Admin/list_slider');

	}

	public function save_slider()
	{

		$this->admin_model->save_slider_info();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('Admin/add_slider');
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
        $data = $this->engine->store_nav('appearance', 'footer_top', 'Create New footer top');
		$path = 'backend/admin/footer/add_footer_top';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function add_footer_bottom()
	{
        $data = $this->engine->store_nav('appearance', 'footer_bottom', 'Create New footer top');
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
      $data = $this->engine->store_nav('appearance', 'testimonials', 'Create New testimonials');
		$data['all_testimonials_list_by_id'] = $this->slider_model->all_testimonials_list_by_id($testi_id);
	   	$path = 'backend/admin/testimonials/edit_testimonials_list';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	
	}
	public function save_testimonials_list()
	{

		$this->slider_model->save_testimonials_list();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
	     redirect('Admin/add_testimonials');
	}

	public function update_testimonials_list()
	{

		$this->slider_model->update_testimonials_list();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/testimonials');
           

	}
	 public function edit_blog_list($id)
	{
        
  $data = $this->engine->store_nav('appearance', 'blog', 'Create New blog');
		$data['all_blog_list_by_id'] = $this->slider_model->all_blog_list_by_id($id);
	   	$path = 'backend/admin/blog/edit_blog_list';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	

	}
	public function update_blog_list()
	{

		$this->slider_model->update_blog_list();
			$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/blog');
           

	}
	public function save_blog_list()
	{

		$this->slider_model->save_blog_list();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
	     redirect('Admin/add_blog');
	}
	  public function edit_client_list($client_id)
	{
       
      $data = $this->engine->store_nav('appearance', 'client', 'Create New client');
		$data['all_client_list_by_id'] = $this->slider_model->all_client_list_by_id($client_id);
	   	$path = 'backend/admin/client/edit_client_list';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	
	}
	public function update_client_list()
	{

		$this->slider_model->update_client_list();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/client');
           

	}
	public function save_client_list()
	{

		$this->slider_model->save_client_list();
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
	     redirect('Admin/add_client');
	}
	  public function edit_footertop_list($footer_id)
	{



     $data = $this->engine->store_nav('appearance', 'footer_top', 'Create New Footer');
		$data['all_footertop_list_by_id'] = $this->slider_model->all_footertop_list_by_id($footer_id);
	   	$path = 'backend/admin/footer/edit_footertop_list';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function save_footertop()
	{

		$this->slider_model->save_footertop();
	     redirect('Admin/footer_top');
	}
	public function update_footertop_list()
	{

		$this->slider_model->update_footertop_list();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/footer_top');
           

	}
	 public function edit_footerbottom_list($id)
	{
        
		 $data = $this->engine->store_nav('appearance', 'footer_bottom', 'Create New footer_bottom');
		$data['all_footerbottom_list_by_id'] = $this->slider_model->all_footerbottom_list_by_id($id);
	   	$path = 'backend/admin/footer/edit_footerbottom_list';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function save_footerbottom()
	{

		$this->slider_model->save_footerbottom();
	     redirect('Admin/footer_bottom');
	}
	public function update_footerbottom()
	{

		$this->slider_model->update_footerbottom();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/footer_bottom');
           

	}
	public function edit_footericon($id)
	{
       $data = $this->engine->store_nav('appearance', 'footer_icon', 'Create New footer_icon');
		$data['edit_footericon_by_id'] = $this->slider_model->edit_footericon_by_id($id);
	   	$path = 'backend/admin/footer/edit_footericon';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_footericon()
	{

		$this->slider_model->update_footericonlist();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/footer_icon');
           

	}
	public function save_footericon(){

    $this->slider_model->save_footericon();
    	$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
    	redirect('Admin/add_footer_icon');
     
	}
	public function edit_footer_copyright($id)
	{

		$data = $this->engine->store_nav('appearance', 'footer', 'Create New copyright');
		$data['edit_footer_copyright_by_id'] = $this->slider_model->edit_footer_copyright_by_id($id);
	   	$path = 'backend/admin/footer/edit_footer_copyright';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_footer_copyright()
	{

		$this->slider_model->update_footer_copyright_list();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
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




   $data = $this->engine->store_nav('appearance', 'testimonials', 'View  testimonials');
		$data['all_testimonials_view_by_id'] = $this->slider_model->all_testimonials_view_by_id($testi_id);
	   	$path = 'backend/admin/testimonials/view_testimonials';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}

	public function view_blog_list($id){

        $data = $this->engine->store_nav('appearance', 'blog', 'Create New blog');
		$data['all_blog_view_by_id'] = $this->slider_model->all_blog_view_by_id($id);
	   	$path = 'backend/admin/blog/view_blog';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function view_client_list($client_id){
       $data = $this->engine->store_nav('appearance', 'client', 'Create New client');
		$data['all_client_view_by_id'] = $this->slider_model->all_client_view_by_id($client_id);
	   	$path = 'backend/admin/client/view_client';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function view_footertop_list($footer_id){

      
		 
		 $data = $this->engine->store_nav('appearance', 'footer_top', 'Create New footer_top');
		$data['all_footertop_view_by_id'] = $this->slider_model->all_footertop_view_by_id($footer_id);
	   	$path = 'backend/admin/footer/view_footertop';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout); 
	}
	public function view_footerbottom_list($id){
     $data = $this->engine->store_nav('appearance', 'footer_bottom', 'Create New footer_bottom');
		$data['all_footerbottom_view_by_id'] = $this->slider_model->all_footerbottom_view_by_id($id);
	   	$path = 'backend/admin/footer/view_footerbottom';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
        
		  
	}
	public function view_footericon_list($id){

		 $data = $this->engine->store_nav('appearance', 'footer_icon', 'Create New footer_icon');
		$data['all_footericon_view_by_id'] = $this->slider_model->all_footericon_view_by_id($id);
	   	$path = 'backend/admin/footer/view_footericon';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);  
	}
	public function view_footercopyright_list($id){

      

   $data = $this->engine->store_nav('appearance', 'footer', 'Create New copyright');
		$data['all_footercopyright_view_by_id'] = $this->slider_model->all_footercopyright_view_by_id($id);
	   	$path = 'backend/admin/footer/view_footercopyright';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_footermenu');

	}
	 public function edit_footermenu($id)
	{
       $data = $this->engine->store_nav('appearance', 'footermenu', 'Create New menu');
		$data['all_footermenu_list_by_id'] = $this->admin_model->all_footermenu_list_by_id($id);
	   	$path = 'backend/admin/footermenu/edit_footermenu';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_footermenu()
	{

		$this->admin_model->update_footermenu();
			$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/footermenu');
           

	}
	public function delete_footermenu($id)
	{

		
		$data = array();
		$this->admin_model->delete_footermenu_by_id($id);

		redirect('Admin/footermenu');

	}
	public function view_footermenu($id){

        
			$data = $this->engine->store_nav('appearance', 'footermenu', 'Create New footermenu');
		$data['all_footermenu_view_by_id'] = $this->admin_model->all_footermenu_view_by_id($id);
	   	$path = 'backend/admin/footermenu/view_footermenu';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
        //$data = array();
		//$data['all_shortstory_list_by_id'] = $this->admin_model->all_shortstory_list_by_id($id);
		//$this->load->view('backend/admin/short_story/edit_shortstory_list', $data);

		$data = $this->engine->store_nav('about page', 'short_story', 'Create New Short Story');
		$data['all_shortstory_list_by_id'] = $this->admin_model->all_shortstory_list_by_id($id);
	   	$path = 'backend/admin/short_story/edit_shortstory_list';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_shortstory_list()
	{

		$this->admin_model->update_shortstory_list();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/short_story');
           

	}
	public function delete_shortstory_list($id)
	{

		
		$data = array();
		$this->admin_model->delete_shortstory_by_id($id);

		redirect('Admin/short_story');

	}
	public function view_shortstory_list($id){

        
			$data = $this->engine->store_nav('about page', 'short_story', 'Create New Short Story');
		$data['all_shortstory_view_by_id'] = $this->admin_model->all_shortstory_view_by_id($id);
	   	$path = 'backend/admin/short_story/view_shortstory';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_foundation');

	}
	 public function edit_foundation_list($id)
	{
       

     $data = $this->engine->store_nav('about page', 'foundation', 'Create New foundation');
		$data['all_foundation_list_by_id'] = $this->admin_model->all_foundation_list_by_id($id);
	   	$path = 'backend/admin/foundation/edit_foundation_list';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);


	}
	public function update_foundation_list()
	{

		$this->admin_model->update_foundation_list();
			$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/foundation');
           

	}
	public function view_foundation_list($id){

       

		$data = $this->engine->store_nav('about page', 'foundation', 'New foundation');
		$data['all_foundation_view_by_id'] = $this->admin_model->all_foundation_view_by_id($id);
	   	$path = 'backend/admin/foundation/view_foundation';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_work');

	}
	public function edit_work($id)
	{
    

		$data = $this->engine->store_nav('about page', 'work', 'New work');
		$data['all_work_by_id'] = $this->admin_model->all_work_by_id($id);
	   	$path = 'backend/admin/work/edit_work';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);




	}
	public function update_work()
	{

		$this->admin_model->update_work();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/work');
           

	}
	public function view_work($id){


		$data = $this->engine->store_nav('about page', 'work', 'New work');
		$data['all_work_view_by_id'] = $this->admin_model->all_work_view_by_id($id);
	   	$path = 'backend/admin/work/view_work';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
       
   $data = $this->engine->store_nav('about page', 'expert', 'New expert');
		$data['all_expert_by_id'] = $this->admin_model->all_expert_by_id($id);
	   	$path = 'backend/admin/expert/edit_expert';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_expert()
	{

		$this->admin_model->update_expert();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/expert');
           

	}
	public function view_expert($id){

      $data = $this->engine->store_nav('about page', 'expert', 'New expert');
		$data['all_expert_view_by_id'] = $this->admin_model->all_expert_view_by_id($id);
	   	$path = 'backend/admin/expert/view_expert';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_team');
	

}
public function edit_team($id)
	{
       

      $data = $this->engine->store_nav('about page', 'team', 'New team');
		$data['all_team_by_id'] = $this->admin_model->all_team_by_id($id);
	   	$path = 'backend/admin/team/edit_team';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_team()
	{

		$this->admin_model->update_team();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/team');
           

	}
	public function view_team($id){
     $data = $this->engine->store_nav('about page', 'team', 'New team');
		$data['all_team_view_by_id'] = $this->admin_model->all_team_view_by_id($id);
	   	$path = 'backend/admin/team/view_team';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_promo');
	

}
public function edit_promo($id)
	{
     $data = $this->engine->store_nav('about page', 'promo', 'New promo');
		$data['all_promo_by_id'] = $this->admin_model->all_promo_by_id($id);
	   	$path = 'backend/admin/promo/edit_promo';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_promo()
	{

		$this->admin_model->update_promo();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/promo');
           

	}
	public function view_promo($id){

         

		 $data = $this->engine->store_nav('about page', 'promo', 'New promo');
		$data['all_promo_view_by_id'] = $this->admin_model->all_promo_by_id($id);
	   	$path = 'backend/admin/promo/view_promo';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_vision');
	

}
public function edit_vision($id)
	{
     
    $data = $this->engine->store_nav('about page', 'vision', 'New vision');
		$data['all_vision_by_id'] = $this->admin_model->all_vision_by_id($id);
	   	$path = 'backend/admin/vision/edit_vision';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_vision()
	{

		$this->admin_model->update_vision();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/vision');
           

	}
	public function view_vision($id){



    $data = $this->engine->store_nav('about page', 'vision', 'New vision');
		$data['all_vision_view_by_id'] = $this->admin_model->all_vision_by_id($id);
	   	$path = 'backend/admin/vision/view_vision';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_feedback');
	

}
public function edit_feedback($id)
	{
       
    $data = $this->engine->store_nav('about page', 'feedback', 'New feedback');
		$data['all_feedback_by_id'] = $this->admin_model->all_feedback_by_id($id);
	   	$path = 'backend/admin/feedback/edit_feedback';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_feedback()
	{

		$this->admin_model->update_feedback();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/feedback');
           

	}
	public function view_feedback($id){
  $data = $this->engine->store_nav('about page', 'feedback', 'New feedback');
		$data['all_feedback_view_by_id'] = $this->admin_model->all_feedback_view_by_id($id);
	   	$path = 'backend/admin/feedback/view_feedback';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

		  
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
        
		 $data = $this->engine->store_nav('about page', 'partner', 'New partner');
		$data['all_partner_by_id'] = $this->admin_model->all_partner_by_id($id);
	   	$path = 'backend/admin/partner/edit_partner';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_partner()
	{

		$this->admin_model->update_partner();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/partner');
           

	}
	public function view_partner($id){

        $data = $this->engine->store_nav('about page', 'partner', 'New partner');
		$data['all_partner_view_by_id'] = $this->admin_model->all_partner_view_by_id($id);
	   	$path = 'backend/admin/partner/view_partner';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_partner_image');

	

}
public function edit_partner_image($id)
	{
       $data = $this->engine->store_nav('about page', 'partner_image', 'New partner_image');
		$data['all_partner_image_by_id'] = $this->admin_model->all_partner_image_by_id($id);
	   	$path = 'backend/admin/partner_image/edit_partner_image';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_partner_image()
	{

		$this->admin_model->update_partner_image();
			$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/partner_image');
           

	}
	public function view_partner_image($id){

         $data = $this->engine->store_nav('about page', 'partner_image', 'New partner_image');
		$data['all_partner_image_view_by_id'] = $this->admin_model->all_partner_image_view_by_id($id);
	   	$path = 'backend/admin/partner_image/view_partner_image';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
           $data = $this->engine->store_nav('software service', 'agency', 'New agency');
		$data['all_agency_by_id'] = $this->admin_model->all_agency_by_id($id);
	   	$path = 'backend/admin/agency/edit_agency';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_agency()
	{

		$this->admin_model->update_agency();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/agency');
           

	}
	public function view_agency($id){
      $data = $this->engine->store_nav('software service', 'agency', 'New agency');
		$data['all_agency_view_by_id'] = $this->admin_model->all_agency_view_by_id($id);
	   	$path = 'backend/admin/agency/view_agency';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_service');
	

}
public function edit_eservice($id)
	{
      
$data = $this->engine->store_nav('software service', 'eservice_box', 'welcome to our Service ');
$data['all_eservice_by_id'] = $this->admin_model->all_eservice_by_id($id);
	   	$path = 'backend/admin/eservice/edit_eservice';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_eservice()
	{

		$this->admin_model->update_eservice();
			$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/eservice_box');
           

	}
	public function view_eservice($id){
  $data = $this->engine->store_nav('software service', 'eservice_box', 'welcome to our Service ');
$data['all_eservice_view_by_id'] = $this->admin_model->all_eservice_view_by_id($id);
	   	$path = 'backend/admin/eservice/view_eservice';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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

		$data = $this->engine->store_nav('software service', 'product', 'welcome to our product ');
$data['all_product_by_id'] = $this->admin_model->all_product_by_id($id);
	   	$path = 'backend/admin/product/edit_product';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_product()
	{

		$this->admin_model->update_product();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/product');
           

	}
	public function view_product($id){

		$data = $this->engine->store_nav('software service', 'product', 'welcome to our product ');
$data['all_product_view_by_id'] = $this->admin_model->all_product_view_by_id($id);
	   	$path = 'backend/admin/product/view_product';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_feature');
	

}
public function edit_feature($id)
	{
       $data = $this->engine->store_nav('software service', 'feature', 'welcome to our feature ');
$data['all_feature_by_id'] = $this->admin_model->all_feature_by_id($id);
	   	$path = 'backend/admin/feature/edit_feature';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_feature()
	{

		$this->admin_model->update_feature();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/feature');
           

	}
	public function view_feature($id){
 $data = $this->engine->store_nav('software service', 'feature', 'welcome to our feature ');
$data['all_feature_view_by_id'] = $this->admin_model->all_feature_view_by_id($id);
	   	$path = 'backend/admin/feature/view_feature';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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

		$data = $this->engine->store_nav('software service', 'quality', 'welcome to our quality ');
$data['all_quality_by_id'] = $this->admin_model->all_quality_by_id($id);
	   	$path = 'backend/admin/quality/edit_quality';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_quality()
	{

		$this->admin_model->update_quality();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/quality');
           

	}
	public function view_quality($id){
  $data = $this->engine->store_nav('software service', 'quality', 'welcome to our quality ');
$data['all_quality_view_by_id'] = $this->admin_model->all_quality_view_by_id($id);
	   	$path = 'backend/admin/quality/view_quality';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_qualityitem');
	}
	public function edit_qualityitem($id)
	{
      
 $data = $this->engine->store_nav('software service', 'qualityitem', 'welcome to our qualityitem ');
$data['all_qualityitem_by_id'] = $this->admin_model->all_qualityitem_by_id($id);
	   	$path = 'backend/admin/qualityitem/edit_qualityitem';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_qualityitem()
	{

		$this->admin_model->update_qualityitem();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/qualityitem');
           

	}
	public function view_qualityitem($id){

 $data = $this->engine->store_nav('software service', 'qualityitem', 'welcome to our qualityitem ');
$data['all_qualityitem_view_by_id'] = $this->admin_model->all_qualityitem_view_by_id($id);
	   	$path = 'backend/admin/qualityitem/view_qualityitem';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
      
 $data = $this->engine->store_nav('software service', 'tools', 'welcome to our tools ');
$data['all_tools_by_id'] = $this->admin_model->all_tools_by_id($id);
	   	$path = 'backend/admin/tools/edit_tools';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_tools()
	{

		$this->admin_model->update_tools();
			$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/tools');
           

	}
	public function view_tools($id){

		  
$data = $this->engine->store_nav('software service', 'tools', 'welcome to our tools ');
$data['all_tools_view_by_id'] = $this->admin_model->all_tools_view_by_id($id);
	   	$path = 'backend/admin/tools/view_tools';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
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
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_tools_box');
	

}
public function edit_tools_box($id)
	{
       

$data = $this->engine->store_nav('software service', 'tools_box', 'welcome to our tools_box ');
$data['all_tools_box_by_id'] = $this->admin_model->all_tools_box_by_id($id);
	   	$path = 'backend/admin/tools_box/edit_tools_box';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_tools_box()
	{

		$this->admin_model->update_tools_box();
			$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/tools_box');
           

	}
	public function view_tools_box($id){

$data = $this->engine->store_nav('software service', 'tools_box', 'welcome to our tools_box ');
$data['all_tools_box_view_by_id'] = $this->admin_model->all_tools_box_view_by_id($id);
	   	$path = 'backend/admin/tools_box/view_tools_box';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
        
$data = $this->engine->store_nav('software service', 'contact', 'welcome to our contact ');
$data['all_contact_by_id'] = $this->admin_model->all_contact_by_id($id);
	   	$path = 'backend/admin/contact/edit_contact';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_contact()
	{

		$this->admin_model->update_contact();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/contact');
           

	}
	public function view_contact($id){

       

		$data = $this->engine->store_nav('software service', 'contact', 'welcome to our contact ');
$data['all_contact_view_by_id'] = $this->admin_model->all_contact_view_by_id($id);
	   	$path = 'backend/admin/contact/view_contact';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
//subscribe
public function subscribe()
	{
        $data = $this->engine->store_nav('appearance', 'subscribe', 'welcome to subscribe page');
        $data['subscribeList'] = $this->Common->get_data('subscribe');
        $path = 'backend/admin/subscribe/subscribe';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

public function save_subscribe()
	{


	$this->admin_model->save_subscribe();
	

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
        

 $data = $this->engine->store_nav('dservice', 'service', 'welcome to our Digital service ');
$data['all_dservice_by_id'] = $this->admin_model->all_dservice_by_id($id);
	   	$path = 'backend/admin/dservice/edit_dservice';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function update_dservice()
	{

		$this->admin_model->update_dservice();
			$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/dservice');
           

	}
	public function view_dservice($id){

        $data = $this->engine->store_nav('dservice', 'service', 'welcome to our Digital service ');
$data['all_dservice_view_by_id'] = $this->admin_model->all_dservice_view_by_id($id);
	   	$path = 'backend/admin/dservice/view_dservice';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
    
 $data = $this->engine->store_nav('dservice', 'description', 'welcome to our  description ');
$data['all_description_by_id'] = $this->admin_model->all_description_by_id($id);
	   	$path = 'backend/admin/description/edit_description';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_description()
	{

		$this->admin_model->update_description();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/description');
           

	}
	public function view_description($id){

        

		$data = $this->engine->store_nav('dservice', 'description', 'welcome to our  description ');
$data['all_description_view_by_id'] = $this->admin_model->all_description_view_by_id($id);
	   	$path = 'backend/admin/description/view_description';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
       $data = $this->engine->store_nav('dservice', 'tell', 'welcome to our  tell ');
$data['all_tell_by_id'] = $this->admin_model->all_tell_by_id($id);
	   	$path = 'backend/admin/tell/edit_tell';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_tell()
	{

		$this->admin_model->update_tell();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/tell');
           

	}
	public function view_tell($id){

       

		 $data = $this->engine->store_nav('dservice', 'tell', 'welcome to our  tell ');
$data['all_tell_view_by_id'] = $this->admin_model->all_tell_view_by_id($id);
	   	$path = 'backend/admin/tell/view_tell';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
       

		$data = $this->engine->store_nav('dservice', 'levels', 'welcome to our  levels ');
$data['all_levels_by_id'] = $this->admin_model->all_levels_by_id($id);
	   	$path = 'backend/admin/levels/edit_levels';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_levels()
	{

		$this->admin_model->update_levels();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/levels');
           

	}
	public function view_levels($id){

$data = $this->engine->store_nav('dservice', 'levels', 'welcome to our  levels ');
$data['all_levels_view_by_id'] = $this->admin_model->all_levels_view_by_id($id);
	   	$path = 'backend/admin/levels/view_levels';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_levelsbox');
	

}
public function edit_levelsbox($id)
	{
       $data = $this->engine->store_nav('dservice', 'levelsbox', 'welcome to our  levelsbox ');
$data['all_levelsbox_by_id'] = $this->admin_model->all_levelsbox_by_id($id);
	   	$path = 'backend/admin/levelsbox/edit_levelsbox';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_levelsbox()
	{

		$this->admin_model->update_levelsbox();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/levelsbox');
           

	}
	public function view_levelsbox($id){
  $data = $this->engine->store_nav('dservice', 'levelsbox', 'welcome to our  levelsbox ');
$data['all_levelsbox_view_by_id'] = $this->admin_model->all_levelsbox_view_by_id($id);
	   	$path = 'backend/admin/levelsbox/view_levelsbox';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
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
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_accordon');
	

}
public function edit_accordon($id)
	{
	 $data = $this->engine->store_nav('dservice', 'accordon', 'welcome to our  accordon ');
$data['all_accordon_by_id'] = $this->admin_model->all_accordon_by_id($id);
	   	$path = 'backend/admin/accordon/edit_accordon';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function update_accordon()
	{

		$this->admin_model->update_accordon();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/accordon');
           

	}
	public function view_accordon($id){

 $data = $this->engine->store_nav('dservice', 'accordon', 'welcome to our  accordon ');
$data['all_accordon_view_by_id'] = $this->admin_model->all_accordon_view_by_id($id);
	   	$path = 'backend/admin/accordon/view_accordon';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);  
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
       $data = $this->engine->store_nav('dservice', 'brand', 'welcome to our  brand ');
$data['all_brand_by_id'] = $this->admin_model->all_brand_by_id($id);
	   	$path = 'backend/admin/brand/edit_brand';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);



	}
	public function update_brand()
	{

		$this->admin_model->update_brand();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/brand');
           

	}
	public function view_brand($id){

         $data = $this->engine->store_nav('dservice', 'brand', 'welcome to our  brand ');
$data['all_brand_view_by_id'] = $this->admin_model->all_brand_view_by_id($id);
	   	$path = 'backend/admin/brand/view_brand';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

		  
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
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_brandbox');
	

}
public function edit_brandbox($id)
	{
       $data = $this->engine->store_nav('dservice', 'brandbox', 'welcome to our  brandbox ');
$data['all_brandbox_by_id'] = $this->admin_model->all_brandbox_by_id($id);
	   	$path = 'backend/admin/brandbox/edit_brandbox';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_brandbox()
	{

		$this->admin_model->update_brandbox();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/brandbox');
           

	}
	public function view_brandbox($id){

 $data = $this->engine->store_nav('dservice', 'brandbox', 'welcome to our  brandbox ');
$data['all_brandbox_view_by_id'] = $this->admin_model->all_brandbox_view_by_id($id);
	   	$path = 'backend/admin/brandbox/view_brandbox';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);  
	}
	public function delete_brandbox($id)
	{

		
		$data = array();
		$this->admin_model->delete_brandbox_by_id($id);

		redirect('Admin/brandbox');

	}
//contactform
public function contactform()
	{
        $data = $this->engine->store_nav('contact', 'contactform', 'welcome to contactform page');
        $data['contactformList'] = $this->Common->get_data('contactform');
        $path = 'backend/admin/contactform/contactform';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
	

	
	public function add_contactform()
	{
        $data = $this->engine->store_nav('contact', 'contactform', 'Create New contactform');
		$path = 'backend/admin/contactform/add_contactform';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_contactform()
	{


		$this->admin_model->save_contactform();
		redirect('');
	}
	//Contact address

public function address()
	{
        $data = $this->engine->store_nav('contact', 'address', 'welcome to address page');
        $data['addressList'] = $this->Common->get_data('address');
        $path = 'backend/admin/address/address';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	

	

	
	public function add_address()
	{
        $data = $this->engine->store_nav('contact', 'address', 'Create New address');
		$path = 'backend/admin/address/add_address';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_address()
	{


		$this->admin_model->save_address();
		
	}
	public function edit_address($id)
	{
       $data = $this->engine->store_nav('contact', 'address', 'welcome to our  address ');
$data['all_address_by_id'] = $this->admin_model->all_address_by_id($id);
	   	$path = 'backend/admin/address/edit_address';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_address()
	{

		$this->admin_model->update_address();
			$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/address');
           

	}
	public function view_address($id){

 $data = $this->engine->store_nav('contact', 'address', 'welcome to our  address ');
$data['all_address_view_by_id'] = $this->admin_model->all_address_view_by_id($id);
	   	$path = 'backend/admin/address/view_address';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);  
	}
	public function delete_address($id)
	{

		
		$data = array();
		$this->admin_model->delete_address_by_id($id);

		redirect('Admin/address');

	}
		//Portfolio

	//android items

public function android()
	{
        $data = $this->engine->store_nav('portfolio', 'android', 'welcome to android page');
        $data['androidList'] = $this->Common->get_data('android');
        $path = 'backend/admin/android/android';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	

	

	
	public function add_android()
	{
        $data = $this->engine->store_nav('portfolio', 'android', 'Create New android');
		$path = 'backend/admin/android/add_android';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	
	
	public function save_android()
	{


		$this->admin_model->save_android();
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_android');
	

}
public function edit_android($id)
	{
     $data = $this->engine->store_nav('portfolio', 'android', 'New android');
		$data['all_android_by_id'] = $this->admin_model->all_android_by_id($id);
	   	$path = 'backend/admin/android/edit_android';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);


	}
	public function update_android()
	{

		$this->admin_model->update_android();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/android');
           

	}
	public function view_android($id){

         

		 $data = $this->engine->store_nav('portfolio', 'android', 'New android');
		$data['all_android_view_by_id'] = $this->admin_model->all_android_by_id($id);
	   	$path = 'backend/admin/android/view_android';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_android($id)
	{

		
		$data = array();
		$this->admin_model->delete_android_by_id($id);

		redirect('Admin/android');

	}
		//web_development

public function web_development()
	{
        $data = $this->engine->store_nav('portfolio', 'web_development', 'welcome to web_development page');
        $data['web_developmentList'] = $this->Common->get_data('web_development');
        $path = 'backend/admin/web_development/web_development';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	

	public function add_web_development()
	{
        $data = $this->engine->store_nav('portfolio', 'web_development', 'Create New web_development');
		$path = 'backend/admin/web_development/add_web_development';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	
	
	public function save_web_development()
	{


		$this->admin_model->save_web_development();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_web_development');
	

}
public function edit_web_development($id)
	{
     $data = $this->engine->store_nav('portfolio', 'web_development', 'New web_development');
		$data['all_web_development_by_id'] = $this->admin_model->all_web_development_by_id($id);
	   	$path = 'backend/admin/web_development/edit_web_development';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_web_development()
	{

		$this->admin_model->update_web_development();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/web_development');
           

	}
	public function view_web_development($id){

         

		 $data = $this->engine->store_nav('portfolio', 'web_development', 'New web_development');
		$data['all_web_development_view_by_id'] = $this->admin_model->all_web_development_by_id($id);
	   	$path = 'backend/admin/web_development/view_web_development';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_web_development($id)
	{

		
		$data = array();
		$this->admin_model->delete_web_development_by_id($id);

		redirect('Admin/web_development');

	}
		//web_design

public function web_design()
	{
        $data = $this->engine->store_nav('portfolio', 'web_design', 'welcome to web_design page');
        $data['web_designList'] = $this->Common->get_data('web_design');
        $path = 'backend/admin/web_design/web_design';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	

	

	
	public function add_web_design()
	{
        $data = $this->engine->store_nav('portfolio', 'web_design', 'Create New web_design');
		$path = 'backend/admin/web_design/add_web_design';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	
	
	public function save_web_design()
	{


		$this->admin_model->save_web_design();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_web_design');

	

}
public function edit_web_design($id)
	{
     $data = $this->engine->store_nav('portfolio', 'web_design', 'New web_design');
		$data['all_web_design_by_id'] = $this->admin_model->all_web_design_by_id($id);
	   	$path = 'backend/admin/web_design/edit_web_design';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_web_design()
	{

		$this->admin_model->update_web_design();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/web_design');
           

	}
	public function view_web_design($id){

         

		 $data = $this->engine->store_nav('portfolio', 'web_design', 'New web_design');
		$data['all_web_design_view_by_id'] = $this->admin_model->all_web_design_by_id($id);
	   	$path = 'backend/admin/web_design/view_web_design';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_web_design($id)
	{

		
		$data = array();
		$this->admin_model->delete_web_design_by_id($id);

		redirect('Admin/web_design');

	}
		//Software Development

public function software()
	{
        $data = $this->engine->store_nav('portfolio', 'software', 'welcome to software page');
        $data['softwareList'] = $this->Common->get_data('software');
        $path = 'backend/admin/software/software';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	

	

	
	public function add_software()
	{
        $data = $this->engine->store_nav('portfolio', 'software', 'Create New software');
		$path = 'backend/admin/software/add_software';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	
	
	public function save_software()
	{


		$this->admin_model->save_software();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_software');
	

}
public function edit_software($id)
	{
     $data = $this->engine->store_nav('portfolio', 'software', 'New software');
		$data['all_software_by_id'] = $this->admin_model->all_software_by_id($id);
	   	$path = 'backend/admin/software/edit_software';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_software()
	{

		$this->admin_model->update_software();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/software');
           

	}
	public function view_software($id){

         

		 $data = $this->engine->store_nav('portfolio', 'software', 'New software');
		$data['all_software_view_by_id'] = $this->admin_model->all_software_by_id($id);
	   	$path = 'backend/admin/software/view_software';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_software($id)
	{

		
		$data = array();
		$this->admin_model->delete_software_by_id($id);

		redirect('Admin/software');

	}
		//Demo

public function demo()
	{
        $data = $this->engine->store_nav('portfolio', 'demo', 'welcome to demo page');
        $data['demoList'] = $this->Common->get_data('demo');
        $path = 'backend/admin/demo/demo';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	

	

	
	public function add_demo()
	{
        $data = $this->engine->store_nav('portfolio', 'demo', 'Create New demo');
		$path = 'backend/admin/demo/add_demo';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	
	
	public function save_demo()
	{


		$this->admin_model->save_demo();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_demo');
	

}
public function edit_demo($id)
	{
     $data = $this->engine->store_nav('portfolio', 'demo', 'New demo');
		$data['all_demo_by_id'] = $this->admin_model->all_demo_by_id($id);
	   	$path = 'backend/admin/demo/edit_demo';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_demo()
	{

		$this->admin_model->update_demo();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/demo');
           

	}
	public function view_demo($id){

         

		 $data = $this->engine->store_nav('portfolio', 'demo', 'New demo');
		$data['all_demo_view_by_id'] = $this->admin_model->all_demo_by_id($id);
	   	$path = 'backend/admin/demo/view_demo';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_demo($id)
	{

		
		$data = array();
		$this->admin_model->delete_demo_by_id($id);

		redirect('Admin/demo');

	}
	//menu
	//main menu
	public function mainmenu()
	{
        $data = $this->engine->store_nav('menu', 'mainmenu', 'welcome to mainmenu page');
        $data['mainmenuList'] = $this->Common->get_data('menu');
        $path = 'backend/admin/mainmenu/mainmenu';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	


	

	
	public function add_mainmenu()
	{
        $data = $this->engine->store_nav('menu', 'mainmenu', 'Create New mainmenu');
		$path = 'backend/admin/mainmenu/add_mainmenu';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	
	
	public function save_mainmenu()
	{


		$this->admin_model->save_mainmenu();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_mainmenu');
	

}
public function edit_mainmenu($m_id)
	{
     $data = $this->engine->store_nav('menu', 'mainmenu', 'New mainmenu');
		$data['all_mainmenu_by_id'] = $this->admin_model->all_mainmenu_by_id($m_id);
	   	$path = 'backend/admin/mainmenu/edit_mainmenu';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_mainmenu()
	{

		$this->admin_model->update_mainmenu();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/mainmenu');
           

	}
	public function view_mainmenu($m_id){

  $data = $this->engine->store_nav('menu', 'mainmenu', 'New mainmenu');
		$data['all_mainmenu_view_by_id'] = $this->admin_model->all_mainmenu_by_id($m_id);
	   	$path = 'backend/admin/mainmenu/view_mainmenu';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_mainmenu($m_id)
	{

		
		$data = array();
		$this->admin_model->delete_mainmenu_by_id($m_id);

		redirect('Admin/mainmenu');

	}
  //dropdown menu items
	public function dropdown()
	{
        $data = $this->engine->store_nav('menu', 'dropdown', 'welcome to dropdown page');
        $data['dropdownList'] = $this->Common->get_data('menu_item');
        $data['main_menu'] = $this->Dropdown_model->main_menu_select();
        $path = 'backend/admin/dropdown/dropdown';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	
    public function add_dropdown()
	{
        $data = $this->engine->store_nav('menu', 'dropdown', 'Create New dropdown');
        $data['main_menu'] = $this->Dropdown_model->main_menu_select();
		$path = 'backend/admin/dropdown/add_dropdown';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	
	
	public function save_dropdown()
	{


		$this->admin_model->save_dropdown();
			$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_dropdown');
	

}
public function edit_dropdown($m_item_id)
	{
      


		$data = $this->engine->store_nav('menu', 'dropdown', 'Create New dropdown');
		$data['all_dropdown_info_by_id'] = $this->admin_model->all_dropdown_list_by_id($m_item_id);
	   	$path = 'backend/admin/dropdown/edit_dropdown';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
        
		  
	
	}
	public function update_dropdown()
	{

		$this->admin_model->update_dropdown();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/dropdown');
           

	}
	public function view_dropdown($m_item_id){

  $data = $this->engine->store_nav('menu', 'dropdown', 'New dropdown');
		$data['all_dropdown_view_by_id'] = $this->admin_model->all_dropdown_list_by_id($m_item_id);
	   	$path = 'backend/admin/dropdown/view_dropdown';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_dropdown($m_item_id)
	{

		
		$data = array();
		$this->admin_model->delete_dropdown_by_id($m_item_id);

		redirect('Admin/dropdown');

	}
	//add extra  section

	  //Testimonial heading
     public function testimonial_head()
	{
        $data = $this->engine->store_nav('appearance', 'testimonial_head', 'testimonial_head List');
        $data['testimonial_headList'] = $this->Common->get_data('testimonial_head');
        
        $path = 'backend/admin/testimonial_head/testimonial_head';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_testimonial_head()
	{
        $data = $this->engine->store_nav('appearance', 'testimonial_head', 'Create New testimonial_head');
		$path = 'backend/admin/testimonial_head/add_testimonial_head';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_testimonial_head()
	{

		$this->admin_model->save_testimonial_head();
		redirect('Admin/testimonial_head');
	}
	public function edit_testimonial_head($id)
	{
     $data = $this->engine->store_nav('appearance', 'testimonial_head', 'testimonial_head');
		$data['all_testimonial_head_by_id'] = $this->admin_model->all_testimonial_head_by_id($id);
	   	$path = 'backend/admin/testimonial_head/edit_testimonial_head';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_testimonial_head()
	{

		$this->admin_model->update_testimonial_head();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/testimonial_head');
           

	}
	public function view_testimonial_head($id){

         

		 $data = $this->engine->store_nav('appearance', 'testimonial_head', ' testimonial_head');
		$data['all_testimonial_head_view_by_id'] = $this->admin_model->all_testimonial_head_by_id($id);
	   	$path = 'backend/admin/testimonial_head/view_testimonial_head';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_testimonial_head($id)
	{

		
		$data = array();
		$this->admin_model->delete_testimonial_head_by_id($id);

		redirect('Admin/testimonial_head');

	}
	  //Client heading
     public function client_head()
	{
        $data = $this->engine->store_nav('appearance', 'client_head', 'client_head List');
        $data['client_headList'] = $this->Common->get_data('client_head');
        
        $path = 'backend/admin/client_head/client_head';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}
	public function add_client_head()
	{
        $data = $this->engine->store_nav('appearance', 'client_head', 'Create New client_head');
		$path = 'backend/admin/client_head/add_client_head';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_client_head()
	{

		$this->admin_model->save_client_head();
		redirect('Admin/client_head');
	}
	public function edit_client_head($id)
	{
     $data = $this->engine->store_nav('appearance', 'client_head', 'client_head');
		$data['all_client_head_by_id'] = $this->admin_model->all_client_head_by_id($id);
	   	$path = 'backend/admin/client_head/edit_client_head';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_client_head()
	{

		$this->admin_model->update_client_head();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/client_head');
           

	}
	public function view_client_head($id){

         

		 $data = $this->engine->store_nav('appearance', 'client_head', ' client_head');
		$data['all_client_head_view_by_id'] = $this->admin_model->all_client_head_by_id($id);
	   	$path = 'backend/admin/client_head/view_client_head';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_client_head($id)
	{

		
		$data = array();
		$this->admin_model->delete_client_head_by_id($id);

		redirect('Admin/client_head');

	}
	  //Contact heading
     public function contact_head()
	{
        $data = $this->engine->store_nav('contact', 'contact_head', 'contact_head List');
        $data['contact_headList'] = $this->Common->get_data('contact_head');
        
        $path = 'backend/admin/contact_head/contact_head';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

	public function add_contact_head()
	{
        $data = $this->engine->store_nav('contact', 'contact_head', 'Create New contact_head');
		$path = 'backend/admin/contact_head/add_contact_head';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_contact_head()
	{

		$this->admin_model->save_contact_head();
		redirect('Admin/contact_head');
	}
	public function edit_contact_head($id)
	{
     $data = $this->engine->store_nav('contact', 'contact_head', 'contact_head');
		$data['all_contact_head_by_id'] = $this->admin_model->all_contact_head_by_id($id);
	   	$path = 'backend/admin/contact_head/edit_contact_head';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_contact_head()
	{

		$this->admin_model->update_contact_head();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/contact_head');
           

	}
	public function view_contact_head($id){

         

		 $data = $this->engine->store_nav('contact', 'contact_head', ' contact_head');
		$data['all_contact_head_view_by_id'] = $this->admin_model->all_contact_head_by_id($id);
	   	$path = 'backend/admin/contact_head/view_contact_head';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}
	public function delete_contact_head($id)
	{

		
		$data = array();
		$this->admin_model->delete_contact_head_by_id($id);

		redirect('Admin/contact_head');

	}
	//Contact form heading
     public function form_head()
	{
        $data = $this->engine->store_nav('contact', 'form_head', 'form_head List');
        $data['form_headList'] = $this->Common->get_data('form_head');
        
        $path = 'backend/admin/form_head/form_head';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

	public function add_form_head()
	{
        $data = $this->engine->store_nav('contact', 'form_head', 'Create New form_head');
		$path = 'backend/admin/form_head/add_form_head';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_form_head()
	{

		$this->admin_model->save_form_head();
		redirect('Admin/form_head');
	}
	public function edit_form_head($id)
	{
     $data = $this->engine->store_nav('contact', 'form_head', 'form_head');
		$data['all_form_head_by_id'] = $this->admin_model->all_form_head_by_id($id);
	   	$path = 'backend/admin/form_head/edit_form_head';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_form_head()
	{

		$this->admin_model->update_form_head();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/form_head');
           

	}
	public function view_form_head($id){

         

		 $data = $this->engine->store_nav('contact', 'form_head', ' form_head');
		$data['all_form_head_view_by_id'] = $this->admin_model->all_form_head_by_id($id);
	   	$path = 'backend/admin/form_head/view_form_head';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}


	public function delete_form_head($id)
	{

		
		$data = array();
		$this->admin_model->delete_form_head_by_id($id);

		redirect('Admin/form_head');

	}
	//counter
     public function counter()
	{
        $data = $this->engine->store_nav('appearance', 'counter', 'counter List');
        $data['counterList'] = $this->Common->get_data('counter');
        
        $path = 'backend/admin/counter/counter';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

	public function add_counter()
	{
        $data = $this->engine->store_nav('appearance', 'counter', 'Create New counter');
		$path = 'backend/admin/counter/add_counter';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_counter()
	{

		$this->admin_model->save_counter();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('Admin/add_counter');
	}
	public function edit_counter($id)
	{
     $data = $this->engine->store_nav('appearance', 'counter', 'counter');
		$data['all_counter_by_id'] = $this->admin_model->all_counter_by_id($id);
	   	$path = 'backend/admin/counter/edit_counter';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_counter()
	{

		$this->admin_model->update_counter();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/counter');
           

	}
	public function view_counter($id){

         

		 $data = $this->engine->store_nav('contact', 'counter', ' counter');
		$data['all_counter_view_by_id'] = $this->admin_model->all_counter_by_id($id);
	   	$path = 'backend/admin/counter/view_counter';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}


	public function delete_counter($id)
	{

		
		$data = array();
		$this->admin_model->delete_counter_by_id($id);

		redirect('Admin/counter');

	}
	//infobox1
	public function infobox1()
	{
        $data = $this->engine->store_nav('infobox', 'infobox1', 'infobox1 List');
        $data['infobox1List'] = $this->Common->get_data('infobox1');
        
        $path = 'backend/admin/infobox1/infobox1';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

	public function add_infobox1()
	{
        $data = $this->engine->store_nav('infobox', 'infobox1', 'Create New infobox1');
		$path = 'backend/admin/infobox1/add_infobox1';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_infobox1()
	{

		$this->admin_model->save_infobox1();
		redirect('Admin/infobox1');
	}
	public function edit_infobox1($id)
	{
     $data = $this->engine->store_nav('infobox', 'infobox1', 'infobox1');
		$data['all_infobox1_by_id'] = $this->admin_model->all_infobox1_by_id($id);
	   	$path = 'backend/admin/infobox1/edit_infobox1';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_infobox1()
	{

		$this->admin_model->update_infobox1();
		redirect('Admin/infobox1');
           

	}
	public function view_infobox1($id){

         

		 $data = $this->engine->store_nav('infobox', 'infobox1', ' infobox');
		$data['all_infobox1_view_by_id'] = $this->admin_model->all_infobox1_by_id($id);
	   	$path = 'backend/admin/infobox1/view_infobox1';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}


	public function delete_infobox1($id)
	{

		
		$data = array();
		$this->admin_model->delete_infobox1_by_id($id);

		redirect('Admin/infobox1');

	}
	//menu header logo
	public function logo()
	{
        $data = $this->engine->store_nav('menu', 'logo', 'logo List');
        $data['logoList'] = $this->Common->get_data('logo');
        
        $path = 'backend/admin/logo/logo';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
	}

	public function add_logo()
	{
        $data = $this->engine->store_nav('menu', 'logo', 'Create New logo');
		$path = 'backend/admin/logo/add_logo';
		$this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		
	}
	public function save_logo()
	{

		$this->admin_model->save_logo();
		$sdata=array();
		$sdata['message']='Successfully saved';
		$this->session->set_userdata($sdata);
		redirect('admin/add_logo');
		
	}
	public function edit_logo($id)
	{
     $data = $this->engine->store_nav('menu', 'logo', 'logo');
		$data['all_logo_by_id'] = $this->admin_model->all_logo_by_id($id);
	   	$path = 'backend/admin/logo/edit_logo';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);

	}
	public function update_logo()
	{

		$this->admin_model->update_logo();
		$sdata=array();
		$sdata['message']='Successfully updated';
		$this->session->set_userdata($sdata);
		redirect('Admin/logo');
           

	}
	public function view_logo($id){

         

		 $data = $this->engine->store_nav('menu', 'logo', 'logo');
		$data['all_logo_view_by_id'] = $this->admin_model->all_logo_by_id($id);
	   	$path = 'backend/admin/logo/view_logo';
      $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
		  
	}


	public function delete_logo($id)
	{

		
		$data = array();
		$this->admin_model->delete_logo_by_id($id);

		redirect('Admin/logo');

	}




	
	
	


}


