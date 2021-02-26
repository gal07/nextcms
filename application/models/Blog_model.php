<?php

class Blog_model extends CI_Model
{

    function __construct(){
        $this->load->database();
    }



########### Save #############

public function save_blog($judul,$des,$body,$path,$keywords)
{

  $jam=date("H:i");
  $tgl=$this->tgl_indo(date("Y m d"));
    $arr = array('text' => $body,
                 'thumb'=> $path,
                 'title'=> $judul,
                 'description'=>$des,
                 'create_at'=> $tgl,
                 'time' => $jam,
                 'slug' => url_title($judul),
                 'keywords'=>$keywords);
    $scr = $this->db->insert('alb_blog',$arr);

    if ($scr === TRUE) {
        return TRUE;
    }else{
        return FALSE;
    }
}

public function save($val)
{
  if ($val == 'word') {
    $arr = array('header' => $this->input->post('header'),'body'=>$this->input->post('body'));
    $this->db->where('id',1);
    $qq = $this->db->update('string',$arr);
    if ($qq) {
      return TRUE;
    }else {
      return FALSE;
    }
  }elseif($this->input->get('q') == 'product'){
    if ($val != '') {
      $getOld = $this->user_model->GetNameImage($this->input->post('id'));
      foreach ($getOld as $value) {
        $a = './assets/picture_product/'.$value['photo'];
        unlink($a);
      }
      $arr = array('nama_barang' =>$this->input->post('nama'),'photo'=>$val,'description'=>$this->input->post('description'),'harga'=>$this->input->post('harga'));
      $this->db->where('id',$this->input->post('id'));
      $qq = $this->db->update('produk',$arr);
      if ($qq) {
        return TRUE;
      }else {
        return FALSE;
      }
    }else{
      $arr = array('nama_barang' =>$this->input->post('nama'),'description'=>$this->input->post('description'),'harga'=>$this->input->post('harga'));
      $this->db->where('id',$this->input->post('id'));
      $qq = $this->db->update('produk',$arr);
      if ($qq) {
        return TRUE;
      }else {
        return FALSE;
      }
    }
  }elseif ($this->input->get('q') == 'addProduk') {
    $arr = array('nama_barang' =>$this->input->post('nama') ,'photo'=>$val,'description'=>$this->input->post('description'),'harga'=>$this->input->post('harga'));
    $Insert = $this->db->insert('produk',$arr);
    if ($Insert) {
      return TRUE;
    }else {
      return FALSE;
    }
  }elseif ($this->input->get('q') == 'link') {
    $arr = array('link' =>$this->input->post('link'));
    $this->db->where('id',$this->input->post('id'));
    $qq = $this->db->update('yutub_testi',$arr);
    if ($qq) {
      return TRUE;
    }else {
      return FALSE;
    }
  }
}

public function save_t()
{
  $arr = array('link' => $this->input->post('link'));
  $this->db->where('id',$this->input->post('id'));
  $qq = $this->db->update('testi_blog',$arr);
  if ($qq) {
    return TRUE;
  }else {
    return FALSE;
  }
}

########### Save #############

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#

########## Edit #############

public function edit_blog($title,$desc,$teks,$path,$id,$keywords)
{
    if ($path == '') {
      $arr = array('text' => $teks,
                   'title'=> $title,
                   'keywords'=> $keywords,
                   'description'=>$desc,
                   'slug' => url_title($title));
                   $this->db->where('id',$id);
      $scr = $this->db->update('alb_blog',$arr);

      if ($scr === TRUE) {
          return TRUE;
      }else{
          return FALSE;
      }
    }else{
      $GetOldThumb = $this->Get_photo($id);
      foreach ($GetOldThumb as $key) {
        $a = './assets/picture_blog/'.$key['thumb'];
        unlink($a);
      }
      $arr = array('text' => $teks,
                   'title'=> $title,
                   'keywords'=> $keywords,
                   'description'=>$desc,
                   'thumb' => $path,
                   'slug' => url_title($title));
                   $this->db->where('id',$id);
      $scr = $this->db->update('alb_blog',$arr);

      if ($scr === TRUE) {
          return TRUE;
      }else{
          return FALSE;
      }
    }

}


########## Edit #############

#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#

######### Grab Data ########



public function get_data($limit = false, $offset = FALSE)
{
  if ($limit) {
    $this->db->limit($limit, $offset);
  }
   $query =  $this->db->select('*')
            ->from('alb_blog')->order_by('id','DESC')
            ->get();

    if ($query->num_rows() > 0) {
        return $query->result_array();
    }else{
        return FALSE;
    }
}


public function library()
{
  date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
  $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
  $hari = date("w");
  $hari_ini = $seminggu[$hari];

  $tgl_sekarang = date("Ymd");
  $tgl_skrg     = date("d");
  $bln_sekarang = date("m");
  $thn_sekarang = date("Y");
  $jam_sekarang = date("H:i:s");

  $nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei",
                      "Juni", "Juli", "Agustus", "September",
                      "Oktober", "November", "Desember");

