<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	   <title>工合基金_首页</title>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<script type="text/javascript" src="/Public/static/rzg_js/i_banner1.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/banner.js"></script>
	<script type="text/javascript" src="/Public/static/rzg_js/common.js"></script>
	<script type="text/javascript" src="/Public/static/jquery.min.js"></script>
	<!-- 引入layer -->
	<script type="text/javascript" src="/Public/static/layer/layer.min.js"></script>
	<script type="text/javascript" src="/Public/static/layer/extend/layer.ext.js"></script>
	<!-- 引入弹窗 -->
	<script type="text/javascript" src="/Public/static/ymPrompt-4.0-B-20090302/ymPrompt.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
	<link rel="stylesheet" href="/Public/static/rzg_css/style.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/base.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/cjwt.css" type="text/css"></link>
	<link rel="stylesheet" href="/Public/static/rzg_css/css.css"  type="text/css" />
	<!-- 引入弹窗样式 -->
    <link rel="stylesheet" type="text/css" href="/Public/static/ymPrompt-4.0-B-20090302/skin/qq/ymPrompt.css" />

    <link rel="stylesheet" href="/Public/static/kindeditor/themes/default/default.css" />
    <script charset="utf-8" src="/Public/static/kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="/Public/static/kindeditor/lang/zh_CN.js"></script>
    <script charset="utf-8" src="/Public/static/kindeditor/jquery-1.9.1.min.js"></script>
</head>
<body>
	<!-- 头部 -->
	<!--header-->
<div class="topline_box1">
	<div class="top_line">
		<div class="top_phone">
			4888-888-888
		</div>
			<div class="topline_right">
				<ul>
					<li>
						<a href="#" class="xsrw">盛夏献礼</a>
					</li>
					<!--<li>
						<a href="newguide.htm" class="xsrw">新手任务</a>
					</li>-->
					<li id="gfq">
						官方群
						<div id="rzggf" class="list" style="display: none;">
							<a>官A群:888888888</a>
							<a>官B群:666666666</a>
						</div>
					</li>

					<?php if(is_login()): ?><li><a href="<?php echo U('Member/Index/index');?>"><?php echo get_username();?></a></li>
                                <li><a href="<?php echo U('Home/User/profile');?>">修改密码</a></li>
                                <li><a href="<?php echo U('Home/User/logout');?>">退出</a></li>
					<?php else: ?>

					<li>
						<a href="<?php echo U('Home/User/register');?>" class="mfzc">免费注册</a>
					</li>
					<li>
						<a href="<?php echo U('Home/User/login');?>" class="ljdl"> 立即登录</a>
					</li><?php endif; ?>
				</ul>
			</div>
	</div>
</div>
<div class="header">
	<div class="logo">
		<a href=""><img src="/Public/static/rzg_images/img/logo.gif"/>
		</a>
	</div>
	<div class="nav">
	    <?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select(); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>

<!-- header end-->

<script>
	//alert("dafdadfafasfasfa");
	//$(function() {
	//alert("123464677");

	//  alert("1234567");
	//  $("#gfq").mouseover(function(){
	//  alert("123456789flajfalfj");
	//	 $("#rzggf").show();
	// });
	//  $("#gfq").mouseout(function(){
	//  alert("123456789flajfalfj");
	// $("#rzggf").hide();
	// });
	$("#gfq").hover(function() {
		$("#rzggf").slideToggle();
	});
	//});
</script>

	<!-- /头部 -->
	
	<!-- 主体 -->
	 
    <jsp:include page="/include/top.jsp"></jsp:include>

    <div class="nymain">
      <div class="bigbox">
        <div class="til">
          平台会员注册
        </div>
        <div class="sqdk"
          style="padding-top: 55px; padding-bottom: 80px; padding-left: 60px;">
          <div class="logintab">
            <form class="login-form" action="/index.php?s=/Home/User/register.html" method="post">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td colspan="2" align="center" width="400px;">
                    <span style="color: red; width: 100%;"> <s:if
                        test="#session.DEMO==1">*　请尽量实名注册，这会直接影响您在本平台的信用度。</s:if>
                      <s:else>
         </s:else> </span>
                  </td>
                </tr>
                <tr>
                  <th align="right">
                    <span class="fred">*</span>用户名：
                  </th>
                  <td>
                    <input type="text" id="inputEmail" class="span3" placeholder="请输入用户名"  ajaxurl="/member/checkUserNameUnique.html" errormsg="请填写1-16位用户名" nullmsg="请填写用户名" datatype="*1-16" value="" name="username">
                  </td>
                </tr>
                <tr>
                  <th align="right"></th>
                  <td>
                    <span style="color: red" id="s_userName" class="formtips"></span>
                  </td>
                </tr>
                <tr>
                  <th align="right">
                    <span class="fred">*</span>密码：
                  </th>
                  <td>
                    <input type="password" id="inputPassword"  class="span3" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="password">
                  </td>
                </tr>
                <tr>
                  <th align="right"></th>
                  <td>
                    <span style="color: red" id="s_password" class="formtips"></span>
                  </td>
                </tr>
                <tr>
                  <th align="right">
                    <span class="fred">*</span>确认密码：
                  </th>
                  <td>
                    <input type="password" id="inputPassword" class="span3" placeholder="请再次输入密码" recheck="password" errormsg="您两次输入的密码不一致" nullmsg="请填确认密码" datatype="*" name="repassword">
                  </td>
                </tr>
                <tr>
                  <th align="right"></th>
                  <td>
                    <span style="color: red" id="s_confirmPassword"
                      class="formtips"></span>
                  </td>
                </tr>
                <tr>
                  <th align="right">
                    邮箱：
                  </th>
                  <td>
                    <input type="text" id="inputEmail" class="span3" placeholder="请输入电子邮件"  ajaxurl="/member/checkUserEmailUnique.html" errormsg="请填写正确格式的邮箱" nullmsg="请填写邮箱" datatype="e" value="" name="email">
                  </td>
                </tr>
                <tr>
                  <th align="right">
                    验证码：
                  </th>
                  <td>
                    <input type="text" id="inputPassword" class="span3" placeholder="请输入验证码"  errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify">
                  </td>
                </tr>
                <tr>
                  <th align="right"></th>
                  <td>
                    <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo U('verify');?>" style="cursor:pointer;">
                  </td>
                </tr>
                <tr>
                  <th align="right">
                    &nbsp;
                  </th>
                  <td>
                    <button type="submit" class="btn">注 册</button>
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <div class="tip">
            <ul>
              <li>
                帮助他人 快乐自己 收获利息
              </li>
              <li>
                助您创业 资金周转 分期偿还
              </li>
              <li>
                收益稳定可靠回报高
              </li>
              <li>
                交易安全快捷有保障
              </li>
            </ul>
            <div class="loginbtn">
              <a href="login.htm" class="dlbtn">马上登录</a>
            </div>
          </div>
          <div class="renpic" style="top: 50px;">
          </div>
        </div>
      </div>
    </div>
    <input id="demo" type="hidden" value="${DEMO}" />
    <!-- 引用底部公共部分 -->
    <jsp:include page="/include/footer.jsp"></jsp:include>
    <script type="text/javascript" src="script/nav-zh.js">
</script>
    <script type="text/javascript">
      $(function(){
        $("#tjr").hide();
      });
    </script>
    <script>
//回车登录
document.onkeydown = function(e) {
  if (!e)
    e = window.event;
  if ((e.keyCode || e.which) == 13) {
    regg();
  }
}
</script>
    <script>
