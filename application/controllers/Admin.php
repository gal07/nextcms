<?php 

class Admin extends CI_Controller
{

    public function index($page = 'index')
    {
      if ($this->session->userdata('username')) {
        if (!file_exists(APPPATH.'views/nextcms/admin/home/'.$page.'.php')) {
            show_404();
          }else {
            $data['title'] = 'Dashboard Admin';
            $data['navigation'] = $this->load->view('nextcms/admin/component/navigation');

            $this->load->view('nextcms/admin/home/'.$page,$data);
          }
        }else {
          redirect(base_url());
        }
  
    }

    public function login($page = 'index')
    {
          if (!file_exists(APPPATH.'views/nextcms/admin/auth/login/'.$page.'.php')) {
            show_404();
          }else {

            ## if have session
            if ($this->session->userdata('status')) {
              redirect('cms-admin/admin');
            }

            ## login flow
            if (isset($_POST['username'])) {
              $exec = $this->admin_model->loginprocess($this->input->post('username'),$this->input->post('password'));
              if ($exec) {
                ## Set Session
                $datasession = array(
                  "status"=>"login",
                  "fullname"=>$exec[0]->fullname,
                  "username"=>$exec[0]->username,
                  "email"=>$exec[0]->email,
                  "role"=>$exec[0]->role
                );
                $this->session->set_userdata($datasession);

                redirect('cms-admin/admin');
              }else{
                #data for notification
                $this->session->set_flashdata(
                  array(
                    "message"=>'Username atau password salah',
                    "class"=>'alert alert-danger'
                  )
                );
              }
            }

            $data['title'] = 'Login Admin | NextCMS';
            $data['bigtitle'] = '
            <a href="javascript:void(0);">Next<b>CMS</b></a>
            <small>Content Management System</small>';

            $this->load->view('nextcms/admin/auth/template/header',$data);
            $this->load->view('nextcms/admin/auth/login/'.$page);
            $this->load->view('nextcms/admin/auth/template/footer',$data);
          }
  
    }

    public function register($page = 'index')
    {
          if (!file_exists(APPPATH.'views/nextcms/admin/auth/register/'.$page.'.php')) {
            show_404();
          }else {
            $data['title'] = 'Register Admin | NextCMS';
            $data['bigtitle'] = '
            <a href="javascript:void(0);">Next<b>CMS</b></a>
            <small>Content Management System</small>';

            $this->load->view('nextcms/admin/auth/template/header',$data);
            $this->load->view('nextcms/admin/auth/register/'.$page);
            $this->load->view('nextcms/admin/auth/template/footer',$data);
          }
    }

    public function forgotpassword($page = 'index')
    {
          if (!file_exists(APPPATH.'views/nextcms/admin/auth/forgot/'.$page.'.php')) {
            show_404();
          }else {
            $data['title'] = 'Register Admin | NextCMS';
            $data['bigtitle'] = '
            <a href="javascript:void(0);">Next<b>CMS</b></a>
            <small>Content Management System</small>';

            $this->load->view('nextcms/admin/auth/template/header',$data);
            $this->load->view('nextcms/admin/auth/forgot/'.$page);
            $this->load->view('nextcms/admin/auth/template/footer',$data);
          }
    }

    public function logout()
    {
      $this->session->sess_destroy();
      redirect('cms-admin/login');
    }
    
}
