<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function login()
    {
        $this->load->view('login');
    }
    public function regist()
    {
        $this->load->view('regist');
    }
    public function check_login()
    {
        $uname = $this -> input -> post('username');
        $pwd = $this -> input -> post('password');
        $data = array();
        $flag = TRUE;
        if($uname == ""){
            $data['error_name'] = "请输入用户名";
            $flag = FALSE;
        }
        if ($pwd == ""){
            $data['error_pwd'] = "请输入密码";
            $flag = FALSE;
        }
        if($flag){
            $this -> load -> model('user_model');
            $row = $this -> user_model -> get_by_name_pwd($uname,$pwd);
            if($row){
                echo '登录成功';
            }else{
               // echo "登陆失败,检查账号密码";
                $data['errot_err'] = "登陆失败,请检查账号密码";
                $this -> load -> view('login',$data);
            }
        }else{
            $this -> load -> view('login',$data);
        }
        //$this->load->view('login');
    }

    public function save_regist()
    {
        $uname = $this -> input -> post('username');
        $pwd = $this -> input -> post('password');
        $repwd = $this -> input -> post('repassword');
        $data = array();
        $flag = TRUE;
        if($uname == ""){
            $data['error_name'] = "请输入用户名";
            $flag = FALSE;
        }
        if ($pwd == ""){
            $data['error_pwd'] = "请输入密码";
            $flag = FALSE;
        }
        if($repwd == ""){
            $data['error_repwd'] = "请输入确认密码";
            $flag = FALSE;
        }
        if($pwd != "" && $repwd != "" && $pwd != $repwd ){
            $data['error_buyizhi'] = "两次密码不一致";
            $flag = FALSE;
        }
        if($flag){
            $this -> load -> model('user_model');
            $row_name = $this -> user_model -> get_by_name($uname);
            if($row_name){
                $data['error_rename'] = "用户名已存在";
                $this -> load -> view('regist',$data);
            }else{
                $rows = $this -> user_model -> save($uname,$pwd);
                if($rows > 0){
                    echo "注册成功";
                }else{
                    echo "注册失败";
                }
            }
//            $rows = $this -> user_model -> save($uname,$pwd);
//            if($rows > 0){
//                echo 'success';
//            }else{
//                echo "fail";
//            }
        }else{
            $this -> load -> view('regist',$data);
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */