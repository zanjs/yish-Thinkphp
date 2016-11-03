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

<body>
<div class="wrap">
  <!---首页banner模块-->
  <div class="homeBanner" id="banner">  
      <div class="homeBannerIn">  
         <div class="hbButton"> <!--按钮-->
           <ul>
           	 <?php if(is_array($advpctitle)): $i = 0; $__LIST__ = $advpctitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advpctitle): $mod = ($i % 2 );++$i;?><li></li><?php endforeach; endif; else: echo "" ;endif; ?>   
           </ul>
         </div>
             
         <div class="hbImg">
           <ul>
           	  <?php if(is_array($advpc)): $i = 0; $__LIST__ = $advpc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advpc): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($advpc['urllink']); ?>" target="_blank"><img src="<?php echo ($advpc['pic']); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>            	
           </ul>
         </div>         
       </div>
  </div>
  
  <!---首页手机banner模块-->
  <div class="homeBanner1" id="banner1">  
      <div id="homeBanner1" class="homeBannerIn"> 
         <div class="hbButton1"> <!--按钮-->
           <ul>
           	  <?php if(is_array($advwaptitle)): $i = 0; $__LIST__ = $advwaptitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advwaptitle): $mod = ($i % 2 );++$i;?><li></li><?php endforeach; endif; else: echo "" ;endif; ?>  
           </ul>
         </div>             
         <div class="hbImg1">
           <ul>
            	<?php if(is_array($advwap)): $i = 0; $__LIST__ = $advwap;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advwap): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($advwap['urllink']); ?>" target="_blank"><img src="<?php echo ($advwap['pic']); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
           </ul>
         </div>   
       </div>
  </div>
  
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
  
  <!--关于我们-->
  <div class="homeAbout">
     <h1 class="hTitle"><a name="about">ABOUT US</a></h1>
     <div id="homeAbout" class="homeAboutIn">  
         <div class="hd">
           <ul>
           	<?php if(is_array($about)): $i = 0; $__LIST__ = $about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$about): $mod = ($i % 2 );++$i;?><li><?php echo ($about['title']); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
         </div>
             
         <div class="bd" id="homeAboutBd">
         	<?php if(is_array($aboutText)): $i = 0; $__LIST__ = $aboutText;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aboutText): $mod = ($i % 2 );++$i; echo str_replace('&lt;','<',str_replace('&gt;','>',str_replace('&quot;','"',str_replace('&amp;','&',$aboutText['content1'])))); endforeach; endif; else: echo "" ;endif; ?>
        </div>  <!--/bd-->
                
      </div>  
  </div>
  
  <!--客户案例-->
  <div class="homeWork">
     <h1 class="hTitle"><a name="work">WORK</a></h1>
     <div class="homeWorkList">
       <dl>
         <?php if(is_array($worklist)): $i = 0; $__LIST__ = $worklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$worklist): $mod = ($i % 2 );++$i;?><dd>
             <a href="/Work/workShow_<?php echo ($worklist['id']); ?>.html">
               <img src="<?php echo ($worklist['pic']); ?>">
               <h1><strong><?php echo ($worklist['title']); ?> <em><?php echo ($worklist['flagName']); ?></em></strong></h1>
             </a>  
           </dd><?php endforeach; endif; else: echo "" ;endif; ?>         
       </dl>
     </div>  
     <div class="homeWorkMore"><a href="/work.html"><img src="/Public/home/images/more.jpg"></a></div>
  </div>   
  
  <!--友情链接-->
  <div class="homeClients">
    <?php echo str_replace('&lt;','<',str_replace('&gt;','>',str_replace('&quot;','"',str_replace('&amp;','&',$clients['content1'])))); ?>
    
    <div class="homeClientsIn" id="homeClients">      
      <div class="hd"><ul></ul></div>
      <span class="prev"><img src="/Public/home/images/clients_icon.png"></span>
      <span class="next"><img src="/Public/home/images/clients_icon.png"></span>
	  <div class="bd" id="homeClientsList"></div>
      <div id="bdList" style="display:none;">
        <ul>
            <?php if(is_array($clist)): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$clist): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0)"><img src="<?php echo ($clist['pic']); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>			      
		     </ul>
       </div>  
    </div>    
  </div> 
  
  <!--联系我们-->
  <div class="contact">
     <?php echo str_replace('&lt;','<',str_replace('&gt;','>',str_replace('&quot;','"',str_replace('&amp;','&',$contact['content1'])))); ?>
  </div> 
  
 <script type="text/javascript">
clientsAutoList();	// 友情链接自动缩放
window.onresize = function(){
	clientsAutoList(); // 友情链接列表自动缩放
}
window.onscroll = function(){
	scrollMenu(); // 滚动条自动浮动
}

scrollImg(".homeBanner",".hbImg",".hbButton",300,8000,true,"left"); //首页banner
TouchSlide({slideCell:"#homeBanner1",titCell:".hbButton1 ul",mainCell:".hbImg1 ul", effect:"leftLoop", autoPlay:true,interTime:8000,autoPage:true,});// wap版banner
TouchSlide({slideCell:"#homeAbout",effect:"leftLoop" ,}); //首页About切换
aboutHead();  
aboutServices();
workAutoList();  // 案例自动排序
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