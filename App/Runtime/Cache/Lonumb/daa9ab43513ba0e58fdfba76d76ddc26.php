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
<div class="mainBox">
  <div class="main">
  
     <div class="m_list_title">
       <h1>栏目管理</h1>
     </div>
     
     <div class="m_list_operate">
       <dl>
         <dd><a href="/Lonumb/Category/add">添加</a></dd>
       </dl>
     </div>
     <div class="m_list_table" id="listTable">
       <table cellspacing="0">
         <thead>
           <tr>
             <td><input type="checkbox" name="allDel" onclick="selectList(this)"></td>
             <td>栏目名称</td> 
             <td>类型</td> 
             <td>导航显示-顶部</td>
             <td>栏目启用</td> 
             <td>排序</td> 
             <td>操作</td>
           </tr>
         </thead>
         <tbody>
         	<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
             <td><input type="checkbox" name="<?php echo ($vo["id"]); ?>"></td>
             <td><?php echo ($vo['html']); echo ($vo['title']); ?></td>  
             <td><?php if($vo['pagetype']=="page"){echo "单页";}else if($vo['pagetype']=="list"){echo "列表";}else{echo "链接";} ?></td> 
             <td><?php echo ($vo['menu_top']); ?></td> 
             <td><?php echo ($vo['status']); ?></td>  
             <td><?php echo ($vo['porder']); ?></td> 
             <td>
             	<a href="/Lonumb/Category/edit/id/<?php echo ($vo['id']); ?>">修改</a>
             	<a onclick="return delList();" href="/Lonumb/Category/del/id/<?php echo ($vo['id']); ?>">删除</a>   
             	<a href="/Lonumb/Category/page/id/<?php echo ($vo['id']); ?>"><?php if($vo['pagetype']=="page"){echo "内容编辑";} ?></a>
             </td>
           </tr><?php endforeach; endif; else: echo "" ;endif; ?>
         </tbody>
       </table>
     </div>
     
     <div class="m_list_page">
       <ul>
         <li><!--input type="submit" name="searchName" class="btn_black" value="删除"--></li>
         <li id="pageInfo">添加后自动生成新的分类.</li>
       </ul>       
       <dl id="splitPage">
       	  
       </dl>  
     </div>

  </div>
</div>
<script type="text/javascript">
	$("#listTable input").mouseover(function(){
	  $(this).css({"border":"1px solid #999"});
	});
	$("#listTable input").mouseout(function(){
	  $(this).css({"border":"none"});
	});
</script>

<!-------------------------
  网站公共页bottom
  -------------------------->
<div class="footer">
  <h1>© 2016 <a href="#">XPGOOD</a> More Website - beta 1.0 <a href="/Lonumb/Login/outlogin">退出登录</a></h1>
</div>