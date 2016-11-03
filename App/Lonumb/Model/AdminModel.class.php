<?php
namespace Lonumb\Model;
use Think\Model;
class AdminModel extends Model{
	//顺序,映射，验证，完成
	
	protected $_validate=array(
	    array('user','namelength','用户名长度必须为3-15位',0,callback,3),//(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间])
	    array('user','','用户名已存在',1,unique,3),
	    array('pass','6,15','密码长度必须为6-15位',0,length),	 //密码长度
    );
	
	protected $_auto=array(
	    array('pass','md5',3,'function'),
	    array('pass','',2,'ignore'), //密码项为空时，自动忽略
	    array('uptime','ctime',3,'callback'),
	);
	
	protected function namelength($name){
		if(strlen($name)<=1){
			return false;
		}
	}
	
	protected function ctime(){
		$time=date('Y-m-d H:i:s');
		return $time;
	}
	
}	
	
?>