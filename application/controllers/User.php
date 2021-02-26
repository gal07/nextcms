<?php

/**
 *
 */
class User extends CI_Controller
{
  public function index($page = 'master_edit')
  {
      if ($this->session->userdata('usr')) {
        if (!file_exists(APPPATH.'views/user/'.$page.'.php')) {
          show_404();
        }else {
          $data['title'] = 'Edit Content';
          $this->load->view('templates/header_us',$data);
          $this->load->view('user/'.$page);
          $this->load->view('templates/footer_us');
        }
      }else {
        redirect(base_url());
      }

    }

    public function login()
    {
      $data['title'] = 'Log In';
      $this->load->view('user/log_in');
    }
    public function get_user()
    {
      $this->form_validation->set_rules('username','Username','required',array('required' => 'User nya di isi dong<br>'));
      $this->form_validation->set_rules('password','Password','required',array('required' => 'Password nya di isi dong<br>'));
      if ($this->form_validation->run() === FALSE) {
        $this->load->view('user/log_in');
      }else {
        $exec = $this->user_model->Log_Process($this->input->post('username'),$this->input->post('password'));
        if ($exec) {
          $ar = array('status' => 'login','usr'=>$this->input->post('username'));
          $this->user_model->Log($ar);
          $name = htmlspecialchars('ALB Essen');
          $email = htmlspecialchars('kulong.f@gmail.com');
          $message = htmlspecialchars('Admin Telah Login');
          $toEmail = 'galihkur29@gmail.com';
          $subject = 'Login Notifikasi'.$name;
          $body = '<h2>Notifikasi</h2>
          Admin Telah Login Pada'.date('Y-m-d H:i:s');
          //header
          $headers = "MIME-version: 1.0"."\r\n";
          $headers .= "Content-Type : text/html;charset=UTF-8"."\r\n";
          //additional Headers
          $headers .= "From :" .$name. "<".$email.">"."\r\n";
          mail($toEmail , $subject ,$body , $headers);
          $this->session->set_userdata($ar);
          redirect('user/index');
        }else {
          $this->session->set_flashdata('f_login','Gagal Login, Coba lagi');
          redirect('user/login');
        }
      }

    }

    public function logout()
    {
      if ($this->session->userdata('usr')) {
      $we = $this->user_model->Log_Out($this->session->userdata('usr'));
      if ($we) {
        $name = htmlspecialchars('ALB Essen');
        $email = htmlspecialchars('kulong.f@gmail.com');
        $message = htmlspecialchars('Admin Telah Logout');
        $toEmail = 'galihkur29@gmail.com';
        $subject = 'Logout Notifikasi'.$name;
        $body = '<h2>Notifikasi</h2>
        Admin Telah Logout Pada'.date('Y-m-d : H:i:s');
        //header
        $headers = "MIME-version: 1.0"."\r\n";
        $headers .= "Content-Type : text/html;charset=UTF-8"."\r\n";

        //additional Headers
        $headers .= "From :" .$name. "<".$email.">"."\r\n";
        mail($toEmail , $subject ,$body , $headers);
        $this->session->unset_userdata('usr');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('date');
        redirect(base_url());
      }
    }else {
      redirect(base_url());
    }
  }

  public function word()
  {
    if ($this->session->userdata('usr')) {
      $data['str'] = $this->halaman_model->get_string();
      $data['title'] = 'Edit Content';
      $this->load->view('templates/header_us',$data);
      $this->load->view('user/word_edit');
      $this->load->view('templates/footer_us');
    }else {
      redirect(base_url());
    }
  }

  public function produk_edit()
  {
    if ($this->session->userdata('usr')) {
      $data['prd'] = $this->halaman_model->get_product();
      $data['title'] = 'Edit Content';
      $this->load->view('templates/header_us',$data);
      $this->load->view('user/produk_edit');
      $this->load->view('templates/footer_us');
    }else {
      redirect(base_url());
    }
  }

  public function Add_produk()
  {
    if ($this->session->userdata('usr')) {
      $data['prd'] = $this->halaman_model->get_product();
      $data['title'] = 'Edit Content';
      $this->load->view('templates/header_us',$data);
      $this->load->view('user/AddProduk');
      $this->load->view('templates/footer_us');
    }else {
      redirect(base_url());
    }
  }


