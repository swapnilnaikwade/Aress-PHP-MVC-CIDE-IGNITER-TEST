<?php
class Login_model extends CI_model
{
    public function checkLogin($data)
    {
        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);
        return $this->db->get('admin');
    
    }

    public function getList()
    {
        $query = $this->db->get_where('admin',array('type'=>'customer'))->result_array();
        return $query;
    }
}
?>