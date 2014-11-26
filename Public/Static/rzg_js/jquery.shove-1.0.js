



var param = {};

/**   
*    
* @Description 鍙戦€乸ost璇锋眰 褰撴湁鎷︽埅鍣ㄨ繑鍥炰俊鎭繘琛屽鐞�
* @param url 璇锋眰鍦板潃
* @param param 璇锋眰鍙傛暟
* @param callBack 鎴愬姛鍚庡洖璋冩柟娉�
* @Author Yang Cheng
* @Date: 2012-2-17 18锛�00  
* @Version  1.0
*    
*/ 
$.shovePost = function(url,param,callBack){
	url = url+"?shoveDate"+new Date().getTime();
	$.post(url,param,function(data){
		if(data == "noLogin"){
			window.location.href="login.do";
			return;
		}
		if(data=="network"){
		   window.location.href="weihui.jsp";
		  return;
		}
		if(data=="virtual"){
		   window.location.href="noPermission.do";
		  return;
		}
		if(data == "pagejump"){
			window.location.href="adminMessage.do";
			return;
		}
		callBack(data);
	});
}

/**   
*    
* @Description 璺宠浆椤甸潰鏂规硶
* @param i 璺宠浆椤垫暟
* @Author Yang Cheng
* @Date: 2012-2-17 18锛�10
* @Version  1.0
*    
*/
function doJumpPage(i){
	//if(i==""){
	//	alert("杈撳叆鏍煎紡涓嶆纭�12!");
	//	return;
	//}
	if(isNaN(i)){
		alert("杈撳叆鏍煎紡涓嶆纭�!");
		return;
	}
	$("#pageNum").val(i);
	param["pageBean.pageNum"]=i;
	//鍥炶皟椤甸潰鏂规硶
	initListInfo(param);
}

function checkbox_All_Reverse(obj,itemName){
	$("input[name=" + itemName + "]").attr("checked",obj.checked);
}

//琛ㄦ牸闅旇鍙樿壊
function trEvenColor(){
	$("#tableTr tr:even").css("background-color","#f9f9f9");
}

function setCookies(cookieName,value,days){
	$.cookie(cookieName, value, { expires: days });
}
function getCookies(cookieName){
	return $.cookie(cookieName);
}

 function getFlexObject(movieName) {   
    return document[movieName];   
}

$(function(){
	trEvenColor();
})

function hideAndShow(str){
	$(str).hide();
	$(str).show();
}
