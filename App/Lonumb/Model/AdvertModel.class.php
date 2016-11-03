<?php
namespace Lonumb\Model;
use Think\Model;
class AdvertModel extends Model{
		
	//顺序,映射，验证，完成
	/*
	protected $_link=array(
	    'Category' => array(
            'mapping_type' => HAS_ONE,
            'parent_key' => 'classid',
            'foreign_key' => 'id',  //关键对方的id
            //'mapping_name' => 'Category', //关联对方的模型[表名]名称,首要
            //'class_name' => 'Category', //关联对方的模型[表名]名称,次要
            //'mapping_fields' => 'pid,title', //对方显示的字段
            //'as_fields' => 'pid,title:ctitle', //合并数组，并对关联表增加别名，避免冲突
         ),	
    );
	*/
	
	protected $_validate=array(
	    array('title','namelength','标题长度至少2位',0,callback),
	    //array('title','','标题已存在',0,unique,1),
	    //array('model','3,15','密码长度必须为3-15位',0,length),	 
    );

	protected $_auto=array(
	    array('htime','ctime',1,'callback'),
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