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
		<jsp:include page="/include/topref.jsp"></jsp:include>
		<input type="hidden" id="idStr" value="${idStr}" />
		<s:if test="%{#request.list !=null && #request.list.size()>0}">
			<s:iterator value="#request.list" id="bean">
				<input type="hidden" id="userID" value="${bean.userId}" />
			</s:iterator>
		</s:if>
		<div class="nymain">
		<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vb): $mod = ($i % 2 );++$i;?><div class="ifbox1">
				<h2>
					<span><a href="javascript:void(0);" id="sendmail">发送站内信</a>
						<a href="javascript:void(0);" id="reportuser">举报此人</a> </span>标的详情
				</h2>
				<div class="boxmain">
					<div class="pic-info">
						<div class="tx">
							<shove:img src="${borrowDetailMap.imgPath}"
								defaulImg="images/default-img.jpg" width="128px;"
								height="128px;">
							</shove:img>
						</div>
						<div class="guanzhu">
							<!-- Baidu Button BEGIN -->
							<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
								<a class="bds_qzone"></a>
								<a class="bds_tsina"></a>
								<a class="bds_tqq"></a>
								<a class="bds_renren"></a>
								<a class="bds_t163"></a>
								<span class="bds_more">更多</span>
								<a class="shareCount"></a>
							</div>
							<script type="text/javascript" id="bdshare_js"
								data="type=tools&amp;uid=6638061"></script>
							<script type="text/javascript" id="bdshell_js"></script>
							<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion="
			+ Math.ceil(new Date() / 3600000)