  public function edit_produk($id)
  {
    if ($this->session->userdata('usr')) {
      $data['prd'] = $this->blog_model->edit_product($id);
      $data['title'] = 'Edit Content';
      $this->load->view('templates/header_us',$data);
      $this->load->view('user/edit_produk');
      $this->load->view('templates/footer_us');
    }else {
      redirect(base_url());
    }
  }

  public function yutub_link()
  {
    if ($this->session->userdata('usr')) {
      $data['link'] = $this->halaman_model->get_yutub();
      $data['title'] = 'Edit Content';
      if (empty($data['link'])) {
        $data['data'] = 'No data';
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/edit_yutub',$data);
        $this->load->view('templates/footer_us');
      }else {
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/edit_yutub',$data);
        $this->load->view('templates/footer_us');
      }
    }else {
      redirect(base_url());
    }
  }

  public function create_blog()
  {
    if ($this->session->userdata('usr')) {
      $data['title'] = 'Edit Content';
      $this->load->view('templates/header_us',$data);
      $this->load->view('user/create_blog');
      $this->load->view('templates/footer_us');
    }else {
      redirect(base_url());
    }
  }

  public function list_blog()
  {
    if ($this->session->userdata('usr')) {
      $data['data'] = $this->blog_model->get_allBlog();
      if (empty($data['data'])) {
        $data['title'] = 'Edit Content';
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_Nodata');
        $this->load->view('templates/footer_us');
      }else{
      $data['title'] = 'Edit Content';
      $this->load->view('templates/header_us',$data);
      $this->load->view('user/list_blog',$data);
      $this->load->view('templates/footer_us');
    }
    }else {
      redirect(base_url());
    }
}

  public function edit_blog($id)
  {
    if ($this->session->userdata('usr')) {
      $data['data'] = $this->blog_model->just_edit($id);
      $data['title'] = 'Edit Content';
      if(empty($data['data'])){
        echo "error";
      }
      $this->load->view('templates/header_us',$data);
      $this->load->view('user/edit_blog',$data);
      $this->load->view('templates/footer_us');
    }else {
      redirect(base_url());
    }
  }

  public function delete_blog($id)
  {
    if ($this->session->userdata('usr')) {
      $thumb = $this->blog_model->get_File($id);
      foreach ($thumb as $key) {
        $a = './assets/picture_blog/'.$key['thumb'];
        unlink($a);
      }
      $del = $this->blog_model->del_blog($id);
      if ($del) {
        $this->session->set_flashdata('del_ok','Delete Blog Success');
        redirect('user/list_blog');
      }else {
        $this->session->set_flashdata('del_fail','Delete Blog Failed');
        redirect('user/list_blog');
      }
    }else {
      redirect(base_url());
    }
  }

  public function DeleteProduk($id)
  {
    $ActDel = $this->user_model->DeleteProduk($id);
    if ($ActDel) {
      $ar = array('DelSuc' => 'Delete Success');
      $this->session->set_flashdata($ar);
      redirect('user/produk_edit');
    }else {
      $ar = array('DelFail' => 'Delete Failed');
      $this->session->set_flashdata($ar);
      redirect('user/produk_edit');
    }
  }

  public function testi()
  {
    if ($this->session->userdata('usr')) {
      $data['title'] = 'Edit Content';
      $data['data'] = $this->blog_model->testi_blog();
      $this->load->view('templates/header_us',$data);
      $this->load->view('user/list_testiblog',$data);
      $this->load->view('templates/footer_us');
    }else {
      redirect(base_url());
    }
  }

  public function save_testi()
  {
    if ($this->session->userdata('usr')) {
      $this->blog_model->save_t();
      redirect('user/testi');
    }else {
      redirect(base_url());
    }
  }

  public function getHistory()
  {
    if ($this->session->userdata('usr')) {
      $stat ='NOT FIX';
      $data['history'] = $this->halaman_model->Get_History($stat);
      $data['title'] = 'Histori Pembelian';
      if (!empty($data['history'])) {
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/quarantine_list',$data);
        $this->load->view('templates/footer_us');
      }else {
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_Nodata',$data);
        $this->load->view('templates/footer_us');
      }
    }else {
      redirect(base_url());
    }
  }

