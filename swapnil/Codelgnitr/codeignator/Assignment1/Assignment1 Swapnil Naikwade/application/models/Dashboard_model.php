<?php
class Dashboard_model extends CI_model {

      /*
	* Function to get the data about role of registerd user
	* @params $data (array)
	* @return null
	*/     
      public function index()
      { 
            if(!$this->session->has_userdata('email')) 
            redirect('/');
            $query = $this->db->get_where('registration', array('role' => 'Customer'));
            $data=$query->result_array( $query); 
            return $data;  
      }
}
?>