</script>
							 <!-- Baidu Button END  -->
						</div>
						<p>
							<a id="focusonBorrow" href="javascript:void(0);">关注此借款</a>
						</p>
					</div>
					<div class="xqbox">
						<h3>
							<s:property value="#request.borrowDetailMap.borrowTitle"
								default="---" />
							&nbsp;&nbsp;&nbsp; (
							<s:property value="#request.borrowWay" default="---" /><?php echo ($vb["borrow_name"]); ?>
							)
						</h3>
						<div class="xqboxmain">
							<div class="xqtop">
								<div class="money">
									<p>
										借款金额：
										<strong>￥<?php echo ($vb["borrow_money"]); ?>元
										</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;借款目的：${borrowDetailMap.purpose
										}
									</p>
									<p>
										借款年利率：<?php echo ($vb["borrow_interest_rate"]); ?>%
										借款期限：
										<span><?php echo ($vb["borrow_duration"]); ?></span>
									</p>
								</div>
								<div class="tbbtn">
									<s:if test="#session.DEMO==2">
										<s:if test="%{#request.wStatus != ''}">
											<img src="/Public/static/rzg_images/tubiao4.png" width="97" height="31" />&nbsp;
	        </s:if>
										<s:elseif test="%{#request.borrowDetailMap.borrowStatus == 1}">
											<img src="/Public/static/rzg_images/neiye2_15.jpg" width="97" height="31" />&nbsp;
	        </s:elseif>
										<s:elseif test="%{#request.borrowDetailMap.borrowStatus == 2}">
											<a href="javascript:void(0);" id="invest"><img
													src="/Public/static/rzg_images/neiye2_07.jpg" width="124" height="50" /> </a>
										</s:elseif>
										<s:elseif test="%{#request.borrowDetailMap.borrowStatus == 3}">
											<img src="/Public/static/rzg_images/neiye2_16.jpg" width="97" height="31" />&nbsp;
	        </s:elseif>
										<s:elseif test="%{#request.borrowDetailMap.borrowStatus == 4}">
											<img src="/Public/static/rzg_images/neiye1_636.jpg" width="97" height="31" />&nbsp;
	        </s:elseif>
										<s:elseif test="%{#request.borrowDetailMap.borrowStatus == 5}">
											<img src="/Public/static/rzg_images/neiye1_637.jpg" width="97" height="31" />&nbsp;
      		  </s:elseif>
										<s:else>
											<img src="/Public/static/rzg_images/neiye2_18.jpg" width="97" height="31" />&nbsp;
		        </s:else>
									</s:if>
									<s:else>
										<s:if test="%{#request.borrowDetailMap.borrowStatus == 1}">
											<img src="/Public/static/rzg_images/neiye2_15.jpg" width="97" height="31" />&nbsp;
      	  	</s:if>
										<s:elseif test="%{#request.borrowDetailMap.borrowStatus == 2}">
											<a href="javascript:void(0);" id="invest"><img
													src="/Public/static/rzg_images/neiye2_07.jpg" width="124" height="50" /> </a>
										</s:elseif>
										<s:elseif test="%{#request.borrowDetailMap.borrowStatus == 3}">
											<img src="/Public/static/rzg_images/neiye2_16.jpg" width="97" height="31" />&nbsp;
	        </s:elseif>
										<s:elseif test="%{#request.borrowDetailMap.borrowStatus == 4}">
											<img src="/Public/static/rzg_images/neiye1_636.jpg" width="97" height="31" />&nbsp;
	        </s:elseif>
										<s:elseif test="%{#request.borrowDetailMap.borrowStatus == 5}">
											<img src="/Public/static/rzg_images/neiye1_637.jpg" width="97" height="31" />&nbsp;
      		  </s:elseif>
										<s:else>
											<img src="/Public/static/rzg_images/neiye2_18.jpg" width="97" height="31" />&nbsp;
		        </s:else>
									</s:else>

								</div>
							</div>
							<div class="xqbottom">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>

										<td width="10%">
											还差：
											<span>￥ <s:property
													value="#request.borrowDetailMap.investAmount" default="0" />
											</span>
										</td>
										<td width="18%" colspan="2">
											<div>
												<div style="float: left;">
													投标进度：
												</div>
												<div
													style="float: left; vertical-align: bottom; margin-right: 5px; margin-top: 8px; padding: 3px; background-image: url(/Public/static/rzg_images/index9_57.jpg); width: 100px; height: 10px;">
													<img src="/Public/static/rzg_images/index9_56.jpg"
														width="<s:property value="#request.borrowDetailMap.schedules" default="0"/>"
														height="10" style="display: block;" />
												</div>
												<div style="float: left;">
													<span><s:property
															value="#request.borrowDetailMap.schedules" default="0" />%</span>
												</div>
											</div>
											<s:if test="#request.subscribes!=1">&nbsp;</s:if>
											<s:else>
    		&nbsp;&nbsp;剩余份数:<s:property
													value="#request.borrowDetailMap.circulationNumber - #request.borrowDetailMap.hasCirculationNumber"
													default="0" />
											</s:else>
										</td>
									</tr>
									<tr>
										<!-- modify by houli   将还款方式字体加粗变红 -->

										<td>
											<strong style="color: red"> 还款方式： modify by houli 如果是天标，则还款方式为  到期还本付息
												<s:if test="%{#request.borrowDetailMap.isDayThe ==2}">
    	 到期还本付息
    	</s:if> <s:elseif test="%{#request.borrowDetailMap.paymentMode == 1}">按月分期还款</s:elseif>
												<s:elseif
													test="%{#request.borrowDetailMap.paymentMode == 2}">按月付息,到期还本</s:elseif>
												<s:elseif
													test="%{#request.borrowDetailMap.paymentMode == 3}">秒还</s:elseif>
												<s:elseif
													test="%{#request.borrowDetailMap.paymentMode == 4}">一次性还款</s:elseif>


											</strong>
										</td>
										<td>
											投标奖励：
											<s:if test="%{#request.borrowDetailMap.excitationType == 1}">无</s:if>
											<s:elseif
												test="%{#request.borrowDetailMap.excitationType ==2}">按固定金额</s:elseif>
											<s:elseif
												test="%{#request.borrowDetailMap.excitationType ==3}">按借款金额比例</s:elseif>
										</td>
										<td>
											交易类型：
											<s:if test="%{#request.borrowDetailMap.tradeType == 1}">线上交易</s:if>
											<s:elseif test="%{##request.borrowDetailMap.tradeType ==2}">线下交易</s:elseif>
										</td>
									</tr>
									<tr>
										<s:if test="#request.subscribes!=1">
											<td>
												最小投标金额： ￥
												<s:property value="#request.borrowDetailMap.minTenderedSum"
													default="0" />
												元
											</td>
											<td>
												最大投标金额：
												<s:if test="%{#request.borrowDetailMap.maxTenderedSum==-1}">
							没有限制
				     </s:if>
												<s:else>
					    ￥<s:property value="#request.borrowDetailMap.maxTenderedSum"
														default="0" />元                
					</s:else>
											</td>
										</s:if>
										<s:else>
											<td>
												最小认购金额： ￥
												<s:property
													value="#request.borrowDetailMap.smallestFlowUnit"
													default="0" />
												元
											</td>
											<td width="9%">
												认购总份数：
												<s:property
													value="#request.borrowDetailMap.circulationNumber"
													default="0" />
												份
											</td>
										</s:else>
										<td width="7%">
											剩余时间：
											<span id="remainTimeOne"></span>
										</td>
									</tr>
									<tr>
										<td colspan="3">
											总投标数：
											<s:property value="#request.borrowDetailMap.investNum"
												default="0" />
											浏览量：
											<s:property value="#request.borrowDetailMap.visitors"
												default="---" />
											<br />
											<span style="color: red">${earnAmount}</span>
										</td>
									</tr>
								</table>

							</div>
						</div>

					</div>
					<div class="reninfo">

						<div class="rinfomain">
							<div class="tx">
								<shove:img src="${borrowUserMap.personalHead}"
									defaulImg="/Public/static/rzg_images/default-img.jpg" width="62" height="62"></shove:img>
							</div>
							<div class="jfico">
								<!-- <img src="images/ico_r_${borrowUserMap.rating}.gif" /> -->
								&nbsp;
							</div>
							<div class="name">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td>
											用户名：${borrowUserMap.username}
											<s:if test="#request.borrowUserMap.vipStatus ==2"></s:if>
										</td>
									</tr>
									<tr>
										<td>
											居住地： ${borrowUserMap.address}
										</td>
									</tr>
									
