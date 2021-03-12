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
            $data['js'] = '';
            $data['menuactive'] = 'posts';

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
              ## data for save posts
              $data = array(
                "title"=>$this->input->post('title'),
                "slug"=>$this->input->post('slug'),
                "body"=>$this->input->post('body'),
                "category"=>$this->input->post('category'),
                "description"=>$this->input->post('description'),
                "seo"=>($this->input->post('seo') != NULL ? 1:0),
                "create_by"=> $this->session->userdata('fullname'),
                "time_create"=>date('Y-m-d h:i'),
              );

              ## Upload image to folder
              $uploadimage = $this->upload();
              if ($uploadimage['status'] != 1) {
                ## data for notification
                $this->session->set_flashdata(
                  array(
                    "message"=>$uploadimage['message'],
                    "class"=>($uploadimage['status'] == 1 ? 'alert alert-success':'alert alert-danger')
                  )
                );
                redirect('cms-admin/posts/create');
              }
              

              ## Create postingan
              $create = $this->posts_model->create($data,$this->input->post('seo'),$uploadimage['dataimage']);

              ## data for notification
              $this->session->set_flashdata(
                array(
                  "message"=>$create['messages'],
                  "class"=>($create['code'] == 1 ? 'alert alert-success':'alert alert-danger')
                )
              );

              if ($create['code'] == 1) {

                  ## Complete
                  redirect('cms-admin/posts');
                  die();
                
              }
            }


            ## Data to render
            $data['title'] = 'Posts list | NextCMS';
            $dataposts = $this->posts_model->get();
            $data['dataposts'] = $dataposts['result'];
            $datacategory = $this->category_model->get();
            $data['datacategory'] = $datacategory['result'];
            $data['js'] = '<script src="'.base_url().'assets/resource/admin/js/pages/forms/editors.js"></script>';
            $data['menuactive'] = 'posts';

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
                "category"=>$this->input->post('category'),
                "description"=>$this->input->post('description'),
                "seo"=>($this->input->post('seo') != NULL ? 1:0),
                "create_by"=> $this->session->userdata('fullname'),
                "time_create"=>date('Y-m-d h:i'),
              );

              ## upload image
              $uploadimage = NULL;
              if (!empty($_FILES['myfile']['size'])) {

                $uploadimage = $this->upload();
                if ($uploadimage['status'] != 1) {
                  ## data for notification
                  $this->session->set_flashdata(
                    array(
                      "message"=>$uploadimage['message'],
                      "class"=>($uploadimage['status'] == 1 ? 'alert alert-success':'alert alert-danger')
                    )
                  );
                  redirect('cms-admin/posts/update/'.$id);
                }

              }
              

              ##update postingan
              $update = $this->posts_model->update($data,$id,$this->input->post('seo'),$uploadimage);

              #data for notification
              $this->session->set_flashdata(
                array(
                  "message"=>$update['messages'],
                  "class"=>($update['code'] == 1 ? 'alert alert-success':'alert alert-danger')
                )
              );

              if ($update['code'] == 1) {

                  redirect('cms-admin/posts');
                  die();

              }
            }


            ## Data to render
            $data['title'] = 'Posts list | NextCMS';
            $dataposts = $this->posts_model->get($id);
            $data['dataposts'] = $dataposts['result'][0];
            $datacategory = $this->category_model->get();
            $data['datacategory'] = $datacategory['result'];
            $data['js'] = '<script src="'.base_url().'assets/resource/admin/js/pages/forms/editors.js"></script>';
            $data['menuactive'] = 'posts';

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

    public function topseries($page = 'index')
    {
      if ($this->session->userdata('username')) {
        if (!file_exists(APPPATH.'views/nextcms/admin/posts/topseries/'.$page.'.php')) {
            show_404();
          }else {
            ## Data to render
            $data['title'] = 'Placement Posts | NextCMS';
            $dataposts = $this->posts_model->get();
            $data['dataposts'] = $dataposts['result'];
            $data['js'] = '';
            $data['menuactive'] = 'posts';

            ##Render
            $this->load->view('nextcms/admin/posts/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/posts/topseries/'.$page);
            $this->load->view('nextcms/admin/posts/template/footer');

          }
        }else {
          show_404();
        }
    }

    public function upload()
    {
      if (!empty($_FILES['myfile']['size'])) {
         //uploadn image

        ## Upload
        $config['upload_path'] = 'assets/images/posts';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['max_width'] = '5000';
        $config['max_height'] = '3000';
        date_default_timezone_set('Asia/Jakarta');
        $config['file_name']  = date('Ymdhis').'.png';
        $config['detect_mime'] = TRUE;
        $this->load->library('upload',$config);

        

        $datareturn = array(
          "dataimage"=>array(
            "path"=>$config['upload_path'],
            "title_image"=>$config['file_name'],
            "imagename"=>$config['file_name'],
            "size"=>$_FILES['myfile']['size'],
          ),
          "status"=>0,
          "message"=>""
        );




        if (!$this->upload->do_upload('myfile')) {

            $datareturn['message'] = $this->upload->display_errors();
            return $datareturn;
            die();
        }

        ## resize
        $image_data = $this->upload->data(); //upload the image
        $config['image_library'] = 'gd2';
        $config['source_image'] = $image_data['full_path'];
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 1280;
        $config['height'] = 800;
        $this->load->library('image_lib', $config);

        if(!$this->image_lib->resize()){

            $datareturn['message'] = $this->image_lib->display_errors();;
            return $datareturn;
            die();
        }

            $datareturn['status'] = 1;
            return $datareturn;
        
      }

    }

    public function delete()
    {
      ## Delete
      $delete = $this->posts_model->delete($this->input->post('id'));
      echo json_encode($delete);
    }

    public function status()
    {
      # Change Status
      $status = $this->posts_model->status($this->input->post('id'));
      echo json_encode($status);
    }

    public function topseriesupdate()
    {
      # Change Status
      $status = $this->posts_model->updatetopseries($this->input->post('id'),$this->input->post('target'));
      echo json_encode($status);
    }
}

    