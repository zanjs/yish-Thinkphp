<?php
namespace Lonumb\Controller;
use Think\Controller;
class CategoryController extends CommonController {

    public function index(){
		$this->selectCategory("id,model,title,pid,pagetype,pagetitle,menu_top,menu_slide,menu_bottom,status,porder,add_time,up_time");	
		$this->display("/category");
    }
	
	public function add(){
		if(isset($_POST['sub'])){
			$this->addAuto("Category",__CONTROLLER__);
		}		
		$this->selectCategory("id,title,pid,porder");
		$this->display("/categoryEdit");
	}
	
	public function edit(){
		if(isset($_GET['id'])){
			$this->selectCategory("id,title,pid,porder");
			$list = $this->findAuto("Category","`id`='".$_GET['id']."'");
			$this->assign("lo",$list);
			$this->display("/categoryEdit");
		}
		if(isset($_POST['sub'])){
			$this->saveAuto("Category","`id`='".$_POST['id']."'",__CONTROLLER__);
		}
	}
	
	public function page(){
		if(isset($_GET['id'])){
			$list = $this->findAuto("Category","`id`='".$_GET['id']."'");	
			$this->assign("lo",$list);	
			$this->display("/pageEdit");
		}				
		if(isset($_POST['sub'])){
			$this->saveAuto("Category","`id`='".$_POST['id']."'",__CONTROLLER__);
		}
	}
	
    public function del(){
    	$cate=M('Category');
		if($cate->where("pid=".$_GET['id'])->find()){
			$this->success("清空内容后再删除",__CONTROLLER__);
		}else{
			$this->delAuto("Category","`id`=".$_GET['id'], __CONTROLLER__ );	
		}
	}
		
		
			
		
		

}