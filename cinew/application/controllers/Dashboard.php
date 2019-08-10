<?php
class Dashboard extends CI_Controller
{
    public function list()
    {
        $this->load->model('pagination_model');
        //$this->load->model('login_model');
                
        $config = array();
        $config["base_url"] = "http://[::1]/cinew/Dashboard/list/";
        $config["total_rows"] = $this->pagination_model->getCount();
        $config["per_page"] = 2;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["links"] = $this->pagination->create_links();
        $data["index"] = $this->pagination_model->getRecords($config["per_page"], $page);
        //$data['userlist']=$this->login_model->getList();
        $this->load->view('displaylist_view',$data);
    }
}
?>