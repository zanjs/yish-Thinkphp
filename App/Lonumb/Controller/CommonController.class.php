<?php
namespace Lonumb\Controller;
use Think\Controller;
class CommonController extends Controller {
    
    public function index(){
		header("Location: /".MODULE_NAME);
	} 
	
	/********************************************
	 * 作用：初始化操作
	 * @email: lonumb@qq.com
	 * date: 2016.01.01
	 *******************************************/	 
	public function __construct(){
		parent::__construct(); //必需，否则出现致命错误
		$this->checkLogin(); //判断用户是否登录
		$this->getUser(); //获取用户信息	
		$this->publicMenu(); //载入公共菜单
	}
		
	 /********************************************
	 * 作用：判断用户是否登录
	 * @email: lonumb@qq.com
	 * date: 2016.01.01
	 *******************************************/	 
	protected function checkLogin() {
		if(!empty($_SESSION['user'])){
			return TRUE;
		}else{
			header("Location:/".MODULE_NAME."/login");
		}
    }	
		
	/********************************************
	 * 作用：读取用户信息
	 * @email: lonumb@qq.com
	 * date: 2016.01.01
	 ********************************************/	
	protected function getUser() {        
		$userLogin=M('Admin');
		$ulist=$userLogin->where("`user`='".$_SESSION['user']."'")->find();
		$this->assign("userinfo",$ulist);
    }
    
	/********************************************
	 * 作用：载入分类区内容栏目列表
	 * @email: lonumb@qq.com
	 * date: 2016.01.01
	 ********************************************/	
	protected function publicMenu() {        
		$info = M('Category');
		$infolist = $info->where("pid=0 and pagetype='list'")->getField("id,model,title",true);
		$this->assign("leftMenu",$infolist);
    }
	
	/********************************************
	 * 作用：新增内容
	 * @email: lonumb@qq.com
	 * date: 2016.05.17
	 ********************************************/
	protected function addAuto($table='',$url='',$tags='创建成功!'){
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
	protected function delAuto($table='',$where='',$url='',$tags='删除成功'){
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
	protected function saveAuto($table='',$where='',$url='',$tags='更新成功'){
	 	$saveinfo = D($table);
		if($saveinfo->create()){
			if($saveinfo->where($where)->save()){
				$this->success($tags,$url);
			}else{
				$this->error($saveinfo->getError());
			}
		}else{
			$this->error();
		}		
	}
	
	/*******************************************
	 * 作用：输出内容              
	 * 查询单条内容[find方法]
	 * @email: lonumb@qq.com
	 * date: 2016.05.17
	 *******************************************/
	protected function findAuto($table='',$where=''){
	 	$findinfo = M($table);
		$list = $findinfo->where($where)->find();
		return $list;		
	}
	
	/*******************************************
	 * 作用：输出内容              
	 * 查询多条内容[getField方法]
	 * @email: lonumb@qq.com
	 * date: 2016.05.17
	 *******************************************/
	protected function getFieldAuto($table='',$where='',$field='',$limit='',$order='porder desc',$modelname='lo',$callback=true){
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
	 * 作用：查询分类--排序   [针对分类查询] 简化分类查询
	 * @email: lonumb@qq.com
	 * date: 2016.05.20
	 *******************************************/
	protected function selectCategory($field="",$where="1",$order="porder desc",$table="Category",$modelName="cate"){
		$cate = M($table);
		$list = $cate->where($where)->order($order)->getField($field,true);
        $list = $this->orderCategory($list); //排序
		$this->assign($modelName,$list);
	} 
	
	/*******************************************
	 * 作用：根据信息的classid 取得信息所属的分类名称  【由classid 转换为 title】
	 * @email: lonumb@qq.com
	 * date: 2016.05.20
	 *******************************************/ 
	protected function reversalClassName($list="",$where="",$field="",$table="Category"){
		$cate = M($table);
		$catelist = $cate->where($where)->getField($field,true);	
		
		$newArray=array();
		foreach($list as $skey=>$sval){	
	 	    foreach($catelist as $mkey => $mval){
			    if($sval['classid']==$mval['id']){
				    $sval['classid']=$mval['title'];
					$newArray[$skey]=$sval;
				}else{
					$newArray[$skey]=$sval;
				}
		    }
		}
		return $newArray;
	}
	
	/*******************************************
	 * 作用：信息列表页信息查询方法
	 * @email: lonumb@qq.com
	 * date: 2016.05.21
	 *******************************************/ 
	protected function listPage($table="",$field="",$cateModel=""){
		$subClass = isset($_GET['subClass']) ? "classid='".$_GET['subClass']."' and " : ""; //获取分类名称
		$searchName = preg_replace("/\s/","a",$_GET['searchName']);
		$numPage = isset($_GET['numPage']) ? $_GET['numPage'] : 10; //获取每页显示数量
		$splitPage = isset($_GET['splitPage']) && $_GET['splitPage'] != 0 ? $_GET['splitPage']:1; //获取分页标签  
		
		$where = $subClass;
		$where .= isset($searchName) ? "title LIKE '%$searchName%'" : 1;
		$order = "porder desc";
		$limit = $splitPage>1 ? ($splitPage-1)*$numPage : 0;
		$limit .= ",".$numPage;


		$info = M($table);		
		$list = $info->where($where)->order($order)->limit($limit)->getField($field,true);  //输出查询结果
		$listNum = $info->where($where)->count(); //查询用户列表总数		

        $list = $this->reversalClassName($list,"`model`='$cateModel'","id,model,title"); //对查询结果的分类id 名称处理
		$this->assign('infolist',$list);  //传递给模版的值 [内容查询]		
		$this->assign('count',$listNum);  //传递给模版的值[当前查询的总数]	
	}
	
}