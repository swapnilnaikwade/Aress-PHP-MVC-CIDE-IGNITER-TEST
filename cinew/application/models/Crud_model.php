<?php
class Crud_model extends CI_model
{
    public function addProject($data)
    {
        $this->db->insert('projects',$data);
        redirect('dashboard/list');
    }
}

?>