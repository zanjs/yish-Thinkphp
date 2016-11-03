/*!
 * 自定义函数库
 */
 
//window.onresize = function(){
//	$(".menu dl").css({"height":""}); //清除菜单高度
//}

$(document).ready(function() {	
	menuSlide(); //下拉菜单	
	workShowLayout(); //案例显示层
    
}); 


// work下拉菜单
function workShowLayout(){
	$(".homeWork a").mouseover(function(index){
		$(this).children("h1").animate({"height":"100%"},200)
		$(this).children("h1").clearQueue();
	});
	$(".homeWork a").mouseout(function(index){
		$(this).children("h1").animate({"height":""},200)
		$(this).children("h1").clearQueue();
	});
}

// work 自动排列
function workAutoList(){
	var ddCount = $(".homeWork dd").length;
	//ddCount = ddCount % 5 == 0 ? ddCount : ddCount+(5-ddCount%5);
	
	$(".homeWork dd").each(function(i){
		if((i+3)%5==0 || (i+2)%5==0 || (i+1)%5==0){
			$(this).addClass("on");
		}
	});
}

// services 下拉
function aboutServices(){
	$(".haServices dt").mouseover(function(){
		$(this).next(".haServices dd").css({"visibility":"visible"});
	})
	$(".haServices dt").mouseout(function(){
		$(this).next(".haServices dd").css({"visibility":""});
	})
}


// team头像变换
function aboutHead(){
	$(".haTeam dd").mouseover(function(index){
		$(this).children("h3").css({"display":"none"});
		$(this).children("h4").css({"display":"block"});
	})
	$(".haTeam dd").mouseout(function(index){
		$(this).children("h3").css({"display":"block"});
		$(this).children("h4").css({"display":"none"});
	})
}

// 滚动BOX 
function scrollImg(model,sList,sButton,marginTime,lastTime,isPlay,pattern){
	jQuery(model).find(model+"In").slide({
		 titCell: sButton + " li",
		 mainCell: sList+" ul", 
		 effect: pattern, 
		 autoPlay: isPlay, 
		 delayTime: marginTime,
		 interTime: lastTime
	});
}



// 下拉菜单
function menuSlide(){
	$(".menu h3").click(function(index){
		if($(this).next("dl").height()>=$(".menu dd").height()){
			$(this).next("dl").animate({"height":"0px"},200);
		}else{
			var dlHeight = $(".menu dd").height() * $(".menu dd").length;
			$(this).next("dl").animate({"height":dlHeight},200);
		}
	});
	$(".menu dl").click(function(index){
		$(this).css({"height":""});
	});
}

// 友情链接自动伸缩
function clientAutoCount(num){
	    var getImgList = document.getElementById("bdList");  // 获取图片容器
	    var imgList = getImgList.getElementsByTagName("li");  //获取图片列表	
	    var imgBox = document.getElementById("homeClientsList"); // 图片存放容器
		
	    var liList = imgList.length%num==0 ? imgList.length/num : (imgList.length-(imgList.length % num))/num+1;
		imgBox.innerHTML=""; //清除内容 
		for(var i=0; i<liList; i++){
			var ul = document.createElement("ul");
			for(var j=0; j<num;j++){				
				if(imgList.length<=i*num+j){
					break;
				}else{
					ul.innerHTML += "<li>" + imgList[i*num+j].innerHTML + "</li>";
				}
			}			
			imgBox.appendChild(ul);			
	    }			
}
    
function clientsAutoList(){
	var bodyWidth = document.body.offsetWidth;  //当前屏幕宽度	
	if(bodyWidth>=1024){
		clientAutoCount(9);
	}

	if(bodyWidth>768 && bodyWidth<1024){
		clientAutoCount(6);
	}
	
	if(bodyWidth>480 && bodyWidth<=768){
		clientAutoCount(3);
	}
		
	if(bodyWidth<=480){
		clientAutoCount(2);
	}	
	clientsTouch();
}

// 友情链接
function clientsTouch(){
	TouchSlide({ 
		slideCell:"#homeClients",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		autoPage:true, //自动分页
		pnLoop:"true", // 前后按钮不循环
	});
}

// 菜单自动浮动
function scrollMenu(){
	var menu = document.getElementById("menu");
    var banner = document.getElementById("banner") || document.getElementById("banner1");
	var sheight = document.body.scrollTop || document.documentElement.scrollTop;
	var bheight = banner.clientHeight || 100;
	
	if(sheight > bheight){
	    menu.style.position = "fixed";
	    menu.style.top = "0px";
		menu.style.maxWidth = "1920px";
		menu.style.height = "auto";
    }else{
		menu.style.position = "relative";
	    menu.style.top = "";
		menu.style.maxWidth = "";
		menu.style.height = "";
	}
	//alert(bheight);

}

// 菜单自动浮动内页
function scrollMenu2(){
	var menu = document.getElementById("menu");
    //var banner = document.getElementById("banner") || document.getElementById("banner1");
	var sheight = document.body.scrollTop || document.documentElement.scrollTop;
	var bheight = 1;
	
	if(sheight > bheight){
	    menu.style.position = "fixed";
	    menu.style.top = "0px";
		menu.style.maxWidth = "1920px";
		menu.style.height = "auto";
    }else{
		menu.style.position = "relative";
	    menu.style.top = "";
		menu.style.maxWidth = "";
		menu.style.height = "";
	}
	//alert(bheight);

}