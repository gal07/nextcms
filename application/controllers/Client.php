<?php 

class Client extends CI_Controller
{

    public function index($page = 'index')
    {
          if (!file_exists(APPPATH.'views/nextcms/client/home/'.$page.'.php')) {
            show_404();
          }else {
            ## data to render
            $data['title'] = 'NextCMS | Home';

            ## Data for section top ontop news
            $ontopnews = $this->client_model->get('ontopnews');
            $data['ontopnews'] = $ontopnews['result'];

            ## Data for section top stories
            $topstories = $this->client_model->get('topseries');
            $data['topseries'] = $topstories['result'];

            ## Data for section top world
            $world = $this->client_model->get('world');
            $data['world'] = $world['result'];
            
            ## Data for section Feature Post
            $featurepost = $this->client_model->get('featuredpost');
            $data['featuredpost'] = $featurepost['result'];

            ## Data for section Gallery
            $gallery = $this->client_model->get('gallery');
            $data['gallery'] = $gallery['result'];

            ## Data for section Fpost
            $gallery = $this->client_model->get('fpost');
            $data['fpost'] = $gallery['result'];

            ## Data for section fcson
            $fcson = $this->client_model->get('fcson');
            $data['fcson'] = $fcson['result'];

            ## Data for section lifestyle
            $lifestyle = $this->client_model->get('lifestyle');
            $data['lifestyle'] = $lifestyle['result'];

            ## Data for Latest Post
            $latestpost = $this->client_model->get();
            $data['latestpost'] = $latestpost['result'];

            ## Category list
            $category = $this->category_model->get(NULL,1);
            $data['category'] = $category['result'];

            ## Latest Posts by Category
            foreach ($category['result'] as $value) {
              $raw = $this->client_model->get(NULL,$value->id);
              $data['list'][$value->category] = $raw['result'];
            }

            
            $this->load->view('nextcms/client/home/template/header',$data);
            $this->load->view('nextcms/client/home/'.$page);
            $this->load->view('nextcms/client/home/template/footer');
          }
    }

    public function singlepost($page = 'index')
    {
      if (!file_exists(APPPATH.'views/nextcms/client/singlepost/'.$page.'.php')) {
        show_404();
      }else {
        ## data to render
        $id = $this->uri->segment(2);
        $slug = $this->uri->segment(3);

        $data['title'] = 'NextCMS | Single Posts';

        ## Category list
        $category = $this->category_model->get(NULL,1);
        $data['category'] = $category['result'];

        ## Detail posts
        $detail = $this->client_model->get(NULL,NULL,$id);
        $data['detail'] = $detail['result'][0];

        ## Data for Latest Post
        $latestpost = $this->client_model->get();
        $data['latestpost'] = $latestpost['result'];

        ## Data for section Fpost
        $gallery = $this->client_model->get('fpost');
        $data['fpost'] = $gallery['result'];

        ## Latest Posts by Category
        foreach ($category['result'] as $value) {
          $raw = $this->client_model->get(NULL,$value->id);
          $data['list'][$value->category] = $raw['result'];
        }

        ## Render
        $this->load->view('nextcms/client/home/template/header',$data);
        $this->load->view('nextcms/client/singlepost/'.$page);
        $this->load->view('nextcms/client/home/template/footer');
        
      }
    }
    
}