  public function getFixCustomer()
  {
    if($this->session->userdata('usr')) {
      $status='FIX';
      $data['g1'] = $this->halaman_model->getTotalItem1();
      $data['g2'] = $this->halaman_model->getTotalItem2();
      $data['g3'] = $this->halaman_model->getTotalItem3();
      $data['g4'] = $this->halaman_model->getTotalItem4();
      $data['g5'] = $this->halaman_model->getTotalItem5();
      $data['g6'] = $this->halaman_model->getTotalItem6();
      $data['total'] = $this->halaman_model->Get_Total();
      $data['history'] = $this->halaman_model->Get_History($status);
      $data['title'] = 'Histori Pembelian';
      if (empty($data['history'])) {
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_Nodata');
        $this->load->view('templates/footer_us');
      } else {
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/histori',$data);
        $this->load->view('templates/footer_us');
      }
    }else {
      redirect(base_url());
    }
  }

  public function deleteHis($id)
  {
    if($this->session->userdata('usr')) {
    $del = $this->halaman_model->DeleteHistory($id);
    if ($del) {
      redirect('user/getHistory');
    }else {
      echo "gagal";
    }
  }else {
    redirect(base_url());
  }
  }


  public function save()
  {
    if ($this->session->userdata('usr')) {
      if ($this->input->get('q') == 'word') {
        $rep = $this->blog_model->save($this->input->get('q'));
        if ($rep) {
        redirect('user/edit');
        }else {
          echo 'gagal';
        }
      }
      elseif($this->input->get('q') =='product'){
        if (!empty($_FILES['userfile']['size'])) {
          //uploadn image
          $config['upload_path'] = './assets/picture_product';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size'] = '4048';
          $config['max_width'] = '5000';
          $config['max_height'] = '3000';
          date_default_timezone_set('Asia/Jakarta');
          $config['file_name']  = date('Ymdhis').'.jpg';
          $config['detect_mime'] = TRUE;
          $this->load->library('upload',$config);

          if (!$this->upload->do_upload()) {
              $errors = array('error' => $this->upload->display_errors());
              $this->load->view('content/test',$errors);
          }else {
              $path = $config['file_name'];
              $this->blog_model->save($path);
              $this->session->set_flashdata('upload_succ','Upload Success');
              redirect('user/edit');
          }
        }else {
          // Gambar tidak di rubah
          $path = '';
          $this->blog_model->save($path);
          $this->session->set_flashdata('upload_succ','Upload Success');
          redirect('user/edit');
        }

      }
      elseif($this->input->get('q') =='addProduk') {
        $config['upload_path'] = './assets/picture_product';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4048';
        $config['max_width'] = '5000';
        $config['max_height'] = '3000';
        date_default_timezone_set('Asia/Jakarta');
        $config['file_name']  = date('Ymdhis').'.jpg';
        $config['detect_mime'] = TRUE;
        $this->load->library('upload',$config);

        if (!$this->upload->do_upload()) {
            $errors = array('error' => $this->upload->display_errors());
            $this->load->view('content/test',$errors);
        }else {
            $path = $config['file_name'];
            $this->blog_model->save($path);
            $this->session->set_flashdata('upload_succ','Upload Success');
            redirect('user/produk_edit');
        }
      }
      elseif($this->input->get('q') =='link'){
        $rr = $this->blog_model->save($this->input->get('q'));
          if ($rr) {
            redirect('user/yutub_link');
          }else {
            echo "gagal";
          }
        }
        elseif ($this->input->get('q') =='create') {
          //uploadn image
          $config['upload_path'] = './assets/picture_blog';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size'] = '2048';
          $config['max_width'] = '2000';
          $config['max_height'] = '2000';
          date_default_timezone_set('Asia/Jakarta');
          $config['file_name']  = date('Ymdhis').'.jpg';
          $config['detect_mime'] = TRUE;
          $this->load->library('upload',$config);

          if (!$this->upload->do_upload()) {
              $errors = array('error' => $this->upload->display_errors());
              $this->load->view('content/test',$errors);
          }else {
              $path = $config['file_name'];
              $pa = $this->blog_model->save_blog($this->input->post('judul'),$this->input->post('description'),$this->input->post('body'),$path,$this->input->post('keywords'));
              if ($pa) {
                $this->session->set_flashdata('upload_succ','Upload Success');
                redirect('user/edit');
              }else {
                echo "gagal";
              }
        }
      }
      elseif($this->input->get('q') =='edit') {
        if (!empty($_FILES['foto']['size'])) {
          // echo "gambar diubah";
          //uploadn image
          $config['upload_path'] = './assets/picture_blog';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size'] = '4048';
          $config['max_width'] = '3000';
          $config['max_height'] = '3000';
          date_default_timezone_set('Asia/Jakarta');
          $config['file_name']  = date('Ymdhis').'.jpg';
          $config['detect_mime'] = TRUE;
          $this->load->library('upload',$config);

          if (!$this->upload->do_upload('foto')) {
              $errors = array('error' => $this->upload->display_errors());
              $this->load->view('content/test',$errors);
          }else {
              $path1 = $config['file_name'];
              $pa = $this->blog_model->edit_blog($this->input->post('judul'),$this->input->post('description'),$this->input->post('body'),$path1,$this->input->get('id'),$this->input->post('keywords'));
              if ($pa) {
                $this->session->set_flashdata('upload_succ','Upload Success');
                redirect('user/edit');
              }else {
                echo "gagal";
              }
        }
      }else{
        // echo "gambar ga diubah";
          $path ='';
          $pa = $this->blog_model->edit_blog($this->input->post('judul'),$this->input->post('description'),$this->input->post('body'),$path,$this->input->get('id'),$this->input->post('keywords'));
          if ($pa) {
          $this->session->set_flashdata('upload_succ','Upload Success');
          redirect('user/edit');
          }else {
             echo "gagal";
           }
        }
    }
    elseif($this->input->get('q') =='fix') {
       $fix = $this->halaman_model->AddFix($this->input->post('id'));
        if ($fix) {
          redirect('user/getHistory');
        }else {
        echo "gagal";
      }
    }
    }else {
      redirect(base_url());
    }
  }

