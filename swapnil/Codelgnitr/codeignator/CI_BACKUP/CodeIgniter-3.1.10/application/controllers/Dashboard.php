<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller 
{
	public function __construct() 
	{
        parent:: __construct();
		$this->load->model('Dashboard_model');
		$this->load->model('user_model');
		$this->load->library("pagination");
	}
	
    /*
	* Function to pass the data to dashboard view
	* @params null
	* @return null
	*/
	public function index()
	{ 
		$config = array();
		$config["base_url"] = "http://localhost/swapnil/Codelgnitr/CodeIgniter-3.1.10/Dashboard/index/";
		$searchText='';
		$deptid=0;
		$searchText = $this->input->post('searchText');
		$deptid = $this->input->post('deptid');			
		$totalRows = $this->Dashboard_model->get_count($searchText,$deptid);
        $config["total_rows"] =$totalRows;
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["links"] = $this->pagination->create_links();
		$data['deptList'] = $this->Dashboard_model->getDeptList();	
		$data['users'] = $this->Dashboard_model->index($config["per_page"], $page, $searchText, $deptid);	
		$data['searchText'] = $searchText;
		$data['deptid'] = $deptid;
		$this->load->view("dashboard",$data);       
    }

	/*
	* Function to add user to dashboard
	* @params null
	* @return null
	*/
	function addUser()
	{
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required',
				array('required' => 'You must provide a %s.')
		);
		$this->form_validation->set_rules('email', 'Email', 'required');		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('adduser');
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
						'gender' => $this->input->post('gender'),
					);
			$this->user_model->saveDetails($data);			
			redirect('Dashboard/index/');			
		}
	}	

	/*
	* Function to update user to dashboard
	* @params $userid
	* @return null
	*/
	function updateUser($userid)
	{
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

   /*
	* Function to delete user to dashboard
	* @params $userid
	* @return null
	*/
	function deleteUser($userid)
	{
        $this->load->model("user_model");
		$this->user_model->deleteUser($userid);
		redirect('Dashboard/index/');
	}		
}