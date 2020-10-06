  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {


   public function __construct()
    {
      parent::__construct();
      $this->load->model('Search_model');

    }
    
    //display data with CI pagination
    public function index() {

      
        $this->load->library('pagination');
        
          $config["base_url"] = base_url() . "search";
    $config['base_url'] = 'http://localhost/company/ci/index.php/Search';
        $config['total_rows'] = $this->Search_model->getUserCount();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);
        $data['link'] = $this->pagination->create_links();
        $data['message'] = 'Please type a Name';
        $data['records'] = $this->Search_model->getUserPagintaion($config['per_page'], $page);
        $this->load->view('search_data', $data);
        
    }
     public function searchUser() {
        
        $key = $this->input->post('search');

        if(isset($key) and !empty($key)){
            $data['records'] = $this->Search_model->searchRecord($key);
            $data['link'] = '';
            $data['message'] = 'Search Results';
            $this->load->view('search_data' , $data);
        }
        else {
            redirect('') ;
        }
    }
}