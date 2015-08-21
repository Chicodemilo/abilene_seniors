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

    // public fun


    public function search()
    {
        $this->load->view('header.php');
        $this->load->view('name_nav_small.php');

        //get categories here
        //$this->load->view('search.php');

        //pagination here
        //$this->load->view('all_resluts.php');
        $this->load->view('footer.php');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */