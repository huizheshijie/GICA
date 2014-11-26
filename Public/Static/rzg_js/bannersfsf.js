/******标签切换*******/
//"id"为需要切换样式的层的id,与切换相对应的内容id命名规则为id_main_i."cur"为当前层的样式名字."s"为需要切换样式的每个容器的标签,如p、span、li等.
function tabs(id,cur,s){
	var content="_main_";
	if ( jQuery("#"+id).length){
	function closeContent(id,length){
		for(var i=1;i<=length;i++){
		jQuery("#"+id+content+i).hide();
			}	
		}
	var length=jQuery("#"+id+"  "+s).length;
	 jQuery("#"+id+"  "+s).each(function(i){
		jQuery(this).hover(function(){
			 jQuery("#"+id+"  "+s).removeClass(cur);   
			 closeContent(id,length);
			 jQuery(this).addClass(cur);
			 jQuery("#"+id+content+(i+1)).show();
		},function(){
		});						 
	});
	}//end length
}
//在线客服
var server = [{"name":"客服1", "qq":"442804611"},
//{"name":"伊娃", "qq":"1779775695"},
//{"name":"琪琪", "qq":"1557158656"},
//{"name":"薇薇", "qq":"2477177340"},
//{"name":"若男", "qq":"1583347633"},
//{"name":"木子", "qq":"2484772308"},
{"name":"客服2", "qq":"1836146729"},
{"name":"客服3", "qq":"506802100"}
];
var today = new Date();
var num = parseInt((today-new Date(today.getFullYear(),0,1))/86400000)%3;
var today_server = server.slice(num);
for(var i = 0;i<num;i++){
today_server.push(server[i]);
}
var server_part_html = '';
for(var index in today_server){
var one = today_server[index];
server_part_html += '<div class="h30 w100"><span class="mr5"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='+one.qq
+'&site=qq&menu=yes">'+one.name+'</a></span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='
+one.qq+'&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:'
+one.qq+':46" alt="点击这里给我发消息" title="点击这里给我发消息"></a></div>'
}
$(".server-main").append(server_part_html);
$(".server-panel,.pg-footer-icon.online").live("click", function(){
$(".server-panel").css("right", $(".server-panel").css("right")=="0px"?"142px":"0px");
$(".server-main").toggle();
});
$(".server-panel").live("mouseenter", function(){
$(".server-panel").css("right","142px");
$(".server-main").show();
});
$(".server-center").live("mouseleave", function(){
setTimeout(function(){
$(".server-panel").css("right","0px");
$(".server-main").hide();
}, 1000);
});


//幻灯切换
(function($) {                                          // update by liyonghai 2010-07-02
$.fn.jCarouselLite = function(o) {
    o = $.extend({
        btnPrev:null,
        btnNext:null,
        btnGo:null,
        btnGoOver:false,
        mouseWheel:false,
        auto:null,
        speed:200,
        easing:null,
        vertical:false,
        circular:true,
        visible:3,
        start:0,
        scroll:1,
        stop:null,//鼠标悬停
		currClass:"on",
		timer:null,
        beforeStart:null,
        afterEnd:null
    }, o || {});

    return this.each(function() {                           // Returns the element collection. Chainable.

        var running = false, animCss=o.vertical?"top":"left", sizeCss=o.vertical?"height":"width";
        var div = $(this), ul = $("ul", div), tLi = $("li", ul), tl = tLi.size(), v = o.visible;

        if(o.circular) {
            ul.prepend(tLi.slice(tl-v-1+1).clone())
              .append(tLi.slice(0,v).clone());
            o.start += v;
        }

        var li = $("li", ul), itemLength = li.size(), curr = o.start;
        div.css("visibility", "visible");

        li.css({overflow: "hidden", float: o.vertical ? "none" : "left"});
        ul.css({margin: "0", padding: "0", position: "relative", "list-style-type": "none", "z-index": "1"});
        div.css({overflow: "hidden", position: "relative", "z-index": "2", left: "0px"});

        var liSize = o.vertical ? height(li) : width(li);   // Full li size(incl margin)-Used for animation
        var ulSize = liSize * itemLength;                   // size of full ul(total length, not just for the visible items)
        var divSize = liSize * v;                           // size of entire div(total length for just the visible items)

        li.css({width: li.width(), height: li.height()});
        ul.css(sizeCss, ulSize+"px").css(animCss, -(curr*liSize));

        div.css(sizeCss, divSize+"px");                     // Width of the DIV. length of visible images

        if(o.btnPrev)
            $(o.btnPrev).click(function() {
                return go(curr-o.scroll);
            });

        if(o.btnNext)
            $(o.btnNext).click(function() {
                return go(curr+o.scroll);
            });

        if(o.btnGo)
            o.btnGo.each(function(i, val) {
                $(this).click(function() {
					if(o.timer)clearInterval(o.timer);
					o.btnGo.removeClass(o.currClass);
					$(this).addClass(o.currClass);
					var g = o.circular ? o.visible*(i+1) : i;
					//window.console.info("g:"+g+","+o.circular);
                    			go(g);
                });
                if(o.btnGoOver){
                $(this).mouseover(function() {
                    running = false;
                    if(o.timer)clearInterval(o.timer);
                    var r = go(o.circular ? o.visible+i : i);
                    $.each(o.btnGo, function(i, val) {$(this).removeClass(o.currClass);});
                    //o.btnGo.removeClass(o.currClass);
		    $(this).addClass(o.currClass);
		    return r;
                });}
            });

        if(o.mouseWheel && div.mousewheel)
            div.mousewheel(function(e, d) {
                return d>0 ? go(curr-o.scroll) : go(curr+o.scroll);
            });

        if(o.auto){autoscroll();}

		if(o.stop){
			o.stop.mouseover(function(){
			 if(o.timer)clearInterval(o.timer);
			}).mouseout(function(){
				autoscroll();
			});
		}

		function autoscroll()
		{
		       if(o.auto){
			o.timer = setInterval(function() {
                go(curr+o.scroll);
            }, o.auto+o.speed);}
		};

        function vis() {
            return li.slice(curr).slice(0,v);
        };

        function go(to) {
            if(!running) {

                if(o.beforeStart)
                    o.beforeStart.call(this, vis());

                if(o.circular) {            // If circular we are in first or last, then goto the other end
                    if(to<=o.start-v-1) {           // If first, then goto last
                        ul.css(animCss, -((itemLength-(v*2))*liSize)+"px");
                        // If "scroll" > 1, then the "to" might not be equal to the condition; it can be lesser depending on the number of elements.
                        curr = to==o.start-v-1 ? itemLength-(v*2)-1 : itemLength-(v*2)-o.scroll;
                    } else if(to>=itemLength-v+1) { // If last, then goto first
                        ul.css(animCss, -( (v) * liSize ) + "px" );
                        // If "scroll" > 1, then the "to" might not be equal to the condition; it can be greater depending on the number of elements.
                        curr = to==itemLength-v+1 ? v+1 : v+o.scroll;
                    } else curr = to;
                } else {                    // If non-circular and to points to first or last, we just return.
                    if(to<0 || to>itemLength-v) return;
                    else curr = to;
                }                           // If neither overrides it, the curr will still be "to" and we can proceed.

                running = true;

                ul.stop().animate(
                    animCss == "left" ? { left: -(curr*liSize) } : { top: -(curr*liSize) } , o.speed, o.easing,
                    function() {
                        if(o.afterEnd)
                            o.afterEnd.call(this, vis());
                        if(o.btnGo)
                        {
                            $(o.btnGo).each(function(i,j){
                            //window.console.info(i+","+j);
                             $(j).removeClass(o.currClass); }); 
                            var index = curr;
                            var tlt = o.visible * o.btnGo.size();
                            //window.console.info("tlt:"+tlt);                        
                            if(index>tlt){index =1;}else{
                            if(index<=0){index=o.btnGo.size();}
                            else{index = index /o.visible;}
                            }
                            //window.console.info("v:"+v+","+tl+",curr:"+curr+","+index+","+o.btnGo[index-1]);
                            $(o.btnGo[index-1]).addClass(o.currClass);
                        }
                        running = false;
                    }
                );
                // Disable buttons when the carousel reaches the last/first, and enable when not
                if(!o.circular) {
                    $(o.btnPrev + "," + o.btnNext).removeClass("disabled");
                    $( (curr-o.scroll<0 && o.btnPrev)
                        ||
                       (curr+o.scroll > itemLength-v && o.btnNext)
                        ||
                       []
                     ).addClass("disabled");
                }

            }
            return false;
        };
    });
};

function css(el, prop) {
    return parseInt($.css(el[0], prop)) || 0;
};
function width(el) {
    return  el[0].offsetWidth + css(el, 'marginLeft') + css(el, 'marginRight');
};
function height(el) {
    return el[0].offsetHeight + css(el, 'marginTop') + css(el, 'marginBottom');
};

})(jQuery);