      echo "$hari";
}

public function tgl_indo($tgl){
    $tanggal = substr($tgl,8,2);
    $bulan = $this->getBulan(substr($tgl,5,2));
    $tahun = substr($tgl,0,4);
    return $tanggal.' '.$bulan.' '.$tahun;
}

public function getBulan($bln){
      switch ($bln){
        case 1:
          return "Januari";
          break;
        case 2:
          return "Februari";
          break;
        case 3:
          return "Maret";
          break;
        case 4:
          return "April";
          break;
        case 5:
          return "Mei";
          break;
        case 6:
          return "Juni";
          break;
        case 7:
          return "Juli";
          break;
        case 8:
          return "Agustus";
          break;
        case 9:
          return "September";
          break;
        case 10:
          return "Oktober";
          break;
        case 11:
          return "November";
          break;
        case 12:
          return "Desember";
          break;
      }
    }

    public function get_File($id)
    {
      $get = $this->db->select('thumb')
                        ->where('id',$id)
                        ->get('alb_blog');
      if ($get->num_rows() >0) {
        return $get->result_array();
      }else {
        return FALSE;
      }
    }



public function get_blog($title)
{
$this->db->select('*')
->from('alb_blog')
->where('slug',$title);
$query = $this->db->get();

    if($query->num_rows()>0){
        return $query->result_array();
    }else {
        return FALSE;
    }
}

public function get_new()
{
  $scr = $this->db->order_by('id','DESC')
                ->limit(4)->get('alb_blog');
      if ($scr->num_rows()<= 4) {
        return $scr->result_array();
      }else {
        return FALSE;
      }
}

public function testi_blog()
{
  $query =  $this->db->select('*')
           ->from('testi_blog')->order_by('id','DESC')
           ->get();

   if ($query->num_rows() > 0) {
       return $query->result_array();
   }else{
       return FALSE;
   }
}

public function del_blog($id)
{
  $this->db->where('id',$id);
  $exec = $this->db->delete('alb_blog');
  if ($exec === TRUE) {
    return TRUE;
  }else {
    return FALSE;
  }
}

public function get_edit($id)
{
  $this->db->select('*')
  ->from('savana_blog')
  ->where('id',$id);
  $query = $this->db->get();

      if($query->num_rows()>0){
          return $query->result_array();
      }else {
          return FALSE;
      }
}

public function Get_photo($id)
{
  $exec = $this->db->select('thumb')
            ->where('id',$id)->get('alb_blog');

  if ($exec->num_rows() > 0) {
    return $exec->result_array();
  }else {
    return FALSE;
  }
}





public function edit_product($id)
{
  $error = 'No Data Found';
  $query = $this->db->select('*')->from('produk')
                              ->where('id',$id)
                            ->get();

  if ($query->num_rows()>0 ) {
    return $query->result_array();
  }else {
    return $error;
  }
}

public function get_allBlog()
{
  $this->db->select('*')
  ->from('alb_blog')
  ->order_by('id','ASC');
  $query = $this->db->get();
      if($query->num_rows()>0){
          return $query->result_array();
      }else {
          return FALSE;
      }
}

public function just_edit($id)
{
  $this->db->select('*')
  ->from('alb_blog')
  ->where('id',$id);
  $query = $this->db->get();
      if($query->num_rows()>0){
          return $query->result_array();
      }else {
          return FALSE;
      }
}



public function Get_count($id)
{
    $query = $this->db->query('SELECT readers FROM `alb_blog` where id = '.$id.' ');
  if ($query->num_rows() > 0) {
    return $query->result_array();
  }else {
    return FALSE;
  }
}

public function SetHitung($id)
{
    $ab = $this->Get_count($id);
    $ret = $ab[0]['readers'] + 1;
    $ar = array('readers' => $ret);
    $this->db->where('id',$id);
    $re = $this->db->update('alb_blog',$ar);
}

public function KeepKotak($email,$body,$host,$device)
{
  $ar = array('email' => $email,'saran'=>$body,'host'=>$host,'device'=>$device);
  $exec = $this->db->insert('kotak_suara',$ar);
  if ($exec == TRUE) {
    return TRUE;
  }else {
    return FALSE;
  }
}


######### Grab Data ########

}
