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
                redirect('home/visitor');
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
            	redirect('home/visitor');
            }
        }

        public function member($page = 'member')
        {
            $data['page_title'] = "Before You Buy";

            $this->load->view('header', $data);
			$this->load->view('member', $data);
            $this->load->view('footer');
        }

        public function home_page($page = 'home_page')
        {
            $data['page_title'] = "Before You Buy";


            $this->load->view('header', $data);
            $this->load->view('home_page', $data);
            $this->load->view('footer');

        }

        public function visitor($page = 'visitor')
        {
            $data['page_title'] = "Before You Buy";

            $this->load->view('header', $data);
            $this->load->view('visitor', $data);
            $this->load->view('footer');
        }

		// When user submit data on view page, Then this function store data in array.
		public function data_edited($page = 'data_edited') {
			$data['page_title'] = "Before You Buy";

            $this->load->view('header', $data);

			$data = array(
			'ch_cat_id' => $this->input->post('cat_id')
			);

			// Show submitted data on view page again.
			$this->load->view("mobile", $data);

            $this->load->view('footer');
		}

        public function mobile($page = 'mobile')
        {
            $data['page_title'] = "Before You Buy";

            $this->load->view('header', $data);
            $this->load->view('mobile', $data);
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
