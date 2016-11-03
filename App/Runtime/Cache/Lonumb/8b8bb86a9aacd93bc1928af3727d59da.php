<?php if (!defined('THINK_PATH')) exit();?><!-------------------------
  网站公共页header
  -------------------------->
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta content="yes" name=" apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
<title>XPGOOD-网站后台管理</title>
<link rel="stylesheet" href="/Public/admin/style/admin.css">
<link rel="stylesheet" href="/Public/admin/style/main.css">
<link rel="stylesheet" href="/Public/admin/style/tag.css">
<script type="text/javascript" src="/Public/admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/admin/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/Public/admin/js/pub.js"></script>
<script charset="utf-8" src="/editor/kindeditor.js"></script>
<script charset="utf-8" src="/editor/lang/zh_CN.js"></script>

<script type="text/javascript">

KindEditor.ready(function(K) {
      window.editor = K.create('#MyContent',{
					width:'80%',
					height:'300px',
					pasteType : 1, //设置粘贴类型，0:禁止粘贴, 1:纯文本粘贴, 2:HTML粘贴
					filterMode:false,  //true时根据 htmlTags 过滤HTML代码，false时允许输入任何代码。
					allowFileManager:true,
					items:
					[
//					    'source','|',
//						'cut','copy','paste','wordpaste','|',
//						'justifyleft','justifycenter','justifyright','indent','outdent','|',
//						'insertorderedlist','insertunorderedlist','|',
//						'subscript','superscript','|',
//						'formatblock','fontname','fontsize','forecolor','hilitecolor','|',
//						'bold','italic','underline','strikethrough','|',
//						'image','flash','media','|',
//						'table','link','unlink','unline',
//						'baidumap',
						'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',

		'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',

		'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',

		'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',

		'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',

		'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',

		'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',

		'anchor', 'link', 'unlink', '|', 'about'
					],				   

			});

				var editor = K.editor({
					allowFileManager : true
				});

				K('#image1').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							imageUrl : K('#url1').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url1').val(url);
								editor.hideDialog();
							}
						});
					});
				});
				
				K('#image2').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							imageUrl : K('#url2').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url2').val(url);
								editor.hideDialog();
							}
						});
					});
				});
				
				K('#image3').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							imageUrl : K('#url3').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url3').val(url);
								editor.hideDialog();
							}
						});
					});
				});
				
				K('#image4').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							imageUrl : K('#url4').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url4').val(url);
								editor.hideDialog();
							}
						});
					});
				});


});

</script>
</head>

<body>

<div class="left" id="autoHeight">
  <div class="leftLogo">
    <a href="/" target="_blank"><img src="/Public/admin/img/logo_2.png"></a>
  </div>
  
  <div class="leftRow" id="leftFixed">
    <dl>
      <dt><i>内容管理</i><em>&gt;</em></dt>
      <dd><a href="/Lonumb/Set">网站设置</a></dd>
      <dd><a href="/Lonumb/Admin">管理员设置</a></dd>
    </dl>
  </div>
</div>

<div class="menu" id="menu">
  <dl>
    <dd><a href="/Lonumb"><i><img src="/Public/admin/img/icon_write/menu_1.png"></i><em>控制台</em></a></dd>
    <dd><a href="/Lonumb/Category"><i><img src="/Public/admin/img/icon_write/menu_2.png"></i><em>栏目管理</em></a></dd>    
    <dd><a href="/Lonumb/Advert"><i><img src="/Public/admin/img/icon_write/menu_4.png"></i><em>广告管理</em></a></dd>    
  </dl>
  <ul>
    <li><i><img src="<?php echo ($userinfo['photo']); ?>"></i></li>
    <li><p>Hi <?php echo ($userinfo['user']); ?>!</p></li>
    <li><a href="/Lonumb/Login/outlogin">退出</a></li>
  </ul>
</div>

<!--include file="Public:tag" /-->

<!-------------------------
  网站分离页Main
  -------------------------->
<div class="mainBox">

  <div class="main">
  
     <div class="m_list_title">
       <h1>系统信息</h1>
     </div>
     
     <div class="m_text">
       <dl>
         <dt>
           <h1>系统配置项</h1>
           <p>系统参数值</p>
         </dt>
         <dd>
           <h1>XPGOOD 版本 : </h1>
           <p><?php echo C('LO_VERSION');;?></p>
         </dd>
         <dd>
           <h1>操作系统 ：</h1>
           <p><?php echo PHP_OS;?></p>
         </dd>
         <dd>
           <h1>PHP版本: </h1>
           <p><?php echo PHP_VERSION;?></p>
         </dd>
         <dd>
           <h1>服务器地址: </h1>
           <p><?php echo $_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT'];?></p>
         </dd>
         <dd>
           <h1>ThinkPHP版本: </h1>
           <p><?php echo (THINK_VERSION); ?></p>
         </dd>
         <dd>
           <h1>GD 库: </h1>
           <p><?php if(function_exists("imageline")==1){ $gd = gd_info(); echo $gd['GD Version'];} else { echo '<font color=red><b>×</b></font>'; }?></p>
         </dd>
         <dd>
           <h1>MySQL 版本: </h1>
           <p><?php echo mysql_get_server_info();?></p>
         </dd>
         <dd>
           <h1>服务器时间: </h1>
           <p><?php echo date("Y-m-d H:i:s",time());?></p>
         </dd>
         <dd>
           <h1>WEB服务器: </h1>
           <p><?php echo $_SERVER['SERVER_SOFTWARE'];?></p>
         </dd>
         <dd>
           <h1>服务器语言: </h1>
           <p><?php echo getenv("HTTP_ACCEPT_LANGUAGE");?></p>
         </dd>
         <dd>
           <h1>POST提交限制: </h1>
           <p><?php echo get_cfg_var("post_max_size");?></p>
         </dd>
         <dd>
           <h1>图像处理支持: </h1>
           <p><?php if(function_exists("imageline")==1){ echo '<font color=green><b>√</b></font>'; } else { echo '<font color=red><b>×</b></font>'; } ?></p>
         </dd>
         <dd>
           <h1>Session支持:</h1>
           <p><?php if(function_exists("session_start")==1){ echo '<font color=green><b>√</b></font>'; } else { echo '<font color=red><b>×</b></font>'; } ?></p>
         </dd>
         <dd>
           <h1>脚本运行内存: </h1>
           <p><?php echo get_cfg_var("memory_limit")?get_cfg_var("memory_limit"):"无";?></p>
         </dd>
         <dd>
           <h1>上传大小限制: </h1>
           <p><?php echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传文件";?></p>
         </dd>
         <dd>
           <h1>脚本超时时间: </h1>
           <p><?php echo get_cfg_var("max_execution_time");?> s</p>
         </dd>
         <dd>
           <h1>被屏蔽的函数: </h1>
           <p><?php echo get_cfg_var("disable_functions")?get_cfg_var("disable_functions"):"无";?></p>
         </dd>
       </dl> 
     </div>
     
     <div class="m_forms_submit">
       <ul>
         <li>(: &nbsp;用户名：<?php echo ($userinfo['user']); ?>   登录IP为: <?php echo ($_SERVER['REMOTE_ADDR']); ?>！</dd>
       </ul>
     </div>

  </div>
</div>
<!-------------------------
  网站公共页bottom
  -------------------------->
<div class="footer">
  <h1>© 2016 <a href="#">XPGOOD</a> More Website - beta 1.0 <a href="/Lonumb/Login/outlogin">退出登录</a></h1>
</div>