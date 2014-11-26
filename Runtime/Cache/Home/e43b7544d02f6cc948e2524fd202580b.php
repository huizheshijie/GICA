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
<form role="form" method="post" action="<?php echo U('upload');?>" enctype="multipart/form-data">
<div class="nymain">
<div class="bigbox" style="border:none">
  <div class="sqdk" style="background:none;">
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
    <!-- <div class="til01"> -->
    <div class="til01">
	<ul id="ul"><li class="on">发布贷款</li><span class="fred" style="color: red;font-size: 12px; padding-left: 80px;line-height: 50px;"><s:fielderror fieldName="enough"></s:fielderror></span></ul>
	</div>
	<!-- <ul id="ul"><li><span class="fred"><s:fielderror fieldName="enough"></s:fielderror></span></li></ul>
	</div> -->
  <div class="rmainbox">
    <p class="tips"><span class="fred">*</span> 为必填项，所有资料均会严格保密。 </p>
    <div class="tab">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th colspan="2" align="left">借款基本信息</th>
    </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <!-- <tr>
    <td align="right">&nbsp;</td>
    <td>
    <form action="<?php echo U('upload');?>" enctype="multipart/form-data" method="post" >
    <div id="tab_1"><a href="javascript:void(0);" id="btn_personalHead" class="scbtn">上传图片</a></div>
    <div id="tab_2"><input type='file'  name='photo'></div>
    <div id="tab_3"><input type="submit" value="提交" class="btn trianglify-btn" ><div class="container">
</div></div>
     -->
       <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td class="tishi">（推荐使用
    您的生活近照，或其他与借款用途相关的图片，<br />
      有助增加借款成功几率。严禁使用他人照片） </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
<!--    <tr>
    <td align="right">筹标期限：<span class="fred">*</span></td>
    <td>
    	<s:select list="borrowRaiseTermList" id="raiseTerm" name="paramMap.raiseTerm" cssClass="sel_140" listKey="key" listValue="value"  headerKey="" headerValue="--请选择--"></s:select>
    	<span class="fred"><s:fielderror fieldName="paramMap['raiseTerm']"></s:fielderror></span>
    </td>
  </tr> -->
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
     <td>&nbsp;</td>
     <td><span class="fred"><s:fielderror fieldName="paramMap['businessDetail']"></s:fielderror></span></td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
  <tr>
    <td align="right">借款标题：<span class="fred">*</span></td>
    <td><input name="borrow_name" type="text" class="inp280" maxlength="12" value=""/>
    <span class="fred"><s:fielderror fieldName="paramMap['title']"></s:fielderror></span>
    </td>
  </tr>
    <tr>
    <td align="right">&nbsp;</td>

    <td style="padding-top:20px;"><a id="bcbtn" style="cursor:pointer;" class="bcbtn">提交发布</a>
  </tr>
    </table>
    </div>
    </div>
    </div>
  </div>
  </div>
</div>
</div>
</form>
<script type="text/javascript" src="script/nav-jk.js"></script>
<script>
$(document).ready(function(){
	var sd=parseInt($(".l-nav").css("height"));
    var sdf=parseInt($(".r-main").css("height"));
	 $(".l-nav").css("height",sd>sdf?sd:sdf-15);
	
  /*   $('#imgPath').val('${paramMap.imgPath}');
     $("#img").attr("src",'${paramMap.imgPath}');
     $('#purpose').val('${paramMap.purpose}');
     $('#deadLine').val('${paramMap.deadLine}');
     $('#paymentMode').val('${paramMap.paymentMode}');
     $('#raiseTerm').val('${paramMap.raiseTerm}');
     $('#excitation').val('${paramMap.excitationType}');
     $('#excitationMode').val('${paramMap.excitationMode}');
     $('#radioval').val('${paramMap.radioval}');
     var excitation = $('#excitation').val();
     var mode = $('#excitationMode').val();
     var radioval = $('#radioval').val();
     if(radioval !=''){
          $('#r_'+radioval).attr('checked','true');
          if(radioval ==1){
             $('#tab_1').css('display','block');
          }
          if(radioval ==2){
             $('#tab_2').css('display','block');
             $('#tab_1').css('display','none');
          }
          if(radioval ==3){
             $('#tab_3').css('display','block');
             $('#tab_1').css('display','none');
          }
     }
     */
	 var img='${paramMap.imgPath}';
	 if(img.length==0 ){
		img = "images/default-img.jpg";
	}
	 $('#imgPath').val(img);
	 $("#img").attr("src",img);
    
     $('#purpose').val('${paramMap.purpose}');
     $('#deadLine').val('${paramMap.deadLine}');
     $('#raiseTerm').val('${paramMap.raiseTerm}');
     $('#excitation').val('${paramMap.excitationType}');
     $('#excitationMode').val('${paramMap.excitationMode}');
     $('#radioval').val('${paramMap.radioval}');
     var excitation = $('#excitation').val();
     var mode = $('#excitationMode').val();
     var radioval = $('#radioval').val();
     if(radioval !=''){
          $('#r_'+radioval).attr('checked','true');
          if(radioval ==1){
             $('#tab_1').css('display','block');
          }
          if(radioval ==2){
             $('#tab_2').css('display','block');
             $('#tab_1').css('display','none');
          }
          if(radioval ==3){
             $('#tab_3').css('display','block');
             $('#tab_1').css('display','none');
          }
     }
     if(excitation != ''){
        $('#radio_'+excitation).attr('checked','true');
        if(excitation == 2){
	       $('#sum').removeClass('gray');
	       $('#sum').removeAttr('disabled');
	       $('#sumRate').addClass('gray');
	       $('#sumRate').attr('disabled');
	       $('#sumRate').val('');
	    }else if(excitation == 3){
	       $('#sumRate').removeClass('gray');
	       $('#sumRate').removeAttr('disabled');
	       $('#sum').addClass('gray');
	       $('#sum').attr('disabled');
	       $('#sum').val('');
	    }
     }else{
        $('#excitation').val('1');
     }
     if(mode == '2'){
        $('#mode').attr('checked','true');
     }else{
        $('#excitationMode').val("1");
     }
     
     
     
});

