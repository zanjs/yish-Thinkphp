<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
	
	public function _empty(){
		header('Location:/');
	}
	
	public function bannerList($adv='',$classid){
		$advArr = array();	
		foreach($adv as $key){
			if($key['classid']==$classid){
				$advArr[] = $key;
			}			
		}
		return $advArr;		
	}
	
    public function index(){
    	
    	$category = M("Category");	
		// 首页seo
		$seo = $category->where("model='Index'")->find();
		$this->assign("seo",$seo);
				
		// 关于我们内容
		$about = $category->where("pid>0 and model='About'")->getField("id,title,content1",true);
		$this->assign("about",$about);
		$this->assign("aboutText",$about);
		
		// 联系我们
		$contact = $category->where("model='Contact'")->find();
		$this->assign("contact",$contact);
		
		// 友情链接
		$clients = $category->where("model='Clients'")->find();
		$this->assign("clients",$clients);
		
		// 友情链接列表
		$clist = M("Clients");
		$clientslist = $clist->where("status=1")->order("porder desc")->getField("id,pic,classid",true);
		$this->assign("clist",$clientslist);
		
		// banner广告图
    	$advert = M("Advert");
		$advlist = $advert->where("status=1")->order("porder desc")->getField("id,pic,classid,urllink",true);
		$advpc = $this->bannerList($advlist,1);
		$advwap = $this->bannerList($advlist,2);
		
		$this->assign("advpc",$advpc);
		$this->assign("advpctitle",$advpc);
		
		$this->assign("advwap",$advwap);
		$this->assign("advwaptitle",$advwap);
		
		// 案例标签
		$wtag = M("WorkTag");
		$wTagList = $wtag->order("porder desc")->getField("id,title,subcontent",true);
		
		// 工作案例
		$work = M("Work");
		$worklist = $work->where("recommend=1")->order("porder desc")->limit(0,10)->getField("id,title,flag,pic",true);
		$worklist = $this->opTagTwo($worklist,$wTagList);
		$this->assign("worklist",$worklist);
		
		$this->display("/index");
		
    }
	
}