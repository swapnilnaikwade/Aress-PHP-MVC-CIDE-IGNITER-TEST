<?php 
class Dashboard extends CI_Controller {
	public function __construct() { 
		parent::__construct(); 
		
		//Redirect user to home page if already logged in
		if(!$this->session->has_userdata('	'))
			redirect('/');
		
		$this->load->model('dashboard_model');
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