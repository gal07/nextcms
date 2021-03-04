<?php 

class Users extends CI_Controller
{
    
    public function index($page = 'index')
    {
      if ($this->session->userdata('username') != NULL && $this->session->userdata('role') == 1) {
        if (!file_exists(APPPATH.'views/nextcms/admin/users/'.$page.'.php')) {
            show_404();
          }else {
            ## Data to render
            $data['title'] = 'Users list | NextCMS';
            $datauser = $this->users_model->getuser();
            $data['datauser'] = $datauser['result'];
            $data['menuactive'] = 'users';

            ##Render
            $this->load->view('nextcms/admin/users/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/users/'.$page);
            $this->load->view('nextcms/admin/users/template/footer');

          }
        }else {
          show_404();
        }
  
    }

    public function create($page = 'index')
    {
        if ($this->session->userdata('username') != NULL && $this->session->userdata('role') == 1) {
          if (!file_exists(APPPATH.'views/nextcms/admin/users/create/'.$page.'.php')) {
            show_404();
          }else {

            if(isset($_POST['username'])){
              $data = array(
                "fullname"=>$this->input->post('fullname'),
                "username"=>$this->input->post('username'),
                "email"=>$this->input->post('email'),
                "password"=>password_hash($this->input->post('password'),PASSWORD_BCRYPT),
                "role"=>2,
                "last_login"=>NULL
              );

              ##Create
              $create = $this->users_model->create($data);

              #data for notification
              $this->session->set_flashdata(
                array(
                  "message"=>$create['messages'],
                  "class"=>($create['code'] == 1 ? 'alert alert-success':'alert alert-danger')
                )
              );

              if ($create['code'] == 1) {
                redirect('cms-admin/users');
                die();
              }
            }

            ## Data for render
            $data['title'] = 'Users Create | NextCMS';
            $data['menuactive'] = 'users';

            ##Render
            $this->load->view('nextcms/admin/users/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/users/create/'.$page,$data,FALSE);
            $this->load->view('nextcms/admin/users/template/footer');          
        }
        }else {
          show_404();
        }
  
    }

    public function update($page = 'index')
    {
      if ($this->session->userdata('username') != NULL && $this->session->userdata('role') == 1) {
        if (!file_exists(APPPATH.'views/nextcms/admin/users/update/'.$page.'.php')) {
            show_404();
          }else {
            $id = $this->uri->segment(4);

            if (isset($_POST['username'])) {
               $dataupdate = array(
                  "fullname"=>$this->input->post('fullname'),
                  // "username"=>$this->input->post('username'),
                  // "email"=>$this->input->post('email'),
               );
               $update = $this->users_model->update($dataupdate,$id);

                #data for notification
                $this->session->set_flashdata(
                  array(
                    "message"=>$update['messages'],
                    "class"=>($update['code'] == 1 ? 'alert alert-success':'alert alert-danger')
                  )
                );

               if ($update['code'] == 1) {
                 redirect('cms-admin/users');
                 die();
               }
            }

            ## Data for render
            $datauser = $this->users_model->getuser($id);
            $data['datauser'] = $datauser['result'][0];
            $data['title'] = 'Users Update | NextCMS';
            $data['menuactive'] = 'users';

            #Render
            $this->load->view('nextcms/admin/users/template/header',$data,FALSE);
            $this->load->view('nextcms/admin/component/navigation');
            $this->load->view('nextcms/admin/users/update/'.$page);
            $this->load->view('nextcms/admin/users/template/footer');
        }
        }else {
            show_404();
        }
  
    }

    public function delete()
    {
      ## Delete
      $delete = $this->users_model->delete($this->input->post('id'));
      echo json_encode($delete);
    }

    public function status()
    {
      # Change Status
      $status = $this->users_model->status($this->input->post('id'));
      echo json_encode($status);
    }

}