$(function() {
  //样式选中
  $("#zh_hover").attr('class', 'nav_first');
  $('.tabmain').find('li').click(function() {
    $('.tabmain').find('li').removeClass('on');
    $(this).addClass('on');
    $('.lcmain_l').children('div').hide();
    $('.lcmain_l').children('div').eq($(this).index()).show();
  })
})
$(document).ready(function() {
  //失去焦点
    $("form :input")
        .blur(function() {
          //短信码
            var demo = $('#demo').val();
            if (demo != 1) {
              if ($(this).attr("id") == "cellcode") {
                if (this.value == "") {
                  $("#s_cellcode").attr("class",
                      "formtips onError");
                  $("#s_cellcode").html("请填写短信校验码");
                } else {
                  $("#s_cellcode").attr("class", "formtips");
                  $("#s_cellcode").html("");
                }
              }
            }
            //userName
            if ($(this).attr("id") == "userName") {
              if (this.value == "") {
                $("#s_userName").attr("class",
                    "formtips onError");
                //alert("请输入登录用户名");
                $("#s_userName").html("请输入登录用户名");
              } else if (this.value.length < 2) {
                $("#s_userName").attr("class",
                    "formtips onError");
                //alert("用户名长度为5-20个字符");
                $("#s_userName").html("用户名长度为2-20个字符");
                // }else if(!/^[^@\/\'\\\"#$%&\^\*]+$/.test(this.value)){
              } else if (!/^[\u4E00-\u9FA5A-Za-z0-9_]+$/
                  .test(this.value)) {
                $("#s_userName").attr("class",
                    "formtips onError");
                $("#s_userName").html("用户名不能含有特殊字符");
              } else {
                $("#s_userName").html("");
                checkRegister('userName');
                $("#s_userName").attr("class", "formtips");
              }
            }
            //password
            if ($(this).attr("id") == "password") {
              pwd = this.value;
              if (this.value == "") {
                $("#s_password").attr("class",
                    "formtips onError");
                //alert("请设置您的密码");
                $("#s_password").html("请设置您的密码");
              } else if (this.value.length < 6) {
                $("#s_password").attr("class",
                    "formtips onError");
                //alert("密码长度为6-20个字符");
                $("#s_password").html("密码长度为6-20个字符");
              } else {
                $("#s_password").html("");
                checkRegister('password');
                $("#s_password").attr("class", "formtips");
              }
            }
            //confirmPassword

            if ($(this).attr("id") == "confirmPassword") {
              if (this.value == "") {
                $("#s_confirmPassword").attr("class",
                    "formtips onError");
                //alert("请再次输入密码确认");
                $("#s_confirmPassword").html("请再次输入密码确认");
              } else if (this.value != pwd) {
                $("#s_confirmPassword").attr("class",
                    "formtips onError");
                $("#s_confirmPassword").html("两次输入的密码不一致");
              } else {
                $("#s_confirmPassword").attr("class",
                    "formtips");
                $("#s_confirmPassword").html("");
              }
            }
          });

    //提交
  });
//验证数据
function checkRegister(str) {
  var param = {};
  if (str == "userName") {
    param["paramMap.email"] = "";
    param["paramMap.userName"] = $("#userName").val();
  } else {
    param["paramMap.email"] = $("#email").val();
    param["paramMap.userName"] = "";
  }
  $.post("ajaxCheckRegister.htm", param, function(data) {
    if (data == 3 || data == 4) {
      if (str == "userName") {
        $("#s_userName").html("该用户已存在");
      } else {
        $("#s_email").html("该邮箱已注册");
      }
    }
  });

}
//========

</script>
    <script>
$("#btn_cellregs").click(function() {
  regg();
});
</script>
    <script>
