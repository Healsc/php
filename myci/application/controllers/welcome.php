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
    public function check_login()
    {

        $uname = $this -> input -> post('username');
        $pwd = $this -> input -> post('password');
        $data = array();
        if($uname == "" && $pwd ==""){
            $data['error_name'] = "请输入用户名";
            $data['error_pwd'] = "请输入密码";
            $this -> load -> view('login',$data);
        }else if($uname == ""){
            $data['error_name'] = "请输入用户名";
            $this -> load -> view('login',$data);
        }else if ($pwd == ""){
            $data['error_pwd'] = "请输入密码";
            $this -> load -> view('login',$data);
        }
        //$this->load->view('login');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */