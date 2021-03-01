<?php

class Posts_model extends CI_Model
{

    function __construct(){
        $this->load->database();
    }

    public function get($id = NULL)
    {
        $get = NULL;
        if ($id == NULL) {
 
            $get = $this->db->select('*')->from('t_posts')
                            ->get();
 
        } else {
 
            $get = $this->db->select('*')->from('t_posts')
                            ->where("id",$id)
                            ->get();
 
        }
 
        if ($get->num_rows() > 0) {
             $result = $this->returns('Data sukses di ambil',SUCCESS,$get->result());
             return $result;
        }else{
             $result = $this->returns('Data tidak ditemukan',ERROR,array());
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

    public function create($data)
    {    
            $exist = $this->exist($data['title']);
            if ($exist) {
                # IF EXIST
                $result = $this->returns('Title sudah digunakan',ERROR,array());
                return $result;
            } else {
                # IF NOT EXIST
                $exec = $this->db->insert('t_posts',$data);
                if ($exec) {
                    $last_id = $this->db->insert_id();
                    $result = $this->returns('Postingan telah dibuat',SUCCESS,array('last_id'=>$last_id));
                    return $result;
                } else {
                    $result = $this->returns('Error: Sesuatu telah terjadi , Coba lagi',ERROR,array());
                    return $result;
                }
            }
    }


    public function seocreate($data)
    {    
        $exec = $this->db->insert('t_seo',$data);
        if ($exec) {
            $result = $this->returns('Seo telah dibuat',SUCCESS,array());
            return $result;
        } else {
            $result = $this->returns('Error: Sesuatu telah terjadi , Coba lagi',ERROR,array());
            return $result;
        }
    }


   public function exist($title,$id = NULL)
   {
       $get = NULL;
       if ($id == NULL) {
           $get = $this->db->select('*')->from('t_posts')
           ->where('title',$title)
           ->get();
       }else{
           $get = $this->db->select('*')->from('t_posts')
           ->where('id !=',$id)
           ->where('title',$title)
           ->get();
       }

        
        
        if ($get->num_rows() > 0 ) {
           return $get->result();
        } else {
           return FALSE;
        }
        
   }
 


}