var falg = true;
function regg() {
  if (falg) {
    falg = false;
    var errornum = $("form .onError").length;
    if ($("#cellcode").val() == "") {
      var demo = $('#demo').val();
      if (demo != 1) {
        $("#s_cellcode").html("短信校验码错误");
        falg = true;
        return false;
      }
    } else if ($("#userName").val() == "") {
      $("#s_userName").html("请输入登录用户名");
      falg = true;
      return false;
    } else if ($("#password").val() == "") {
      $("#s_password").html("请设置您的密码");
      falg = true;
      return false;
    } else if ($("#confirmPassword").val() == "") {
      $("#s_confirmPassword").html("请再次输入密码确认");
      falg = true;
      return false;
    } else if (errornum > 0) {
      alert('请正确填写注册信息');
      falg = true;
      return false;
    } else {
    }
    if ($("#cellphone").val() == "") {
      alert("手机号码错误");
      falg = true;
      return false;
    }
    $('#btn_cellregs').attr('value', '注册中...');
    var param = {};
    param["paramMap.cellphone"] = $("#cellphone").val();
    param["paramMap.cellcode"] = $("#cellcode").val();
    param["paramMap.userName"] = $("#userName").val();
    param["paramMap.password"] = $("#password").val();
    param["paramMap.confirmPassword"] = $("#confirmPassword").val();
    param["paramMap.refferee"] = $("#refferee").val();
    param["paramMap.code"] = $("#code").val();
    param["paramMap.param"] = $("#param").val();
    $.post("cellreginfo.htm", param, function(data) {
      if (data.mailAddress == '0') {
        $("#s_code").html("验证码输入有误，请重新输入");
        $('#btn_cellregs').attr('value', '免费注册');
        falg = true;
      } else if (data.mailAddress == '1') {
        $('#btn_cellregs').attr('value', '免费注册');
        $("#s_confirmPassword").html("两次输入的密码不一致");
        falg = true;
      } else if (data.mailAddress == '2') {
        $('#btn_cellregs').attr('value', '免费注册');
        $("#s_userName").html("该用户已存在");
        falg = true;
      } else if (data.mailAddress == '3') {
        $('#btn_cellregs').attr('value', '免费注册');
        $("#s_email").html("该邮箱已注册");
        falg = true;
      } else if (data.mailAddress == '4') {
        alert("注册失败！");
        $('#btn_cellregs').attr('value', '免费注册');
        falg = true;
      } else if (data.mailAddress == '5') {
        $('#btn_cellregs').attr('value', '免费注册');
        falg = true;
        alert("推荐人填写错误！");
      } else if (data.mailAddress == '12') {
        $('#btn_cellregs').attr('value', '免费注册');
        falg = true;
        $("#s_email").html("请输入您的邮箱地址");
      } else if (data.mailAddress == '13') {
        $('#btn_cellregs').attr('value', '免费注册');
        falg = true;
        $("#s_userName").html("请输入登录用户名");
      } else if (data.mailAddress == '14') {
        $('#btn_cellregs').attr('value', '免费注册');
        $("#s_password").html("请设置您的密码");
        falg = true;
      } else if (data.mailAddress == '15') {
        $('#btn_cellregs').attr('value', '免费注册');
        $("#s_confirmPassword").html("请再次输入密码确认");
        falg = true;
      } else if (data.mailAddress == '16') {
        $('#btn_cellregs').attr('value', '免费注册');
        falg = true;
        alert("注册失败");
      } else if (data.mailAddress == '18') {
        $('#btn_cellregs').attr('value', '免费注册');
        $("#s_userName").html("用户名长度为2-20个字符");
        falg = true;
      } else if (data.mailAddress == '20') {
        $('#btn_cellregs').attr('value', '免费注册');
        $("#s_userName").html("用户名不能含有特殊字符");
        falg = true;
      } else if (data.mailAddress == '21') {
        $('#btn_cellregs').attr('value', '免费注册');
        $("#s_userName").html("用户名第一个字符不能是下划线");
        falg = true;
      } else if (data.mailAddress == '手机已存在') {
        alert("该手机号码已经注册了");
        window.location.href = 'cellPhoneinit.htm';
        //将手机短信验证码移除
        $.post("removecellCode.htm", "", function(data) {
        });//删除手机验证码
      } else if (data.mailAddress == '请输入正确的验证码') {
        $('#btn_cellregs').attr('value', '免费注册');
        $("#s_cellcode").html("短信校验码错误");
        falg = true;
      } else if (data.mailAddress == '注册成功') {
        alert("恭喜你!注册成功");
        $.post("removecellCode.htm", "", function(data) {
          window.location.href = "login.htm";
        });//删除手机验证码
      }
    });
  }
}
</script>
    <script>
