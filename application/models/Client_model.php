<?php

class Client_model extends CI_Model
{

    function __construct(){
        $this->load->database();
    }

    public function get($target = NULL,$category = NULL,$id=NULL)
    {    
        $get = NULL;
        if ($target != NULL) {
            $get = $this->db->select('post.*,image.path,image.imagename,category.category as namakategori,category.color')->from('t_posts as post')
                        ->join('t_category category', 'category.id = post.category')
                        ->join('t_image image', 'image.postid = post.id')
                        ->where(array('post.'.$target=>1,'post.status'=>1))                           
                        ->get();
        }else if ($category != NULL) {
            $get = $this->db->select('post.*,image.path,image.imagename,category.category as namakategori,category.color')->from('t_posts as post')
                        ->join('t_category category', 'category.id = post.category')
                        ->join('t_image image', 'image.postid = post.id')
                        ->where(array('post.category'=>$category,'post.status'=>1))
                        ->order_by('post.time_create','DESC')
                        ->limit(4)                           
                        ->get();
        }elseif ($id != NULL) {
            $get = $this->db->select('post.*,image.path,image.imagename,category.category as namakategori,category.color')->from('t_posts as post')
                        ->join('t_category category', 'category.id = post.category')
                        ->join('t_image image', 'image.postid = post.id')
                        ->where('post.id',$id)
                        ->get();
        }
        else {
            $get = $this->db->select('post.*,image.path,image.imagename,category.category as namakategori,category.color')->from('t_posts as post')
                        ->join('t_category category', 'category.id = post.category')
                        ->join('t_image image', 'image.postid = post.id')
                        ->where('post.status',1)
                        ->order_by('post.time_create','DESC')
                        ->limit(6)                           
                        ->get();
        }
       
        
        if ($get->num_rows() > 0) {
            
            $result = $this->returns('Berhasil ambil data',SUCCESS,$get->result());
            return $result;

        }else{

            $result = $this->returns('Tidak ada data',ERROR,NULL);
            return $result;

        }
    }

    public function returns($messages,$code,$result)
    {
 
         ## Set Value
         $this->messages = $messages;
         $this->code = $code;
         $this->result = $result;
 
         $datareturn = array(
             "messages"=>$this->messages,
             "code"=>$this->code,
             "result"=>$this->result,
         );
      
        return $datareturn;
    }

}