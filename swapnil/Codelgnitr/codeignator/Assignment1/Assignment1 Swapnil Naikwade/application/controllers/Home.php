<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
    /*
	* Function to load the home page
	* @params null
	* @return null
	*/
	public function index()
	{
		$this->load->view('home');
	}
}
