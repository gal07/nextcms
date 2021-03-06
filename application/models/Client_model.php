<?php

class Client_model extends CI_Model
{

    function __construct(){
        $this->load->database();
    }

    public function get($target)
    {

        $get = $this->db->select('post.*,image.path,image.imagename,category.category as namakategori')->from('t_posts as post')
                        ->join('t_category category', 'category.id = post.category')
                        ->join('t_image image', 'image.postid = post.id')
                        ->where('post.'.$target,1)                           
                        ->get();
        
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