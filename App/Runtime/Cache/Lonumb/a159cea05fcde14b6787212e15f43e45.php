<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-float{background: rgba(255,255,255,1); width: 100%; height:100%; position: fixed; top: 0; left: 0; z-index: 99;}
.system-message{position:fixed; top:20%; left: 40%; width: 400px; height:200px;}
.system-message h1{ font-size: 80px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
</style>
</head>
<body>
	
	<div class="system-float" id="bg">
       <div class="system-message">
          <?php if(isset($message)): ?><h1>:)</h1>
             <p class="success"><?php echo($message); ?></p>
          <?php else: ?>
            <h1>:(</h1>
            <p class="error"><?php echo($error); ?></p><?php endif; ?>
         <p class="detail"></p>
         <p class="jump">页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait">1</b></p>
       </div>
    </div>
 

 
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time == 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 500);
})();

</script>



</body>
</html>