<?php
    class Home extends CI_Controller
    {
        public function __construct() // upon construction of the object
    	{
		    parent::__construct();
    		$this->load->model('Home_model'); //load the model

           	 if (!isset($_SESSION['role']))
    		{
           		$_SESSION['role'] = 'visitor';
                redirect('home/bub');
            }
    	}


        public function index()
        {
            if($_SESSION['role'] == 'admin')
            {
                redirect('home/home_page');
            }
            else if($_SESSION['role'] == 'member')
            {
                redirect('home/member');
            }
            else
            {
            	redirect('home/bub');
            }
        }

        public function bub($page = 'bub')
        {
            $data['page_title'] = "Before You Buy";


            $this->load->view('header', $data);
            $this->load->view('bub', $data);
            $this->load->view('footer');

        }

        public function mobile($page = 'mobile')
        {
            $data['page_title'] = "Before You Buy";

            $this->load->view('header', $data);
            $this->load->view('mobile', $data);
            $this->load->view('footer');
        }

        public function mobile_view($page = 'mobile_view')
        {
            $data['page_title'] = "Before You Buy";

            $this->load->view('header', $data);
            $this->load->view('mobile_view', $data);
            $this->load->view('footer');
        }

        public function mobile_view_gsm($page = 'mobile_view_gsm')
        {
            $data['page_title'] = "Before You Buy";

            $this->load->view('header', $data);
            $this->load->view('mobile_view_gsm', $data);
            $this->load->view('footer');
        }

        public function action_page($page = 'action_page')
        {
            $data['page_title'] = "Before You Buy";

            $this->load->view('header', $data);

			$data = array(
			'search_name' => $this->input->post('search')
			);
            $this->load->view('action_page', $data);
            $this->load->view('footer');
        }

        public function logout($page = 'logout')
        {
            session_start();
        	session_destroy();
            redirect('home/visitor');
        }
    }
?>
