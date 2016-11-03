<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta content="yes" name=" apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
<title>login</title>
<link rel="stylesheet" href="/Public/admin/style/admin.css">
<link rel="stylesheet" href="/Public/admin/style/tag.css">
<script type="text/javascript" src="/Public/admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/admin/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/Public/admin/js/pub.js"></script>
</head>

<body>

<div class="login">
  <div class="loginBox">
     <h1><img src="/Public/admin/img/logo.png"><em>登录</em></h1>
     <p>亲爱的用户!, 欢迎您访问后台管理系统!</p>
     
     <form action="/Lonumb/Login/index" method="post" name="checkFormUser">
       <input type="text" name="user" placeholder="用户名" />
       <input type="password" name="pass" placeholder="密码" />
       <input type="submit" name="sub" value="用户登录" class="btn_black text_align_l" onclick="return checkForm()" />
     </form>
     
     <h2><a>忘记密码了怎么办?</a></h2>
     <h3>请联系管理员XPGOOD Network Technology Co., Ltd.</h3>
  </div>
  
  <div class="loginBottom btn_navyblue">Tags : 建议使用谷歌,火狐,360浏览器,不建议使用IE.</div>
</div>
<script type="text/javascript">
	function checkForm(){
	if (document.checkFormUser.user.value==""){
		alert("登录名不能为空");
		document.checkFormUser.user.focus();
		return false;
	}

	else if(document.checkFormUser.pass.value==""){
		alert("密码不能为空");
		document.checkFormUser.pass.focus();
		return false;
	}

  return true;  
}
</script>
</body>
</html>