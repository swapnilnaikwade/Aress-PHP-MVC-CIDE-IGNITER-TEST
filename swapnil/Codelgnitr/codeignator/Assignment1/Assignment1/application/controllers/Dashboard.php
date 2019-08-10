<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
   
    /*
	* Function to pass the data to dashboard view
	* @params null
	* @return null
	*/
    public function index(){  
        $this->load->model("Dashboard_model");
        $data['users']=$this->Dashboard_model->index();
        $this->load->view("dashboard",$data);
        
    }
	
	function addUser(){

		//Form validation Rules
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required',
				array('required' => 'You must provide a %s.')
		);
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('admin/adduser');
		}
		else
		{
			$data = array(
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'email' => $this->input->post('email'),
					);
			$this->user_model->saveDetails($data);
			
			redirect('dashboard/usersList');
			
		}
	}
	
	function updateUser($userid){
		$this->load->model("user_model");
		$data['userDetails'] = $this->user_model->getUserById($userid);
		$data['userid'] = $userid;
	
		
		//Form validation Rules
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');
		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('updateuser',$data);
		}
		else
		{
			$data = array(
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
                        'email' => $this->input->post('email'),
                        'age' => $this->input->post('age'),
                    );
            if($this->input->post('password')!='')
            $data['password'] =  md5($this->input->post('password'));
			$this->user_model->updateUserDetails($data,$userid);
			redirect('Dashboard/index/');
		}
    }

    function deleteUser($userid){
        $this->load->model("user_model");
		$this->user_model->deleteUser($userid);
		redirect('Dashboard/index/');
	}
	
		
}