  public function LogActivity()
  {
    if ($this->session->userdata('usr')) {
      $data['title'] = 'Log Activity';
      $data['data'] = $this->user_model->GetActivity();
      if (empty($data['data'])) {
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_Nodata',$data);
        $this->load->view('templates/footer_us');
      }else {
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/LogActivity',$data);
        $this->load->view('templates/footer_us');
      }
    }else {
      redirect(base_url());
    }
  }

  public function Datadevice()
  {
    if ($this->session->userdata('usr')) {
      $data['title'] = 'Data Device Pembeli';
      $data['data'] = $this->user_model->GetData_Pembeli();
      if (empty($data['data'])) {
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_Nodata',$data);
        $this->load->view('templates/footer_us');
      }else {
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/Data_pembeli',$data);
        $this->load->view('templates/footer_us');
      }
    }else {
      redirect(base_url());
    }
  }

  public function NgelongokKotak()
  {
    if ($this->session->userdata('usr')) {
      $data['title'] = 'Kotak Saran';
      $data['data'] = $this->user_model->Get_Nyerocos();
      if (empty($data['data'])) {
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_Nodata',$data);
        $this->load->view('templates/footer_us');
      }else {
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/KotakSuara',$data);
        $this->load->view('templates/footer_us');
      }
    }else {
      redirect(base_url());
    }
  }

  public function deleteLogAct()
  {
    $exec = $this->user_model->deleteLog();
    if ($exec) {
      redirect('user/LogActivity');
    }else {
      redirect('user/LogActivity');
    }
  }

