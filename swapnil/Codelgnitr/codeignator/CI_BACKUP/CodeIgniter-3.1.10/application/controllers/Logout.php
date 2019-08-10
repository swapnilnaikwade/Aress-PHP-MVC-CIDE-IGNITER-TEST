<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller
{

    /*
	* Function to display login view after logout
	* @params null
	* @return null
	*/
    public function logoutUser()
    {
        $this->load->model("Logout_model");
        $this->Logout_model->unsetEmail();
        redirect(base_url()."Login/user_login/");
    }
}