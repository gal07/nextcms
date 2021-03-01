<?php 

class Posts extends CI_Controller
{
    
    public function index($page = 'index')
    {
      if ($this->session->userdata('username')) {
        if (!file_exists(APPPATH.'views/nextcms/admin/posts/'.$page.'.php')) {
            show_404();
          }else {
            ## Data to render
            $data['title'] = 'Posts list | NextCMS';
            $dataposts = $this->posts_model->get();
            $data['dataposts'] = $dataposts['result'];

            ##Render
            $this->load->view('nextcms/admin/posts/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/posts/'.$page);
            $this->load->view('nextcms/admin/posts/template/footer');

          }
        }else {
          show_404();
        }
  
    }

    public function create($page = 'index')
    {
      if ($this->session->userdata('username')) {
        if (!file_exists(APPPATH.'views/nextcms/admin/posts/create/'.$page.'.php')) {
            show_404();
          }else {


            if(isset($_POST['title'])){
              $data = array(
                "title"=>$this->input->post('title'),
                "slug"=>$this->input->post('slug'),
                "body"=>$this->input->post('body'),
                "description"=>$this->input->post('description'),
                "seo"=>($this->input->post('seo') != NULL ? 1:0),
                "create_by"=> $this->session->userdata('fullname'),
                "time_create"=>date('Y-m-d h:i'),
              );

              ##Create postingan
              $create = $this->posts_model->create($data);

              #data for notification
              $this->session->set_flashdata(
                array(
                  "message"=>$create['messages'],
                  "class"=>($create['code'] == 1 ? 'alert alert-success':'alert alert-danger')
                )
              );

              if ($create['code'] == 1) {

                ##Create SEO
                $dataseo = array("idpost"=>$create['result']['last_id'],"keyword"=>$this->input->post('seo'));
                $createseo = $this->posts_model->seocreate($dataseo);

                ## Success save seo
                if ($createseo['code'] == 1) {
                  redirect('cms-admin/posts');
                  die();
                }

              }
            }


            ## Data to render
            $data['title'] = 'Posts list | NextCMS';
            $dataposts = $this->posts_model->get();
            $data['dataposts'] = $dataposts['result'];

            ##Render
            $this->load->view('nextcms/admin/posts/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/posts/create/'.$page);
            $this->load->view('nextcms/admin/posts/template/footer');

          }
        }else {
          show_404();
        }
  
    }


    public function update($page = 'index')
    {
      if ($this->session->userdata('username')) {
        if (!file_exists(APPPATH.'views/nextcms/admin/posts/update/'.$page.'.php')) {
            show_404();
          }else {

            $id = $this->uri->segment(4);

            if(isset($_POST['title'])){
              $data = array(
                "title"=>$this->input->post('title'),
                "slug"=>$this->input->post('slug'),
                "body"=>$this->input->post('body'),
                "description"=>$this->input->post('description'),
                "seo"=>($this->input->post('seo') != NULL ? 1:0),
                "create_by"=> $this->session->userdata('fullname'),
                "time_create"=>date('Y-m-d h:i'),
              );

              ##Create postingan
              $create = $this->posts_model->create($data);

              #data for notification
              $this->session->set_flashdata(
                array(
                  "message"=>$create['messages'],
                  "class"=>($create['code'] == 1 ? 'alert alert-success':'alert alert-danger')
                )
              );

              if ($create['code'] == 1) {

                ##Create SEO
                $dataseo = array("idpost"=>$create['result']['last_id'],"keyword"=>$this->input->post('seo'));
                $createseo = $this->posts_model->seocreate($dataseo);

                ## Success save seo
                if ($createseo['code'] == 1) {
                  redirect('cms-admin/posts');
                  die();
                }

              }
            }


            ## Data to render
            $data['title'] = 'Posts list | NextCMS';
            $dataposts = $this->posts_model->get($id);
            $data['dataposts'] = $dataposts['result'][0];

            ##Render
            $this->load->view('nextcms/admin/posts/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/posts/update/'.$page);
            $this->load->view('nextcms/admin/posts/template/footer');

          }
        }else {
          show_404();
        }
  
    }
}

    