var timers = 60;
$(function() {
  timers = 120;
  tipId = window.setInterval(timer, 1000);
});
//定时
function timer() {
  if (timers >= 0) {
    timers--;
  } else {
    window.clearInterval(tipId);
    $.post("removecellCode.htm", "", function(data) {
    });
  }
}
</script>


	<!-- /主体 -->

	<!-- 底部 -->
	<!--底部快捷导航 开始-->
<div class="bottom_box bottom_box1">
	<div class="bottom">
		<div class="bottom_con1">
			<div class="bottom_left">
				<div class="db_menu">
					<a href="gywm.htm">关于我们</a>
					<a href="getMessageBytypeId.htm?typeId=5">法律法规</a>
					<a href="newhelp.htm">新手指引</a>
					<a href="zxns.htm">诚聘英才</a>
					<a href="lxwm.htm">联系我们</a>
					<a href="forumquestionall.htm">问答</a>
					<a href="wzdt.htm">网站地图</a>
				</div>
				<div class="db_gzwm">
					<p class="gzwm">
						关注我们
					</p>
					<a class="xlwb" href="#">新浪微博</a>
					<a class="gfwx" href="#" id="id2">关注微信</a>
					<a class="scbz" href="javascript:void(0);"
						onclick=
	AddFavorite('融资谷', location.href);
>收藏本站</a>
				</div>
			</div>
			<div class="bottom_right">
				<p>
					客服热线\工作时间 9:30-17.30
				</p>
				<div class="kfdh">
					4000-911-806
				</div>
				
			</div>
		</div>
		<!-- 友情链接 -->
		<div class="bottom_con3">
        <h4>友情链接</h4>
        <ul>
                <li><a target="_blank" href="http://www.gopay.com.cn/" >国付宝</a>   </li>
				<li><a target="_blank" href="http://www.p2peye.com">网贷天眼</a></li>
				<li><a target="_blank" href="http://www.wangdaizhijia.com/">网贷之家</a> </li>
				<li><a target="_blank" href="http://www.shzfsoft.com/">网贷之星</a> </li>
				<li><a target="_blank" href="http://www.wangdaicaifu.com/">网贷财富</a> </li>
				<li><a target="_blank" href="http://www.wdlm.cn/">网贷联盟</a> </li>
				<li><a target="_blank" href="http://www.erongtu.com/">融途网</a> </li>
				<li><a target="_blank" href="http://www.p2pxing.com/">网贷之星</a> </li>
				<li><a target="_blank" href="http://www.p2pzhinan.com/">P2P网贷指南</a> </li>
				<li><a target="_blank" href="http://www.wangdai3.com/">网贷第三方</a> </li>
          </ul>
        </div>
		
		
		<div class="bottom_con2">
		Copyright © 2014 工合财富（www.ghjj.cn）版权所有 广东省工合股权基金有限公司 | 
			<a href="http://www.miitbeian.gov.cn">备案号：粤ICP备88888888号</a> &nbsp;
			<script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://"
			: " http://");
	document
			.write(unescape("%3Cscript src='"
					+ _bdhmProtocol
					+ "hm.baidu.com/h.js%3F0d153ad81f03058ce80c0c3c697b77b5' type='text/javascript'%3E%3C/script%3E"));
