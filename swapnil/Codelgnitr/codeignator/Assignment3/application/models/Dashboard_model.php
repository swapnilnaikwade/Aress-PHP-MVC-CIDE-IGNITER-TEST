<?php
class Dashboard_model extends CI_model {

      /*
	* Function to get the data about role of registerd user
	* @params $data (array)
	* @return null
	*/     
      public function index($limit,$offset,$searchText='',$deptid)
      { 
            $this->db->join('user_depts t1', 't1.userID = registration.id');
            $this->db->join('departement t2', 't2.dpt_id = t1.deptID' );
            if($searchText!=''){
            $this->db->where("( firstname LIKE '%".$searchText."%' OR  
            lastname LIKE '%".$searchText."%'   
            OR username LIKE '%".$searchText."%'   
            OR email LIKE '%".$searchText."%'
            OR age LIKE '%".$searchText."%'
            OR gender LIKE '%".$searchText."%')");
       }
       if($deptid>0){
            $this->db->where('deptId',$deptid);
       }
      $this->db->group_by('firstname');
            $this->db->limit($limit,$offset);
           
            
            return $this->db->get('registration')->result_array();
      }

      /*
	* Function to get the the count of row selected by query from database
	* @params $data (array)
	* @return null
	*/
      public function get_count($searchText,$deptid)
      {
            $this->db->select('id');
            if($searchText!=''){
                  $this->db->where("( firstname LIKE '%".$searchText."%' OR   lastname LIKE '%".$searchText."%'     OR username LIKE '%".$searchText."%'    OR email LIKE '%".$searchText."%'  OR age LIKE '%".$searchText."%'OR gender LIKE '%".$searchText."%')");
		
      }
            if($deptid>0){
                  $this->db->where('deptId',$deptid);
            }
		$this->db->group_by('firstname');
		$this->db->join('user_depts ','userId = id');
            $data= $this->db->get('registration')->num_rows();
            $this->db->last_query();
            return $data;
	         
      }

      function getDeptList(){         
            $this->db->select('dpt_id, dpt_name');
            return $this->db->get('departement')->result_array();
           }
 
}
?>
