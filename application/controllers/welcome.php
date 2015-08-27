<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function __construct(){
    	parent::__construct();
    	$this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('captcha');
        // $this->load->model('captcha_model');
        $this->form_validation->set_error_delimiters('', '');

    }

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('name_nav.php');
        $this->load->view('index_content.php');
		$this->load->view('footer.php');
	}


    public function search()
    {
        $this->load->view('header.php');
        $this->load->view('name_nav_small.php');

        $this->load->model('search', 'categories');
        $data['categories'] = $this->categories->get_categories_search_page();

        $this->load->library('pagination');
        $config['base_url'] = base_url().'welcome/search';
        $config['total_rows'] = $this->db->get('resources')->num_rows();
        $config['per_page'] = 30;
        $config['num_links'] = $config['total_rows'] / $config['per_page'];
        $config['full_tag_open'] = '<div id="pagination" class="pagination_numbers">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $this->db->order_by('categoryone', 'asc');
        $data['resources'] = $this->db->get('resources', $config['per_page'], $this->uri->segment(3));

        $this->load->view('search.php', $data);
        $this->load->view('footer.php');
    }

    
    public function contact()
    {
        $this->load->view('header.php');
        $this->load->view('name_nav_small.php');
        $this->load->view('footer.php');
    }
    

    public function definitions()
    {
        $this->load->view('header.php');
        $this->load->view('name_nav_small.php');
        $this->load->view('footer.php');
    }


    public function blog()
    {
        $this->load->view('header.php');
        $this->load->view('name_nav_small.php');
        $this->load->view('footer.php');
    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */