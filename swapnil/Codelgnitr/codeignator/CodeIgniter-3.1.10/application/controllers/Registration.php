<?php

class Registration extends CI_Controller {

        public function index()
        {             
                    $this->load->view('registration');            
        }
        
        public function userRegistration()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('registration');
                }
                else
                {
                    $data = array(
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'email' => $this->input->post('email'),                   
                    );
                    $this->load->model('Registration_model');
                    $this->Registration_model->insert($data);
                  
                    $this->load->view('login');
                }
        }

      
}