<?php
class Logout_model extends CI_model {

    /*
    * Function to get logout
    * @params null
    * @return null
    */ 
    public function unsetEmail()
    {
        echo "logout model";
        $this->session->unset_userdata('email');  
    }
}
