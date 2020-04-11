<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Type_model extends CI_Model{
    public function get_types_by_user($user_id){
        $sql = "select t.*,(select count(*) from t_article a where a.type_id = t.type_id) num from t_article_type t where t.user_id = $user_id";
        return $this -> db -> query($sql) -> result();

    }
}