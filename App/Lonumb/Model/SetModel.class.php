<?php
namespace Lonumb\Model;
use Think\Model;
class SetModel extends Model{
	//顺序,映射，验证，完成
	
	protected $_validate=array(
	    array('sitename','namelength','网站名称不能为空',0,callback),
    );

	protected $_auto=array(
	    array('stime','ctime',2,'callback'),
	);
	
	protected function namelength($name){
		if(strlen($name)<1){
			return false;
		}
	}
	
	protected function ctime(){
		$time=date('Y-m-d H:i:s');
		return $time;		
	}	
}

?>