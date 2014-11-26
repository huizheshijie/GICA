<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head> 
		<title>融资谷网贷-登录</title>
		<meta http-equiv="pragma" content="no-cache" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="keywords" content="keyword1,keyword2,keyword3" />
		<meta http-equiv="description" content="This is my page" />
		<link href="/Public/static/rzg_css/css.css" rel="stylesheet" type="text/css" />
		<link href="/Public/static/rzg_css/inside.css" rel="stylesheet" type="text/css" />
		<link id="skin" rel="stylesheet" href="/Public/static/rzg_css/jbox.css" />
		<link href="/Public/static/rzg_css/base.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="/Public/static/rzg_js/jquery.js"></script>
		<script type="text/javascript" src="/Public/static/rzg_js/common.js"></script>
		<style type="text/css">
ul,li {
	margin: 0;
	padding: 0
}

#scrollDiv {
	height: 182px;
	overflow: hidden
}

.load {
	width: 18px;
	height: 18px;
	margin: 10px;
}
</style>
	</head>
	<body>
		 <!-- 引用头部公共部分 -->
		
<link rel="shortcut icon" href="favicon.ico">
<!--header-->
<div class="topline_box">
	<div class="top_line">
		<div class="top_phone">
			4000-911-806
		</div>
		<s:if test="#session.user ==null">
			<div class="topline_right">
				<ul>
					<li>
						<a href="sxxl.htm" class="xsrw">盛夏献礼</a>
					</li>
				<!--	<li>
						<a href="newguide.htm" class="xsrw">新手任务</a>
					</li>-->
					<li id="gfq">
						官方群
						<div id="rzggf" class="list" style="display: none;">
							<a>官方群:264159783</a>
							<a>V&nbsp;I&nbsp;P群:303173892</a>
						</div>
					</li>

					<li>
						<a href="cellPhoneinit.htm" class="mfzc">免费注册</a>
					</li>
					<li>
						<a href="login.htm" class="ljdl"> 立即登录</a>
					</li>
				</ul>
			</div>

		</s:if>
		<s:else>
			<div class="topline_right">
				<ul>
				
					<li>
						<a href="sxxl.htm" class="xsrw">盛夏献礼</a>
					</li>
					<!--
					<li>
						<a href="tenthousand.htm" class="xsrw">万元礼包</a>
					</li>
					-->
					<!--<li>
						<a href="newguide.htm" class="xsrw">新手任务</a>
					</li>-->
					<li id="gfq">
						官方群
						<div id="rzggf" class="list" style="display: none;">
							<a>官方群:264159783</a>
							<a>V&nbsp;I&nbsp;P群:303173892</a>
						</div>
					</li>
					<li>
						<span class="nh">您好！</span>
						<span class="red">[${user.userName}]</span>
					</li>
					<li>
						<a href="home.htm">&nbsp;|&nbsp;个人中心</a>
					</li>
					<li>
						<a href="logout.htm">|&nbsp;退出</a>
					</li>
				</ul>
			</div>
		</s:else>
	</div>

	<div class="header">
		<div class="logo">
			<a href="http://www.ubanks.cn"><img src="images/img/logo.gif" /> </a>
		</div>
		<div class="nav">
			<a href="index.htm">首页</a>
			<a href="finance.htm">我要理财</a>
			<a href="borrowapply.htm">我要融资</a>
			<a href="home.htm">我的账户</a>
			<!-- callcenter.htm?cid=1 -->
			<a href="newhelp.htm">新手帮助</a>
		</div>
	</div>
</div>
<!-- header end-->

<script>
	//alert("dafdadfafasfasfa");
	//$(function() {
	//alert("123464677");

	$("#gfq").hover(function() {
		$("#rzggf").slideToggle();
	});

	//});
