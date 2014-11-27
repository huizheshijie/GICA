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
	 

<block name="body">
		<!-- 引用头部公共部分 -->
		<div class="nymain">
			<div class="ifbox1">
				<h2>
					确定投标
					<img src="images/neiye2_06.jpg" width="4" height="7" />
				</h2>
				<div class="boxmain"
					style="padding-top: 20px; padding-bottom: 20px;">
					<div class="qrtb">
						<div class="tbtop"></div>
						<div class="tbmain">
						  <?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?><div class="tbinfo">
								<div class="lbox">
									<div class="pic">
										<shove:img src="${investDetailMap.personalHead}"
											defaulImg="/Public/static/rzg_images/default-img.jpg" width="80" height="79"></shove:img>
										<br />
										
									</div>
									<p class="name">
										用户名：<?php echo (get_username($vb["borrow_uid"])); ?>
										<br />
										籍
										贯：<?php echo ($vb["location"]); ?>&nbsp;<?php echo ($vblocation_now); ?>
										<br />
										居住地：

									</p>
								</div>
								<div class="rbox">
									<ul>
										<li>
											借款标题：
											<strong><?php echo ($vb["borrow_name"]); ?></strong>
										</li>
										<li>
											借款金额：
											<strong>￥<?php echo ($vb["borrow_money"]); ?>元</strong>
										</li>
										<li>
											借款年利率：
											<strong><?php echo ($vb["borrow_interest_rate"]); ?>%</strong>
										</li>
										<li>
											已经完成：
											<strong>%</strong>
										</li>
										<li>
											还需借款:
											<strong>￥</strong>
										</li>
										<li>
											借款期限:
											<strong><?php echo ($vb["borrow_duration"]); ?> <s:if
													test="%{investDetailMap.isDayThe ==1}">个月</s:if> <s:else>天</s:else>
											</strong>
										</li>
										<li>
											还款方式:
											<strong> <s:if
													test="%{investDetailMap.isDayThe == 2}">
													到期还本付息
											</s:if> <s:elseif test="%{investDetailMap.paymentMode == 1}">
													按月分期还款
											</s:elseif> <s:elseif test="%{investDetailMap.paymentMode ==2}">
											按月付息,到期还本
											</s:elseif> <s:elseif test="%{investDetailMap.paymentMode ==3}">
											秒还
											</s:elseif> <s:elseif test="%{investDetailMap.paymentMode ==4}">
 											 一次性还款
											</s:elseif> </strong>
										</li>
										<li>
											交易类型:
											<strong> <s:if
													test="%{investDetailMap.tradeType == 1}">
线上交易
</s:if> <s:elseif test="%{investDetailMap.tradeType ==2}">
线下交易
</s:elseif> </strong>
										</li>
									</ul>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="tbcz">
								<p class="money">
									您的帐户总额：
									<strong> <?php echo ($vo["account_money"]); ?>元 </strong>
									<a href="rechargeInit.htm" class="czbtn"><img
											src="/Public/static/rzg_images/tubiao3.png" /> </a>
									<br />
									您的可用余额：
									<strong> <?php echo ($vo["account_money"]); ?>元</strong>
								</p>
								<p class="tips">
									请填写并确认下面投标金额
									<a href="updatexgmm.htm" class="czbtn"><input type="button"
											value="设置交易密码" /> </a>
									<br />
									<s:if test="#request.subscribes!=1">
										<span class="f999">最低投标金额：<s:property
												value="#request.minTenderedSum" default="0" />元&nbsp;最多投标金额：<s:if
												test="%{investDetailMap.maxTenderedSum != -1}"><?php echo ($vb["borrow_max"]); ?>元</s:if>
											<s:else>无限制</s:else> <br />当前年利率:%</span>
									</s:if>
									<s:else>
										<span class="f999">最小认购金额：<?php echo ($vb["borrow_min"]); ?>元<s:property
												value="#request.investMaps.smallestFlowUnit" default="0" />元&nbsp;
											当前年利率:% <br />认购总份数：份,还有：份</span>
									</s:else>
								</p>
								<div id="content" class="tbtab">
								<form action="<?php echo U('add');?>" method="post">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td>
													投标金额：
												</td>
												<td>
													<input type="text" id="amount" name="capital"style="color: red" class="inp100" maxlength="20" value="" />
													元
													<a href="javascript:;" class="_blank" id="bigSum"> <img src="/Public/static/rzg_images/bigSum.png" /> </a>
												</td>
											</tr>
											<tr>
												<td colspan="2" style="margin-left: 20px;">
													<input type="hidden" value="" id="factSum" />
												</td>
											</tr>
