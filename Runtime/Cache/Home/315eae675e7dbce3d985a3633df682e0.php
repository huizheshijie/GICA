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
			<div class="bigbox" style="border: none">

				<div class="sqdk" style="background: none;">
                    					<div class="l-nav">
						<ul>
							<li>
								<a href="querBaseData.htm?from=${from }"><span>step1 </span>
									基本资料</a>
							</li>
							<li class="on last">
								<a href="<?php echo U('Borrow/papersinfo');?>"><span>step2 </span>
									上传资料</a>
							</li>
							<li>
										<a href="<?php echo U('Borrow/circulation');?>"><span>step3
										</span> 发布贷款</a>
							</li>
						</ul>
					</div>
					<div class="r-main">
						<div class="til01">
							<ul>
								<li class="on">
									资料上传
								</li>
							</ul>
						</div>
						<div class="rmainbox">

							<p class="tips">
								温馨提示：融资谷对于用户上传的所有信息，都将进行加密处理。您可以在此放心上传个人材料，您的个人信息将不会被以任何形式外泄。
								<br />
								<span class="fred">注：认证资料上传完毕后，等待后台进行审核。</span>
							</p>
							<div class="rzbox">
								<h3>
									必要认证
								</h3>
								<p class="txt">
									&nbsp;
								</p>
								<div class="jbrz">
									<ul>

												<li>
													<div class="pic">
														<img src="/Public/static/rzg_images/baseimage_1.jpg" width="62"
															height="62" id="img_identiy" />
													</div>
													<div class="shangchuan">
														<h3>
															
														</h3>
         <input type="button" id="bu_identiy" class="scbtn" style="cursor: pointer;" value="点击上传" onclick="fff()"/>
													</div>
													<div class="shico">
														待上传
													</div>
												</li>
									</ul>
									<div class="clear"></div>
								</div>
							</div>
							<div class="rzbox">
								<h3>
									可选认证
								</h3>
								<p class="txt">
									&nbsp;
								</p>
								<div class="kxrz">
									<ul>


												<li>
													<div class="shangchuan">
														<h3>
														</h3>
														<img src="" width="62" height="62" id="img_fc"	style="display: none;" />
														<input type="button" class="scbtn"style="cursor: pointer;" sd="${tmid }" value="点击上传"onclick=fff(this);;;;;/>
														<div class="shico">
															<s:else>待上传</s:else>
														</div>
													</div>
												</li>
									</ul>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<a id="fancybox" href="#fancybox-main" title="" style="display: none">Inline</a>
		</div>
		<div style="display: none;">
			<div id="fancybox-main">
				<img src="" id="imagesa" width="500" height="500" />
				<br />
				<div class="photoButton">
					<a id="small" title="缩放图片"></a><a id="normal" title="原图"></a><a
						id="big" title="放大图片"></a>
				</div>
			</div>
		</div>


<!-- 		 这个是layer插件的 
 <a  id="parentImg" style="display: none;">
  <input type="button" value="放大" onclick="PhotoSize.action(1);" /> <input type="button" value="缩小" onclick="PhotoSize.action(-1);" /> <input type="button" value="还原大小" onclick="PhotoSize.action(0);" /> <input type="button" value="查看当前倍数" onclick="alert(PhotoSize.cpu);" /><br> 
<img id="focusphoto" src="http://files.jb51.net/upload/201107/20110713233007487.jpg" /> 
  <img  id="paramtImgscr" src=""/></a>
  <script src="layer/layer.js" type="text/javascript"></script>