</script>

			<script type="text/javascript"
				src="http://tajs.qq.com/stats?sId=34570481" charset="UTF-8"></script>

		</div>

		<div class="bottom_aqpic">
			<script id="ebsgovicon"
				src="https://cert.ebs.gov.cn/govicon.js?id=d49f3614-19ad-47df-a3bf-4b8bf872e48b&width=52&height=70&type=1"
				type="text/javascript" charset="utf-8"></script>
			 &nbsp;
			<a href="http://webscan.360.cn/index/checkwebsite/url/www.ubanks.cn"><img
					border="0" style="width: 100px; height: 50px;"
					src="http://img.webscan.360.cn/status/pai/hash/8fd610857e7a8668e59488f645830bca" />
			</a> &nbsp;
			<a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1305828394"><img
					alt="" src="/Public/static/rzg_images/wzzx.jpg" style="width: 100px; height: 50px;">
			</a>&nbsp;
			<a id='___szfw_logo___'
				href='https://search.szfw.org/cert/l/CX20140729008585008681'
				target='_blank'><img style="width: 100px; height: 50px;"
					src='https://search.szfw.org/cert.png?l=CX20140729008585008681'>
				&nbsp; <a key="53f6a580efbfb04a7b49c161" logo_size="124x47"
				logo_type="realname" href="http://www.anquan.org"><script
						src="http://static.anquan.org/static/outer/js/aq_auth.js"></script>
			</a>
		</div>

	</div>
</div>

<!--底部footer 结束-->
<script type="text/javascript" src="script/jqueryV172.js"></script>
<script type="text/javascript" src="script/xl.js"></script>
<script type='text/javascript'>
	(function() {
		document.getElementById('___szfw_logo___').oncontextmenu = function() {
			return false;
		}
	})();
</script>
<script type="text/javascript">
	//收藏本站
	function AddFavorite(title, url) {
		try {
			window.external.addFavorite(url, title);
		} catch (e) {
			try {
				window.sidebar.addPanel(title, url, "");
			} catch (e) {
				alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
			}
		}
	}
</script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/banner.js"></script>

<div style="display: none" id=testID>
	<P>
		<img src="images/img/weixin.jpg" width="250" height="250" />
	</P>
	打开微信，点击底部的″发现″，使用″扫一扫″即可关注融资谷官方微信.
</div>
<script type=text/javascript>
	var environment = {
		userVo : '',
		role : '',
		userId : '',
		basePath : '',
		userCash : ''
	};
