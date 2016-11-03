<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends CommonController {
	public function _empty(){
		$this->success("页面不存在","/");
	}
	
	public function index(){
		$this->success("页面不存在","/");
	}
}
