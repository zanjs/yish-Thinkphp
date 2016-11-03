<?php
namespace Lonumb\Controller;
use Think\Controller;
class WorkTagController extends CommonController{
	
	public function index(){

		$art=M('WorkTag');
		
		$searchName =preg_replace("/\s/","a",$_GET['searchName']);
		$numPage=$_GET['numPage']; //获取每页显示数量
		$splitPage=$_GET['splitPage']; //获取分页标签  
		
		//搜索字段
		$sName=(isset($searchName)) ? "title LIKE '%$searchName%'" : 1;		
		//数据查询每页显示数据
		$nPage=(isset($numPage)) ? $numPage : 10;  
		//分页数量
		$sPage=(isset($splitPage) && $splitPage != 0) ? $splitPage:1; 
        //数据查询起始数
		$sPage=($sPage>1) ? ($sPage-1)*$nPage : 0; //定义数据开始查询的起始点
		//输出查询结果
		$list=$art->where($sName)->limit($sPage,$nPage)->order('classid desc')->getField("id,classid,title,status,porder,pic,htime",true);  
		
		//查询用户列表总数
		$allNum=$art->where($sName)->count(); 

		$this->assign('art',$list);  //传递给模版的值 [内容查询]				
		$this->assign('geturl',$_GET); //传递GET值 给js使用 [定位与查询提交]		
        $this->assign('count',$allNum);  //传递给模版的值[当前查询的总数]		
	
     	$this->display("/workTag");
	}


	public function add(){		
		if(isset($_POST['sub' ])){
			$this->addAuto('WorkTag',__CONTROLLER__);	
		}
		$this->display("/workTagEdit");
	}
	
	public function edit(){
		if(isset($_POST['sub'])){
			$this->saveAuto("WorkTag","id='".$_POST['id']."'",__CONTROLLER__);			
		}else{	
			$list = $this->findAuto("WorkTag","id='".$_GET['id']."'");
			$this->assign("art",$list);
			$this->display("/WorkTagEdit");
		}		
	}
	
	public function del(){
		$this->delAuto("WorkTag","id='".$_GET['id']."'");		
	}

}	
	
?>