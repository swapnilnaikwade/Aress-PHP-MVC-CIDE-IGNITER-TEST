<?php 
class Homepage extends CI_Controller {
	/*
	* Function to display a homepage
	* @params null
	* @return null
	*/
	public function index() { 
		$this->load->view('homepage'); 
	}
} 
?>