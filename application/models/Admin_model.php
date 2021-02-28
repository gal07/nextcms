<?php

class Admin_model extends CI_Model
{

    function __construct(){
        $this->load->database();
    }

    public function loginprocess($usr,$pass)
    {
      //get user false or not
      $usrMatch = $this->db->select('*')->from('t_users')->where('username',$usr)->get();
      $passFound = $this->db->select('password')->from('t_users')->where('username',$usr)->get();
      $con = $passFound->result_array();
      $hash = NULL;
      if ($con) {
        $hash = $con[0]['password'];
      }

      if ($usrMatch->num_rows() == 1 && password_verify($pass,$hash)) {
        return $usrMatch->result();
      }elseif($usrMatch->num_rows() == 1 && !password_verify($pass,$hash)) {
        return FALSE;
      }
    }


}