<!-- 									<tr>
										<td>
											信用指数：
											<img src="images/ico_${borrowUserMap.credit}.jpg"
												title="${borrowUserMap.creditrating}分" width="33"
												height="22" />
										</td>
									</tr>
									 -->
									<tr>
										<td>
											注册时间：${borrowUserMap.createTime}
										</td>
									</tr>
									<tr>
										<td>
											最后登录：${borrowUserMap.lastDate}
										</td>
									</tr>
									<tr>
										<td align="center">
											<img src="/Public/static/rzg_images/neiye2_22.jpg" width="16" height="16" />
											<a id="focusonUser" href="javascript:void(0);">关注此人</a>
										</td>
									</tr>
								</table>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="ifbox2">
				<div class="til"
					style="background-image: url(/Public/static/rzg_images/neiye2_32.jpg); background-repeat: repeat-x;">
					<ul>
						<li class="on">
							相关信息
						</li>
					</ul>
					<div class="til_bot">
					</div>
				</div>
				<div class="boxmain">
<!-- 					<p class="xydj">
						融资谷网贷信用等级：
						<img src="images/ico_${borrowUserMap.credit}.jpg"
							title="${borrowUserMap.creditrating}分" width="33" height="22" />
						<span>融资谷网贷信用额度： ${borrowUserMap.creditLimit}</span>
					</p> -->
					<div class="tips">
						以下基本信息资料，经用户同意披露。其中
						<span class="fred">红色</span>字体的信息，为通过融资谷网贷审核的项目。
						<br />
						<strong>审核意见：</strong>${borrowDetailMap.auditOpinion}
					</div>
					<div class="infotab">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th colspan="6" align="left">
									基本信息
								</th>
							</tr>
							<tr>
								<td>
									性别：
									<s:if test="#request.borrowUserMap.auditperson == 3">
										<strong>${borrowUserMap.sex}</strong>
									</s:if>
									<s:else>${borrowUserMap.sex}</s:else>
								</td>
								<td>
									年龄：
									<s:if test="#request.borrowUserMap.auditperson == 3">
										<strong>${borrowUserMap.age}</strong>
									</s:if>
									<s:else>${borrowUserMap.age}</s:else>
								</td>
								<td colspan="3">
									婚姻状况：
									<s:if test="#request.borrowUserMap.auditperson == 3">
										<strong>${borrowUserMap.maritalStatus}</strong>
									</s:if>
									<s:else>${borrowUserMap.maritalStatus}</s:else>
								</td>
								<td colspan="3">
									工作城市：
									<s:if test="#request.borrowUserMap.auditwork == 3">
										<strong>${borrowUserMap.workPro}&nbsp;${borrowUserMap.workCity}</strong>
									</s:if>
									<s:else>${borrowUserMap.workPro}&nbsp;${borrowUserMap.workCity}</s:else>
								</td>
							</tr>

							<tr>
								<td>
									学历：
									<s:if test="#request.borrowUserMap.auditwork == 3">
										<strong>${borrowUserMap.highestEdu}</strong>
									</s:if>
									<s:else>${borrowUserMap.highestEdu}</s:else>
								</td>
								<td>
									有无购房：
									<s:if test="#request.borrowUserMap.auditperson == 3">
										<strong>${borrowUserMap.hasHourse}</strong>
									</s:if>
									<s:else>${borrowUserMap.hasHourse}</s:else>
								</td>
								<td>
									有无购车：
									<s:if test="#request.borrowUserMap.auditperson == 3">
										<strong>${borrowUserMap.hasCar}</strong>
									</s:if>
									<s:else>${borrowUserMap.hasCar}</s:else>
								</td>
								<td>
									&nbsp;
								</td>
								<td>
									&nbsp;
								</td>
								<td>
									&nbsp;
								</td>
								<td>
									&nbsp;
								</td>
							</tr>
						</table>
					</div>
					<div class="infotab">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th colspan="5" align="left">
									融资谷网贷借款记录
								</th>
							</tr>
							<tr>
								<td>
									发布借款标的：
									<s:if test="#request.borrowRecordMap.publishBorrow !=''">${borrowRecordMap.publishBorrow}</s:if>
									<s:else>0</s:else>
								</td>
								<td>
									成功借款笔数：
									<s:if test="#request.borrowRecordMap.successBorrow !=''">${borrowRecordMap.successBorrow}</s:if>
									<s:else>0</s:else>
								</td>
								<td>
									还清笔数：
									<s:if test="#request.borrowRecordMap.repayBorrow !=''">${borrowRecordMap.repayBorrow}</s:if>
									<s:else>0</s:else>
								</td>
								<td>
									逾期次数：
									<s:if test="#request.borrowRecordMap.hasFICount !=''">${borrowRecordMap.hasFICount}</s:if>
									<s:else>0</s:else>
								</td>
								<td>
									严重逾期次数：
									<s:if test="#request.borrowRecordMap.badFICount !=''">${borrowRecordMap.badFICount}</s:if>
									<s:else>0</s:else>
								</td>
							</tr>
							<tr>
								<td>
									共借入：
									<s:if test="#request.borrowRecordMap.borrowAmount !=''">${borrowRecordMap.borrowAmount}</s:if>
									<s:else>0</s:else>
								</td>
								<td>
									待还金额：
									<s:if test="#request.borrowRecordMap.forRepayPI !=''">${borrowRecordMap.forRepayPI}</s:if>
									<s:else>0</s:else>
								</td>
								<td>
									逾期金额：
									<s:if test="#request.borrowRecordMap.hasI !=''">${borrowRecordMap.hasI}</s:if>
									<s:else>0</s:else>
								</td>
								<td>
									共借出：
									<s:if test="#request.borrowRecordMap.investAmount !=''">${borrowRecordMap.investAmount}</s:if>
									<s:else>0</s:else>
								</td>
								<td>
									待收金额：
									<s:if test="#request.borrowRecordMap.forPI !=''">${borrowRecordMap.forPI}</s:if>
									<s:else>0</s:else>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="ifbox2">
				<div class="til"
					style="background-image: url(/Public/static/rzg_images/neiye2_32242.jpg); background-repeat: repeat-x; border: none;">
					<ul class="shtab">
						<li class="on" id="audit">
							审核记录
						</li>
						<li id="repay">
							还款详情
						</li>
						<li id="info">
							<%--<a href="javascript:;" id="info"></a>--%>
							信息披露
						</li>
						<s:if test="#request.colSize != null">
							<li id="collection">
								催收记录
							</li>
						</s:if>
					</ul>
					<div class="til_bot">
					</div>
				</div>
				<div class="boxmain">
					<div class="box">
	<!-- 					<div class="tips">
							融资谷网贷将以客观、公正的原则，最大程度地核实借入者信息的真实性，但不保证审核信息100%真实。如果借入者长期逾期，其提供的信息将被公布。
						</div> -->
						<div id="contentList" class="tytab">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th align="center">
										审核项目
									</th>
									<th align="center">
										状态
									</th>
									<th align="center">
										通过时间
									</th>
									<%--<th align="center">
										操作
									</th>--%>
								</tr>
								<s:if test="%{#request.list !=null && #request.list.size()>0}">
									<s:iterator value="#request.list" id="bean">
										<tr>
											<td align="center">
												${bean.name}
											</td>
											<td align="center">
												<s:if test="#bean.auditStatus == 1">
                                      审核中
          </s:if>
												<s:elseif test="#bean.auditStatus == 2">
                                       审核失败
          </s:elseif>
												<s:elseif test="#bean.auditStatus == 3">
													<img src="/Public/static/rzg_images/neiye2_44.jpg" width="14" height="15" />
												</s:elseif>
												<s:else>
                                     等待资料上传
          </s:else>
											</td>
											<td align="center">
												${bean.passTime}
											</td>
											<%--
											<td align="center" class="ck">
												<s:if test="#bean.visiable== 1 && #bean.auditStatus==3">
													<a
														href="javascript:showImg('${bean.materAuthTypeId}','${bean.userId}','${user.id }');">查看</a>
												</s:if>
												<s:else>---
          </s:else>
											</td>--%>
										</tr>
									</s:iterator>
								</s:if>
								<s:else>
									<td colspan="4" align="center">
										没有数据
									</td>
								</s:else>
							</table>
						</div>
					</div>
				</div>
				<div class="ifbox2">
					<div class="til"
						style="background-image: url(/Public/static/rzg_images/neiye2_32.jpg); background-repeat: repeat-x;">
						<ul>
							<li class="on">
								标的详情
							</li>
						</ul>
						<div class="til_bot">
						</div>
					</div>
					<div class="boxmain">
						<p class="txt">

							<s:property value="#request.borrowDetailMap.borrowInfo"
								default="" />
						</p>
					</div>
				</div>
				 <!-- 加载留言的页面  start -->
				<div id="msg" class="ifbox2">
					<img src="/Public/static/rzg_images/load.gif" class="load" alt="加载中..." />
				</div>
				 <!-- 加载留言的页面 end -->
				<div class="ifbox2">
					<div class="til">
						<ul>
							<li class="on">
								投资记录
							</li>
						</ul>
						<div class="til_bot">
						</div>
					</div>
					<div class="boxmain">
						<div class="tzjl">
							<ul>
								<li>
									目前总投标金额：
									<strong>￥${borrowDetailMap.hasInvestAmount}</strong>
								</li>
								<li>
									剩余投标金额：
									<strong>￥${borrowDetailMap.investAmount}</strong>
								</li>
								<li>
									剩余投标时间：
									<strong><span id="remainTimeTwo"></span> </strong>
								</li>
							</ul>
						</div>
						<div class="tytab">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th align="center">
										投资人
									</th>
									<th align="center">
										投资金额
									</th>
									<th align="center">
										投资时间
									</th>
								</tr>
								<s:if
									test="%{#request.investList !=null && #request.investList.size()>0}">
									<s:iterator value="#request.investList" id="investList">
										<tr>
											<td align="center" class="name">
												<s:property value="#investList.username" default="---" />
												<%--   creditedStatus==2 代表该用户在转让债权 --%>
												<s:if
													test="#investList.creditedStatus !=null && #investList.creditedStatus==2 ">
													<img src="images/zrico.jpg" width="30" height="16" />
												</s:if>
											</td>
											<td align="center" class="fred">
												￥
												<s:property value="#investList.investAmount" />
											</td>
											<td align="center">
												<s:property value="#investList.investTime" />
											</td>
										</tr>
									</s:iterator>
								</s:if>
								<s:else>
									<td colspan="3" align="center">
										没有数据
									</td>
								</s:else>
							</table>
						</div>
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div id="remainSeconds" style="display: none;">
			${borrowDetailMap.remainTime}
		</div>
		<input type="hidden" id="bid" value="${borrowDetailMap.id}" />
		<input id="ckImg" type="hidden"
			value="<%=session.getAttribute("user")%>" />
		<!-- 引用底部公共部分 -->
		<jsp:include page="/include/footer.jsp"></jsp:include>

		<script type="text/javascript" src="script/jquery.shove-1.0.js">
	
</script>
		<script type="text/javascript" src="css/popom.js">
	
</script>
		<script type="text/javascript"
			src="script/jbox/jquery.jBox-2.3.min.js">
	
</script>
		<script type="text/javascript" src="script/jbox/jquery.jBox-zh-CN.js">
	
</script>
		<script>
	var param = {};
	function initListInfo(param) {
		param['paramMap.id'] = '${borrowDetailMap.id}';
		$.shovePost('borrowmessage.htm', param, function(data) {
			$('#msg').html(data);
		});
	}
	initListInfo(param);
	$('#sendmail').click(function() {
		var id = '${borrowUserMap.userId}';
		var username = '${borrowUserMap.username}';
		var url = "mailInit.htm?id=" + id + "&username=" + username;
		var uname = '${user.userName}';
		if (username == uname) {
			alert("您不能给自己发送站内信");
			return false;
		}
		$.shovePost('mailInit.htm', param, function(data) {
			$.jBox("iframe:" + url, {
				title : "发送站内信",
				width : 500,
				height : 400,
				buttons : {}
			});
		});
	});
	$('#reportuser').click(function() {
		var id = '${borrowUserMap.userId}';
		var username = '${borrowUserMap.username}';
		var url = "reportInit.htm?id=" + id + "&username=" + username;
		var uname = '${user.userName}';
		if (username == uname) {
			alert("您不能举报自己");
			return false;
		}
		$.shovePost('reportInit.htm', param, function(data) {
			$.jBox("iframe:" + url, {
				title : "举报此人",
				width : 500,
				height : 400,
				buttons : {}
			});
		});
	});
	$('#audit').click(function() {
		var id = $('#idStr').val();
		$(this).addClass('on');
		$('#repay').removeClass('on');
		$('#collection').removeClass('on');
		$('#info').removeClass('on');
		param['paramMap.id'] = id;
		$.shovePost('financeAudit.htm', param, function(data) {
			$('#contentList').html(data);
		});
	});
	$('#repay').click(function() {
		var id = $('#idStr').val();
		$(this).addClass('on');
		$('#audit').removeClass('on');
		$('#collection').removeClass('on');
		$('#info').removeClass('on');
		param['paramMap.id'] = id;
		$.shovePost('financeRepay.htm', param, function(data) {
			$('#contentList').html(data);
		});

	});

	$('#info').click(function() {
		var id = $('#idStr').val();
		$(this).addClass('on');
		$('#audit').removeClass('on');
		$('#repay').removeClass('on');
		$('#collection').removeClass('on');
		param['paramMap.id'] = id;
			$.shovePost('showImg.htm', param, function(data) {
				$('#contentList').html(data);
			});

		});
	$('#collection').click(function() {
		var id = $('#idStr').val();
		$(this).addClass('on');
		$('#audit').removeClass('on');
		$('#repay').removeClass('on');
		$('#info').removeClass('on');
		param['paramMap.id'] = id;
		$.shovePost('financeCollection.htm', param, function(data) {
			$('#contentList').html(data);
		});

	});
