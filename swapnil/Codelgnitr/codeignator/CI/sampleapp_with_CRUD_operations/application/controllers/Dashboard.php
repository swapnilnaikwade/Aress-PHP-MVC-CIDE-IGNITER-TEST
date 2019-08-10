<?php 
class Dashboard extends CI_Controller {
	public function __construct() { 
		parent::__construct(); 
		
		//Redirect user to home page if already logged in
		if(!$this->session->has_userdata('username'))
			redirect('/');
		
		$this->load->model('dashboard_model');
		$this->load->model('user_model');
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
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
	
	function editUser($userid){
		
		$data['userDetails'] = $this->user_model->getUserById($userid);
		$data['userid'] = $userid;
		
		
		//Form validation Rules
		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/edituser',$data);
		}
		else
		{
			$data = array(
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'username' => $this->input->post('username'),
						'email' => $this->input->post('email')
					);
			if($this->input->post('password')!='')
					$data['password'] =  md5($this->input->post('password'));
			
			$this->user_model->updateUserDetails($data,$userid);
			
			redirect('dashboard/usersList');
			
		}		
	}
	
	function deleteUser($userid){
		$this->user_model->deleteUser($userid);
		redirect('dashboard/usersList');
	}
	
	function usersList(){
		//Pagination
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/php-projects/sampleapp/dashboard/usersList/';
		
		
		$totalRows = $this->dashboard_model->getTotalUsers();
		
		$config['total_rows'] = $totalRows;
		$config['per_page'] = 2;
		$config["uri_segment"] = 3;
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$this->pagination->initialize($config);
		
		$data["links"] = $this->pagination->create_links();
		$data['users'] = $this->dashboard_model->getUsersList($config["per_page"], $page);
		
		$this->load->view('admin/dashboard',$data);
	}
}