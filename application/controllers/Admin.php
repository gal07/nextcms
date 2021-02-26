<?php 

class Admin extends CI_Controller
{

    public function index($page = 'index')
    {
        // if ($this->session->userdata('usr')) {
          if (!file_exists(APPPATH.'views/nextcms/admin/home/'.$page.'.php')) {
            show_404();
          }else {
            $data['title'] = 'Edit Content';
            // $this->load->view('templates/header_us',$data);
            $this->load->view('nextcms/admin/home/'.$page);
            // $this->load->view('templates/footer_us');
          }
        // }else {
        //   redirect(base_url());
        // }
  
      }
    
}