</script>

		<script>
	$('#focusonUser').click(function() {
		var username = '${borrowUserMap.username}';
		var uname = '${user.userName}';
		if (username == uname) {
			alert("您不能关注自己");
			return false;
		}
		param['paramMap.id'] = '${borrowUserMap.userId}';
		$.shovePost('focusonUser.htm', param, function(data) {
			var callBack = data.msg;
			alert(callBack);
		});
	});
</script>

		<script>
	$('#focusonBorrow').click(function() {
		var username = '${borrowUserMap.username}';
		var uname = '${user.userName}';
		if (username == uname) {
			//alert("您不能关注自己发布的借款");
			return false;
		}
		param['paramMap.id'] = '${borrowDetailMap.id}';
		$.shovePost('focusonBorrow.htm', param, function(data) {
			var callBack = data.msg;
			alert(callBack);
		});
	});
</script>

		<script type="text/javascript">
	function showImg(typeId, userId, ids) {
		var user = $("ckImg");
		if (user == null) {
			window.location.href = "login.htm";
			return;
		}
		var url = "showImg.htm?typeId=" + typeId + "&userId=" + userId;
		$.jBox("iframe:" + url, {
			title : "查看认证图片(点击图片放大)",
			width : 600,
			height : 428,
			buttons : {}
		});
	}

	function close() {
		ClosePop();
	}
