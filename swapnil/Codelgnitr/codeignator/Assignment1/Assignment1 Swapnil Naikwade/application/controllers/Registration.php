<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration extends CI_Controller {

    /*
	* Function to load registration view
	* @params null
	* @return null
	*/
    public function user_registration()
    {
		$this->load->view('registration');
    }

    // post the registered data to database and check form validation
    public function userValidation()
    {
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cnfpassword', 'Cnfpassword', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');

    //if validation fail load registration view again
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('registration');
        }
        else
        {
            $this->load->model('Registration_model');
            $data=array(
            "firstname" => $this->input->post("firstname"),
            "lastname" => $this->input->post("lastname"),
            "username" => $this->input->post("username"),
            "email" => $this->input->post("email"),
            "password" =>md5($this->input->post("password")),
            "gender" => $this->input->post("gender"),
            "age" => $this->input->post("age"),
             );
            $this->Registration_model->insertData($data);     
            $data= $this->input->post();
            $this->load->view('login');
        }
    }
}
