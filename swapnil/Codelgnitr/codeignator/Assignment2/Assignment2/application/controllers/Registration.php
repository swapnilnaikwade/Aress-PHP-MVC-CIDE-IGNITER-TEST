<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registration extends CI_Controller {
    
    /*
	* Function to validate and register user
	* @params null
	* @return null
	*/
    public function userValidation()
    {   
        $error["error"]="";
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
            $this->load->view('registration', $error);
        }
        else
        {  
            $this->load->model('registration_model');
            $config['upload_path']          = './upd/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('userfile'))
            {    
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('registration', $error);
            }
            else
            {  
                $imgdata = array('upload_data' => $this->upload->data());
                echo $sourcePath = $imgdata['upload_data']['full_path'];
                echo $targetPath = './upd/thumb/';
                $configManip = array('image_library' => 'gd2', 'source_image' => $sourcePath, 'new_image' => $targetPath, 'maintain_ratio' => TRUE, 'create_thumb' => TRUE, 'thumb_marker' => '_thumb', 'width' => 150, 'height' => 150);
                $this->load->library('image_lib', $configManip);
                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                }
                    $this->image_lib->clear();
                if ($error == 0) 
                {
                    $data = array(
                    "firstname" => $this->input->post("firstname"),
                    "lastname" => $this->input->post("lastname"),
                    "username" => $this->input->post("username"),
                    "email" => $this->input->post("email"),
                    "password" =>md5($this->input->post("password")),
                    "gender" => $this->input->post("gender"),
                    "age" => $this->input->post("age"),
                    "image"=> $imgdata['upload_data']['file_name']);
                    $this->registration_model->insertData($data);     
                    $data= $this->input->post();
                    redirect('login/user_login');
                }  
            }
        }
    }
}