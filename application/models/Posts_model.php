<?php

class Posts_model extends CI_Model
{

    function __construct(){
        $this->load->database();
    }

    public function get($id = NULL)
    {
        $get = NULL;
        if ($id == NULL) {
 
            $get = $this->db->select('*')->from('t_posts')
                            ->get();
 
        } else {
 
            $get = $this->db->select('post.*,seo.keyword,image.path,image.imagename')->from('t_posts as post')
                            ->join('t_seo seo', 'seo.idpost = post.id')
                            ->join('t_image image', 'image.postid = post.id')
                            ->where('post.id',$id)
                            ->get();
 
        }
 
        if ($get->num_rows() > 0) {
             $result = $this->returns('Data sukses di ambil',SUCCESS,$get->result());
             return $result;
        }else{
             $result = $this->returns('Data tidak ditemukan',ERROR,array());
             return $result;
        }
        
    }

    public function returns($messages,$code,$result)
    {
 
         ## Set Value
         $this->messages = $messages;
         $this->code = $code;
         $this->result = $result;
 
         $datareturn = array(
             "messages"=>$this->messages,
             "code"=>$this->code,
             "result"=>$this->result,
         );
      
        return $datareturn;
    }

    public function create($data,$dataseo,$dataimage)
    {    
            $exist = $this->exist($data['title']);
            if ($exist) {
                # IF EXIST
                $result = $this->returns('Title sudah digunakan',ERROR,array());
                return $result;
            } else {
                # IF NOT EXIST
                $this->db->trans_begin();
                $exec = $this->db->insert('t_posts',$data);
                if ($exec) {
                    $last_id = $this->db->insert_id();

                    # Continue to save SEO
                    $saveseo = $this->seocreate(array("idpost"=>$last_id,"keyword"=>$dataseo));
                    if ($saveseo['code'] != 1) {
                        # Rollback
                        $this->db->trans_rollback();
                    }

                    # Continue to save Image
                    $saveimage = $this->imagecreate(
                        array(
                            "postid"=>$last_id,
                            "path"=>$dataimage['path'],
                            "title_image"=>$dataimage['title_image'],
                            "imagename"=>$dataimage['imagename'],
                            "size"=>$dataimage['size'],
                        ));
                    if ($saveimage['code'] != 1) {
                        # Rollback
                        $this->db->trans_rollback();
                    }
                    
                    # Complete save post
                    $this->db->trans_commit();
                    $result = $this->returns('Postingan telah dibuat',SUCCESS,array('last_id'=>$last_id));
                    return $result;
                } else {
                    $result = $this->returns('Error: Sesuatu telah terjadi , Coba lagi',ERROR,array());
                    return $result;
                }
            }
    }


    public function update($data,$id,$dataseo,$dataimage = NULL)
    {    
            $exist = $this->exist($data['title'],$id);
            if ($exist) {
                # IF EXIST
                $result = $this->returns('Title sudah digunakan',ERROR,array());
                return $result;
            } else {
                # IF NOT EXIST
                $this->db->trans_begin();
                        $this->db->where('id',$id);
                $exec = $this->db->update('t_posts',$data);
                if ($exec) {

                    # Continue to save SEO
                    $saveseo = $this->seocreate(array("idpost"=>$id,"keyword"=>$dataseo),$id);
                    if ($saveseo['code'] != 1) {
                        # Rollback
                        $this->db->trans_rollback();
                    }

                    # Continue to save Image
                    if ($dataimage != NULL) {
                        $saveimage = $this->imagecreate(
                            array(
                                "postid"=>$id,
                                "path"=>$dataimage['dataimage']['path'],
                                "title_image"=>$dataimage['dataimage']['title_image'],
                                "imagename"=>$dataimage['dataimage']['imagename'],
                                "size"=>$dataimage['dataimage']['size'],
                            ),$id);
                        if ($saveimage['code'] != 1) {
                            # Rollback
                            $this->db->trans_rollback();
                        }

                    }

                    
                    # Complete save post
                    $this->db->trans_commit();
                    $result = $this->returns('Postingan telah diupdate',SUCCESS,array('last_id'=>$last_id));
                    return $result;
                } else {
                    $result = $this->returns('Error: Sesuatu telah terjadi , Coba lagi',ERROR,array());
                    return $result;
                }
            }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('t_posts');
        $result = $this->returns('Postingan telah dihapus',SUCCESS,array());
        return $result;
    }


    public function seocreate($data,$id = NULL)
    {   
        ## If $id NULL its mean create new data
        ## If $id NOT NULL its mean update data

        if ($id == NULL) {

            $exec = $this->db->insert('t_seo',$data);
            if ($exec) {
                $result = $this->returns('Seo telah dibuat',SUCCESS,array());
                return $result;
            } else {
                $result = $this->returns('Error: Sesuatu telah terjadi , Coba lagi',ERROR,array());
                return $result;
            }

        } else {

            $this->db->where('idpost',$id);
            $this->db->update('t_seo',$data);
            $result = $this->returns('Seo telah diupdate',SUCCESS,array());
            return $result;

        }
        

        
    }

    public function imagecreate($data,$id = NULL)
    {    
        ## If $id NULL its mean create new data
        ## If $id NOT NULL its mean update data

        if ($id == NULL) {
            
            $exec = $this->db->insert('t_image',$data);
            if ($exec) {
                $result = $this->returns('Image telah dibuat',SUCCESS,array());
                return $result;
            } else {
                $result = $this->returns('Error: Sesuatu telah terjadi , Coba lagi',ERROR,array());
                return $result;
            }

        } else {
            
            $this->db->where('postid',$id);
            $this->db->update('t_image',$data);
            $result = $this->returns('Image telah diupdate',SUCCESS,array());
            return $result;

        }
        

        
    }


   public function exist($title,$id = NULL)
   {
       $get = NULL;
       if ($id == NULL) {
           $get = $this->db->select('*')->from('t_posts')
           ->where('title',$title)
           ->get();
       }else{
           $get = $this->db->select('*')->from('t_posts')
           ->where('id !=',$id)
           ->where('title',$title)
           ->get();
       }

        
        
        if ($get->num_rows() > 0 ) {
           return $get->result();
        } else {
           return FALSE;
        }
        
   }

   public function status($id)
   {
       $check = $this->db->select('status')->from('t_posts')
                         ->where('id',$id)
                         ->get();

        $result = NULL;
        if ($check->num_rows() > 0) {
            $data = $check->result();

                if ($data[0]->status == 1) {
                    
                    $this->db->where('id',$id);
                    $this->db->update('t_posts',array('status'=>0));
                    $result = $this->returns('Posts di nonaktifkan',SUCCESS,array('status'=>0));

                } else {

                    $this->db->where('id',$id);
                    $this->db->update('t_posts',array('status'=>1));
                    $result = $this->returns('Posts di aktifkan',SUCCESS,array('status'=>1));

                }

                return $result;

        }else{
            $result = $this->returns('Status gagal diubah',ERROR,array());
            return $result;
        }

   }
 


}
