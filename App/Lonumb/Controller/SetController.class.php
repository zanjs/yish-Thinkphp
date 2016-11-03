<?php
namespace Lonumb\Controller;
use Think\Controller;	
class SetController extends CommonController{
	
	public function index(){
		if(isset($_POST['sub'])){
			$this->saveAuto("Set","id='".$_POST['id']."'","","编辑成功");			
		}else{	
			$list = $this->findAuto("Set","1");
			$this->assign("set",$list);
			$this->display("/setEdit");
		}
	}
}	
	
?>