<script src="layer/layer.min.js" type="text/javascript"></script> -->

		<script type="text/javascript" src="script/fancybox.js"></script>
		<script type="text/javascript" src="script/jbox/jquery.jBox-2.3.min.js"></script>
		<script type="text/javascript" src="script/jbox/jquery.jBox-zh-CN.js"></script>




		<script>
	//从子窗口返回的函数

	/*

	 function showbigpictur(data){
	 //data图片路径
	 //$("#paramtImgscr").attr("src",data);//将图片的值付给

	 var i = $.layer({
	 type : 1,
	 //move : ['#ddss'+data , true],
	 title : ['图片查看',false],
	 fix : false,
	 offset:['50%' , '50%'],
	 area : ['','0PX'],
	 page : {dom : '#parentImg'}
	 });
	 }

	 $('#gggd').on('click',function(){
	 layer.close(i);
	 });
	 */
	var photo_w;
	var photo_y;
	function showbigpictur(data) {
		//data图片路径
		if (1) {
			$("#imagesa").attr("src", data);//将图片的值付给

			if (1) {
				$('#fancybox').trigger("click");//触发单击事件
				photo_w = $('#imagesa').css('width');
				photo_y = $('#imagesa').css('height');
				$("#imagesa").css("width");
				$("#imagesa").css("height");
				setTimeout("", 10000);
			}
		}
		//.....
	}
</script>

		<script type="text/javascript">
	$(document).ready(function() {
		$("#fancybox").fancybox( {
			'onClosed' : function() {
				$('#imagesa').attr("style", "");
			}//关闭时候调用
			});
		// 还原
			$('#normal').click(function() {
				$('#imagesa').css('width', photo_w);
				$('#imagesa').css('height', photo_y);
				$('#fancybox').click();
			});
			// 放大
			$('#big').click(function() {
				var photoWidth = parseInt($('#imagesa').css("width"));
				var w = photoWidth + photoWidth * 0.1;
				var photoHeight = parseInt($('#imagesa').css("height"));
				var h = photoHeight + photoHeight * 0.1;
				$('#imagesa').css('width', w + 'px');
				$('#imagesa').css('height', h + 'px');
				$('#fancybox').click();
			});

			//缩小
			$('#small').click(function() {
				var photoWidth = parseInt($('#imagesa').css("width"));
				var w = photoWidth - photoWidth * 0.1;
				var photoHeight = parseInt($('#imagesa').css("height"));
				var h = photoHeight - photoHeight * 0.1;
				$('#imagesa').css('width', w + 'px');
				$('#imagesa').css('height', h + 'px');
				$('#fancybox').click();
			});
		});
</script>






		<script>
	$(function() {
		//样式选中
		dqzt(2)
		var sd = parseInt($(".l-nav").css("height"));
		var sdf = parseInt($(".r-main").css("height"));
		$(".l-nav").css("height", sd > sdf ? sd : sdf - 15);

		$("#btn_db")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall16','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_db").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 16;
								$.post("addImg.htm", param, function(data) {
									if (data == "-1") {
										alert("上传失败，请上传认证资料");
									}
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall16(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_db").attr("src", path);
		}
	}
</script>

		<script>
	$(function() {

		$("#btn_dy")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall15','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_dy").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 15;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
									//alert(data);
										// window.location.href=data;
									});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall15(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_dy").attr("src", path);
		}
	}
</script>

		<script>
	$(function() {

		$("#btn_xc")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall14','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_xc").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 14;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall14(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_xc").attr("src", path);
		}
	}
</script>
		<script>
	$(function() {

		$("#btn_sp")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall13','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_sp").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 13;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
									// alert("跳转到发布页面");
										//window.location.href='data';
									});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall13(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_sp").attr("src", path);
		}
	}
</script>
		<script>
	$(function() {
		//weibo
		$("#btn_wb")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall12','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_wb").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 12;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
									//window.location.href=data;
									});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall12(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_wb").attr("src", path);
		}
	}
</script>


		<script>
	$(function() {

		$("#btn_sj")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall11','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_sj").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 11;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall11(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_sj").attr("src", path);
		}
	}
</script>


		<script>
	$(function() {

		$("#btn_js")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall10','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_js").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 10;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall10(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_js").attr("src", path);
		}
	}
</script>

		<script>
	$(function() {

		$("#btn_xl")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall9','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_xl").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 9;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall9(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_xl").attr("src", path);
		}
	}
