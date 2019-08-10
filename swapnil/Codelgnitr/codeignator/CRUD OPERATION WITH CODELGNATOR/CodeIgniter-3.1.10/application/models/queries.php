<?php
class queries extends CI_Model
{
    public function getPosts($limit,$offset)
    {   $this->db->limit($limit,$offset);
        $query=$this->db->get('tbl_posts');
        return $query->result(); 
    }

    public function get_count()
    {
        $query=$this->db->get('tbl_posts');
        return $query->num_rows();
        
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