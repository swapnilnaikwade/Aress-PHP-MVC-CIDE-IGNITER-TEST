<?php 
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        //load from validation library
        $this->load->library('form_validation');
    }

    /**
     * function for giving validations to login form
     * @params null
     * @return null
     */
    public function getLogin()
    {
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('login_view');
        }
        else
        {
            $this->load->model('login_model');
            $data=array(
                
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $result=$this->login_model->checkLogin($data)->row_array();
           print_r($result);
            if($result)
            {
                //setting session after login
                $session_data=array(
                    'email' => $this->input->post('email')
                );
                $this->session->set_userdata($session_data);

                //$this->load->view('dashboard/list', $data);
 
                // if($result['type']=='admin')
                // {
                   
                    redirect(base_url() . 'dashboard/list');
                // }
                // else
                // {
                    // redirect(base_url() . 'Home');
                // }
            }
            else
            {
                echo 'login failed';
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'registration_view');
    }
}

?>