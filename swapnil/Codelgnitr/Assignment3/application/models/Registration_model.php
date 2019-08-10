<?php
class Registration_model extends CI_model {

    /*
    * Function to insert the registered data into database
    * @params $data
    * @return null
    */ 
    public function insertData($data)
    {
        $this->db->insert("Registration",$data);    
    }     

     /*
    * Function to get departement
    * @params $data1
    * @return null
    */ 
    public function getDepartement()
    {
        $this->db->select('*');
        $this->db->from('departement');
        $query = $this->db->get();
        $data1=$query->result_array(); 
        return $data1;
    } 

    /*
    * Function to save departement
    * @params $data1
    * @return null
    */ 
    public function saveUserDepartments($userDepartments){
		$this->db->insert('user_depts',$userDepartments);
	}

}
?>