<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{

        /*
        * Function to login user
        * @params null
        * @return null
        */  
        public function user_login()
        {
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                //condition to check valid user
                if($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login');
                }
                else
                {	
                        $email = $this->input->post('email');
                        $password = $this->input->post('password');
                        $this->load->model('Login_model');
                        $userRow = $this->Login_model->insertdata($email,$password);
                        $data= $userRow->row_array();
                        if($userRow)
                        {
                                $session= array(
                                'email'=>$email
                                );
                                $this->session->set_userdata($session);   
                        if($data['role']=='Admin')
                        { 
                                redirect(base_url()."Dashboard/index/");
                        }
                        else
                        {
                                redirect(base_url()."Home");
                        }
                        }
                        else
                        {
                                echo "Login failed";
                        }	
                }     
        }     
}
?>