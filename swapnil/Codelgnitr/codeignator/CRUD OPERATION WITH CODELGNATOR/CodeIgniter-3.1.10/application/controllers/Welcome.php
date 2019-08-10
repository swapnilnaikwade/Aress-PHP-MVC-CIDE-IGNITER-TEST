<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->model('queries');
        $this->load->library("pagination");
    }
	public function index()
	{
		$config = array();
        $config["base_url"] = "http://[::1]/swapnil/Codelgnitr/CodeIgniter-3.1.10/index.php/welcome/index/";
        $config["total_rows"] = $this->queries->get_count();
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
	    $this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["links"] = $this->pagination->create_links();

		//$data['authors'] = $this->authors_model->get_authors($config["per_page"], $page);
	//	$this->load->view('authors/index', $data);
		
		$data['authors']=$this->queries->getPosts($config["per_page"], $page);
		$this->load->view('welcome_message',$data);
	}

	public function create()
	{
		$this->load->view('create');
	}

	public function save()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Password', 'required');
		if ($this->form_validation->run() )
		{
				$data=$this->input->post();
				$today=date('y-m-d');
				$data['date_created']=$today;
				unset($data['submit']);
				print_r($data);
				$this->load->model('queries');
				if($this->queries->addPosts($data)){
					$this->session->set_flashdata('msg','post saved successfully');
				}
				else{
					$this->session->set_flashdata('msg','failed to save successfully');
				}
				return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	}
	
	public function update($id)
	{
		$this->load->model('queries');
		$post=$this->queries->addSinglePosts($id);
		$this->load->view('update',['post'=>$post]);	}

		public function change($id)
		{
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Password', 'required');
			if ($this->form_validation->run() )
			{
					$data=$this->input->post();
					$today=date('y-m-d');
					$data['date_created']=$today;
					unset($data['submit']);
					print_r($data);
					$this->load->model('queries');
					if($this->queries->updatePost($data,$id)){
						$this->session->set_flashdata('msg','post updated successfully');
					}
					else{
						$this->session->set_flashdata('msg','failed to update successfully');
					}
					return redirect('welcome');
			}
			else
			{
				$this->load->view('create');
			}
		}


	public function view($id)
	{
		$this->load->model('queries');
		$post=$this->queries->addSinglePosts($id);
		$this->load->view('view',['post'=>$post]);
	}


	public function delete($id)
	{
		$this->load->model('queries');
		$post=$this->queries->deletePost($id);
		return redirect('welcome');
	}
}