</script>

		<div class="nymain">
			<div class="bigbox">
				<div class="til">
					会员登录
				</div>
				<div class="sqdk"
					style="padding-top: 55px; padding-bottom: 80px; padding-left: 60px;">
					<div class="logintab" style="height:320px;">
						<form action="<?php echo U('login');?>" method="post" class="login-form">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th align="right">用户名：
									</th>
									<td class="mima">
										<input type="text" name="username" class="inp202" placeholder="请填写用户名" autocomplete="off" />
										<span id="email_" style="display: none;"><a id="retake_email" href="javascript:reSendEmail();">发送激活邮件</a>
										</span>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<span style="color: red;" id="s_email" class="formtips"></span>
									</td>
								</tr>
								<tr>
									<th align="right">
										密码：
									</th>
									<td class="mima">
											<input type="password" class="inp202" name="password" placeholder="请填写密码" autocomplete="off" />
										<span id="retake_password"><a href="systemfindpass.htm">忘记密码</a>
										</span>
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<span style="color: red;" id="s_password" class="formtips"></span>
									</td>
								</tr>
								<tr>
									<th align="right">
										验证码：
									</th>
									<td>
										<input type="text" class="inp100" name="verify" placeholder="请填写验证码" autocomplete="off">
										<a class="reloadverify" title="换一张" href="javascript:void(0)">换一张？</a>
										<img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('Public/verify');?>">
									</td>
								</tr>
								<tr>
									<th></th>
									<td>
										<span style="color: red;" id="s_code" class="formtips"></span>
									</td>
								</tr>
								<tr>
									<td>
										&nbsp;
									</td>
									<td class="zctd">
										还没有加入融资谷网贷？
										<a href="cellPhoneinit.htm">立即注册</a>
									</td>
								</tr>
								<tr>
									<td>
										&nbsp;
									</td>
									<td>
                            <button class="login-btn" type="submit">
                                <span class="in"><i class="icon-loading"></i>登 录 中 ...</span>
                                <span class="on">登 录</span>
                            </button>
									</td>
								</tr>
							</table>
						</form>
					</div>
					<div class="zcdl_right">
						<span id="s3_k_c_abq_d_prev" class="zzry_prev"></span>
						<div id="s3_k_c_abq_d" class="zzry_pic">
							<ul>
								<li>
									<a href="newhelp.htm"><img src="images/img/tzlc.jpg" />
									</a>
								</li>
								<li>
									<a href="borrowhelp.htm"><img src="images/img/jkrz.jpg" />
									</a>
								</li>
								<li>
									<a href="safety.htm"><img src="images/img/aqbz.jpg" />
									</a>
								</li>

							</ul>
						</div>
						<span id="s3_k_c_abq_d_next" class="zzry_next"></span>
						
<script>
	jQuery("#s3_k_c_abq_d").jCarouselLite( {
		btnNext : "#s3_k_c_abq_d_next",
		btnPrev : "#s3_k_c_abq_d_prev",
		auto : 3000,
		speed : 300,
		visible : 1,
		scroll : 1
	});
</script>
					</div>
					<div class="tip">
        <ul>
          <li> 帮助他人 快乐自己 收获利息 </li>
          <li> 助您创业 资金周转 分期偿还 </li>
          <li> 收益稳定可靠回报高 </li>
          <li> 交易安全快捷有保障 </li>
        </ul>
      </div>
     <div class="renpic"> </div>
				</div>
			</div>
		</div>

		<!-- 引用底部公共部分 -->
		<jsp:include page="/include/footer.jsp"></jsp:include>
		<script>
	$(function() {
		(4);
		$("#code").bind('keyup', function(event) {
			if (event.keyCode == "13") {
				login();
			}
		});
		$("#email").bind('keyup', function(event) {
			if (event.keyCode == "13") {
				login();
			}
		});
		$("#password").bind('keyup', function(event) {
			if (event.keyCode == "13") {
				login();
			}
		});

		//样式选中

	})
	//初始化
	function switchCode() {
		var timenow = new Date();
		$("#codeNum").attr("src",
				"admin/imageCode.do?pageId=userlogin&d=" + timenow);
	}
	$(document)
			.ready(function() {
				//===========input失去焦点
					$("form :input")
							.blur(function() {
								//email
									if ($(this).is("#email")) {
										if (this.value == "") {
											$("#s_email").attr("class",
													"formtips onError");
											$("#s_email").html("*请输入用户名或邮箱地址");
										} else if (/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/
												.test(this.value)) { //判断用户输入的是否是邮箱地址
											checkRegister('email');
										} else if ((/^1[3,5,8]\d{9}$/
												.test(this.value))) {
											checkRegister('cellphone');
										} else {
											checkRegister('userName');
											$("#s_email").attr("class",
													"formtips");
										}
									}
									//password
									if ($(this).attr("id") == "password") {
										pwd = this.value;
										if (this.value == "") {
											$("#s_password").attr("class",
													"formtips onError");
											$("#s_password").html("*请輸入您的密码");
										} else if (this.value.length < 6) {
											$("#s_password").attr("class",
													"formtips onError");
											$("#s_password").html(
													"*密码长度为6-20个字符");
										} else {
											$("#s_password").html("");
											$("#s_password").attr("class",
													"formtips");
										}
									}
									//验证码
									if ($(this).attr("id") == "code") {
										if (this.value == "") {
											$("#s_code").attr("class",
													"formtips onError");
											$("#s_code").html("*请输入验证码");
										} else {
											$("#s_code").attr("class",
													"formtips");
											$("#s_code").html("");
										}
									}

								});
					getCookie();
				});

	//===验证数据
	function checkRegister(str) {
		var param = {};
		if (str == "userName") {
			param["paramMap.email"] = "";
			param["paramMap.userName"] = $("#email").val();
		} else if (str == "email") {
			param["paramMap.email"] = $("#email").val();
			param["paramMap.userName"] = "";
		} else {
			param["paramMap.email"] = "";
			param["paramMap.userName"] = "";
			param["paramMap.cellphone"] = $("#email").val();
		}
		$.post("ajaxCheckLog.htm", param, function(data) {
			$("#email_").hide();
			if (data == 2 && str == "userName") {
				$("#s_email").html("*无效用户！");
			} else if (data == 3 && str == "userName") {
				$("#s_email").html("*该用户还没激活！");
				//add by houli
				$("#email_").show();
			} else if (data == 4 && str == "userName") {
				$("#s_email").attr("class", "formtips");
				$("#s_email").html("");
			}
			if (data == 0 && str == "email") {
				$("#s_email").html("*无效邮箱！");
			} else if (data == 1 && str == "email") {
				$("#s_email").html("*该邮箱用户还没激活！");
				//add by houli
				$("#email_").show();
			} else if (data == 4 && str == "email") {
				$("#s_email").attr("class", "formtips");
				$("#s_email").html("");
			}
			if (data == 5 && str == "cellphone") {
				$("#s_email").html("*用户不存在！");
			} else if (data == 4 && str == "cellphone") {
				$("#s_email").html("");
			}
		});
	}
