<?php
namespace Lonumb\Controller;
use Think\Controller;
class ClientsController extends CommonController{
	
	public function index(){
		$this->listPage("Clients","id,title,pic,classid,htime,porder,status,recommend","Clients"); //分页方法：【根据查询条件输出信息】		
		$this->selectCategory("id,title,porder","`model`='Clients'");        //查询分类，导航分类
					
		$this->assign('geturl',$_GET); //传递GET值 给js使用 [定位与查询提交]	        	
     	$this->display("/clients");
	}	

	public function add(){		
		if(isset($_POST['sub' ])){
			$this->addAuto('Clients',__CONTROLLER__);	
		}else{
			$this->selectCategory("id,pid,title,porder","`model`='Clients'"); //查询分类，导航分类		
			$this->display("/clientsEdit");
		}
	}
	
	public function edit(){
		if(isset($_POST['sub'])){
			$this->saveAuto("Clients","id='".$_POST['id']."'",__CONTROLLER__);
		}else{	
            $this->selectCategory("id,pid,title,porder","`model`='Clients'"); //查询分类，导航分类
			$list = $this->findAuto("Clients","id='".$_GET['id']."'","art");
			$this ->assign("art",$list);
			$this->display("/clientsEdit");
		}
	}
	
	public function del(){
		$this->delAuto("Clients","id='".$_GET['id']."'",__CONTROLLER__);		
	}

}	
	
?>