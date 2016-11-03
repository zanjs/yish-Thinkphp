<?php
namespace Home\Controller;
use Think\Controller;
class WorkController extends CommonController {
	
	public function _empty(){
		
		$action = explode("_",ACTION_NAME);
		
		if($action[1]>0){
			$this->$action[0]($action[1]);
		}else{
			header("loaction:/");
		}
	}
	
    public function index(){
    	// seo
    	$category = M("Category");	
		$seo = $category->where("model='Work'")->find();
		$this->assign("seo",$seo);
		
		// 联系我们
		$contact = $category->where("model='Contact'")->find();
		$this->assign("contact",$contact);
		
		// 标签
		$wtag = M("WorkTag");
		$wTagList = $wtag->order("porder desc")->getField("id,title,subcontent",true);
		
		// 工作案例
		$work = M("Work");
		$worklist = $work->order("porder desc")->getField("id,title,flag,pic",true);
		$worklist = $this->opTagTwo($worklist,$wTagList);
		
		$this->assign("worklist",$worklist);

		$this->display("/work");
		
    }
	
	public function workShow($action){
		// 标签
		$wtag = M("WorkTag");
		$wTagList = $wtag->order("porder desc")->getField("id,title,subcontent",true);
		
		$work = M("Work");
		// 当前页面内容
		$workinfo = $work->where("id=".$action)->find();
		$workinfo = $this->opTag($workinfo,$wTagList);
		
		$this->assign("info",$workinfo);
		$this->assign("seo",$workinfo);
		
		// 上一页
		$workPrev = $work->where("id < $action")->order("id desc")->find();
		$this->assign("workPrev",$workPrev);
		
		// 下一页
		$workNext = $work->where("id > $action")->find();
		$this->assign("workNext",$workNext);
		
		$this->display("/workShow");
	}
	
}