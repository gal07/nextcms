<?php

/**
 *
 */
class Halaman_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function get_string()
  {
    $error = 'No Data Found';
    $query = $this->db->select('*')->from('string')
                         ->where('id',1)->get();

    if ($query == TRUE) {
      return $query->result_array();
    }else {
      return $error;
    }
  }

  public function get_product()
  {
    $error = 'No Data Found';
    $query = $this->db->select('*')->from('produk')
                              ->order_by('id','ASC')
                              ->get();

    if ($query->num_rows()>0 ) {
      return $query->result_array();
    }else {
      return $error;
    }
  }

  public function get_testimony()
  {
    $error = 'No Data Found';
    $query = $this->db->select('*')->from('testi')
                              ->order_by('id','ASC')
                              ->get();

    if ($query->num_rows()>0 ) {
      return $query->result_array();
    }else {
      return $error;
    }
  }

  public function get_list()
  {
    $error = 'No Data Found';
    $query = $this->db->select('*')->from('produk')
                              ->order_by('id','ASC')
                              ->get();

    if ($query->num_rows()>0 ) {
      return $query->result_array();
    }else {
      return $error;
    }
  }

  public function keep($nama,$alamat,$kelurahan,$kecamatan,$barang,$kako,$harga,$salt)
  {
    $ar = array('nama' => $nama ,'alamat' => $alamat,'kelurahan'=>$kelurahan,'kecamatan'=>$kecamatan,'barang'=>$barang,'kako'=>$kako,'harga'=>$harga,'salt'=>$salt);
    $query = $this->db->insert('history_beli',$ar);
  }

  public function get_yutub()
  {
    $query = $this->db->select('*')
                    ->from('yutub_testi')
                    ->order_by('id','ASC')->get();
        if ($query->num_rows() > 0) {
          return $query->result_array();
        }else {
          return FALSE;
        }
    }

    public function getHarga($id)
    {
      $query = $this->db->select('*')
                      ->from('produk')
                      ->where('id',$id)->get();
          if ($query->num_rows() > 0) {
            return $query->result_array();
          }else {
            return FALSE;
          }
    }

    public function Get_History($status)
    {
            $query = $this->db->select('*')
                            ->from('history_beli')
                            ->where('status',$status)
                            ->order_by('id','DESC')
                            ->get();
                if ($query->num_rows() > 0) {
                  return $query->result_array();
                }else {
                  return FALSE;
                }
    }

    public function Get_Total()
    {
      $query = $this->db->select_sum('harga')
                      ->from('history_beli')
                      ->where('status','FIX')
                      ->get();
          if ($query->num_rows() > 0) {
            return $query->result_array();
          }else {
            return FALSE;
          }
    }

    public function getTotalItem1()
    {
      $db = $this->db->query("SELECT count(history_beli.barang) as jumlah,produk.nama_barang as nama FROM `history_beli` JOIN produk on produk.nama_barang = history_beli.barang WHERE history_beli.barang = 'Essen ALB Butek 30ml' AND history_beli.status = 'FIX'");
      return $db->result_array();
    }
    public function getTotalItem2()
    {
      $db = $this->db->query("SELECT count(history_beli.barang) as jumlah,produk.nama_barang as nama FROM `history_beli` JOIN produk on produk.nama_barang = history_beli.barang WHERE history_beli.barang = 'Essen ALB Butek 10ml' AND history_beli.status = 'FIX'");
      return $db->result_array();
    }
    public function getTotalItem3()
    {
      $db = $this->db->query("SELECT count(history_beli.barang) as jumlah,produk.nama_barang as nama FROM `history_beli` JOIN produk on produk.nama_barang = history_beli.barang WHERE history_beli.barang = 'Cairan ALB 600ml' AND history_beli.status = 'FIX'");
      return $db->result_array();
    }
    public function getTotalItem4()
    {
      $db = $this->db->query("SELECT count(history_beli.barang) as jumlah,produk.nama_barang as nama FROM `history_beli` JOIN produk on produk.nama_barang = history_beli.barang WHERE history_beli.barang = 'Essen ALB Merah 30ml' AND history_beli.status = 'FIX'");
      return $db->result_array();
    }
    public function getTotalItem5()
    {
      $db = $this->db->query("SELECT count(history_beli.barang) as jumlah,produk.nama_barang as nama FROM `history_beli` JOIN produk on produk.nama_barang = history_beli.barang WHERE history_beli.barang = 'Paket ALB 1' AND history_beli.status = 'FIX'");
      return $db->result_array();
    }
    public function getTotalItem6()
    {
      $db = $this->db->query("SELECT count(history_beli.barang) as jumlah,produk.nama_barang as nama FROM `history_beli` JOIN produk on produk.nama_barang = history_beli.barang WHERE history_beli.barang = 'Paket ALB 2' AND history_beli.status = 'FIX'");
      return $db->result_array();
    }

    public function AddFix($id)
    {
      $ar = array('status' => 'FIX');
      $this->db->where('id',$id);
      $query = $this->db->update('history_beli',$ar);
      if ($query) {
        return TRUE;
      }else {
        return FALSE;
      }
    }

    public function DeleteHistory($id)
    {
      $this->db->where('id',$id);
      $this->db->delete('history_beli');
      return TRUE;
    }
    public function SaveTrack($arr)
    {
      $this->db->insert('track',$arr);
    }
    public function DataPembeli($arr)
    {
      $this->db->insert('data_pembeli',$arr);
    }

    public function GetNamaBarang($id)
    {
      $this->db->select('nama_barang')->where('id',$id);
      $exec = $this->db->get('produk');

      if ($exec->num_rows() > 0) {
        return $exec->result_array();
      } else {
        return FALSE;
      }

    }

    public function GetActivity($device)
    {
      $script = $this->db->select('device')
                          ->from('track')->where('device',$device)
                          ->limit(1)
                            ->get();

                  if ($script->num_rows() > 0) {
                    return $script->result_array();
                  }else {
                      return FALSE;
                   }
     }

     public function GetSalt_Pembeli($salt)
     {
       $where = array('status' =>'FIX' ,'salt'=>$salt);
       $script = $this->db->select('salt,nama')
                           ->from('history_beli')
                           ->where($where)
                             ->get();

                   if ($script->num_rows() > 0) {
                     return $script->result_array();
                   }else {
                       return FALSE;
                    }
     }
  }
