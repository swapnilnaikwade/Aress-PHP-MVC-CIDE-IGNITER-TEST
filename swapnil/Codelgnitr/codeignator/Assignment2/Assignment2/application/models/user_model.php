<?php 
Class User_model extends CI_Model 
{
	public function __construct() 
	{ 
		parent::__construct(); 
	} 

	
	/*
	* Function to get registered users details
	* @params null
	* @return $data (array)
	*/
	function getRegisteredUsers()
	{
		$this->db->select('id,username,email');
		$query = $this->db->get('registration');
		//return $query->result();
		return $query->row_array();
	}
	
	/*
	* Function to get user details by id
	* @params Int (id)
	* @return $data (row)
	*/
	function getUserById($id)
	{
		$this->db->select('firstname,lastname,username,email,age');
		$this->db->where('id',$id);
		return $this->db->get('registration')->row();
	}
	
	/*
	* Function to delete user from the table
	* @params Int ($userid)
	* @return null
	*/
	function deleteUser($userid)
	{
		$this->db->where('id', $userid);
		$this->db->delete('registration');
	}


	/*
	* Function to save a registration form data
	* @params $data (array)
	* @return null
	*/
	function saveDetails($data)
	{
		$this->db->insert('registration', $data);
	}
	
	/*
	* Function to update user details
	* @params Array ($data,$id)
	* @return $data (row)
	*/
	function updateUserDetails($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('registration', $data);
	}
} 
?>