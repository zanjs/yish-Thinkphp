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
      <dd><a href="/Lonumb/Advert">首页广告图</a></dd>
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
       <h1>广告列表</h1>
     </div>
     
     <div class="m_list_operate">
       <dl>
         <dd><a href="/Lonumb/Advert/add">添加</a></dd>
       </dl>

     </div>
     
     <div class="m_list_table" id="listTable">
       <table cellspacing="0">
         <thead>
           <tr>
             <td><input type="checkbox" name="allDel" onclick="selectList(this)"></td>
             <td>信息标题</td>  
             <td>图片</td> 
             <td>分类</td> 
             <td>是否显示</td> 
             <td>排序</td> 
             <td>创建时间</td> 
             <td>操作</td>
           </tr>
         </thead>
         <tbody>
         	<?php if(is_array($art)): $i = 0; $__LIST__ = $art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lo): $mod = ($i % 2 );++$i;?><tr>
             <td><input type="checkbox" name="<?php echo ($lo['id']); ?>"></td>
             <td><?php echo ($lo['title']); ?></td>  
             <td><img height="40px" src="<?php echo ($lo['pic']); ?>"></td>  
             <td><?php if($lo['classid']==1){echo "电脑端";}else{echo "手机端";} ?></td> 
             <td><?php echo ($lo['status']); ?></td> 
             <td><?php echo ($lo['porder']); ?></td> 
             <td><?php echo ($lo['htime']); ?></td> 
             <td><a href="/Lonumb/Advert/edit/id/<?php echo ($lo['id']); ?>">编辑</a><a onclick="return delList();" href="/Lonumb/Advert/del/id/<?php echo ($lo['id']); ?>">删除</a></td>
           </tr><?php endforeach; endif; else: echo "" ;endif; ?>
         </tbody>
       </table>
     </div>
     
     <div class="m_list_page">
       <ul>
         <li><!--input type="submit" name="searchName" class="btn_black" value="删除"--></li>
         <li id="pageInfo"></li>
       </ul>       
       <dl id="splitPage"></dl>  
     </div>

  </div>
</div>



<script type="text/javascript">

//获取get值
var _sp=parseInt("<?php echo ($geturl['splitPage']); ?>");
var _count=parseInt("<?php echo ($count); ?>");

//转化get值
var is_sp=(_sp>=1) ? _sp : 1;

//重新定义get，并转化为提交值
var sp_sub=(_sp>=1) ? "/splitPage/"+_sp : "";

//分页标签
var spBox=document.getElementById("splitPage");
var spDd=spBox.getElementsByTagName("dd");
//pageinfo
var pageinfo=document.getElementById("pageinfo");
 
 
//tags:本例使用定义分页标签显示数为5 进行+号操作时，  
  var pageCount=(_count % 10==0) ? _count/10 : (_count-(_count%10))/10+1;  //定义总分页数量，尾页标记
  var numStart,numEnd;
  if(pageCount<=5){ //分页总数 <= 5时  ，初始状态
		  numStart=1;
			numEnd=pageCount;
	}else if(is_sp<=3){ //起始页 <= 3时
		  numStart=1;
			numEnd=5;
	}else if(is_sp+2>pageCount){ //结尾状态
			numStart=pageCount-4;
		  numEnd=pageCount;  
	}else{
		  numStart=is_sp-2;
			numEnd=is_sp+2;	 
	}

/////////////////////////////////创建标签
function createButton(){	
  var createdd="<dd>首页</dd>";
  for(var dd=numStart;dd<=numEnd;dd++){
  	createdd+="<dd>"+dd+"</dd>";  	
  }
  createdd+="<dd>尾页</dd>";

  spBox.innerHTML=createdd;
  pageInfo.innerHTML="共查询出"+_count+"条数据 , 当前第"+is_sp+"页  共"+pageCount+" 页";
  
  if(spDd.length>2){
  	spDd[1].className="m_list_page_on"; //创建完成后，立即赋值于第二个dd
  }
  
}

//////////////////////////提交
spBox.onmouseover=function(){
	spDd[0].onclick=function(){
    		location.href='/Lonumb/Advert/index/splitPage/1';
  }
	for(var s=1;s<spDd.length;s++){
		spDd[s].index=s;
        spDd[s].onclick=function(){
    		if(spDd[this.index].className=="m_list_page_on"){
    			return false;
    		}else{
    			location.href='/Lonumb/Advert/index/splitPage/'+spDd[this.index].innerHTML;
    		}
        }
	}		
	spDd[spDd.length-1].onclick=function(){
    		location.href='/Lonumb/Advert/index/splitPage/'+pageCount;
	}
}

///////////////////////标签定位
function splitFixed(){
	  if(_sp!=""){
	    for(var j=1;j<spDd.length;j++){
	  	  if(spDd[j].innerHTML==_sp){
	  		  for(var j1=0;j1<spDd.length;j1++){
	  			  spDd[j1].className="";
	  		  }
	  		  spDd[j].className="m_list_page_on";
	  	  }
	  	 }
	  }
}


createButton(); //创建按钮标签
splitFixed(); //分布标签标签定位
submitSplit();  //提交分页






</script>
<!-------------------------
  网站公共页bottom
  -------------------------->
<div class="footer">
  <h1>© 2016 <a href="#">XPGOOD</a> More Website - beta 1.0 <a href="/Lonumb/Login/outlogin">退出登录</a></h1>
</div>