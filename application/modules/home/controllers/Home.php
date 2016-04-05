<?php
    class Home extends CI_Controller
    {
        public function __construct() // upon construction of the object
    	{
		    parent::__construct();
    		$this->load->model('Home_model'); //load the model

            if (isset($_SESSION['logged_in']))
    		{
                if(!$_SESSION['logged_in'])
                {
                    redirect('login');
                }
    		}
            else
            {
                redirect('login');
            }
    	}


        public function index()
        {
            if($_SESSION['role'] == 'admin')
            {
                redirect('home/home_page');
            }
            else
            {
                redirect('home/persons');
            }
        }

        public function persons($page = 'persons')
        {
            if($_SESSION['role'] == 'admin'){
				$data['list'] = $this->Home_model->all_person_home_attended();
			}else{
				$data['list'] = $this->Home_model->all_person_home_attended_lc();
			}
            $data['page_title'] = "Persons";

            $this->load->view('header', $data);
            if($_SESSION['role'] == 'admin'){
				$this->load->view('persons', $data);
			}else{
				$this->load->view('persons_lc', $data);
			}
            $this->load->view('footer');
        }

        public function home_page($page = 'home_page')
        {
			 if($_SESSION['role'] == 'admin'){
				$data['list'] = $this->Home_model->all_home_page_participants();
			}else{
				$data['list'] = $this->Home_model->all_home_page_participants_lc();
			}
            $data['page_title'] = "Before You Buy";


            $this->load->view('header', $data);
            $this->load->view('home_page', $data);
            $this->load->view('footer');

        }

        public function lcs($page = 'lcs')
        {
            $data['list'] = $this->Home_model->lc_home_up_for_termination();
            $data['page_title'] = "LCs";

            $this->load->view('header', $data);
            $this->load->view('lcs', $data);
            $this->load->view('footer');
        }

		// Show form in view page i.e view_page.php
		public function home_form($page = 'home_form') {
			$data['page_title'] = "New Home";

            $this->load->view('header', $data);
			$this->load->view("home_form");
            $this->load->view('footer');
		}

		// Show form in view page i.e view_page.php
		public function home_edit($page = 'home_edit') {
			$data['page_title'] = "Edit Home";

            $this->load->view('header', $data);
			$this->load->view("home_edit");
            $this->load->view('footer');
		}
		
		// Show form in view page i.e view_page.php
		public function home_delete($page = 'home_delete') {
			$data['page_title'] = "Home Delete";

            $this->load->view('header', $data);
			$this->load->view("home_delete");
            $this->load->view('footer');
		}

		// When user submit data on view page, Then this function store data in array.
		public function data_submitted($page = 'data_submitted') {
			$data['page_title'] = "New Home";

            $this->load->view('header', $data);

			$data = array(
			'home_name_id' => $this->input->post('ev_name'),
			'home_lc_id' => $this->input->post('ev_lc'),
			'home_start_date_id' => $this->input->post('ev_start_date'),
			'home_end_date_id' => $this->input->post('ev_end_date'),
			'home_description_id' => $this->input->post('ev_description'),
			'home_announce_date_id' => $this->input->post('ev_announce_date'),
			'home_deadline_date_id' => $this->input->post('ev_deadline_date'),
			'home_participants_announce_date_id' => $this->input->post('ev_participants_announce_date')
			);

			// Show submitted data on view page again.
			$this->load->view("home_form", $data);

            $this->load->view('footer');
		}

		// When user submit data on view page, Then this function store data in array.
		public function data_edited($page = 'data_edited') {
			$data['page_title'] = "home edited";

            $this->load->view('header', $data);

			$data = array(
			'home_name_id' => $this->input->post('ev_name'),
			'home_lc_id' => $this->input->post('ev_lc'),
			'home_start_date_id' => $this->input->post('ev_start_date'),
			'home_end_date_id' => $this->input->post('ev_end_date'),
			'home_description_id' => $this->input->post('ev_description'),
			'home_announce_date_id' => $this->input->post('ev_announce_date'),
			'home_deadline_date_id' => $this->input->post('ev_deadline_date'),
			'home_participants_announce_date_id' => $this->input->post('ev_participants_announce_date'),
			'ev_id' => $this->input->post('id')
			);

			// Show submitted data on view page again.
			$this->load->view("home_edit", $data);

            $this->load->view('footer');
		}

		// Show form in view page i.e view_page.php
		public function persons_form($page = 'persons_form') {
			$data['page_title'] = "Create member";

            $this->load->view('header', $data);
			$this->load->view("persons_form");
            $this->load->view('footer');
		}

		// Show form in view page i.e view_page.php
		public function persons_edit($page = 'persons_edit') {
			$data['page_title'] = "Edit member";

            $this->load->view('header', $data);
			$this->load->view("persons_edit");
            $this->load->view('footer');
		}
		
		// Show form in view page i.e view_page.php
		public function persons_delete($page = 'persons_delete') {
			$data['page_title'] = "Person Delete";

            $this->load->view('header', $data);
			$this->load->view("persons_delete");
            $this->load->view('footer');
		}

		// When user submit data on view page, Then this function store data in array.
		public function persons_data_submitted($page = 'data_submitted') {
			$data['page_title'] = "persons form";

            $this->load->view('header', $data);

			$data = array(
			'person_name_id' => $this->input->post('per_name'),
			'profile_link_id' => $this->input->post('prof_email'),
			'lc_id' => $this->input->post('per_lc')
			);

			// Show submitted data on view page again.
			$this->load->view("persons_form", $data);

            $this->load->view('footer');
		}

		// When user submit data on view page, Then this function store data in array.
		public function persons_data_edited($page = 'data_edited') {
			$data['page_title'] = "persons form";

            $this->load->view('header', $data);

			$data = array(
			'person_name_id' => $this->input->post('per_name'),
			'profile_link_id' => $this->input->post('prof_email'),
			'lc_id' => $this->input->post('per_lc'),
			'p_id' => $this->input->post('id')
			);

			// Show submitted data on view page again.
			$this->load->view("persons_edit", $data);

            $this->load->view('footer');
		}

		// Show form in view page i.e view_page.php
		public function lcs_form() {
            $data['page_title'] = "New LC";

            $this->load->view('header', $data);
            $this->load->view('lcs_form');
            $this->load->view('footer');
		}

		// When user submit data on view page, Then this function store data in array.
		public function lc_data_submitted() {

            $data['page_title'] = "LCs form";

            $this->load->view('header', $data);

			$data = array(
			'city' => $this->input->post('u_city'),
			'email' => $this->input->post('u_email'),
			'password' => $this->input->post('u_pass')
			);
			// Show submitted data on view page again.
			$this->load->view("lcs_form", $data);

            $this->load->view('footer');
		}


		// Show form in view page i.e view_page.php
		public function lcs_edit() {
            $data['page_title'] = "Edit LC";

            $this->load->view('header', $data);
            $this->load->view('lcs_edit');
            $this->load->view('footer');
		}
		
		// Show form in view page i.e view_page.php
		public function lcs_delete($page = 'lcs_delete') {
			$data['page_title'] = "LC Delete";

            $this->load->view('header', $data);
			$this->load->view("lcs_delete");
            $this->load->view('footer');
		}

		// When user submit data on view page, Then this function store data in array.
		public function lcs_data_edited() {

            $data['page_title'] = "LCs edited";

            $this->load->view('header', $data);

			$data = array(
			'city' => $this->input->post('u_city'),
			'lc_id' => $this->input->post('id'),
			'email' => $this->input->post('u_email'),
			'password' => $this->input->post('u_pass')
			);
			// Show submitted data on view page again.
			$this->load->view("lcs_edit", $data);

            $this->load->view('footer');
		}

        public function logout($page = 'logout')
        {
            session_start();
        	session_destroy();
            redirect('login');
        }

        public function delete_person_from_home()
        {
            $p_id = $_POST['p_id'];
            $e_id = $_POST['e_id'];
            $this->db->query("DELETE FROM home_participants WHERE person_id = ".$p_id." AND home_id = ".$e_id);
        }

        public function add_person_to_home()
        {
            $p_id = $_POST['p_id'];
            $e_id = $_POST['e_id'];
            $query = $this->db->query("SELECT * FROM home_participants WHERE home_id = ".$e_id." AND person_id = ".$p_id);
            if($query->num_rows() == 0)
            {
                $this->db->query("INSERT INTO home_participants (person_id, home_id) VALUES (".$p_id.", ".$e_id.")");
                echo 1;
            }
        }
    }
?>