//
var showWindown = true;
var templateSrc = "http://leotheme.cn/wp-content/themes/Dreamy"; //璁剧疆loading.gif璺緞
function tipsWindown(title,content,width,height,drag,time,showbg,cssName) {  
	$("#windown-box").remove(); //璇烽櫎鍐呭
	var width = width>= 950?this.width=950:this.width=width;	    //璁剧疆鏈€澶х獥鍙ｅ搴�
	var height = height>= 527?this.height=527:this.height=height;  //璁剧疆鏈€澶х獥鍙ｉ珮搴�
	if(showWindown == true) {
		var simpleWindown_html = new String;
			simpleWindown_html = "<div id=\"windownbg\" style=\"height:"+$(document).height()+"px;;filter:alpha(opacity=0);opacity:0;z-index: 999901\"><iframe style=\"width:100%;height:100%;border:none;filter:alpha(opacity=0);opacity:0;\"></iframe></div>";
			simpleWindown_html += "<div id=\"windown-box\">";
			simpleWindown_html += "<div id=\"windown-title\"><h2></h2><span id=\"windown-close\">鍏抽棴</span></div>";
			simpleWindown_html += "<div id=\"windown-content-border\"><div id=\"windown-content\"></div></div>"; 
			simpleWindown_html += "</div>";
			$("body").append(simpleWindown_html);
			show = false;
	}
	contentType = content.substring(0,content.indexOf(":"));
	content = content.substring(content.indexOf(":")+1,content.length);
	switch(contentType) {
		case "text":
		$("#windown-content").html(content);
		break;
		case "id":
		$("#windown-content").html($("#"+content+"").html());
		break;
		case "img":
		$("#windown-content").ajaxStart(function() {
			$(this).html("<img src='../js/"+templateSrc+"/images/loading.gif' class='loading' />");
		});
		$.ajax({
			error:function(){
				$("#windown-content").html("<p class='windown-error'>鍔犺浇鏁版嵁鍑洪敊...</p>");
			},
			success:function(html){
				$("#windown-content").html("<img src='../js/"+content+"' alt=''/>");
			}
		});
		break;
		case "url":
		var content_array=content.split("?");
		$("#windown-content").ajaxStart(function(){
			$(this).html("<img src='../js/"+templateSrc+"/images/loading.gif' class='loading' />");
		});
		$.ajax({
			type:content_array[0],
			url:content_array[1],
			data:content_array[2],
			error:function(){
				$("#windown-content").html("<p class='windown-error'>鍔犺浇鏁版嵁鍑洪敊...</p>");
			},
			success:function(html){
				$("#windown-content").html(html);
			}
		});
		break;
		case "iframe":
		$("#windown-content").ajaxStart(function(){
			$(this).html("<img src='../js/"+templateSrc+"/images/loading.gif' class='loading' />");
		});
		$.ajax({
			error:function(){
				$("#windown-content").html("<p class='windown-error'>鍔犺浇鏁版嵁鍑洪敊...</p>");
			},
			success:function(html){
				$("#windown-content").html("<iframe src='../js//"+content+" width=\"100%\" height=\""+parseInt(height)+"px"+"\" scrolling=\"auto\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\"></iframe>");
			}
		});
	}
	$("#windown-title h2").html(title);
	if(showbg == "true") {$("#windownbg").show();}else {$("#windownbg").remove();};
	$("#windownbg").animate({opacity:"0.5"},"normal");//璁剧疆閫忔槑搴�
	$("#windown-box").show();
	if( height >= 527 ) {
		$("#windown-title").css({width:(parseInt(width)+22)+"px"});
		$("#windown-content").css({width:(parseInt(width)+17)+"px",height:height+"px"});
	}else {

		$("#windown-title").css({width:(parseInt(width)+10)+"px"});
		$("#windown-content").css({width:width+"px",height:height+"px"});
	}

	var cw,ch,est = document.documentElement.scrollTop;//绐楀彛鐨勯珮鍜屽
	//鍙栧緱绐楀彛鐨勯珮鍜屽
	if (self.innerHeight) {
		cw=self.innerWidth;
		ch=self.innerHeight;
	}else if (document.documentElement&&document.documentElement.clientHeight) {
		cw=document.documentElement.clientWidth;
		ch=document.documentElement.clientHeight;
	} else if (document.body) {
		cw=document.body.clientWidth;
		ch=document.body.clientHeight;
	}
	var isIE6=false;
	if (isIE6) {
		$("#windown-box").css({left:"50%",top:(parseInt((ch)/2)+est)+"px",marginTop: -((parseInt(height)+53)/2)+"px",marginLeft:-((parseInt(width)+32)/2)+"px",zIndex: "999999"});
	}else {
		$("#windown-box").css({left:"50%",top:"50%",marginTop:-((parseInt(height)+53)/2)+"px",marginLeft:-((parseInt(width)+32)/2)+"px",zIndex: "999999"});
	};
	var Drag_ID = document.getElementById("windown-box"),DragHead = document.getElementById("windown-title");
		
	var moveX = 0,moveY = 0,moveTop,moveLeft = 0,moveable = false;
		if (isIE6) {
			moveTop = est;
		}else {
			moveTop = 0;
		}
	var	sw = Drag_ID.scrollWidth,sh = Drag_ID.scrollHeight;
		DragHead.onmouseover = function(e) {
			if(drag == "true"){DragHead.style.cursor = "move";}else{DragHead.style.cursor = "default";}
		};
		DragHead.onmousedown = function(e) {
		$("#windown-box").css({opacity:"0.5"},"normal");
		if(drag == "true"){moveable = true;}else{moveable = false;}
		e = window.event?window.event:e;
		var ol = Drag_ID.offsetLeft, ot = Drag_ID.offsetTop-moveTop;
		moveX = e.clientX-ol;
		moveY = e.clientY-ot;
		document.onmousemove = function(e) {
				if (moveable) {
				
				e = window.event?window.event:e;
				var x = e.clientX - moveX;
				var y = e.clientY - moveY;
					if ( x > 0 &&( x + sw < cw) && y > 0 && (y + sh < ch) ) {
						Drag_ID.style.left = x + "px";
						Drag_ID.style.top = parseInt(y+moveTop) + "px";
						Drag_ID.style.margin = "auto";
						}
					}
				}
		document.onmouseup = function () {moveable = false;$("#windown-box").css({opacity:"1"},"normal");};
		Drag_ID.onselectstart = function(e){return false; 
	}
	$("#windown-content").attr("class","windown-"+cssName);
	var closeWindown = function() {
		$("#windownbg").remove();
		$("#windown-box").fadeOut("slow",function(){$(this).remove();});
	}
	if( time == "" || typeof(time) == "undefined") {
		$("#windown-close").click(function() {
			$("#windownbg").remove();
			$("#windown-box").fadeOut("slow",function(){$(this).remove();});
		});
	}else { 
		setTimeout(closeWindown,time);
	}
		}}
		
		