$(function(){
	 dqzt(2);
     //样式选中
     $("#jk_hover").attr('class','nav_first');
	 $("#jk_hover div").removeClass('none');
	 var flag = true;
	 $('#bcbtn').click(function(){
	      if(flag){  
		       flag = false;
		       $('#form').submit();
	       }
	 });
	 //上传图片
	 $("#btn_personalHead").click(function(){
			var dir = getDirNum();
			var json = "{'fileType':'JPG,BMP,GIF,TIF,PNG','fileSource':'user/"+dir+"','fileLimitSize':0.5,'title':'上传图片','cfn':'uploadCall','cp':'img'}";
			json = encodeURIComponent(json);
			window.showModalDialog("uploadFileAction.htm?obj="+json,window,"dialogWidth=500px;dialogHeight=400px");
			var headImgPath = $("#img").attr("src");
			if(headImgPath ==""){
				alert("上传失败！");	
			}
	  });
	  $('#sysimg img').click(function(){
	      $('#imgPath').val($(this).attr('src'));
	      $('#img').attr('src',$(this).attr('src'));
	  });
	  $('#r_1').click(function(){
	      $('#tab_1').css('display','block');
	      $('#tab_2').css('display','none');
	      $('#tab_3').css('display','none');
	      $('#radioval').val('1');
	  });
	  $('#r_2').click(function(){
	      var personalImg=$('#personalImg').val();
	      $('#tab_1').css('display','none');
	      $('#tab_2').css('display','block');
	      $('#tab_3').css('display','none');
	      $('#radioval').val('2');
	      $('#img').attr('src',personalImg);
	      $('#imgPath').val(personalImg);
	  });
	  $('#r_3').click(function(){
	      $('#tab_1').css('display','none');
	      $('#tab_2').css('display','none');
	      $('#tab_3').css('display','block');
	      $('#radioval').val('3');
	  });
      switchCode();
});
function switchCode(){
	    var timenow = new Date();
	    $('#codeNum').attr('src','admin/imageCode.do?pageId=borrow&d='+timenow);
};				     
</script>
<script>
function uploadCall(basepath,fileName,cp){
	if(cp == "img"){
		var path = "upload/"+basepath+"/"+fileName;
		$("#img").attr("src",path);
		$("#setImg").attr("src",path);
		$("#imgPath").val(path);
	}
}
function getDirNum(){
	var date = new Date();
	var m = date.getMonth()+1;
	var d = date.getDate();
	if(m<10){
		m = "0"+m;
    }
	if(d<10){
	   d = "0"+d;
	}
	var dirName = date.getFullYear()+""+m+""+d;
	return dirName; 
}
</script>


