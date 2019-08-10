<?php 
class Test extends CI_Controller {

	public function index() { 
		$this->load->view('test/test'); 
	}

	/*
	* Function to display a message
	* @params null
	* @return null
	*/
	public function hello() { 
		echo "This is hello function."; 
	} 
} 
?>