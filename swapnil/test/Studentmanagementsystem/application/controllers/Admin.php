<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
        public function __construct() { 
		parent::__construct(); 
		
		$this->load->model('Admin_model');
        }
        /*
        * Function to login user
        * @params null
        * @return null
        */  
        public function adminLogin()
        {
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                //condition to check valid user
                if($this->form_validation->run() == FALSE)
                {
                        $this->load->view('adminlogin');
                }
                else
                {	
                        $email = $this->input->post('email');
                        $password = $this->input->post('password');
                        $userRow = $this->Admin_model->checkLoginAuthentication($email,$password);
                        if($userRow){
				$sessionData = array(
				'username'  => $username,
				'email'     => $userRow->email,
				'logged_in' => TRUE
				);
			
				$this->session->set_userdata($sessionData);
				redirect('/dashboard/');
			}
			else
				echo "Login failed";
		}
		
	}
}
?>