<script>
$(function(){
$('input[name="excitationType"]').click(function(){
	    if($(this).val() == 2){
	       $('#sum').removeClass('gray');
	       $('#sum').removeAttr('disabled');
	       $('#sumRate').addClass('gray');
	       $('#sumRate').attr('disabled');
	       $('#sumRate').val('');
	    }else if($(this).val() == 3){
	       $('#sumRate').removeClass('gray');
	       $('#sumRate').removeAttr('disabled');
	       $('#sum').addClass('gray');
	       $('#sum').attr('disabled');
	       $('#sum').val('');
	    }else{
	       $('#sumRate').addClass('gray');
	       $('#sumRate').attr('disabled');
	       $('#sumRate').val('');
	       $('#sum').addClass('gray');
	       $('#sum').attr('disabled');
	       $('#sum').val('');
	    }
	    $('#excitation').val($(this).val());
	 });
	 $('#mode').click(function(){
	    var check = $(this).attr('checked');
	    if(check == 'checked'){
	        $('#excitationMode').val('2');	    
	    }else{
	        $('#excitationMode').val('1');
	    }
	 });
});
</script>
  <script>
    var editor;
    KindEditor.ready(function(K) {
      editor = K.create('textarea[name="content"]', {
        resizeType : 1,
        allowPreviewEmoticons : false,
        allowImageUpload : true,
        height : 400,
        uploadJson : '<?php echo U('Publish/index/upload'); ?>',
        items : ['source', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'clearhtml', 'quickformat', 'selectall', '|', 
    'formatblock', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
    'italic', 'underline', 'strikethrough', 'removeformat', '|', 'image', 'multiimage', 'table', 'hr', 'emoticons', 'baidumap', 'link', 'unlink'],
        afterChange : function() {
          K(this).html(this.count('text'));
        }
      });
    });
          KindEditor.ready(function(K) {
              var editor = K.editor({
              uploadJson : '<?php echo U('Publish/index/upload'); ?>',
              allowFileManager : true
            });
            K('#pub-imgadd').click(function() {
              editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                  showRemote : false,
                  clickFn : function(url, title, width, height, border, align) {
                    $('.item').removeClass('active');
                    $('<div class="item active"><div class="imgshow"><img src="'+url+'"></div><input type="hidden" name="fmimg[]" value="'+url+'"></div>').prependTo('#pub-imgadd');
                    var index = $('.carousel-indicators li').last().index()*1+1;
                    $('<li data-target="#carousel-example-generic" data-slide-to="'+index+'"></li>').appendTo('.carousel-indicators');
                    editor.hideDialog();
                  }
                });
              });
            });
          });
        </script>
        <script>
var cellsize =30;
var image, imageHeight, imageWidth, backgroundSize, svg;

function getImagePixelData(img) {
  var canvas = document.createElement("canvas");
  canvas.width = img.width;
  canvas.height = img.height;
  var ctx = canvas.getContext("2d");
  ctx.drawImage(img, 0, 0);
  var imageData = ctx.getImageData(0, 0, img.width, img.height);
  var mappedData = [];
  for (var i = 0; i < imageData.data.length; i += 4) {
    mappedData.push([imageData.data[i], imageData.data[i + 1], imageData.data[i + 2]]);
  }
  return mappedData;
}
var dropZone = document.getElementById('drop-zone');
dropZone.ondragover = function() {
  this.className = 'hover';
  return false;
};
dropZone.ondragleave = function() {
  dropZone.className = "";
}
dropZone.ondragend = function() {
  dropZone.className = "";
  return false;
};
dropZone.ondrop = processInput;
document.getElementById("imageInput").onchange = processInput;

$("#cell-size-input").keyup(function() {
  cellsize = parseInt($(this).val());
});
$(".trianglify-btn").click(function() {
  draw(image);
  $(".download-btn").addClass("visible");
});
$(".download-btn").click(function() {
  document.location.href = svg.replace("image/svg+xml", "image/octet-stream");
});

function processInput(e) {
  dropZone.className = "";
  e.preventDefault();
  if (e.target.files) {
    var file = e.target.files[0];
  } else {
    var file = e.dataTransfer.files[0];
  }

  var reader = new FileReader();
  reader.onload = function(event) {
    image = new Image();
    image.onload = function() {
      var dropZoneWidth = $(dropZone).width();
      var dropZoneHeight = $(dropZone).height();
      var dropZoneRatio = dropZoneWidth / dropZoneHeight;
      var imageRatio = image.width / image.height;
      backgroundSize = "";
      if (image.width > dropZoneWidth) { //Could be expressed in smaller chunks...
        if (image.height > dropZoneHeight) {
          if (imageRatio > dropZoneRatio) {
            backgroundSize += dropZoneWidth + "px";
            backgroundSize += " ";
            backgroundSize += dropZoneWidth / imageRatio + "px";
          } else {
            backgroundSize += dropZoneHeight * imageRatio + "px";
            backgroundSize += " ";
            backgroundSize += dropZoneHeight + "px";
          }
        } else {
          backgroundSize += dropZoneWidth + "px";
          backgroundSize += " ";
          backgroundSize += dropZoneWidth / imageRatio + "px";
        }
      } else if (image.height > dropZoneHeight) {
        backgroundSize += dropZoneHeight * imageRatio + "px";
        backgroundSize += " ";
        backgroundSize += dropZoneHeight + "px";
      } else {
        backgroundSize = image.width + "px " + image.height + "px";
      }
      dropZone.style.background = 'url(' + imageData + ') no-repeat center';
      dropZone.style.backgroundSize = backgroundSize;
      console.log(dropZone.style.backgroundSize);
      $(".trianglify-btn").addClass("visible");
      $(".download-btn").removeClass("visible");
    }
    image.src = imageData = event.target.result;
  };
  reader.readAsDataURL(file);
  return false;
}

function draw(img) {
  var imageData = getImagePixelData(img);
  var triangloid = new Triangloid({
    cellsize: cellsize
  });

  var trianglifiedImage = triangloid.trianglifyImage(imageData, img.width, img.height);
  svg = trianglifiedImage.getSVG();
  dropZone.style.background = 'url(' + svg + ') no-repeat center';
  dropZone.style.backgroundSize = backgroundSize;

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