</script>




		<script>
	$(function() {
		//结婚
		$("#btn_jh")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall8','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_jh").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 8;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall8(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_jh").attr("src", path);
		}
	}
</script>




		<script>
	$(function() {

		$("#btn_gc")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall7','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_gc").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 7;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall7(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_gc").attr("src", path);
		}
	}
</script>




		<script>
	$(function() {

		$("#btn_fc")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall6','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_fc").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 6;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall6(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_fc").attr("src", path);
		}
	}
</script>





		<script>
	$(function() {

		$("#btn_response")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall4','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_response").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 4;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall4(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_response").attr("src", path);
		}
	}
</script>

		<script>
	$(function() {
		//收入
		$("#btn_income")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall3','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_income").attr("src");
							if (headImgPath != "") {
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	

								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 5;
								$.post("addImg.htm", param, function(data) {
									if (data == -1) {
										window.location.reload();
									} else if (data == 1) {
										window.location.reload();
									} else {
										window.location.href = data;
									}
								});

							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall3(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_income").attr("src", path);
		}
	}
</script>
		<script>
	$(function() {
		//地址
		$("#btn_address")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall2','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img_address").attr("src");
							if (headImgPath != "") {
								//window.location.href="addImage.htm?userHeadImg="+headImgPath+"&materAuthTypeId=1";
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 3;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall2(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_address").attr("src", path);
		}
	}
</script>



		<script>
	$(function() {
		//身份
		$("#bu_identiy")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall1','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPat = $("#img_identiy").attr("src");
							if (headImgPat != "") {
								var param = {};
								param["paramMap.userHeadImg"] = headImgPat;
								param["paramMap.materAuthTypeId"] = 1;
								$.post("addImg.htm", param, function(data) {
									if (data == -1) {
										window.location.reload();
									} else if (data == 1) {
										window.location.reload();
									} else {
										window.location.href = data;
									}

								});
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall1(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img_identiy").attr("src", path);
		}
	}
</script>





		<script>
	$(function() {
		//工作
		$("#btn_personalHead")
				.click(
						function() {
							var dir = getDirNum();
							var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"
									+ dir
									+ "','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall','cp':'img'}";
							json = encodeURIComponent(json);
							window.showModalDialog("uploadFileAction.htm?obj="
									+ json, window,
									"dialogWidth=500px;dialogHeight=400px");
							var headImgPath = $("#img").attr("src");
							if (headImgPath != "") {
								var param = {};
								param["paramMap.userHeadImg"] = headImgPath;
								param["paramMap.materAuthTypeId"] = 2;
								$.post("addImg.htm", param, function(data) {
									window.location.reload();
								});
								//window.location.href="updateHeadImg.htm?userHeadImg="+headImgPath;	
							} else {
								alert("上传失败！");
							}
						});

	});

	function uploadCall(basepath, fileName, cp) {
		if (cp == "img") {
			var path = "upload/" + basepath + "/" + fileName;
			$("#img").attr("src", path);
			$("#setImg").attr("src", path);
		}
	}

	function getDirNum() {
		var date = new Date();
		var m = date.getMonth() + 1;
		var d = date.getDate();
		if (m < 10) {
			m = "0" + m;
		}
		if (d < 10) {
			d = "0" + d;
		}
		var dirName = date.getFullYear() + "" + m + "" + d;
		return dirName;
	}
</script>
		<script type="text/javascript">
	function fff(data) {
		var t = $(data).attr("sd");
		$.jBox("iframe:showpastpictur.htm?dm=" + t, {
			title : "上传",
			width : 520,
			height : 430,
			buttons : {}
		});
	}
	function ffff() {
		window.parent.window.jBox.close();
		window.location.reload();
	}
</script>
		<script>
	//视频上传验证
	function shipingcheck(data) {
		var t = $(data).attr("sd");
		jQuery.jBox.open("showshiping.htm?dm=" + t, "上传", 460, 400, {
			buttons : {}
		});
	}
	function shipingcheckf() {
		window.location.reload();
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