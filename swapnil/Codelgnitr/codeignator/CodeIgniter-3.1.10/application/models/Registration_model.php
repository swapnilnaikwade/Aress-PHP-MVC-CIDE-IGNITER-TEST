<?php
class Registration_model extends CI_Model{
function __construct() {
parent::__construct();
}
function insert($data){
    print_r($data);
// Inserting in Table(students) of Database(college)
$this->db->insert('students', $data);
}
}
?>