<?php
class queries extends CI_Model
{
    public function getPosts()
    {
        $query=$this->db->get('tbl_posts');
        if($query->num_rows() > 0){
            return $query->result();
        }
    }

    public function addPosts($data)
    {
      return $this->db->insert('tbl_posts',$data);   
    }

    public function addSinglePosts($id)
    {
        $query=$this->db->get_where('tbl_posts',array('id'=>$id));
        return $query->row();
    } 

    public function updatePost($data,$id)
    {
        return $this->db->where('id',$id)->update('tbl_posts',$data);
    }

    public function deletePost($id)
    {
        return $this->db->delete('tbl_posts',['id'=>$id]);
    }

}
?>