<!-- 										<tr>
											<td>
												投标密码：
											</td>
											<td>
												<input type="password" id="investPWD"
													name="paramMap.investPWD" class="inp100" maxlength="20" />
											</td>
										</tr> -->
											<tr>
												<td colspan="2" class="tishi">
													注意：点击按钮表示您将确认投标金额并同意支付贷款
												</td>
											</tr>
											<tr>
												<td colspan="2" align="center"
													style="padding-top: 15px; padding-bottom: 15px;">
													<input  type="submit" class="qdtbbtn" value="点击确定">
													<a href="<?php echo U('Borrow/detail?id='.$vb['id']);?>"></a>
												</td>
											</tr>
									</table>
									</form>
									<s:if test="#request.subscribes==1">
										<div
											style="background-color: #FDFAE9; height: 75px; width: 320px; margin-top: 15px; border: solid 1px #F9DDD1;">
											<table width="100%" border="0" cellpadding="0"
												cellspacing="0">
												<tbody>
													<tr>
														<td width="51%" height="48" align="right">
															<div>
																<input type="text" class="result_btn_detail_3" value="1"
																	id="result" style="width: 100px;" />
																份&nbsp;&nbsp;
															</div>
														</td>
														<td width="49%">
															<div style="width: 98px;">
																<input type="image" src="images/gogo_rg.gif" value=""
																	id="invest" class="bttn_2" />
															</div>
														</td>
													</tr>
													<tr>
														<td colspan="2" align="center">
															您的可投标金额为：
															<font id="account_use" style="color: #FF0000">￥</font>元，最多可认购：
															<font style="color: #FF0000" id="roam_use">份</font>
															<input name="subscribes" type="hidden" id="subscribes"
																value="" />
															<input name="smallestFlowUnit" type="hidden"
																id="smallestFlowUnit"
																value="${investMaps.smallestFlowUnit}" />
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</s:if>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="tbbot"></div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" id="investNum"
			value="${investDetailMap.investNum}" />
		<input type="hidden" id="usableSum" value="${userMap.usableSum}" />
		<!-- 引用底部公共部分 -->
		<jsp:include page="/include/footer.jsp"></jsp:include>
		<s:hidden name="id" value="%{investDetailMap.id}"></s:hidden>
		<s:hidden name="annualRate" value="%{investDetailMap.annualRate}"></s:hidden>
		<s:hidden name="deadline" value="%{investDetailMap.deadline}"></s:hidden>
		<script type="text/javascript" src="script/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="script/jquery.shove-1.0.js"></script>
		<script type="text/javascript" src="script/nav-lc.js"></script>
		<script>
	$("#bigSum").click(function() {
		var factSum = $("#factSum").val();
		$("#amount").val(factSum);
	});
</script>

		<script type="text/javascript">
	var flag = true;
	$(function() {
		//样式选中
		$("#licai_hover").attr('class', 'nav_first');
		$("#licai_hover div").removeClass('none');
		$('.tabmain').find('li').click(function() {
			$('.tabmain').find('li').removeClass('on');
			$(this).addClass('on');
			$('.lcmain_l').children('div').hide();
			$('.lcmain_l').children('div').eq($(this).index()).show();
		});
		$('#invest')
				.click(function() {
					var id = $("#id").val();
					param['paramMap.id'] = id;
					param["paramMap.code"] = $("#code").val();
					param['paramMap.annualRate'] = $("#annualRate").val();
					param["paramMap.deadline"] = $("#deadline").val();
					param['paramMap.amount'] = 1;
					param['paramMap.investPWD'] = $('#investPWD').val();
					param['paramMap.result'] = $('#result').val();//认购份数
						param['paramMap.smallestFlowUnit'] = $(
								'#smallestFlowUnit').val();//每份认购金额
						param['paramMap.subscribes'] = $('#subscribes').val();//认购模式是否开启
						if (flag) {
							flag = false;
							$
									.shovePost(
											'financeInvest.htm',
											param,
											function(data) {
												var callBack = data.msg;
												if (callBack == undefined
														|| callBack == '') {
													$('#content').html(data);
													flag = true;
												} else {
													if (callBack == 1) {
														alert("操作成功!");
														window.location.href = 'financeDetail.htm?id=' + id;
														flag = false;
														return false;
													}
													alert(callBack);
													flag = true;
												}
											});
						}
					});
		$('#btnsave')
				.click(
						function() {
							var id = $("#id").val();
							param['paramMap.id'] = id;
							param["paramMap.code"] = $("#code").val();
							param['paramMap.annualRate'] = $("#annualRate")
									.val();
							param["paramMap.deadline"] = $("#deadline").val();
							param['paramMap.amount'] = $('#amount').val();
							param['paramMap.investPWD'] = $('#investPWD').val();
							if (flag) {
								flag = false;
								$
										.shovePost(
												'financeInvest.htm',
												param,
												function(data) {
													var callBack = data.msg;
													if (callBack == undefined
															|| callBack == '') {
														$('#content')
																.html(data);
														flag = true;
													} else {
														if (callBack == 1) {
															alert("操作成功!");
															window.location.href = 'financeDetail.htm?id=' + id;
															flag = false;
															return false;
														}
														alert(callBack);
														flag = true;
													}
												});
							}
						});

	});
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