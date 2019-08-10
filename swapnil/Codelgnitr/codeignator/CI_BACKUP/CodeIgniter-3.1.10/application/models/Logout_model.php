<?php
class Logout_model extends CI_model {

    /*
    * Function to get logout
    * @params null
    * @return null
    */ 
    public function unsetEmail()
    {
        $this->session->unset_userdata('email');  
    }
}
