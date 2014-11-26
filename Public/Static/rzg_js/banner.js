
// banner登录框
var clientDomain = "" ;
var ____domain____  	= "";
var ____auth____    	= ____domain____ + "/auth.do";
var ___invoke___interface___timeout___=10000 ;
var rxdai = {};
rxdai.asyncFalseLoadData = function(url, data, success, error){
	var timeOut = true;
	if(data && (typeof(data) == "object"))
	{
		data.subtime = new Date().getTime();		
	}
	else
	{
		data = {subtime:(new Date().getTime())};	
	}
	setTimeout(function(){ if(timeOut&&error) error(0); },___invoke___interface___timeout___);	
	$.ajax({		
		"url":url, "data":data,
		"async":false,
		"success":function(rtnData){
			timeOut = false;
			//alert('@success. status=' + rtnData.status +', desc=' + rtnData.desc) ;
			if(rtnData.status== 302)
			{
				//rxdai.alert('登录超时, 请重新登录') ;
				//location=rtnData.desc ;
				//location=____domain____ + "/user-login.html" ;
				//rxdai.alert('status=' + rtnData.status +', desc=' + rtnData.desc + ', result=' + rtnData.result) ;
				rxdai.alert(rtnData.desc) ;
				if(rtnData.result) location=____domain____ +rtnData.result ;
			}
			else if(rtnData.status== 200)
			{
				if(success){ success(rtnData);	}
			}
			else
			{
				if(error) { error(rtnData);		} 
				else 			{ location=___error___html___+"?errMsg="+rtnData.desc;			}
			}
		},
		"error":function(rtnData,t, tt){			
			timeOut = false;
			if(error) 	{ error(rtnData)		}
			else 				{	location=___error___html___;}//这里改为server internal error.
		},
		dataType : "json"
	});
}
//根据vtype找出对应的数据(data中的is_vouch)净值标:3, 推荐标:4
rxdai.doFailed = function(data) {
	var desc = data.desc;
	rxdai.alert(desc);
}

rxdai.checkMsg = function(message) {
	if(message && message!='')
	{
		rxdai.alert(message) ;
		return false ;
	}
	return true ;
}

rxdai.alert = function(str) {
	if(str) alert(str);	
}

rxdai.confirm = function(str){
	if(str){
		return confirm(str);	
	} 
	return false;
}

/* 弹出蒙层*/
function openLayer(zIndex){
	$('#popupDiv').height(document.documentElement.clientHeight+document.documentElement.scrollTop);
	$('#popupDiv').width(document.documentElement.clientWidth);
//	document.getElementById("popupDiv").style.filter = "alpha(opacity=10)"; 
	 document.getElementById("popupDiv").style.opacity = 0.1;  
	if(zIndex)
		document.getElementById("popupDiv").style.zIndex=zIndex;
	$('#popupDiv').show();
}
	
//关闭弹出层
function closeLayer(){
     $('#popupDiv').hide();
}


rxdai.recordLoginInfo = function(sessionid, uname, uid) {
	if(sessionid && sessionid != "" && sessionid != 'undefined') {
		xl.setCookie('sessionid', sessionid);
		xl.setCookie('sessionidcach', sessionid);
	}
	if(uname && uname != "" && uname != 'undefined') {
		xl.setCookie('username', uname);	
	}
	if(uid && uid != "" && uid != 'undefined') {
		xl.setCookie('userid', uid);
	}
}

rxdai.isLoginByCookie = function() {	
	var sessionid = xl.getCookie("sessionid");
	var sessionidcach =xl.getCookie("sessionidcach");
	if(sessionid) {
		sessionid = $.trim(sessionid);
		sessionidcach= $.trim(sessionidcach);
		if(sessionid != "" && sessionid != 'undefined')
		{
			if(!sessionidcach || sessionidcach==sessionid)
				{
					xl.setCookie('sessionid', sessionid);
					return true;
				}
			else
				return false;
		}
	 }
	return false;	
}


rxdai.removeLoginInfo = function() {
	var keys = new Array('sessionid', 'userid', 'username','sessionidcach');
	for(var i=0; i < keys.length; i++) {
		xl.delCookie(keys[i]);		
	}	
}


rxdai.getUsername=function () {
	var retVar = (rxdai.isLogin() && xl.getCookie('username'))?xl.getCookie('username'):"";
	return retVar;	
}

rxdai.isLogin = function(success) {	
	/**
	var objname = 'JSESSIONID' ;
	var arrstr = document.cookie.split("; ");
	for(var i = 0;i < arrstr.length;i ++)
	{
		var temp = arrstr[i].split("=");
		if(temp[0] == objname) return true;
	}
	return false;*/
	var parameters = {'method':'isLogin'};
	rxdai.asyncFalseLoadData(____auth____, parameters, function(data) {success(data)}, function(data){rxdai.doFailed(data)}) ;
}