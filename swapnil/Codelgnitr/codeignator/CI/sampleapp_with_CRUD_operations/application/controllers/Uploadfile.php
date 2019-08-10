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
		$config['max_size']             = 4000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('admin/uploadfile', $error);
		}
		else
		{
								
				$data = array('upload_data' => $this->upload->data());

				//Create thumb of an original uploaded image
				$sourcePath = $data['upload_data']['full_path'];;
				
				$targetPath = './uploads/thumb/';
				
				$configManip = array(
					'image_library' => 'gd2',
					'source_image' => $sourcePath,
					'new_image' => $targetPath,
					'maintain_ratio' => TRUE,
					'create_thumb' => TRUE,
					'thumb_marker' => '_thumb',
					'width' => 150,
					'height' => 150
				);
				$this->load->library('image_lib', $configManip);
				
				if (!$this->image_lib->resize()) {
					echo $this->image_lib->display_errors();
				}
				
				
				// clear //
				$this->image_lib->clear();

				$this->load->view('admin/upload_success', $data);
		}
	}
}
?>