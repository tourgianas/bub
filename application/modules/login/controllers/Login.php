<?php
    class Login extends CI_Controller
    {
        public function __construct() // upon construction of the object
    	{
		    parent::__construct();
            $this->load->helper('form');

            if (isset($_SESSION['logged_in']))
    		{
                if($_SESSION['logged_in'])
                {
                    redirect('home');
                }
            }
    	}

        public function index()
        {
            $this->load->view('login');
        }
		
        public function register()
        {
            $this->load->view('register');
        }

		// When user submit data on view page, Then this function stores data in array.
		public function data_submitted($page = 'data_submitted')
        {
			$data = array(
    			'user_email_id' => $this->input->post('u_email'),
    			'user_password' => $this->input->post('u_pass')
			);

            // Check if login was correct
            $this->db->where('email', $data['user_email_id']);
            $query = $this->db->get('login', 1);
            if($query->num_rows() > 0)
            {
                $user = $query->row();
                if($data['user_password'] == $user->password)
                {
                    // Log the user in
                    $this->log_me_in('admin',$data['user_email_id']);
                    redirect('home');
                }
                else
                {
                    goto noSuccess;
                }
            }
            else
            {
                $this->db->where('email', $data['user_email_id']);
                $query = $this->db->get('lcs', 1);
                if($query->num_rows() > 0)
                {
                    $user = $query->row();
                    if($data['user_password'] == $user->password)
                    {
                        // Log the user in
                        $this->log_me_in('LC',$data['user_email_id']);
                        redirect('home');
                    }
                    else
                    {
                        goto noSuccess;
                    }
                }
                else
                {
                    noSuccess:
					$data = array(
						'error' => '1'
					);
					$this->load->view("login", $data);
                }
            }

		}

		// When user submit data on view page, Then this function stores data in array.
		public function reg_data_submitted($page = 'data_submitted')
        {
			$data = array(
    			'user_email_id' => $this->input->post('u_email'),
    			'user_city_id' => $this->input->post('u_city'),
    			'user_password' => $this->input->post('u_pass'),
    			'user_password_verify' => $this->input->post('u_pass_ver')
			);

            
			// Show submitted data on view page again.
			$this->load->view("register", $data);

		}

        private function log_me_in($role,$email)
        {
            $_SESSION['logged_in'] = true;
            $_SESSION['role'] = $role;
            $_SESSION['email'] = $email;
            print_r($_SESSION);

        }
    }
?>
