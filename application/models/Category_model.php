<?php

class Category_model extends CI_Model
{
    public $results = NULL;
    public $messages = NULL;
    public $code = NULL;

    ## Code for return

    function __construct(){
        $this->load->database();
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

    public function get($id = NULL,$withstatus = NULL)
    {
        $get = NULL;
        if ($id == NULL) {
            
            if ($withstatus != NULL) {
                $get = $this->db->select('*')->from('t_category')
                ->where('status',1)
                ->get();
            }else{
                $get = $this->db->select('*')->from('t_category')
                ->get();
            }

 
        } else {
 
            $get = $this->db->select('*')->from('t_category')
                            ->where("id",$id)
                            ->get();
 
        }
 
        if ($get->num_rows() > 0) {
             $result = $this->returns('Data sukses di ambil',SUCCESS,$get->result());
             return $result;
        }else{
             $result = $this->returns('User tidak ditemukan',ERROR,array());
             return $result;
        }
        
    }

    public function create($data)
    {    
         $exist = $this->exist($data['category']);
         if ($exist) {
             # IF EXIST
             $result = $this->returns('Nama Kategori sudah digunakan',ERROR,array());
             return $result;
         } else {
             # IF NOT EXIST
             $exec = $this->db->insert('t_category',$data);
             if ($exec) {
                 $result = $this->returns('Kategori telah dibuat',SUCCESS,array());
                 return $result;
             } else {
                 $result = $this->returns('Error: Sesuatu telah terjadi , Coba lagi',ERROR,array());
                 return $result;
             }
         }
    }

    public function update($data,$id)
    {
        $exist = $this->exist($data['category'],$id);
        if ($exist) {
            # IF EXIST
            $result = $this->returns('Nama Kategori sudah digunakan',ERROR,array());
            return $result;
        }else {
             #update category
            $this->db->where('id',$id);
            $this->db->update('t_category',$data);
            $result = $this->returns('Kategori telah diupdate',SUCCESS,array());
            return $result;       
        }

        
     }

     public function delete($id)
     {
         $this->db->where('id', $id);
         $this->db->delete('t_category');
         $result = $this->returns('Kategori telah dihapus',SUCCESS,array());
         return $result;
     }

     public function status($id)
     {
         $check = $this->db->select('status')->from('t_category')
                             ->where('id',$id)
                             ->get();
 
             $result = NULL;
             if ($check->num_rows() > 0) {
                 $data = $check->result();
 
                     if ($data[0]->status == 1) {
                         
                         $this->db->where('id',$id);
                         $this->db->update('t_category',array('status'=>0));
                         $result = $this->returns('Kategori di nonaktifkan',SUCCESS,array('status'=>0));
 
                     } else {
 
                         $this->db->where('id',$id);
                         $this->db->update('t_category',array('status'=>1));
                         $result = $this->returns('Kategori di aktifkan',SUCCESS,array('status'=>1));
 
                     }
 
                     return $result;
 
             }else{
                 $result = $this->returns('Gagal Ubah Status Kategori',ERROR,array());
                 return $result;
             }
 
     }

    public function exist($category,$id = NULL)
    {
        $get = NULL;
        if ($id == NULL) {
            $get = $this->db->select('*')->from('t_category')
            ->where('category',$category)
            ->get();
        }else{
            $get = $this->db->select('*')->from('t_category')
            ->where('id !=',$id)
            ->where('category',$category)
            ->get();
        }

         
         
         if ($get->num_rows() > 0 ) {
            return $get->result();
         } else {
            return FALSE;
         }
         
    }

}