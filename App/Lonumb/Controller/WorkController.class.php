<?php
namespace Lonumb\Controller;
use Think\Controller;
class WorkController extends CommonController{
	
	public function index(){
		$this->listPage("Work","id,title,pic,classid,htime,porder,recommend","Work"); //分页方法：【根据查询条件输出信息】		
		$this->selectCategory("id,title,porder","`model`='Work'");        //查询分类，导航分类
					
		$this->assign('geturl',$_GET); //传递GET值 给js使用 [定位与查询提交]	        	
     	$this->display("/work");
	}	

	public function add(){		
		if(isset($_POST['sub' ])){
			$this->addAuto('Work',__CONTROLLER__);	
		}else{
			$this->selectCategory("id,pid,title,porder","`model`='Work'"); //查询分类，导航分类		
			
			$wtag = M("WorkTag");
			$wTagList = $wtag->order("porder desc")->getField("id,title,subcontent",true);
			$this->assign("wtag",$wTagList);

			$this->display("/workEdit");
		}
	}
	
	public function edit(){
		if(isset($_POST['sub'])){
			$this->saveAuto("Work","id='".$_POST['id']."'",__CONTROLLER__);
		}else{	
            $this->selectCategory("id,pid,title,porder","`model`='Work'"); //查询分类，导航分类
						
			$wtag = M("WorkTag");
			$wTagList = $wtag->order("porder desc")->getField("id,title,subcontent",true);
			
			$list = $this->findAuto("Work","id='".$_GET['id']."'","art");
			$list = $this->opTag($list,$wTagList);

			$this->assign("wtag",$wTagList); // tag array 内容
			$this ->assign("art",$list);  //info find内容
			
			$this->display("/workEdit");
		}
	}
	
	public function del(){
		$this->delAuto("Work","id='".$_GET['id']."'",__CONTROLLER__);		
	}
	
	protected function opTag($info='',$tag=''){
		$flagArray = explode(",",$info['flag']);

		foreach($flagArray as $fval){
			foreach($tag as $tkey => $tval){
				if($fval == $tval['id']){
					$info['flagName'] .= $tval['title'].",";
				}
			}
		}		
		return $info;
	}

}	
	
?>