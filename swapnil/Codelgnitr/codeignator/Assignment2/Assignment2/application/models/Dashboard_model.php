<?php
class Dashboard_model extends CI_model {

      /*
	* Function to get the data about role of registerd user
	* @params $data (array)
	* @return null
	*/     
      public function index($limit,$offset)
      { 
            if(!$this->session->has_userdata('email')) 
            redirect('/');
            $this->db->limit($limit,$offset);
            $query = $this->db->get_where('registration', array('role' => 'Customer'));
            $data=$query->result_array( $query); 
            return $data;  
      }

      /*
	* Function to get the the count of row selected by query from database
	* @params $data (array)
	* @return null
	*/
      public function get_count()
      {
          $query=$this->db->get_where('registration', array('role' => 'Customer'));
          return $query->num_rows();          
      }
}
?>
