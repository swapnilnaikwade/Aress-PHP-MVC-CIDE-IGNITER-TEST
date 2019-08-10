<?php 
class Register extends CI_Controller {
	
	public function __construct() { 
		parent::__construct(); 
		
		//Redirect user to home page if already logged in
		if($this->session->has_userdata('username'))	
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
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('register/register');
		}
		else
		{
			$data = array(
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'email' => $this->input->post('email'),
					);
			$this->user_model->saveDetails($data);
			
			$this->db->insert_id();
			$this->load->view('register/success');
		}
	}
	
	

	
	public function getRegisteredUsers(){
		$result = $this->user_model->getRegisteredUsers();
		echo "<pre>";
		print_r($result);
		
	}
	
	public function removeRecord($id){
		$this->db->delete('registration', array('id' => $id));
	}
	
	public function updateRecord($id){
		
		/*$this->db->set('username', 'swapnil');
		$this->db->where('id', $id);
		$this->db->update('registration');
		*/
		
		$data = array(
			'username' =>'pawan',
			'password' => '12343333',
			'email' => 'pawan@gmail.com'
		);
		$this->db->where('id', $id);
		$this->db->update('registration', $data);
		
		echo $this->db->last_query();
	}
} 
?>