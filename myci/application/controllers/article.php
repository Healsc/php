<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function get_article_by_id(){
        $article_id = $this->input->get('id');
        $this->load->model('article_model');
        $result = $this->article_model->get_article_by_article_id($article_id);
        $this->load->view('article_detail',array(
            'article'=>$result
        ));
    }
}