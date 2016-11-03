<?php
namespace Lonumb\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index() {
		
		if(isset($_POST['sub'])){
    		$user=$_POST['user'];
			$pass=md5($_POST['pass']);
			
		    if(isset($user)){
			   $userLogin=M('Admin');				
		        if($ulist=$userLogin->where("`user`='$user' and `pass`='$pass'")->find()){
		        	$_SESSION['user']=$user;
					$_SESSION['pass']=$pass;
					$this->success("登录成功",__MODULE__);
				}else{
					$this->success("账号或密码错误",__MODULE__."/login");
				}
		    }else{
			    $this->success("用户名不能为空",__MODULE__."/login");
		    }
		}else{
			$this->display("/login");
		}
	}

	public function outlogin() {
		$_SESSION['user'] = "";
		$_SESSION['pass'] = "";
		$this -> success("退出成功", __CONTROLLER__);
	}
}