</script>
		<script>
	function login() {
		$(this).attr('disabled', true);
		if ($("#email").val() == "") {
			$("#s_email").attr("class", "formtips onError");
			$("#s_email").html("*请输用户名或邮箱地址");
		}
		if ($("#password").val() == "") {
			$("#s_password").attr("class", "formtips onError");
			$("#s_password").html("*请输入密码");
			// $("#retake_password").hide();
		}
		$('#btn_login').attr('value', '登录中...');
		var param = {};
		param["paramMap.pageId"] = "userlogin";
		param["paramMap.email"] = $("#email").val();
		param["paramMap.password"] = $("#password").val();
		param["paramMap.code"] = $("#code").val();
		param["paramMap.afterLoginUrl"] = "${session.afterLoginUrl}";
		$.post("logining.htm", param, function(data) {
			if (data == 1) {
				var afterLoginUrl = '${session.afterLoginUrl}';
				if (afterLoginUrl != '') {
					window.location.href = '${session.afterLoginUrl}';
				} else {
					window.location.href = 'home.htm';
				}
				var checkday = $('#checkday').val();
				if (checkday > 0) {
					var email = $('#email').val();
					addCookie('email', email, checkday);
				}
			} else if (data == 2) {
				$('#btn_login').attr('value', '登录');
				$("#s_code").attr("class", "formtips onError");
				$("#s_code").html("*验证码错误！");
				switchCode();
				$("#btn_login").attr('disabled', false);
			} else if (data == 3) {
				$('#btn_login').attr('value', '登录');
				$("#s_email").attr("class", "formtips onError");
				$("#s_email").html("*用户名或密码错误！");
				switchCode();
				$("#btn_login").attr('disabled', false);
			} else if (data == 4) {
				$('#btn_login').attr('value', '登录');
				$("#s_email").attr("class", "formtips onError");
				switchCode();
				$("#s_email").html("*该用户已被禁用！");
				$("#btn_login").attr('disabled', false);
			}
		});

	}

	function reSendEmail() {
		if ($("#email").val() == "") {
			alert("请输入邮箱");
			return;
		}
		window.location.href = "reActivateEmail.htm?email=" + $("#email").val();
	}

	$("#btn_login").click(function() {
		login();
	});

	function addCookie(objName, objValue, days) {
		var str = objName + "=" + escape(objValue);
		if (days > 0) {
			var date = new Date();
			var ms = days * 24 * 3600 * 1000;
			date.setTime(date.getTime() + ms);
			str += "; expires=" + date.toGMTString();
		}
		document.cookie = str;
	}
	function getCookie() {
		//取出cookies
		var arrStr = document.cookie.split("; ");
		for ( var i = 0; i < arrStr.length; i++) {
			var temp = arrStr[i].split("=");

			if (temp[0] == 'email') {
				var userName = unescape(temp[1]);
				$('#email').val(userName);
			}
		}
	}
</script>

	</body>
</html>