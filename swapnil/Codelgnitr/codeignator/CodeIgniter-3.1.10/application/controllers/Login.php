<?php

class Login extends CI_Controller {

        public function loginValidation()
        {
                $this->load->helper(array('form', 'url'));                  
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login');
                }
                else
                {
                        $this->load->model('Login_model');
                        //Get the posted data from the login form
                        $email = $this->input->post('email');
                        $password = $this->input->post('password');
                        $userRow = $this->Login_model->checkLoginAuthentication($email,$password);

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