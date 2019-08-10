<?php 
Class Admin_model extends CI_Model {

	public function __construct() { 
		parent::__construct(); 
	} 
	
	/*
	* Function to authenticate user
	* @params String,String (Username, Password)
	* @return $data (row)
	*/
	function checkLoginAuthentication($email,$password){
		$this->db->select('id,email');
		$this->db->where('email',$email);
        $this->db->where('password',md5($password));
		return $this->db->get('admin')->row();
	}
} 
?>