</script>

		<script>
	//样式选中
	$("#licai_hover").attr('class', 'nav_first');
	//	var param = {};
	$('#invest').click(function() {
		var step = '${session.user.authStep}';
		var username = '${borrowUserMap.username}';
		var uname = '${user.userName}';
		var bid = $('#bid').val();
		if (username == uname) {
			alert("无效操作,不能投自己发布的标");
			return false;
		}
		param['id'] = '${borrowDetailMap.id}';
		if (step < 5) {
			window.location.href = 'financeInvestInit.htm?id=' + bid;
			return false;
		}
		$.shovePost('financeInvestInit.htm', param, function(data) {
			var callBack = data.msg;
			if (callBack != undefined) {
				alert(callBack);
			} else {
				window.location.href = 'financeInvestInit.htm?id=' + bid;
			}
		});
	});

	//$('#focusonBorrow').click(function() {
	//	var username = '${borrowUserMap.username}';
	//	var uname = '${user.userName}';
	//	if (username == uname) {
	//alert("您不能关注自己发布的借款");
	//	return false;
	//}
	//param['paramMap.id'] = '${borrowDetailMap.id}';
	//$.shovePost('focusonBorrow.htm', param, function(data) {
	//	var callBack = data.msg;
	//	alert(callBack);
	//});
	//});

	////$('#focusonUser').click(function() {
	//var username = '${borrowUserMap.username}';
	//var uname = '${user.userName}';
	//if (username == uname) {
	//	alert("您不能关注自己");
	//	return false;
	//}
	//param['paramMap.id'] = '${borrowUserMap.userId}';
	//$.shovePost('focusonUser.htm', param, function(data) {
	//	var callBack = data.msg;
	//	alert(callBack);
	//});
	//});
</script>

		<script type="text/javascript">
	var SysSecond;
	var InterValObj;
	$(document).ready(function() {
		SysSecond = parseInt($("#remainSeconds").html()); //这里获取倒计时的起始时间 
			InterValObj = window.setInterval(SetRemainTime, 1000); //间隔函数，1秒执行 
		});

	//将时间减去1秒，计算天、时、分、秒 
	function SetRemainTime() {
		if (SysSecond > 0) {
			SysSecond = SysSecond - 1;
			var second = Math.floor(SysSecond % 60); // 计算秒     
			var minite = Math.floor((SysSecond / 60) % 60); //计算分 
			var hour = Math.floor((SysSecond / 3600) % 24); //计算小时 
			var day = Math.floor((SysSecond / 3600) / 24); //计算天 
			var times = day + "天" + hour + "小时" + minite + "分" + second + "秒";
			$("#remainTimeOne").html(times);
			$("#remainTimeTwo").html(times);
		} else 
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