  public function Search()
  {
    if ($this->input->get('key') == md5('1')) {
      $value = $this->input->post('kunci');
      $param1 = 'description';
      $param2 = 'title';
      $table = 'alb_blog';
      $for = 'SearchBlog';
      $data['result']= $this->user_model->Search($param1,$param2,$table,$value,$for);
      if (!empty($data['result'])){
        $data['title'] = 'List Blog';
        $data['MyVal'] = '1';
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/list_blog');
        $this->load->view('templates/footer_us');
      }else {
        $data['link'] = 'user/list_blog';
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_NodataSearch');
        $this->load->view('templates/footer_us');
      }
    }elseif($this->input->get('key') == md5('2')) {
      $value = $this->input->post('kunci');
      $param2 = 'waktu';
      $param1 = 'nama';
      $table = 'history_beli';
      $for = 'SearchTotal';
      $data['history']= $this->user_model->Search($param1,$param2,$table,$value,$for);
      if (!empty($data['history'])){
        $data['g1'] = $this->halaman_model->getTotalItem1();
        $data['g2'] = $this->halaman_model->getTotalItem2();
        $data['g3'] = $this->halaman_model->getTotalItem3();
        $data['g4'] = $this->halaman_model->getTotalItem4();
        $data['g5'] = $this->halaman_model->getTotalItem5();
        $data['g6'] = $this->halaman_model->getTotalItem6();
        $data['total'] = $this->user_model->getTotalSeacrh($param1,$param2,$table,$this->input->post('kunci'));
        $data['title'] = 'Histori Pembelian';
        $data['MyVal'] = '2';
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/histori',$data);
        $this->load->view('templates/footer_us');
      }else {
        $data['link'] = 'user/getFixCustomer';
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_NodataSearch');
        $this->load->view('templates/footer_us');
      }
    }elseif ($this->input->get('key') == md5('3')) {
      $value = $this->input->post('kunci');
      $param1 = 'time';
      $param2 = 'device';
      $table = 'track';
      $for = 'SearchLog';
      $data['result']= $this->user_model->Search($param1,$param2,$table,$value,$for);
      if (!empty($data['result'])){
        $data['title'] = 'List Log Activity';
        $data['MyVal'] = '3';
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/LogActivity');
        $this->load->view('templates/footer_us');
      }else {
        $data['link'] = 'user/LogActivity';
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_NodataSearch');
        $this->load->view('templates/footer_us');
      }
    }elseif ($this->input->get('key') == md5('4')) {
      $value = $this->input->post('kunci');
      $param1 = 'salt';
      $param2 = 'time';
      $table = 'data_pembeli';
      $for = 'SearchDataOrder';
      $data['result']= $this->user_model->Search($param1,$param2,$table,$value,$for);
      if (!empty($data['result'])){
        $data['title'] = 'List Data Pembeli';
        $data['MyVal'] = '4';
        $this->load->view('templates/header_us',$data);
        $this->load->view('user/Data_pembeli');
        $this->load->view('templates/footer_us');
      }else {
        $data['title'] = 'List Data Pembeli';
        $data['link'] = 'user/Datadevice';
        $this->load->view('templates/header_us',$data);
        $this->load->view('errors/error_NodataSearch');
        $this->load->view('templates/footer_us');
      }
    }
    else {
      echo "der";
    }
  }

  public function BankGambar($page = 'bank_gambar')
  {
      if ($this->session->userdata('usr')) {
        if (!file_exists(APPPATH.'views/user/'.$page.'.php')) {
          show_404();
        }else {
          $data['data'] = $this->user_model->GetBankGambar();
          if (!empty($data['data'])) {
            $data['title'] = 'Bank Gambar';
            $this->load->view('templates/header_us',$data);
            $this->load->view('user/'.$page);
            $this->load->view('templates/footer_us');
          } else {
            $data['title'] = 'Bank Gambar';
            $this->load->view('templates/header_us',$data);
            $this->load->view('errors/error_Nodata2');
            $this->load->view('templates/footer_us');
          }
        }
      }else {
        redirect(base_url());
      }
    }

    public function UploadBankGambar($page = 'uploadPicture')
    {
        if ($this->session->userdata('usr')) {
          if (!file_exists(APPPATH.'views/user/'.$page.'.php')) {
            show_404();
          }else {
            $data['title'] = 'Upload Picture';
            $this->load->view('templates/header_us',$data);
            $this->load->view('user/'.$page);
            $this->load->view('templates/footer_us');
          }
        }else {
          redirect(base_url());
        }
      }

      public function uploadPicture()
      {
        // echo "gambar diubah";
        //uploadn image
        $config['upload_path'] = './assets/picture_assets/bank_gambar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5048';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        date_default_timezone_set('Asia/Jakarta');
        $config['file_name']  = $this->input->post('nama').'.jpg';
        $config['detect_mime'] = TRUE;
        $this->load->library('upload',$config);

        if (!$this->upload->do_upload('userfile')) {
            $errors = array('error' => $this->upload->display_errors());
            $this->load->view('content/test',$errors);
        }else {
            $nama = $config['file_name'];
            $pa = $this->user_model->UploadGambar($nama,$_FILES['userfile']['size']);
            if ($pa) {
              $this->session->set_flashdata('upload_succ','Upload Success');
              redirect('user/BankGambar');
            }else {
              echo "gagal";
            }
      }
    }

    public function DeleteBankGambar($id)
    {
      $data = $this->user_model->GetGambarDetail($id);
      foreach ($data as $key) {
        $path = './assets/picture_assets/bank_gambar/'.$key['nama'];
      }
      unlink($path);
      $Delet = $this->user_model->HapusGambar($id);
      if ($Delet){
        redirect('user/BankGambar');
      } else {
        redirect('user/BankGambar');
      }

    }

}
