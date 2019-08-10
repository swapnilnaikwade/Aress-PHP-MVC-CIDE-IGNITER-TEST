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
}