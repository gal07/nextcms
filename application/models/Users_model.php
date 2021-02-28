<?php

 class Users_model extends CI_Model
 {

    public $results = NULL;
    public $messages = NULL;
    public $code = NULL;

    ## Code for return



   function __construct()
   {
     $this->load->database();
   }

   public function test()
   {
       $result = $this->returns('HALO',SUCCESS,array("data"=>"asdasd"));
       return $result;
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
        $exist = $this->exist($data['email'],$data['username']);
        if ($exist) {
            # IF EXIST
            $result = $this->returns('Email atau username sudah digunakan',ERROR,array());
            return $result;
        } else {
            # IF NOT EXIST
            $exec = $this->db->insert('t_users',$data);
            if ($exec) {
                $result = $this->returns('Akun telah dibuat',SUCCESS,array());
                return $result;
            } else {
                $result = $this->returns('Error: Sesuatu telah terjadi , Coba lagi',ERROR,array());
                return $result;
            }
        }
   }

   public function update($data,$id)
   {
        #update user
        $this->db->where('id',$id);
        $this->db->update('t_users',$data);
        $result = $this->returns('Akun telah diupdate',SUCCESS,array());
        return $result;       
    }

   public function exist($email,$username)
   {
        $get = $this->db->select('*')->from('t_users')
                    ->where('email',$email)
                    ->or_where('username', $username)
                    ->get();
        
        if ($get->num_rows() > 0 ) {
           return $get->result();
        } else {
           return FALSE;
        }
        

   }

   public function getuser($id = NULL)
   {
       $get = NULL;
       if ($id == NULL) {

           $get = $this->db->select('*')->from('t_users')
                           ->where('role',2)
                           ->get();

       } else {

           $get = $this->db->select('*')->from('t_users')
                           ->where(array("role"=>2,"id"=>$id))
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
   
}