/* qq在线右边浮动 */
function getClass(oParent,sClass)
{
	var value=[];
	var Ele=oParent.getElementsByTagName('*');
	for (var i=0; i<Ele.length; i++)
	{
		var aClass=Ele[i].className.split(' ');
		for (n=0; n<aClass.length; n++)
		{
			if (aClass[n]==sClass)
			{
				value.push(Ele[i]);
			}
		}
	}
	return value;
}

function getStyle(obj,name)
{
	if(obj.currentStyle)
	{
		return obj.currentStyle[name];
	}
	else
	{
		return getComputedStyle(obj,false)[name];
	}
}
function Running(obj,json,fnEnd)
{
	clearInterval(obj.timer);
	obj.timer=setInterval(function()
	{
		var now=0;
		var bStop=true;
		for (var attr in json)
		{
			if(attr=='opacity')
			{
				now=Math.round(parseFloat(getStyle(obj,attr))*100);
			}
			else
			{
				now=parseInt(getStyle(obj,attr));
			}
			var speed=(json[attr]-now)/5;
			speed=speed>0?Math.ceil(speed):Math.floor(speed);
			if(now!=json[attr])bStop=false;
			if(attr=='opacity')
			{
				obj.style.filter='alpha(opacity:'+now+speed+')';
				obj.style.opacity=(now+speed)/100;
			}
			else
			{
				obj.style[attr]=speed+now+'px';
			}
		}
		if(bStop)
		{
			clearInterval(obj.timer);
			if(fnEnd)fnEnd();
		}
	}, 30);
}
window.onload=function()
{
	var oBox=document.getElementById('box');
	var oTitle=getClass(oBox,'title');
	var closed='关闭窗口';
	var opened='客户服务';
	var i=0;
	
	oTitle[0].onclick=function()
	{
		i++;
		(i%2)?Running(oBox,{right:0},function()
		{
			oTitle[0].innerHTML=closed;			
		})
		:Running(oBox,{right:-200},function()
		{
			oTitle[0].innerHTML=opened;
		});	
	}
}

//获取cookies
function getCookie(objname){
var arrstr = document.cookie.split("; ");
for(var i = 0;i < arrstr.length;i ++)
{
var temp = arrstr[i].split("=");
if(temp[0] == objname) return decodeURIComponent(temp[1]);
}
return null;
}
//根据siteid返回列表页地址
function getNewList(site){
var html = ''
if(site==22){
html = "/notice.html";
}else if(site == 104){
html = "/news.html";
}else if(site == 67){
html = "/media.html";
}else{
html = "#";
}
return html;
}
function addBookmark(){
var title = document.title;
var URL = document.URL;
try {
window.external.addFavorite(URL, title); //ie
} catch(e) {
try {
window.sidebar.addPanel(title, URL, ""); //firefox
} catch(e) {
alert("该浏览器不支持，请使用Ctrl+D进行添加"); //chrome opera safari
}
}
} 

