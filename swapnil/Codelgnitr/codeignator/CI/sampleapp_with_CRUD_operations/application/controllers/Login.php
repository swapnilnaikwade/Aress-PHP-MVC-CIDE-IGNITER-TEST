<?php 
class Login extends CI_Controller {
	
	public function __construct() { 
		parent::__construct(); 
		
		//Redirect user to home page if already logged in
		if($this->session->has_userdata('username') && $this->uri->segment(2) != 'logout' )
			redirect('/');
		
		$this->load->database();
		$this->load->model('user_model');
	} 
	
	/*
	* Function to display a registration form
	* @params null
	* @return null
	*/
	public function index() {
		
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		
		//Form validation Rules
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required',
				array('required' => 'You must provide a %s.')
		);
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			//Authentication check
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$userRow = $this->user_model->checkLoginAuthentication($username,$password);
			
			if($userRow){
				$sessionData = array(
				'username'  => $username,
				'email'     => $userRow->email,
				'logged_in' => TRUE
				);

				$this->session->set_userdata($sessionData);
				redirect('/dashboard/usersList');
			}
			else
				echo "Login failed";
		}
		
	}
	
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');
		
		redirect('/');
	}
	
}