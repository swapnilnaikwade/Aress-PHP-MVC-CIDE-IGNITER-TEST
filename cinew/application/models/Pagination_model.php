<?php
class Pagination_model extends CI_model
{  
   /**
    * function to get count of total records from table
    * @params null
    * @return null
    */
    public function getCount()
    {
        return $this->db->get('Students')->num_rows();
    }

   /**
    * function to get records from table
    * @params null
    * @return null
    */
    public function getRecords($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get('Students');
        return $query->result();
    }

}
?>