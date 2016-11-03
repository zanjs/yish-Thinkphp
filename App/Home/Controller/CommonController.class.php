<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function index(){
    	header("location:/");
    }
	
	public function __construct(){
		parent::__construct();
		
		$this->publicSet();	
		$this->publicMenu();
//		$this->publicLink();
	}
	
	/*
	 * 加载网站配置
	 */
	protected function publicSet(){
		$set = M("Set");
		$list = $set->find();
		$this->assign("set",$list);
	} 
	
	/*
	 * 加载网站导航
	 */
	protected function publicMenu(){
		$menu = M("Category");
		
		// 菜单
		$menut = $menu->where("pid=0 and menu_top=1")->order("porder desc")->getField("id,title,urllink",true);
		$this->assign("menut",$menut); 
		
		$menub = $menu->where("pid=0 and menu_bottom=1")->order("porder desc")->getField("id,title,urllink",true);
		$this->assign("menub",$menub); 
	}
		
	/*
	 * 加载友情链接
	 */
	protected function publicLink(){	
		$link = M("Link");
		$linklist = $link->where("status = 1")->order("porder desc")->getField("id,title,link",true);
		$this->assign("huoban",$linklist);
	}
	
	
	
	/********************************************
	 * 作用：新增内容
	 * @email: lonumb@qq.com
	 * date: 2016.05.17
	 ********************************************/
	public function addAuto($table='',$url='',$tags='创建成功!'){
	 	$addinfo = D($table);	
		if($addinfo->create()){
			if($addinfo->add()){
				$this->success($tags,$url);
			}else{
				$this->error();
			}				
		}else{
			$this->error($addinfo->getError());
		}		
	}
	
	/********************************************
	 * 作用：删除内容
	 * @email: lonumb@qq.com
	 * date: 2016.05.17
	 ********************************************/
	public function delAuto($table='',$where='',$url='',$tags='删除成功'){
	 	$delinfo=M($table);	
		if($delinfo->where($where)->delete()){
			$this->success($tags,$url);
		}else{			
			$this->error($delinfo->getError());
		}
	}
	
	/*******************************************
	 * 作用：更新内容
	 * @email: lonumb@qq.com
	 * date: 2016.05.17
	 *******************************************/ 
	public function saveAuto($table='',$where='',$url='',$tags='更新成功'){
	 	$saveinfo = D($table);
		if($saveinfo->create()){
			if($saveinfo->where($where)->save()){
				$this->success($tags,$url);
			}else{
				$this->error($saveinfo->getError());
			}
		}else{
			$this->error($saveinfo->getError());
		}		
	}
	
	/*******************************************
	 * 作用：输出内容              
	 * 查询单条内容[find方法]
	 * @email: lonumb@qq.com
	 * date: 2016.05.17
	 *******************************************/
	public function findAuto($table='',$where='',$modelname='lo',$callback=true){
	 	$findinfo = M($table);
		$list = $findinfo->where($where)->find();
		
		if($callback==true){
			$this->assign($modelname,$list);
		    $this->display();
		}else{
			return $list;
		}			
	}
	
	/*******************************************
	 * 作用：输出内容              
	 * 查询多条内容[getField方法]
	 * @email: lonumb@qq.com
	 * date: 2016.05.17
	 *******************************************/
	public function getFieldAuto($table='',$where='',$field='',$limit='',$order='porder desc',$modelname='lo',$callback=true){
		$selinfo = M($table);
		$list = $selinfo->where($where)->order($order)->limit($limit)->getField($field,true);
		
		if($callback==true){
			$this->assign($modelname,$list);
		    $this->display();
		}else{
			return $list;
		}			
	}
	
	
	/*******************************************
	 * 作用：分类排序   [多重排序]
	 * @email: lonumb@qq.com
	 * date: 2016.05.17
	 *******************************************/
	protected function orderCategory($cate,$html="&nbsp;&nbsp;+&nbsp;",$pid=0,$level=0){
		$arr=array();
		foreach($cate as $v){
			if($v['pid']==$pid){
				$v['level'] =$level+1;
				$v['html']=str_repeat($html,$level);
				$arr[]=$v;
				$arr=array_merge($arr,$this->orderCategory($cate,$html,$v['id'],$level+1));
			}
		}
		return $arr;
	}
	
	
	/*******************************************
	 * 作用：标签排序   [单层反转]
	 * @email: lonumb@qq.com
	 * date: 2016.06.30
	 *******************************************/
	protected function opTag($info='',$tag=''){
		$flagArray = explode(",",$info['flag']);

		foreach($flagArray as $fval){
			foreach($tag as $tkey => $tval){
				if($fval == $tval['id']){
					$info['flagName'] .= $tval['title']." / ";
				}
			}
		}		
		return $info;
	}
	// 多层
	protected function opTagTwo($info='',$tag=''){
		$wArr = array();
		foreach($info as $tval){
			$flagArray = explode(",",$tval['flag']);
			foreach($flagArray as $twoval){
				foreach($tag as $tagval){
					if($twoval == $tagval['id']){
				        $tval['flagName'] .= $tagval['title']." / ";
			        }						
				}						
			}
			$wArr[]=$tval;	
		}
		return $wArr;
	}
	 
}

//echo date('Y-m-d h:i:s'); // 获取当前带格式的日期与时间 Y-m-d h-i-s
//      echo "<br />";
//		
//		echo time(); //获取当前时间缀
//		echo "<br />";
//		
//		echo date('Y年m月d日 h:i:s','1457077151'); //指定时间戳转换为格式日期与时间
//		echo "<br />";
//		
//		echo strtotime('next day','2016-03-04 03:40:41'); //指定
//		echo "<br />";