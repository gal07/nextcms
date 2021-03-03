<?php 

class Category extends CI_Controller
{

    public function index($page = 'index')
    {
      if ($this->session->userdata('username')) {
        if (!file_exists(APPPATH.'views/nextcms/admin/category/'.$page.'.php')) {
            show_404();
          }else {

            ## Data for render
            $data['title'] = 'Categorys | NextCMS';
            $datacategory = $this->category_model->get();
            $data['datacategory'] = $datacategory['result'];

            ## Render
            $this->load->view('nextcms/admin/category/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/category/'.$page,$data);
            $this->load->view('nextcms/admin/category/template/footer');
          }
        }else {
          redirect(base_url());
        }
  
    }


    public function create($page = 'index')
    {
      if ($this->session->userdata('username')) {
        if (!file_exists(APPPATH.'views/nextcms/admin/category/create/'.$page.'.php')) {
            show_404();
          }else {

            if(isset($_POST['category'])){
              $data = array(
                "category"=>$this->input->post('category'),
              );

              ##Create
              $create = $this->category_model->create($data);

              #data for notification
              $this->session->set_flashdata(
                array(
                  "message"=>$create['messages'],
                  "class"=>($create['code'] == 1 ? 'alert alert-success':'alert alert-danger')
                )
              );

              if ($create['code'] == 1) {
                redirect('cms-admin/category');
                die();
              }
            }

            ## Data for render
            $data['title'] = 'Categorys | NextCMS';
            $datacategory = $this->category_model->get();
            $data['datacategory'] = $datacategory['result'];

            ## Render
            $this->load->view('nextcms/admin/category/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/category/create/'.$page,$data);
            $this->load->view('nextcms/admin/category/template/footer');
          }
        }else {
          redirect(base_url());
        }
  
    }

    public function update($page = 'index')
    {
      if ($this->session->userdata('username')) {
        if (!file_exists(APPPATH.'views/nextcms/admin/category/update/'.$page.'.php')) {
            show_404();
          }else {
            $id = $this->uri->segment(4);

            if(isset($_POST['category'])){
              $data = array(
                "category"=>$this->input->post('category'),
              );

              ##update
              $update = $this->category_model->update($data,$id);

              // print_r($update);
              // die();
              #data for notification
              $this->session->set_flashdata(
                array(
                  "message"=>$update['messages'],
                  "class"=>($update['code'] == 1 ? 'alert alert-success':'alert alert-danger')
                )
              );

              if ($update['code'] == 1) {
                redirect('cms-admin/category');
                die();
              }
            }

            ## Data for render
            $data['title'] = 'Categorys | NextCMS';
            $datacategory = $this->category_model->get($id);
            $data['datacategory'] = $datacategory['result'][0];

            ## Render
            $this->load->view('nextcms/admin/category/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/category/update/'.$page,$data);
            $this->load->view('nextcms/admin/category/template/footer');
          }
        }else {
          redirect(base_url());
        }
  
    }

    public function delete()
    {
      ## Delete
      $delete = $this->category_model->delete($this->input->post('id'));
      echo json_encode($delete);
    }

}