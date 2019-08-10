<?php
class Registration_model extends CI_model
{
    /**
     * function for inserting registration form data into table
     * @params array ($data)
     * @return null
     */
    public function insertRegData($data)
    {
        $this->db->insert('registration',$data);
    }
}
?>