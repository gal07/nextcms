<?php 

class Client extends CI_Controller
{

    public function index($page = 'index')
    {
          if (!file_exists(APPPATH.'views/nextcms/client/home/'.$page.'.php')) {
            show_404();
          }else {
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

            $this->load->view('nextcms/client/home/'.$page,$data);
          }
      }
    
}
