<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义目录安全文件
// define('DIR_SECURE_FILENAME','default.html');
// 关闭目录安全文件
define('BUILD_DIR_SECURE',false);

// 绑定Home项目到当前入口文件
//define('BIND_MODULE','Home'); 作用：绑定后只能访问home文件内的页面
//绑定INDEX控制器到当前入口
//define('BIND_CONTROLLER','Index');  作用：绑定后只能访问index控制器

// 定义应用目录
define('APP_PATH','./App/');

// 引入ThinkPHP入口文件
require './System/ThinkPHP.php';

?>



