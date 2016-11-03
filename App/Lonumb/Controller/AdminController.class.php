<?php
namespace Lonumb\Controller;
use Think\Controller;
class AdminController extends CommonController{
	
	public function index(){
		
		$user=M('Admin');
		
		$searchName=$_GET['searchName']; //获取搜索名称
		$numPage=$_GET['numPage']; //获取每页显示数量
		$splitPage=$_GET['splitPage']; //获取分页标签  
		
		//搜索user字段
		$sName=(isset($searchName)) ? "user LIKE '%$searchName%'" : 1;		
		//数据查询每页显示数据
		$nPage=(isset($numPage)) ? $numPage : 10;  
		//分页数量
		$sPage=(isset($splitPage) && $splitPage != 0) ? $splitPage:1; 
        //数据查询起始数
		$sPage=($sPage>1) ? ($sPage-1)*$nPage : 0; //定义数据开始查询的起始点
		//输出查询结果
		$userlist=$user->where($sName)->limit($sPage,$nPage)->select();  
		//查询用户列表总数
		$allNum=$user->where($sName)->count(); 

		$this->assign('user',$userlist);  //传递给模版的值				
		$this->assign('geturl',$_GET); //传递GET值 给js使用 [定位与查询提交]		
        $this->assign('count',$allNum);  //传递给模版的值	
		
     	$this->display("/admin");
	}
	
	public function edit(){
		if(isset($_POST['sub'])){
			$this->saveAuto("Admin","id='".$_POST['id']."'",__CONTROLLER__,"编辑成功");	
		}else{
			$list = $this->findAuto("Admin","1");
			$this->assign("user",$list);
			$this->display("/adminEdit");
		}
	}
}	
	
?>