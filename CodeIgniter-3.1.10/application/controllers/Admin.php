<?php 
class Admin extends CI_Controller {
	
	public function __construct() { 
		parent::__construct(); 
	
		$this->load->model('Admin_model');
	} 
	
	/*
	* Function to display a registration form
	* @params null
	* @return null
	*/
	public function adminLogin() {
		
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		
		//Form validation Rules
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required',
				array('required' => 'You must provide a %s.')
		);
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('adminlogin');
		}
		else
		{
			//Authentication check
		echo	$email = $this->input->post('email');
		echo	$password = $this->input->post('password');
		
			$userRow = $this->Admin_model->checkLoginAuthentication($email,$password);
			
			if($userRow){
				$sessionData = array(
				'email'  => $email,
				'email'     => $userRow->email,
				'logged_in' => TRUE
				);

                $this->session->set_userdata($sessionData);
                $this->load->view('dashboard');
			}
			else
				echo "Login failed";
		}
		
	}	
	
}