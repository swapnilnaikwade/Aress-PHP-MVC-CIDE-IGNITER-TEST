<?php 
class Uploadfile extends CI_Controller {
	public function __construct() { 
		parent::__construct(); 
		
		//Redirect user to home page if already logged in
		if(!$this->session->has_userdata('username'))
			redirect('/');
		
		 $this->load->helper(array('form'));
		//$this->load->model('dashboard_model');
	}
	
	public function index()
	{
			$this->load->view('admin/uploadfile', array('error' => ' ' ));
	}
	
	public function do_upload()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_form', $error);
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());

				$this->load->view('admin/upload_success', $data);
		}
	}
}
?>