</script>
<script type="text/javascript">
	$("#id2").click(
			function() {
				tipsWindown("关注融资谷官方微信", "id:testID", "250", "300", "true", "",
						"true", "id");
			});

	// 关注微信
	var showWindown = true;
	var templateSrc = "http://leotheme.cn/wp-content/themes/Dreamy";
	function tipsWindown(title, content, width, height, drag, time, showbg,
			cssName) {
		$("#windown-box").remove();
		var width = width >= 950 ? this.width = 950 : this.width = width;
		var height = height >= 527 ? this.height = 527 : this.height = height;
		if (showWindown == true) {
			var simpleWindown_html = new String;
			simpleWindown_html = "<div id=\"windownbg\" style=\"height:"
					+ $(document).height()
					+ "px;;filter:alpha(opacity=0);opacity:0;z-index: 999901\"><iframe style=\"width:100%;height:100%;border:none;filter:alpha(opacity=0);opacity:0;\">__tag_149$151_</div>";
			simpleWindown_html += "__tag_150$25_";
			simpleWindown_html += "__tag_151$25_<h2>__tag_151$55_<span id=\"windown-close\">鍏抽棴__tag_151$90_</div>";
			simpleWindown_html += "__tag_152$25_<div id=\"windown-content\">__tag_152$88_</div>";
			simpleWindown_html += "__tag_153$25_";
			$("body").append(simpleWindown_html);
			show = false;
		}
		contentType = content.substring(0, content.indexOf(":"));
		content = content.substring(content.indexOf(":") + 1, content.length);
		switch (contentType) {
		case "text":
			$("#windown-content").html(content);
			break;
		case "id":
			$("#windown-content").html($("#" + content + "").html());
			break;
		case "img":
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_172$12_");
			});
			$.ajax( {
				error : function() {
					$("#windown-content").html("__tag_178$32_</p>");
				},
				success : function(html) {
					$("#windown-content").html("__tag_182$7_");
				}
			});
			break;
		case "url":
			var content_array = content.split("?");
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_193$12_");
			});
			$.ajax( {
				type : content_array[0],
				url : content_array[1],
				data : content_array[2],
				error : function() {
					$("#windown-content").html("__tag_202$32_</p>");
				},
				success : function(html) {
					$("#windown-content").html(html);
				}
			});
			break;
		case "iframe":
			$("#windown-content").ajaxStart(function() {
				$(this).html("__tag_215$12_");
			});
			$
					.ajax( {
						error : function() {
							$("#windown-content").html("__tag_223$9_</p>");
						},
						success : function(html) {
							$("#windown-content")
									.html(
											"<iframe src='../js//"
													+ content
													+ " width=\"100%\" height=\""
													+ parseInt(height)
													+ "px"
													+ "\" scrolling=\"auto\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">__tag_233$92_");
						}
					});
		}
		$("#windown-title h2").html(title);
		if (showbg == "true") {
			$("#windownbg").show();
		} else {
			$("#windownbg").remove();
		}
		;
		$("#windownbg").animate( {
			opacity : "0.5"
		}, "normal");
		$("#windown-box").show();
		if (height >= 527) {
			$("#windown-title").css( {
				width : (parseInt(width) + 22) + "px"
			});
			$("#windown-content").css( {
				width : (parseInt(width) + 17) + "px",
				height : height + "px"
			});
		} else {

			$("#windown-title").css( {
				width : (parseInt(width) + 10) + "px"
			});
			$("#windown-content").css( {
				width : width + "px",
				height : height + "px"
			});
		}

		var cw, ch, est = document.documentElement.scrollTop;
		if (self.innerHeight) {
			cw = self.innerWidth;
			ch = self.innerHeight;
		} else if (document.documentElement
				&& document.documentElement.clientHeight) {
			cw = document.documentElement.clientWidth;
			ch = document.documentElement.clientHeight;
		} else if (document.body) {
			cw = document.body.clientWidth;
			ch = document.body.clientHeight;
		}
		var isIE6 = false;
		if (isIE6) {
			$("#windown-box").css( {
				left : "50%",
				top : (parseInt((ch) / 2) + est) + "px",
				marginTop : -((parseInt(height) + 53) / 2) + "px",
				marginLeft : -((parseInt(width) + 32) / 2) + "px",
				zIndex : "999999"
			});
		} else {
			$("#windown-box").css( {
				left : "50%",
				top : "50%",
				marginTop : -((parseInt(height) + 53) / 2) + "px",
				marginLeft : -((parseInt(width) + 32) / 2) + "px",
				zIndex : "999999"
			});
		}
		;
		var Drag_ID = document.getElementById("windown-box"), DragHead = document
				.getElementById("windown-title");

		var moveX = 0, moveY = 0, moveTop, moveLeft = 0, moveable = false;
		if (isIE6) {
			moveTop = est;
		} else {
			moveTop = 0;
		}
		var sw = Drag_ID.scrollWidth, sh = Drag_ID.scrollHeight;
		DragHead.onmouseover = function(e) {
			if (drag == "true") {
				DragHead.style.cursor = "move";
			} else {
				DragHead.style.cursor = "default";
			}
		};
		DragHead.onmousedown = function(e) {
			$("#windown-box").css( {
				opacity : "0.5"
			}, "normal");
			if (drag == "true") {
				moveable = true;
			} else {
				moveable = false;
			}
			e = window.event ? window.event : e;
			var ol = Drag_ID.offsetLeft, ot = Drag_ID.offsetTop - moveTop;
			moveX = e.clientX - ol;
			moveY = e.clientY - ot;
			document.onmousemove = function(e) {
				if (moveable) {

					e = window.event ? window.event : e;
					var x = e.clientX - moveX;
					var y = e.clientY - moveY;
					if (x > 0 && (x + sw < cw) && y > 0 && (y + sh < ch)) {
						Drag_ID.style.left = x + "px";
						Drag_ID.style.top = parseInt(y + moveTop) + "px";
						Drag_ID.style.margin = "auto";
					}
				}
			}
			document.onmouseup = function() {
				moveable = false;
				$("#windown-box").css( {
					opacity : "1"
				}, "normal");
			};
			Drag_ID.onselectstart = function(e) {
				return false;
			}
			$("#windown-content").attr("class", "windown-" + cssName);
			var closeWindown = function() {
				$("#windownbg").remove();
				$("#windown-box").fadeOut("slow", function() {
					$(this).remove();
				});
			}
			if (time == "" || typeof (time) == "undefined") {
				$("#windown-close").click(function() {
					$("#windownbg").remove();
					$("#windown-box").fadeOut("slow", function() {
						$(this).remove();
					});
				});
			} else {
				setTimeout(closeWindown, time);
			}
		}
	}
