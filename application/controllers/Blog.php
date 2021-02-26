<?php

/**
 *
 */
class Blog extends CI_Controller
{


  public function index($page = 'index')
  {
    if (!file_exists(APPPATH.'views/blog/'.$page.'.php')) {
      show_404();
    }
    $ip =  $_SERVER['REMOTE_ADDR'];
    $host=gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $url = $_SERVER['REQUEST_URI'];
    $server_n = $_SERVER['SERVER_NAME'];
    $port = $_SERVER['REMOTE_PORT'];
    $ser_port = $_SERVER['SERVER_PORT'];
    $device = $_SERVER['HTTP_USER_AGENT'];
    $server_soft  = $_SERVER['SERVER_SOFTWARE'];
    $track = array('ip' => $ip, 'host'=>$host,'path_exec'=>$url,'server_name'=>$server_n,'port'=>$port,'server_port'=>$ser_port,'device'=>$device,'server_software'=>$server_soft);
    $this->halaman_model->SaveTrack($track);
    $arr = array('url' => base_url(),'type' => 'website' , 'title' => 'ALB Essen Tips & Trik',
    'description'=>'tips tips buat yang hobby mancing khususnya Gala Tama Lele nih ane mau nawarin essen kreasi ane sendiri ane mau berbagi kebahagiaan aja hehehe essen sudah teruji di berbagai daerah seperti sidoarjo,palembang,pasuruan,palembang,surabaya dan masih banyak lagi heheh testimoninya bisa dilihat di kita di @perangsanglele',
    'image' => base_url().'assets/logo/logo.jpg');
    $data['titles'] = $arr;
    //$data['about'] = $this->halaman_model->get_about();
    $data['title'] = 'ALB Tips & Trik';
    $data['data'] = $this->blog_model->get_data();
    $error['error'] = 'Blog Or Article Not Available';
    $data['error'] = '';
    if (empty($data['data'])) {
      $this->load->view('templates/header',$data);
      $this->load->view('errors/error_Nodata');
      $this->load->view('templates/footer');
    }else {
      $this->load->view('templates/header',$data);
      $this->load->view('blog/'.$page,$error);
      $this->load->view('templates/footer');
    }
  }


  public function view($salt,$title)
  {
    if (empty($salt) || empty($title) || strlen($salt) < 48) {
      show_404();
    }else {
      $id = substr($salt, -1);
      $ip =  $_SERVER['REMOTE_ADDR'];
      $host=gethostbyaddr($_SERVER['REMOTE_ADDR']);
      $url = $_SERVER['REQUEST_URI'];
      $server_n = $_SERVER['SERVER_NAME'];
      $port = $_SERVER['REMOTE_PORT'];
      $ser_port = $_SERVER['SERVER_PORT'];
      $device = $_SERVER['HTTP_USER_AGENT'];
      $server_soft  = $_SERVER['SERVER_SOFTWARE'];
      $track = array('ip' => $ip, 'host'=>$host,'path_exec'=>$url,'server_name'=>$server_n,'port'=>$port,'server_port'=>$ser_port,'device'=>$device,'server_software'=>$server_soft);
      $this->halaman_model->SaveTrack($track);
      $head_TAG = $this->blog_model->get_blog($title);
      $arr = array('url' => base_url(),'type' => 'website' , 'title' => $title,
      'description'=>$head_TAG[0]['description'],
      'image' => base_url().'assets/picture_blog/'.$head_TAG[0]['thumb'],'keywords'=>$head_TAG[0]['keywords']);
      $this->blog_model->SetHitung($id);
      $data['count'] = $this->blog_model->Get_count($id);
      $data['testi'] = $this->blog_model->testi_blog();
      $data['titles'] = $arr;
      $data['data'] = $this->blog_model->get_blog($title);
      $data['update'] = $this->blog_model->get_new();
      $data['title'] = $title;
      if(empty($data['data'])){
        show_404();
      }else{
        $this->load->view('templates/header',$data);
        $this->load->view('blog/view',$data);
        $this->load->view('templates/footer');
      }
    }

  }


  public function create(){
    if ($this->session->userdata('log')) {
      $data['title'] = 'Create Blog And Articles';
      $this->load->view('templates/header_cms',$data);
      $this->load->view('blog/create',$data);
      $this->load->view('templates/footer_cms');

  }else {
      redirect('halaman/index');
    }

  }

  public function add_blog()
  {
    if ($this->session->userdata('log')) {
      $data['about'] = $this->halaman_model->get_about();
      //uploadn image
      $config['upload_path'] = 'assets/picture_blog';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '2048';
      $config['max_width'] = '1080';
      $config['max_height'] = '1928';
      date_default_timezone_set('Asia/Jakarta');
      $config['file_name']  = date('Ymdhis').'.jpg';
      $config['detect_mime'] = TRUE;
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload()) {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('templates/header_cms');
        $this->load->view('blog/error', $error);
        $this->load->view('templates/footer_cms');

      }else {
          $name = $this->input->post('title');
          $path = $config['file_name'];
          $body = $this->input->post('editor1');
          $desc = $this->input->post('description');
          $exec = $this->blog_model->save_blog($name,$path,$body,$desc);
          if ($exec) {
            $this->session->set_flashdata('blog_succ','Blog Success Create');
            redirect('edit-content');
          }else {
            $this->session->set_flashdata('blog_err','Blog Failed Create');
            redirect('edit-content');
          }

      }
    }else {
      redirect('halaman/index');
    }

  }

  public function KotakSuara()
  {
    $curl = curl_init();

    curl_setopt_array($curl,[
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL            => "https://www.google.com/recaptcha/api/siteverify",
      CURLOPT_POST => 1,
      CURLOPT_POSTFIELDS => [
        'secret' => '6LdeP1QUAAAAAGrCI7HRTyRwqXnpX5EmFMdkAwHE',
        'response' => $_POST["g-recaptcha-response"]
      ],
    ]);
    $response = json_decode(curl_exec($curl));
    if ($response->success) {
      $host=gethostbyaddr($_SERVER['REMOTE_ADDR']);
      $device = $_SERVER['HTTP_USER_AGENT'];
      $save = $this->blog_model->KeepKotak($this->input->post('Email'),$this->input->post('saran'),$host,$device);
      if ($save) {
        $this->session->set_flashdata('s_saran','Terima Kasih Atas Kritik dan saran Anda.');
        redirect(base_url());
      }else {
        $this->session->set_flashdata('f_saran','Gagal Mengirim Saran');
        redirect(base_url());
      }
    }else {
      $this->session->set_flashdata('Fail_G','Klik Google Recaptcha terlebih dahulu sebelum mengirim saran/Kritik.');
      redirect(base_url());
    }
  }

}
