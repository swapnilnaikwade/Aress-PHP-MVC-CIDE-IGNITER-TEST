<?php
class Crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        //load from validation library
        $this->load->library('form_validation');
    }
    
    public function addProject()
    {
        $this->form_validation->set_rules('project_name', 'ProjectName', 'required|alpha');
        $this->form_validation->set_rules('short_description', 'ShortDescription', 'required');
        $this->form_validation->set_rules('long_description','LongDescription','required');          
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('addproject');
        }
        else
        {
            $this->load->model("crud_model");
            $data=array(
                "pid" => $this->input->post("pid"),
                "project_name" => $this->input->post("project_name"),
                "short_description" => $this->input->post("short_description"),
                "long_description" => $this->input->post("long_description")
            );
            $this->crud_model->addProject($data);
        }
    }
    
    public function editProject()
    {
        $this->load->model("crud_model");
        $data['userDetails']=$this->crud_model->getUserById($userid);
        $this->form_validation->set_rules('firstname', 'FirstName', 'required|alpha');
        $this->form_validation->set_rules('lastname', 'LastName', 'required|alpha');
        $this->form_validation->set_rules('username', 'UserName', 'required|alpha_numeric');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('editProject',$data);
        }
        else
        {
            $data=array(
                "firstname" => $this->input->post("firstname"),
                "lastname" => $this->input->post("lastname"),
                "username" => $this->input->post("username"),
                "email" => $this->input->post("email"),
                "gender" => $this->input->post("gender"),
                "age" => $this->input->post("age")
            );
            if($this->input->post('password') != '')
            {
                $data['password']=$this->input->post("password");
            }
            $this->main_model->editUser($data,$userid);
        }
    }
}
?>