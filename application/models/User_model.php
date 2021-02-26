<?php

 /**
  *
  */
 class User_model extends CI_Model
 {

   function __construct()
   {
     $this->load->database();
   }

   public function Log_Process($usr,$pass)
   {
     //get user false or not
     $usrMatch = $this->db->select('*')->from('user')->where('username',$usr)->get();
     $passFound = $this->db->select('password')->from('user')->where('username',$usr)->get();
     $con = $passFound->result_array();
     $hash = $con[0]['password'];
     if ($usrMatch->num_rows() == 1 && password_verify($pass,$hash)) {
       return TRUE;
     }elseif($usrMatch->num_rows() == 1 && !password_verify($pass,$hash)) {
       return FALSE;
     }
   }
   public function Log($data)
   {
     $ar = array('last_login' => date('Y-m-d'));
     $this->db->where('username',$this->input->post('username'));
     $this->db->update('user',$ar);
   }
   public function Log_Out($usr)
   {
     $ar = array('last_logout' => date('Y-m-d H:i'));
     $this->db->where('username',$usr);
     $this->db->update('user',$ar);
     return TRUE;
   }

   public function GetActivity()
   {
     $script = $this->db->select('*')
                         ->from('track')
                           ->get();

                 if ($script->num_rows() > 0) {
                   return $script->result_array();
                 }else {
                     return FALSE;
                  }
    }

    public function deleteLog()
    {
      $del = $this->db->query("DELETE FROM track");
      if ($del == TRUE) {
        return TRUE;
      }else {
        return FALSE;
      }
    }

    public function GetData_Pembeli()
    {
      $script = $this->db->select('*')
                          ->from('data_pembeli')
                            ->get();

                  if ($script->num_rows() > 0) {
                    return $script->result_array();
                  }else {
                      return FALSE;
                   }
    }

    public function Get_Nyerocos($value='')
    {
      $script = $this->db->select('*')
                          ->from('kotak_suara')
                            ->get();

                  if ($script->num_rows() > 0) {
                    return $script->result_array();
                  }else {
                      return FALSE;
                   }
    }

    public function GetNameImage($id)
    {
      $search = $this->db->select('photo')->where('id',$id)
              ->get('produk');
        if ($search->num_rows() > 0) {
          return $search->result_array();
        }else {
          return FALSE;
        }
    }

    public function DeleteProduk($id)
    {
      $ab = $this->GetNameImage($id);
      // echo $ab[0]['photo'];
      $path = './assets/picture_product/'.$ab[0]['photo'];
      unlink($path);
      $this->db->where('id',$id);
      $ActDel = $this->db->delete('produk');
      if ($ActDel) {
        return TRUE;
      }else {
        return FALSE;
      }
    }

    public function Search($param1,$param2,$table,$value,$for)
    {
      if ($for == 'SearchBlog') {
        $this->db->like($param1,$value);$this->db->or_like($param2,$value);
        $search = $this->db->select('*')->get($table);
      } elseif($for == 'SearchTotal') {
        $this->db->like($param1,$value);$this->db->or_like($param2,$value);
        $search = $this->db->select('*')->where('status','FIX')
        ->get($table);
      }else{
        $this->db->like($param1,$value);$this->db->or_like($param2,$value);
        $search = $this->db->select('*')->get($table);
      }
      if ($search->num_rows() > 0) {
        return $search->result_array();
      }else {
        return FALSE;
      }
    }

    public function getTotalSeacrh($param1,$param2,$table,$value)
    {
      $this->db->like($param1,$value);$this->db->or_like($param2,$value);
      $search = $this->db->select_sum('harga')->where('status','FIX')
      ->get($table);
      if ($search->num_rows() > 0) {
        return $search->result_array();
      }else {
        return FALSE;
      }
    }

    public function UploadGambar($nama,$ukuran)
    {
      $data = array('nama' =>$nama , 'size'=>$ukuran);
      $exec = $this->db->insert('bank_gambar',$data);
      if ($exec) {
        return TRUE;
      } else {
        return FALSE;
      }
    }

    public function HapusGambar($id)
    {
      $data = array('id'=>$id);
      $exec = $this->db->delete('bank_gambar',$data);
      if ($exec) {
        return TRUE;
      } else {
        return FALSE;
      }
    }

    public function GetBankGambar()
    {
      $script = $this->db->select('*')
                          ->from('bank_gambar')
                            ->get();

              if ($script->num_rows() > 0) {
                return $script->result_array();
             }else {
                return FALSE;
              }
    }
    public function GetGambarDetail($id)
    {
      $script = $this->db->select('*')
                          ->where('id',$id)
                          ->from('bank_gambar')
                            ->get();

              if ($script->num_rows() > 0) {
                return $script->result_array();
             }else {
                return FALSE;
              }
    }

 }
