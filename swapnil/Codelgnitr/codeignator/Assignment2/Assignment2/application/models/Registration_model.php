<?php
class Registration_model extends CI_model {

    /*
    * Function to insert the registered data into database
    * @params $data
    * @return null
    */ 
    public function insertData($data)
    {
        $this->load->database();
        $this->db->insert("Registration",$data);    
    }   
}
?>