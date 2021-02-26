<?php

/**
 *
 */
class Halaman extends CI_Controller
{

  public function index($page='home')
  {
    if (!file_exists(APPPATH.'views/content/'.$page.'.php')) {
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
        $arr = array('url' => base_url(),'type' => 'website' , 'title' => 'Essen ALB',
        'description'=>'buat yang hobby mancing khususnya Gala Tama Lele nih ane mau nawarin essen kreasi ane sendiri ane mau berbagi kebahagiaan aja hehehe essen sudah teruji di berbagai daerah seperti sidoarjo,palembang,pasuruan,palembang,surabaya dan masih banyak lagi heheh testimoninya bisa dilihat di kita di @perangsanglele ',
        'image' => base_url().'assets/picture_web/logo1.jpg');
        if(empty($_COOKIE['visitor']) && empty($_COOKIE['customer'])){
        setcookie('visitor',$device,time() +86400,'/');
        }
        $cookie_customer='';
        if (!empty($_COOKIE['customer'])) {
          $cookie_customer = $_COOKIE['customer'];
        }
        $data['produk'] = $this->halaman_model->get_product();
        $data['list'] = $this->halaman_model->get_list();
        $data['testimony'] = $this->halaman_model->get_testimony();
        $data['yutub'] = $this->halaman_model->get_yutub();
        $data['kata'] = $this->halaman_model->get_string();
        $data['Cookies'] = $this->halaman_model->GetActivity($device);
        $data['Cookies2'] = $this->halaman_model->GetSalt_Pembeli($cookie_customer);
        $data1['titles'] = $arr;
        $data1['title'] = 'Essen ALB - Obat Perangsang lele No.1';
        $this->load->view('templates/header',$data1);
        $this->load->view('content/'.$page,$data);
        $this->load->view('templates/footer');
  }

  public function send()
  {
    if (!isset($_POST['nama']) && !isset($_POST['alamat']) && !isset($_POST['kelurahan']) && !isset($_POST['kecamatan']) && !isset($_POST['barang']) && !isset($_POST['kako'])) {
      echo "";
    }else {
        if (empty($_POST['nama']) OR empty($_POST['alamat']) OR empty($_POST['kelurahan']) OR empty($_POST['kecamatan']) OR empty($_POST['barang']) OR empty($_POST['kako'])) {
          $this->session->set_flashdata('error_submit','Format pemesanan tidak sesuai');
            redirect('halaman/index');
        }else{

          //Set Data parse to whatsapp
          $salt = uniqid();
          setcookie('visitor',$device,time() +2,'/');
          setcookie('customer',$salt,time() + (86400 * 30),'/');
          // Get Name Product
          $NP = $this->halaman_model->GetNamaBarang($_POST['barang']);
          $setName = $NP[0]['nama_barang'];
          $preorder = array('nama' => ltrim(rtrim(urlencode($_POST['nama']))),'alamat' => ltrim(rtrim(urlencode($_POST['alamat']))), 'kelurahan'=>ltrim(rtrim(urlencode($_POST['kelurahan']))),'kecamatan'=>ltrim(rtrim(urlencode($_POST['kecamatan']))),
          'barang'=>ltrim(rtrim(urlencode($_POST['barang']))),'kako'=>ltrim(rtrim(urlencode($_POST['kako']))));
          $ready = array('nama' => str_replace('+','%20',$preorder['nama']),'alamat'=>str_replace('+','%20',$preorder['alamat']),'kelurahan'=>str_replace('+','%20',$preorder['kelurahan']),'kecamatan'=>str_replace('+','%20',$preorder['kecamatan']),
                  'barang'=>str_replace('+','%20',$setName),'kako'=>str_replace('+','%20',$preorder['kako']));

                  //Get Data Track From Orderan
                  $ip =  $_SERVER['REMOTE_ADDR'];
                  $host=gethostbyaddr($_SERVER['REMOTE_ADDR']);
                  $url = $_SERVER['REQUEST_URI'];
                  $server_n = $_SERVER['SERVER_NAME'];
                  $port = $_SERVER['REMOTE_PORT'];
                  $ser_port = $_SERVER['SERVER_PORT'];
                  $device = $_SERVER['HTTP_USER_AGENT'];
                  $server_soft  = $_SERVER['SERVER_SOFTWARE'];
                  $track = array('ip' => $ip, 'host'=>$host,'path_exec'=>$url,'server_name'=>$server_n,'port'=>$port,'server_port'=>$ser_port,'device'=>$device,'server_software'=>$server_soft,'salt'=>$salt);

          //Get harga for save to database
          $get_harga = $this->halaman_model->getHarga($_POST['barang']);
          foreach ($get_harga as $key) {
            $this->halaman_model->keep(ltrim(rtrim($_POST['nama'])),
            ltrim(rtrim($_POST['alamat'])),ltrim(rtrim($_POST['kelurahan'])),
            ltrim(rtrim($_POST['kecamatan'])),$setName,ltrim(rtrim($_POST['kako'])),
            $key['harga'],$salt);
            }
          header('location: https://api.whatsapp.com/send?phone=6289683147643&text=%3D%3D%3D%20Pesanan%20Baru%20%3D%3D%3D%0ANama%20%3A%20'.$ready['nama'].'%0ACITY%20%3A%20'.$ready['alamat'].'%0AKecamatan%20%3A%20'.$ready['kecamatan'].'%0AKelurahan%20%3A%20'.$ready['kelurahan'].'%0AKabupaten/kota%20%3A%20'.$ready['kako'].'%0APesanan%20%3A%20'.$ready['barang']);
          $this->halaman_model->DataPembeli($track);
        }
     }
  }

  public function ContactUS($page = 'contactus')
  {
    if (!file_exists(APPPATH.'views/content/'.$page.'.php')) {
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
        $arr = array('url' => base_url(),'type' => 'website' , 'title' => 'Essen ALB',
        'description'=>'buat yang hobby mancing khususnya Gala Tama Lele nih ane mau nawarin essen kreasi ane sendiri ane mau berbagi kebahagiaan aja hehehe essen sudah teruji di berbagai daerah seperti sidoarjo,palembang,pasuruan,palembang,surabaya dan masih banyak lagi heheh testimoninya bisa dilihat di kita di @perangsanglele ',
        'image' => base_url().'assets/picture_web/logo1.jpg');
        $data1['titles'] = $arr;
        $data1['title'] = 'Kontak Kami';
        $this->load->view('templates/header',$data1);
        $this->load->view('content/'.$page);
        $this->load->view('templates/footer');
  }

  public function tentangkami($page = 'tentangkami')
  {
    if (!file_exists(APPPATH.'views/content/'.$page.'.php')) {
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
        $arr = array('url' => base_url(),'type' => 'website' , 'title' => 'Tentang Essen ALB',
        'description'=>'buat yang hobby mancing khususnya Gala Tama Lele nih ane mau nawarin essen kreasi ane sendiri ane mau berbagi kebahagiaan aja hehehe essen sudah teruji di berbagai daerah seperti sidoarjo,palembang,pasuruan,palembang,surabaya dan masih banyak lagi heheh testimoninya bisa dilihat di kita di @perangsanglele ',
        'image' => base_url().'assets/picture_web/logo1.jpg');
        $data1['titles'] = $arr;
        $data1['title'] = 'Tentang Kami';
        $this->load->view('templates/header',$data1);
        $this->load->view('content/'.$page);
        $this->load->view('templates/footer');
  }


}
