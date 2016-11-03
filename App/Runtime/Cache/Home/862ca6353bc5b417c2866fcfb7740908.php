<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo ($seo['seo_title']); ?></title>
<meta name="keywords" content="<?php echo ($seo['seo_keywords']); ?>">
<meta name="description" content="<?php echo ($seo['seo_description']); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no ">
<meta name="applicable-device" content="pc,mobile">

<link href="/Public/home/style/common.css" rel="stylesheet">
<link href="/Public/home/style/module.css" rel="stylesheet">
<link href="/Public/home/style/module-wap.css" rel="stylesheet">
<script src="/Public/home/script/jquery-1.12.2.min.js"></script>
<script src="/Public/home/script/super-slide.js"></script>
<script src="/Public/home/script/touch-slide.js"></script>
<script src="/Public/home/script/common.js"></script>
<script src="/Public/home/script/custom.js"></script>
</head>

<body style="background:#f4f4f4;">
<div class="wrap"> 
  <!---导航菜单-->
  <div class="menu" id="menu">
    <div class="menuIn">
      <h1><img src="<?php echo ($set['logo']); ?>"></h1>
      <h2><?php echo ($set['sitename']); ?></h2>
      <h3><img src="/Public/home/images/menu_icon.png"></h3>
      <dl>
      	<?php if(is_array($menut)): $i = 0; $__LIST__ = $menut;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menut): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo ($menut['urllink']); ?>"><?php echo ($menut['title']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
      </dl>
    </div>  
  </div>
  
 
  <!--客户案例-->
  <div class="workDetail">
    <div class="wdTitle">
      <h1><?php echo ($info['title']); ?></h1>
      <p><?php echo ($info['flagName']); ?></p>
    </div>
    <div class="wdText">
      <?php echo str_replace('&lt;','<',str_replace('&gt;','>',str_replace('&quot;','"',str_replace('&amp;','&',$info['subcontent'])))); ?>
    </div>
    <div class="wdContent">
      <?php echo str_replace('&lt;','<',str_replace('&gt;','>',str_replace('&quot;','"',str_replace('&amp;','&',$info['content1'])))); ?>
    </div>
  </div>  
  <dl class="wdButton">
      <dd class="wdbLeft">
      	<?php  if($workPrev['id']>0){ echo "<a href='/Work/workShow_".$workPrev['id'].".html'><img src='/Public/home/images/wd_prev.png'></a>"; }else{ echo "哇哦！点击下一页吧"; } ?>
      </dd>
      <dd class="wdbCenter"><a href="/work.html"><img src="/Public/home/images/wd_menu.png"></a></dd>
      <dd class="wdbRight">
      	<?php  if($workNext['id']>0){ echo "<a href='/Work/workShow_".$workNext['id'].".html'><img src='/Public/home/images/wd_next.png'></a>"; }else{ echo "哇哦！后面没有了"; } ?>
      </dd>
  </dl> 
  
  <div class="backTop">
    <a href="#top"><img src="/Public/home/images/back_top.png"></a>
  </div>
<script type="text/javascript">
window.onscroll = function(){
	scrollMenu2(); // 滚动条自动浮动
}
</script>  
  <div class="footer">
     <h1><?php echo ($set['sitename']); ?></h1>
     <dl>
      <?php if(is_array($menub)): $i = 0; $__LIST__ = $menub;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menub): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo ($menub['urllink']); ?>"><?php echo ($menub['title']); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
    </dl>
    <h2><?php echo ($set['code']); ?></h2>   
  </div>  
  
</div>

</body>
</html>