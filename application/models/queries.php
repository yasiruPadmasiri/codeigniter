<?php
        class queries extends CI_model{
            public function getPosts(){
                $query = $this->db->get('tbl_post');
              if( $query->num_rows()>0) {
                 return  $query->result(); 
              } 
            }
            public function addPost($data){
                return  $this->db->insert('tbl_post', $data);
        }
        public function getSinglePosts($id)
        {
            $query=$this->db->get_where('tbl_post',array('id'=>$id));
           
                return  $query->row(); 
            
        }
        public function updatePost($data,$id){
            return $this->db->where('id',$id)
                        ->update('tbl_post',$data);
        }
        public function deletePosts($id){
            return $this->db->delete('tbl_post',['id'=>$id]);
        }
    }
?> 