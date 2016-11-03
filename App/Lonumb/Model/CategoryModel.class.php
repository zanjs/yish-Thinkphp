<?php
namespace Lonumb\Model;
use Think\Model;
class CategoryModel extends Model{

	protected $_validate=array(
	    array('title','namelength','标题长度至少2位',0,callback),
    );
	
	protected $_auto=array(
	    array('add_time','ctime',1,'callback'),
	    array('up_time','ctime',2,'callback'),
	);
	
	protected function namelength($name){
		if(strlen($name)<=2){
			return false;
		}		
	}
	
	protected function ctime(){
		$time=date('Y-m-d H:i:s');
		return $time;		
	}	
}	
	
?>