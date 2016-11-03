$(document).ready(function() {
	
	leftHeight("autoHeight");
	//leftMenu();	//会影响后面方法的执行 [如果没有执行会出错];
	tableList("listTable"); //隔行换色
	tableFlex("listTable"); //响应低于400
	
});

onresize=function(){
	leftHeight("autoHeight");
	tableFlex("listTable");
}

/**********************定义方法**************************/

//单项删除提醒
function delList(){
	var delBox=confirm("确认要删除此项吗？");
	if(delBox==true){
		return true;
	}else{
		return false;
	}	
}

//单项通过提醒
function pass(){
	var passBox=confirm("确认要操作此项吗？");
	if(passBox==true){
		return true;
	}else{
		return false;
	}	
}

//列表批量选择
function selectList(xme){
    var trList = document.getElementById("listTable").getElementsByTagName("tbody")[0].getElementsByTagName("tr");
    if(xme.checked){
       for(i=0; i<trList.length; i++){
           trList[i].getElementsByTagName("input")[0].checked = "checked";
       }
    }else{
       for(i=0; i<trList.length; i++){
           trList[i].getElementsByTagName("input")[0].checked = "";
       }
    }
}


function tableList(ltable){ //table 隔行换色
	var listTable=document.getElementById(ltable);
	if(!listTable){
		return false;
	}
	var listTr=listTable.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
	if(!listTr){
		return false;
	}
	
	for(var i=0;i<listTr.length;i++){
		if((i+10)%2!=0){
			continue;
		}else{
			listTr[i].style.background='#f9f9f9';
		}
	}
}

function tableFlex(ltable){ //低于400px自适用
    var bodyWidth=window.innerWidth||document.documentElement.clientWidth;
    var listTable=document.getElementById(ltable);
	if(!listTable){
		return false;
	}
	var listTr=listTable.getElementsByTagName("tr");	
	
	if(bodyWidth<=800){
		for(var i=0;i<listTr.length;i++){
			for(var j=2;j<listTr[i].getElementsByTagName("td").length-1;j++){
				listTr[i].getElementsByTagName("td")[j].style.display="none";
			}
		}
	}else{
		for(var i=0;i<listTr.length;i++){
			for(var j=2;j<listTr[i].getElementsByTagName("td").length-1;j++){
				listTr[i].getElementsByTagName("td")[j].style.display="";
			}
		}
	}

}


function leftHeight(lid){ //左面导航自动高度
	var left=document.getElementById(lid);
	var leftHeight=left.innerHeight||left.clientHeight;
	var bodyHeight=window.innerHeight||document.documentElement.clientHeight;
	var bodyWidth=window.innerWidth||document.documentElement.clientWidth;
    
	if(bodyWidth>480){
		if(leftHeight<bodyHeight){
			left.style.height=bodyHeight+"px";
		}
	}else{
		left.style.height="";
	}
}

function leftMenu(){//Left块合并	

	var changeDiv=document.getElementById("leftFixed").getElementsByTagName("dl");
	var changeA=document.getElementById("leftFixed").getElementsByTagName("dd");
	
	if(changeDiv.length!=0&&changeA.length!=0){
		//alert(changeDiv.length+"aa");
	}

	for(var j=0;j<changeA.length;j++){

		changeA[j].style.display="none";

	}

	for(var i=0;i<changeDiv.length;i++){

		changeDiv[i].onclick=function(){

			for(var j=0;j<changeA.length;j++){

				changeA[j].style.display="none";

			}

			for(var j=0;j<this.getElementsByTagName("a").length;j++){

				this.getElementsByTagName("a")[j].style.display="block";

			}

		}

	}

	

	for(var a=0;a<changeDiv.length;a++){

		for(var b=0;b<changeDiv[a].getElementsByTagName("a").length;b++){

			var links=changeDiv[a].getElementsByTagName("a")[b].getAttribute("href");

			var mylinks=document.location.href;

			if(mylinks.indexOf(links)!=-1){

				navHref(changeDiv[a].getElementsByTagName("a").length,changeDiv[a].getElementsByTagName("a"));

			}

		}

	}

}

function navHref(leftCount,leftHtml){

	for(var c=0;c<leftCount;c++){

		leftHtml[c].style.display="block";

    }

}


function tableColor(){

	var tableName=document.getElementsByClassName("articleTable")[0].getElementsByTagName("tr");

	for(var c=0;c<tableName.length;c++){

		tableName[c].onmouseover=function(){

			this.style.background="rgba(240,240,240,1)";

			return true;

		}

		

		tableName[c].onmouseout=function(){

			this.style.background="";

		}

	}

}



function trColor(){

	var tableName=document.getElementsByClassName("articleTable")[0].getElementsByTagName("tr");

	for(var i=1;i<=tableName.length;i=i+2){

		tableName[i].className="tdBgColor";

	}

}



function showBox(){

	$(".showdiv").click(function(){

		var box =250;

		var th= $(window).scrollTop()+$(window).height()/1.6-box;

		var h =document.body.clientHeight;

		var rw =$(window).width()/2-box;

		$(".showbox").animate({top:th,opacity:'show',width:box*2,height:box*1.4,right:rw},500);

		$("#zhezhao").css({

			display:"block",height:$(document).height()

		});

		return false;

	});

	$(".showbox .close").click(function(){

		$(this).parents(".showbox").animate({top:0,opacity: 'hide',width:0,height:0,right:0},500);

		$("#zhezhao").css("display","none");

	});

}



function lableChange(){

	$(".lable").mouseover(function(){

		$(this).addClass("lableAdd");

	});

	$(".lable").mouseout(function(){

		$(this).removeClass("lableAdd");

	});

}










