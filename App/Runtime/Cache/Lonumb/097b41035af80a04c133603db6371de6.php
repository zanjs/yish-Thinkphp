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
      <?php if(is_array($leftMenu)): $i = 0; $__LIST__ = $leftMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$leftMenu): $mod = ($i % 2 );++$i;?><dd><a href="/Lonumb/<?php echo ($leftMenu['model']); ?>"><?php echo ($leftMenu['title']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
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
<form action="/Lonumb/Clients/edit" method="post">
<div class="mainBox">
  <div class="main">
     <div class="m_list_title">
       <h1>编辑内容</h1>
     </div>
     
     <div class="m_forms">
       <dl>
         <dd>
           <label>选择分类: </label>
           <select name="classid" id="classFixed">
           	  <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cate['id']); ?>"><?php echo ($cate['html']); echo ($cate['title']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
           </select>
         </dd>
         <dd>
           <label>标题 : </label>
           <input type="text" name="title" value="<?php echo ($art['title']); ?>">
           	<input type="hidden" name="id" value="<?php echo ($art['id']); ?>">
         </dd>
         <dd>
           <label>图片 : </label>
           <input class="input_on1" type="text" name="pic" id="url1" value="<?php echo ($art['pic']); ?>">
           <input class="input_on2" type="button" value="浏览" id="image1">
         </dd>           
         <dd>
           <label>是否显示 : </label>
           <input type="text" name="status" value="<?php echo ($art['status']); ?>">
         </dd>
         <dd>
           <label>排序 : </label>
           <input type="text" name="porder" value="<?php echo ($art['porder']); ?>">
         </dd>
         <!--dd>
           <label>点击次数 : </label>
           <input type="text" name="hits" value="<?php echo ($art['hits']); ?>">
         </dd-->
        </dl>        
     </div>
     
     <div class="m_forms_submit">
       <ul>
         <li>:) 网站信息添加后立即生效!</dd>
       </ul>
     </div>
  </div>
  
  <div class="main" style="margin-top: 20px;">
  	<div class="m_list_title">
       <h1>优化信息</h1>
    </div>  
    <div class="m_forms">
       <dl>
         <dd>
           <label>seo title : </label>
           <input type="text" name="seo_title" value="<?php echo ($art['seo_title']); ?>">
         </dd>
         <dd>
           <label>seo keywords : </label>
           <input type="text" name="seo_keywords" value="<?php echo ($art['seo_keywords']); ?>">
         </dd>    
         <dd>
           <label>seo description : </label>
           <textarea type="text" name="seo_description"><?php echo ($art['seo_description']); ?></textarea>
         </dd>    
       </dl>       

     </div>
     
     <div class="m_forms_submit">
       <ul>
         <li>(: &nbsp;所有信息都已添加完成,可以提交啦！</dd>
       </ul>
       <dl>
         <dd>+</dd>
         <dt><input class="btn_white" type="submit" name="sub" value="完成编辑"></dt>
       </dl> 
     </div>     
  </div>
  
</div>
</form>

<script type="text/javascript">
function opFixed(cFixed,_np){
	  var cfOption = document.getElementById(cFixed).getElementsByTagName("option");    
	  for(var i=0;i<cfOption.length;i++){
	  	  if(cfOption[i].value==_np){
	  	  	  cfOption[i].selected = true;
	  	  	  break;
	  	  }
	  	
	  }
}
opFixed("classFixed","<?php echo ($art['classid']); ?>");
</script>

<!-------------------------
  网站公共页bottom
  -------------------------->
<div class="footer">
  <h1>© 2016 <a href="#">XPGOOD</a> More Website - beta 1.0 <a href="/Lonumb/Login/outlogin">退出登录</a></h1>
</div>