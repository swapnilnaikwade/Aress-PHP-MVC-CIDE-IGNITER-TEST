<?php
class Registration extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        //load form and url helper
        $this->load->helper(array('form','url'));
        //load from validation library
        $this->load->library('form_validation');
    }

    /**
     * function for giving validations to registration form
     * @params null
     * @return null
     */
    public function userRegistration()
    {
        $this->form_validation->set_rules('pid','ProjectName','required|numeric');
        $this->form_validation->set_rules('lastname','LastName','required|alpha');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('registration_view');
        }
        else
        {
            $this->load->model('registration_model');
            $data=array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'gender' => $this->input->post('gender'),
                'age' => $this->input->post('age')
            );
            $this->registration_model->insertRegData($data);
            redirect('registration_view');
        }
    }
}

?>