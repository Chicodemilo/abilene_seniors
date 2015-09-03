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



    public function results(){
        $services = $this->input->get('need', TRUE);
        $this->load->model('search', 'resources');
        $resutls = $this->resources->find($services);
        $categories = $this->resources->get_categories_search_page();
        $data['resources'] = $resutls;
        $data['categories'] = $categories;
        $data['count'] = count ($resutls);
        $data['service'] = $services;

        if($services === 'Please Select A Category'){
            redirect(base_url().'welcome/search');
        }

        if($data['count']<1){
            $this->load->view('header.php');
            $this->load->view('name_nav_small.php');
            $this->load->view('no_resource.php');
            $this->load->view('footer.php');
        }else{
            $this->load->view('header.php');
            $this->load->view('name_nav_small.php');
            $this->load->view('results_view', $data);
            $this->load->view('footer.php');
        }
    }




    public function resource($id){
        $this->load->model('search', 'resource');
        $data['resource'] = $this->resource->find_resource($id);
        $count = count ($data['resource']);

        if($count < 1){
            $this->load->view('header.php');
            $this->load->view('name_nav_small.php');
            $this->load->view('no_resource.php');
            $this->load->view('footer.php');
        }else{
            $this->load->view('header.php');
            $this->load->view('name_nav_small.php');
            $this->load->view('resource_page', $data);
            $this->load->view('footer.php');
        }
    }

    
    public function message()
    {   $this->form_validation->set_rules('name', 'name', 'trim|strip_tags|xss_clean|required');
        $this->form_validation->set_rules('email', 'email', 'trim|strip_tags|xss_clean|required|valid_email');
        $this->form_validation->set_rules('subject', 'subject', 'trim|strip_tags|xss_clean|required');
        $this->form_validation->set_rules('message', 'message', 'trim|strip_tags|xss_clean|required');
        $this->form_validation->set_rules('mr_robot', 'mr_robot', 'trim|strip_tags|xss_clean|required');
        $thier_first_num = $this->input->post('first_num');
        $thier_next_num = $this->input->post('next_num');
        $correct_ans = $thier_first_num + $thier_next_num;
        $mr_robot = $this->input->post('mr_robot');

        if($this->form_validation->run() === false || $mr_robot != $correct_ans){
            if ($mr_robot != $correct_ans) {
                $data['wrong_ans'] = true;
            }else{
                $data['wrong_ans'] = false;                      
            }
            $data['first_num'] = rand(1, 4);
            $data['next_num'] = rand(1, 4);
            $data['ans'] = $data['first_num'] + $data['next_num'];
            $this->load->view('header.php');
            $this->load->view('name_nav_small.php');
            $this->load->view('message.php', $data);
            $this->load->view('footer.php');
        }else{
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
            date_default_timezone_set('US/Central');
            $time = date('m/d/Y H:i:s');
            $comment = array(
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
                'time' => $time);

            $this->db->insert('comments', $comment);
            $this->load->model('email_model', 'email_model');
            $sent = $this->email_model->send($email, $name, $subject, $message, $time);
            $sent_b = $this->email_model->send_b($email, $name, $subject, $message, $time);
            if($sent == true){
                $this->load->view('header.php');
                $this->load->view('name_nav_small.php');
                $this->load->view('success.php');
                $this->load->view('footer.php');
            }
        }

    }
    

    public function definitions()
    {
        $this->load->view('header.php');
        $this->load->view('name_nav_small.php');
        $this->load->view('definitions.php');
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