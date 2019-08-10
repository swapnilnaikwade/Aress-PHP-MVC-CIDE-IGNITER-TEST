<?php 
Class Dashboard_model extends CI_Model {

	public function __construct() { 
		parent::__construct(); 
	} 
	
	function getUsersList($limit,$offset){
		$this->db->select('id,username,email');
		$this->db->limit($limit,$offset);
		return $this->db->get('registration')->result();
	}
	
	function getTotalUsers(){
		$this->db->select('id');
		return $this->db->get('registration')->num_rows();
	}
	
}