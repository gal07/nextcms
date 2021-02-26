<?php 

class Client extends CI_Controller
{

    public function index($page = 'index')
    {
        // if ($this->session->userdata('usr')) {
          if (!file_exists(APPPATH.'views/nextcms/client/home/'.$page.'.php')) {
            show_404();
          }else {
            $data['title'] = 'Edit Content';
            // $this->load->view('templates/header_us',$data);
            $this->load->view('nextcms/client/home/'.$page);
            // $this->load->view('templates/footer_us');
          }
        // }else {
        //   redirect(base_url());
        // }
  
      }
    
}