</script>
<!-- WPA Button Begin -->
<!-- <script charset="utf-8" type="text/javascript"
 	src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAyNjA2MV8xNTgyNTlfNDAwMDkxMTgwNl8"></script>-->
<!-- WPA Button End -->
<!-- 弹窗脚本 -->
<script type="text/javascript">
		function cn(){
			ymPrompt.setDefaultCfg({title:'标题', message:"内容",okTxt:' 确 定 ',cancelTxt:' 取 消 ',closeTxt:'关闭',minTxt:'最小化',maxTxt:'最大化'});
		}
		function en(){
			ymPrompt.setDefaultCfg({title:'Default Title', message:"Default Message",okTxt:' OK ',cancelTxt:' Cancel ',closeTxt:'Close',minTxt:'Minimize',maxTxt:'Maximize'});
		}
		
		function slideHd(){
			ymPrompt.alert('看到效果了吗？');
		}

		function getInput(tp){
			if(tp!='ok') return ymPrompt.close();
			var v=$('myInput').value;
			if(v=='')
				alert('请输入您的名字！')
			else{
				alert('你输入的值为：'+v)
				ymPrompt.close();
			}
		}
		function getButtons(){
			var btnObjs=ymPrompt.getButtons(),arr=[];
			for(var i=0;i<btnObjs.length;i++)
				arr.push('按钮'+(i+1)+"内容:"+document.createElement("DIV").appendChild(btnObjs[i].cloneNode(true)).parentNode.innerHTML);
			alert(arr.join('\n\n'));
			ymPrompt.close();
		}
		function autoClose(){
			alert('三秒钟自动关闭');
			setTimeout(function(){ymPrompt.close()},3000)
		}
		function handlerIframe(){
			alert(ymPrompt.getPage().contentWindow.document.body.innerHTML);
			ymPrompt.close();
		}
		function noTitlebar(){
			alert('提示：除了可以通过增加按钮来控制，还可以在子页面中调用该页面的ymPrompt.close方法来关闭');
		}
		var Alert=ymPrompt.alert;
		function cancelFn(){
			Alert("点击了'取消'按钮");
		}
		function okFn(){
			Alert("点击了'确定'按钮");
		}
		function closeFn(){
			Alert("点击了'关闭'按钮");
		}
		function handler(tp){
			if(tp=='ok'){
				okFn();
			}
			if(tp=='cancel'){
				cancelFn();
			}
			if(tp=='close'){
				closeFn()
			}
		}
		function testHd(tp){
			Alert('你点击的按钮的标志为：'+tp);
		}
		function handler2(tp){
			if(tp=='ok'){
				ymPrompt.confirmInfo("保存成功!是否打印税票？",null,null,"问询提示",function(tp){tp=='ok'?ticketPrevie("print"):loadImposeInfo()})
			}
			if(tp=='cancel'){
				cancelFn();
			}
			if(tp=='close'){
				closeFn()
			}
		}
		function ticketPrevie(xx){
			Alert(xx)
		}
		function loadImposeInfo(){
			Alert("exit")
		}

		function stateHd(tp){
			ymPrompt[tp]();
		}
	</script>
	<!-- /底部 -->
</body>
</html>

<!-- 网站结构 -->