<?php
class Login_model extends CI_model {

    /*
	* Function to get the data and match with database
	* @params $email,$password
	* @return $data (array)
	*/ 
    public function insertdata($email,$password)
    {
        $this->db->select('id,email,role');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
        $data=$this->db->get('registration');
        return $data;
    }
}   
?>