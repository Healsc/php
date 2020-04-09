<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{
    public function index(){
        $this->load->view('admin_index');
    }

    public function new_blog(){
        $loginUser = $this -> session -> userdata('loginUser');
        $this->load->model('article_model');
        $types = $this->article_model->get_types_by_user($loginUser->user_id);
        $this->load->view('new_blog',array(
            'types' => $types
        ));
    }
    public function list_blogs(){
        $loginUser = $this -> session -> userdata('loginUser');
        $this -> load -> model('article_model');
        $articles = $this -> article_model-> get_articles_by_user($loginUser->user_id);

        $this -> load -> view('list_blogs',array(
            'articles'=>$articles
        ));
    }
    public function post_article(){
        $title = htmlspecialchars( $this->input->post('title'));
        $content = htmlspecialchars($this -> input -> post('content'));
        $type_id = $this -> input -> post('type_id');
        $this -> load -> model('article_model');
        $loginUser = $this -> session -> userdata('loginUser');
        $rows = $this -> article_model -> save_article($title,$content,$type_id,$loginUser->user_id);
        if($rows > 0){
            $this -> load -> view('list_blogs');
            //redirect('admin/list_blogs');
        }else{
            echo 'fail';
        }
    }
}
