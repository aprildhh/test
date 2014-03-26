<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="baidu-site-verification" content="vWNfIdfZky" />
<title>传奇私服,传奇发布网,传奇发布站,私服发布网,私服发布站,传奇sf,找服网,传奇素材网,传奇客户端,传奇登陆器,传奇服务端,传奇外挂,传奇教程</title>
<meta name="keywords" content="传奇私服,传奇发布网,传奇发布站,私服发布网,私服发布站,传奇sf,找服网,传奇素材网,传奇客户端,传奇登陆器,传奇服务端,传奇外挂,传奇教程" />
<meta name="description" content="sifu010.com聚集传奇教程,传奇素材,传奇地图,传奇怪物,架设私服相关文章,玩家找服信息,GM发布网,传奇发布网,传奇发布站,SF发布网,私服发布站,各种传奇服务端,传奇登陆器,传奇外挂,传奇客户端,等各种传奇资源供用户选择" />
<meta http-equiv="imagetoolbar" content="no"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<link href="__PUBLIC__/css/css.css" rel="stylesheet" media="screen" type="text/css" />
<script language="javascript" type="text/javascript" src="__PUBLIC__/js/jqmin.js"></script>
<script language="javascript" type="text/javascript" src="__PUBLIC__/js/layer/layer.min.js"></script>
<script language="javascript" type="text/javascript" src="__PUBLIC__/js/data.js"></script>

</head>
<body class="index">
<!-- header -->
	<div class="head">
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>js彩色拼图导航下拉菜单</title>
<style>
/*默认样式：直接定义元素的样式*/
body{text-align:center;font-size:12px;font-family:微软雅黑, Tahoma, Verdana, Arial;font-weight:normal;color:#333333;margin-top:0;background-color:#f5f5f5;}
dl, dt, dd, ul, li, ol, p, form, img{padding:0px;margin:0px;list-style:none;border:none;}
a, a:link, a:active{color:#3D81EE;text-decoration:none;}
a:hover{color:#F90;text-decoration:none;}
a img{border:0;}
#navmaster{margin:0 auto;width:620px;padding:0px;}
#navmaster ul{list-style-type:none;margin:auto;padding:0px;}
#navmaster ul li{display:inline;float:left;padding:0px;cursor:pointer;font-weight:700;}
#navmaster li a{font-size:16px;color:#454545;letter-spacing:2px;font-family:微软雅黑, Tahoma, Verdana, Arial;}
#navmaster li a:hover{color:#fff;}
#navmaster li.hover a{color:#fff;}
.M1Common{width:109px;height:58px;line-height:58px;margin:29px 0px 0px 0px;}
.M1{background:url(Public/images/head_title/menu_ico1.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/Public/images/head_title/menu_ico1.png");color:#000;}
.M1 a:hover{width:109px;height:58px;line-height:58px;background:url(/Public/images/head_title/menu_hover_ico1.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="/Public/images/head_title/menu_hover_ico1.png");color:#fff; display:block;}
.M2Common{width:138px;height:75px;margin:12px 0px 0px -23px;}
.M2{background:url(./Public/images/head_title/menu_ico2.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="./Public/images/head_title/menu_ico2.png");}
.M2Hover{background:url(./Public/images/head_title/menu_hover_ico2.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="./Public/images/head_title/menu_hover_ico2.png");}
.M3Common{width:150px;height:63px;margin:24px 0px 0px -36px;}
.M3{background:url(./Public/images/head_title/menu_ico3.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="./Public/images/head_title/menu_ico3.png");}
.M3Hover{background:url(./Public/images/head_title/menu_hover_ico3.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="./Public/images/head_title/menu_hover_ico3.png");}
.M4Common{width:123px;height:54px;margin:33px 0px 0px -5px;}
.M4{background:url(./Public/images/head_title/menu_ico4.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="./Public/images/head_title/menu_ico4.png");}
.M4Hover{background:url(./Public/images/head_title/menu_hover_ico4.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="./Public/images/head_title/menu_hover_ico4.png");}
.M5Common{width:121px;height:68px;margin-top:19px;}
.M5{background:url(./Public/images/head_title/menu_ico5.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="./Public/images/head_title/menu_ico5.png");}
.M5Hover{background:url(./Public/images/head_title/menu_hover_ico5.png) no-repeat;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="./Public/images/head_title/menu_hover_ico5.png");}
/*只用于首页*/
.downMenu ul{padding:0;margin:0;}
.downMenu ul li{margin-top:0;}
.downMenu ul li a{padding-bottom:0;padding-top:7px;margin:0;cursor:pointer;background:#e8ecf2;color:#205fa2! important;text-decoration:none;display: inline-block;height:22px;width:80px;border:1px #c2d3ed solid;border-top:none;}
/*首页三角形样式*/
.bordCss{height:0;width:0;overflow:hidden;font-size:0;line-height:0;border-color:transparent transparent transparent #FF9900;border-style:dashed dashed dashed solid;border-width:5px;border-right-width:0;display:inline-block;margin:2px 2px 0 0;}
.bordCssGreen{border-color:transparent transparent transparent #26850d;margin:2px 3px 0 0;}
.bordBottomCss{border-color:#FF9900 transparent transparent transparent;border-style:solid dashed dashed dashed;border-width:5px;border-bottom-width:0;margin:0;}
.bordBottomCssN{border-style:solid dashed dashed dashed;border-color:#333333 transparent transparent transparent;border-width:3px;border-bottom-width:0;margin:0 0 4px 2px;}
.bordBottomCssNF{border-style:solid dashed dashed dashed;border-color:#ffffff transparent transparent transparent;border-width:3px;border-bottom-width:0;margin:0 0 4px 2px;}
</style>
<style type="text/css">
body{background:#;}
.downMenu ul li a{color:white!important;font-size:14px;height:24px;letter-spacing:4px;border-bottom:1px solid #fff;border-left:none;border-right:none;}
#divDown2 ul li a{background:#EB8932;color:white!important;width:102px;}
#divDown2 ul li a:hover{background:#F6C370;color:#000!important;}
#divDown3 ul li a{background:#91BD41;color:white!important;width:78px;}
#divDown3 ul li a:hover{background:#B8DA6A;color:#000!important;}
#divDown4 ul li a{background:#FEA901;color:white!important;width:114px;}
#divDown4 ul li a:hover{background:#FDE374;color:#000!important;}
#divDown5 ul li a{background:#CA699C;color:white!important;width:115px;}
#divDown5 ul li a:hover{background:#DDA6BD;color:#000!important;}
</style>

</head>
<body>
<div id="navmaster">
	<ul>
		<li id="ctl01_liIndex" class="M1Common M1">
			<div ><a href="/">首&nbsp;页</a></div>
		</li>
		<li id="ctl01_liQCenter" class="M2Common M2">
			<div style="padding-top:44px;"><a title="问卷中心" href="#">问卷中心</a><!--<span class="bordCss bordBottomCssN"></span>--></div>
		</li>
		<li id="ctl01_liPrice" class="M3Common M3">
			<div style="padding-top:32px;"><a style="padding:9px 0 0px 21px;" href="#">自助服务</a></div>
		</li>
		<li id="ctl01_liUseCase" class="M4Common M4">
			<div style="padding-top:23px;"><a href="#">样本服务</a><!--<span class="bordCss bordBottomCssN"></span>--></div>
		</li>
		<li id="ctl01_liCustomer" class="M5Common M5">
			<div style="padding-top:37px;text-align:left;padding-left:14px;"><a style="" href="#">典型应用</a></div>
		</li>
	</ul>
</div>
<!--下拉菜单2开始-->
<!--
<div id="divDown2" class="downMenu" pdleft="23" style="display:none;z-index:10999;position:absolute;">
	<ul>
		<li><a title="公开问卷" href="#" style="border-top:1px solid #fff;">公开问卷</a> </li>
		<li><a title="问卷调查" href="#">问卷模板</a> </li>
		<li><a title="有奖调查" href="#" target="_blank">有奖调查</a> </li>
		<li><a title="热门测评" href="#">热门测评</a> </li>
	</ul>
</div>
-->
<!--下拉菜单2结束--> 
<!--下拉菜单4开始-->
<!--
<div id="divDown4" class="downMenu" pdleft="5" style="display:none;z-index:10999;left:933px;position:absolute;top:130px;">
	<ul>
		<li><a title="服务介绍" href="#" style="border-top:1px solid #fff;">服务介绍</a> </li>
		<li><a title="服务价格" href="#">服务价格</a></li>
		<li><a title="需求&报价" href="#">需求&报价</a></li>
		<li><a title="流程说明" href="#">流程说明</a></li>
		<li><a title="流程说明" href="#">成功案例</a></li>
	</ul>
</div>
-->
<!--下拉菜单4结束--> 
<script type="text/javascript">
var navmaster = document.getElementById("navmaster");
var lis = navmaster.getElementsByTagName("li");
var hrefas = navmaster.getElementsByTagName("a");
for (var i = 0; i < lis.length; i++) {
	lis[i].index = i + 1;
	if (lis[i].className.toLowerCase().indexOf("hover") > -1) {
		hoverLi(lis[i]);lis[i].isHover = true;
	}
	lis[i].onmouseover = function () {
		hoverLi(this); sb_setmenunav('divDown' + this.index, true, this);
	}
	lis[i].onmouseout = function () {
		sb_setmenunav('divDown' + this.index, false, this); unHoverLi(this);
	}
	lis[i].onclick = function () {
		var href = this.getElementsByTagName("a")[0].href;
		if (href)
			window.location = href;
	}
}
function getSpanByClassName(ele, className) {
	var spans = ele.getElementsByTagName("span");
	for (var i = 0; i < spans.length; i++) {
		var cName = spans[i].className || "";
		if (cName.toLowerCase() == className.toLowerCase()) {
			return spans[i];
		}
	}
}
function hoverLi(obj) {
	obj.className = "M" + obj.index + "Common M" + obj.index + "Hover";
	var dda = obj.getElementsByTagName("a")[0];
	dda.style.color = "#ffffff";
	var span = getSpanByClassName(obj, "bordCss bordBottomCssN") || obj.spanCursor;
	if (span) {
		span.className = "bordCss bordBottomCssNF";
		obj.spanCursor = span;
	}
}
function unHoverLi(obj) {
	if (!obj.isHover) {
		obj.className = "M" + obj.index + "Common M" + obj.index;
		var dda = obj.getElementsByTagName("a")[0];
		dda.style.color = "";
		if (obj.spanCursor) obj.spanCursor.className = "bordCss bordBottomCssN";
	}
}
function openwindowSup(url, name, iWidth, iHeight) {
	var url;//转向网页的地址;
	var name;//网页名称，可为空;
	var iWidth;//弹出窗口的宽度;
	var iHeight;//弹出窗口的高度;
	var iTop = (window.screen.availHeight + 30 - iHeight) / 2;//获得窗口的垂直位置;
	var iLeft = (window.screen.availWidth + 208 - iWidth) / 2;//获得窗口的水平位置;
	var param = 'height=' + iHeight + ',width=' + iWidth + ',top=' + iTop + ',left=' + iLeft + ',border=no,toolbar=no,menubar=no,scrollbars=no,resizable=yes,location=no,status=no';
	var o = window.open(url, name, param);
	o.focus();
}
function getCoordsNav(el) {
	var box = el.getBoundingClientRect(),
	doc = el.ownerDocument,
	body = doc.body,
	html = doc.documentElement,
	clientTop = html.clientTop || body.clientTop || 0,
	clientLeft = html.clientLeft || body.clientLeft || 0,
	top = box.top + (self.pageYOffset || html.scrollTop || body.scrollTop) - clientTop,
	left = box.left + (self.pageXOffset || html.scrollLeft || body.scrollLeft) - clientLeft
	return { 'top': top, 'left': left };
};
function sb_setmenunav(name, vis, obj) {
	var d = document.getElementById(name); //要显示隐藏的div
	if (!d) return;
	var padLeft = parseInt(d.getAttribute("pdLeft") || 0);
	if (vis) {
		if (d.timeArray) {
			window.clearTimeout(d.timeArray);
			d.timeArray = 0;
		}
		d.style.display = "block";
		if (!d.onmouseover) {
			d.onmouseover = function () {
				sb_setmenunav(name, true);
			}
			d.onmouseout = function () {
				sb_setmenunav(name, false);
				unHoverLi(obj);
			}
		}
		if (obj) {
			var objp = obj;
			if (objp.parentNode.tagName.toLowerCase() == "li")
				objp = obj.parentNode;
			var xy = getCoordsNav(objp);
			var xias = xy.left;
			var yias = xy.top + objp.offsetHeight;
			padLeft = padLeft || 0;
			d.style.left = xias + padLeft + "px";
			d.style.top = yias + "px"; //;
		}
	}
	if (obj && obj.tagName.toLowerCase() == "li") {
		d.needSaveClass = obj;
		d.prevClass = obj.className;
	}
	else if (d.needSaveClass) {
		hoverLi(d.needSaveClass);
	}
	if (!vis) , 100);
	}
}
</script>
<div style="text-align:center;clear:both"><br>
</div>
</body>
</html> 
		<!--
		<div id="navMenu">
		<ul>
			<li style="margin-left:0px;"><a href='/index/index'><span>首页</span></a></li>
			<li><a href='/material/index'><span>传奇素材</span></a></li>
			<li><a href='/tool/index'><span>资源下载</span></a></li>
			<li><a href='/article/index'><span>相关文章</span></a></li>
			<li><a href=''><span>论坛</span></a></li>
		</ul>
		</div>
		-->
		
		<div class="headbody">
			<div class="lhead">
				<div class="divcss" style="height:29px;">
				<div class="left"><span>站长推荐：</span></div>
				<div class="right"><span id="Clock">2013年10月1号</span></div>
				</div>
				<div  class="divcss">
				<div class="center former">
					<ul>
				
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><li><span><a href="/show/preview/id/<?php echo ($li["pid"]); ?>" target="_blank"><?php echo ($li["name"]); ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				</div>
			</div>
			<div class="chead">
				<div class="divcss" style="height:120px;" width="500px" height="120px" >
					<!-- <img src="__PUBLIC__/images/logo.gif" /> -->
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>jquery图片特效slider插件</title>
<style type="text/css">
@charset "utf-8";
.jquery-slider-wrapper{position:relative;zoom:1;clear:both}
.jquery-slider-slide{position:absolute;padding-bottom:0px;margin:0px;padding-left:0px;width:100%;padding-right:0px;display:none;float:left;padding-top:0px}
.jquery-slider-slide img{border-bottom:0px;border-left:0px;padding-bottom:0px;margin:0px;padding-left:0px;padding-right:0px;border-top:0px;border-right:0px;padding-top:0px}
.jquery-slider-slide-current{z-index:2;display:block}
.jquery-slider-slide-next{z-index:1;display:block}
.jquery-slider-selectors{z-index:3;position:absolute;bottom:10px;display:block;overflow:hidden;right:10px}
.jquery-slider-selector{margin:0px 0px 0px 5px;width:16px;display:inline;background:url(/jscss/demoimg/201402/jquery-slider-theme.png) no-repeat 0px -70px;float:left;height:16px}
.jquery-slider-selector-current{background:url(/jscss/demoimg/201402/jquery-slider-theme.png) no-repeat -16px -70px}
.jquery-slider-selector span{display:none}
.jquery-slider-control{z-index:4;position:absolute;margin-top:-34px;width:48px;display:none;height:69px;top:50%;cursor:pointer;right:50%;margin-right:-24px}
.jquery-slider-control span{display:none}
.jquery-slider-control-play{background:url(/jscss/demoimg/201402/jquery-slider-theme.png) no-repeat -144px 0px}
.jquery-slider-control-pause{background:url(/jscss/demoimg/201402/jquery-slider-theme.png) no-repeat -96px 0px}
.jquery-slider-hovered .jquery-slider-control{display:block}
.jquery-slider-navigation{display:block}
.jquery-slider-navigation-prev{z-index:4;position:absolute;margin-top:-34px;width:48px;display:none;background:url(/jscss/demoimg/201402/jquery-slider-theme.png) no-repeat 0px 0px;height:69px;top:50%;cursor:pointer;left:0px}
.jquery-slider-navigation-prev span{display:none}
.jquery-slider-navigation-next{z-index:4;position:absolute;margin-top:-34px;width:48px;display:none;background:url(/jscss/demoimg/201402/jquery-slider-theme.png) no-repeat -48px 0px;height:69px;top:50%;cursor:pointer;right:0px}
.jquery-slider-navigation-next span{display:none}
.jquery-slider-hovered .jquery-slider-navigation-prev{display:block}
.jquery-slider-hovered .jquery-slider-navigation-next{display:block}
.jquery-slider-wrapper .caption{position:absolute;padding-bottom:6px;padding-left:10px;bottom:10px;padding-right:10px;background:#333333;color:#ffffff;font-size:13px;padding-top:6px;left:10px}
.jquery-slider-timer{z-index:4;position:absolute;width:100%;bottom:0px;height:3px;color:#000000;left:0px}
.jquery-slider-timer-bar{width:0px;display:inline;background:#000000;float:left;height:3px;opacity:0.5}
.slider{width:900px;height:325px;overflow:hidden;}
</style>
<script language="javascript" type="text/javascript" src="__PUBLIC__/js/sliderimage/jquery-1.6.2.min.js"></script>
<script language="javascript" type="text/javascript" src="__PUBLIC__/js/sliderimage/jquery.slider.min.js"></script>

<script type="text/javascript">
$(document).ready(function($){
	$(".slider").slideshow({
		width      : 500,
		height     : 120,
		transition : 'explode'
	});
});
</script>
</head>
<body>
	<div class="slider">
		<div><img src="__PUBLIC__/images/sliderimage/logo.gif" alt=""/></div>
		<div><img src="__PUBLIC__/images/sliderimage/slide_2.jpg" alt=""/></div>
		<div><img src="__PUBLIC__/images/sliderimage/slide_3.jpg" alt=""/></div>
		<div><img src="__PUBLIC__/images/sliderimage/slide_4.jpg" alt=""/></div>
		
	</div>
</body>
</html> 
				</div>
				<div  class="divcss" style="height:29px;">
					<form action=""  enctype="multipart/form-data" method="post">
						<input type='text' value='传奇私服名/版本/线路' style="font-size:13px;width:357px;height:29px;float:left;"/>
						<input type="submit" value="本站搜索" style="font-size:13px;width:68px;height:28px;float:left;">
						<input type="submit" value="百度搜索" style="font-size:13px;width:68px;height:28px;float:right;_margin-left:-8px;">
					</form>
				</div>
			</div>
			<div class="rhead">
				<ul>
					<li><a href=""><span>关于我们</span></a> | <a href=""><span>加入收藏</span></a> |<a href=""><span>设为首页</span></a> </li>
                    <?php if(isset($_SESSION['user']['login'])&&$_SESSION['user']['login']==true){;?>
                    <li><a href="javascript:;"><span>欢迎:<a href="/user/member"><?php echo $_SESSION['user']['name'];?></a></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/user/logout"><span>退出</span></a>&nbsp;&nbsp;</li>
                    <?php }else{ ?>
                    <li><a href="/user/login"><span>登陆</span></a>&nbsp;&nbsp;<a href="./Tpl/Home/Index/register.html"><span>注册</span></a>&nbsp;&nbsp;<a href="/user/forget"><span>忘记密码</span></a>&nbsp;&nbsp;</li>
                    <?php }?>

					<li><p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=850952907&site=qq&menu=yes"> 
<img border="0" src="__PUBLIC__/images/qq.gif" alt="联系我们" title="联系我们"> 
</a></p></li>
				</ul>
			</div>
		</div>
		<p>----------------------------↑</p>
		
		<div class="headbody">
			<div class="lhead">
				<div class="divcss" style="height:29px;">
				<div class="left"><span>站长推荐：</span></div>
				<div class="right"><span>2013年10月1号</span></div>
				</div>
				<div  class="divcss">
				<div class="center former">
					<ul>
				
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><li><span><a href="/show/preview/id/<?php echo ($li["pid"]); ?>" target="_blank"><?php echo ($li["name"]); ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				</div>
			</div>
			<div class="chead">
				<div class="divcss" style="height:120px;">
					<img src="__PUBLIC__/images/logo.gif" width="500px" height="120px" />
				</div>
				<div  class="divcss" style="height:29px;">
					<form action=""  enctype="multipart/form-data" method="post">
						<input type='text' value='传奇私服名/版本/线路' style="font-size:13px;width:357px;height:29px;float:left;"/>
						<input type="submit" value="本站搜索" style="font-size:13px;width:68px;height:28px;float:left;">
						<input type="submit" value="百度搜索" style="font-size:13px;width:68px;height:28px;float:right;_margin-left:-8px;">
					</form>
				</div>
			</div>
			<div class="rhead">
				<ul>
					<li><a href=""><span>关于我们</span></a> | <a href=""><span>加入收藏</span></a> |<a href=""><span>设为首页</span></a> </li>
                    <?php if(isset($_SESSION['user']['login'])&&$_SESSION['user']['login']==true){;?>
                    <li><a href="javascript:;"><span>欢迎:<a href="/user/member"><?php echo $_SESSION['user']['name'];?></a></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/user/logout"><span>退出</span></a>&nbsp;&nbsp;</li>
                    <?php }else{ ?>
                    <li><a href="/user/login"><span>登陆</span></a>&nbsp;&nbsp;<a href="/user/reg"><span>注册</span></a>&nbsp;&nbsp;<a href="/user/forget"><span>忘记密码</span></a>&nbsp;&nbsp;</li>
                    <?php }?>

					<li><p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=850952907&site=qq&menu=yes"> 
<img border="0" src="__PUBLIC__/images/qq.gif" alt="联系我们" title="联系我们"> 
</a></p></li>
				</ul>
			</div>
		</div>
		
		
		<div class="bhead">
			<ul>
                <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$na): $mod = ($i % 2 );++$i;?><li><a href="/category/index/id/<?php echo ($na["id"]); ?>"><span><?php echo ($na["name"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div> 
   
<!-- /header -->
<!-- body -->
	<div class="body">
		<div class="content">
			<div class="login">
					<h2 style="margin:20px;">会员登陆</h2>
<table style="width:80%;margin:auto;" cellpadding="0" cellspacing="4">
<tr>
  <td align="right" valign="middle" style='width:35%'>用  户  名：</td>
  <td align="left" valign="middle" style='width:65%'><input type='text' name='name' id='name' class='' value='' />
</td>
</tr>
<tr>
  <td align="right" valign="middle" style='width:35%'>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
  <td align="left" valign="middle" style='width:65%'><input type='password' name='password' id='pwd' class='' value='' />
</td>
</tr>
<tr style="height:50px;">
  <td colspan="2" valign="bottom">您也可以用以下账号登陆:
</td>
</tr>
<tr>
  <td align="center" valign="middle" colspan="2">
  <script id='denglu_login_js' type='text/javascript' charset='utf-8'></script>
<script type='text/javascript' charset='utf-8'>
	(function() {
		var _dl_time = new Date().getTime();
		var _dl_login = document.getElementById('denglu_login_js');
		_dl_login.id = _dl_login.id + '_' + _dl_time;
		_dl_login.src = 'http://static.denglu.cc/connect/logincode?appid=74187denF7qF4kG1QN1fDMJsHZjEiA&v=1.0.2&widget=4&styletype=1&size=282_98&asyn=true&time=' + _dl_time;
	})();
</script>
</td>
</tr>
<tr style="height:50px;">
  <td colspan="3"><input type="image" src="__PUBLIC__/images/login.gif" id="login"/>
</td>
</tr>
</table>
			</div>
		</div>
	</div>


	<div class="flink">
			<div class="ftitle">友情链接：</div>
			<div class="fbody">
				<ul>
					<li><a href=""><span>传奇发布网</span></a></li>
					<li><a href=""><span>传奇发布网</span></a></li>
					<li><a href=""><span>传奇发布网</span></a></li>
					<li><a href=""><span>传奇发布网</span></a></li>
					<li><a href=""><span>传奇发布网</span></a></li>
					<li><a href=""><span>传奇发布网</span></a></li>
					<li><a href=""><span>传奇发布网</span></a></li>
				</ul>
			</div>
	</div>
	<div class="footer">
		<div class="foot">
			<div class="fbody">
				<div class="fnav">
					<ul>
						<li><a href=""><span>设为首页</span></a></li>
						<li style="float:left;color:#000;text-align:center;font-size:14px;width:4px!important;width:4px;">|</li>
						<li><a href=""><span>联系我们</span></a></li>
						<li style="float:left;color:#000;text-align:center;font-size:14px;width:4px!important;width:4px;">|</li>
						<li><a href=""><span>关于我们</span></a></li>
						<li style="float:left;color:#000;text-align:center;font-size:14px;width:4px!important;width:4px;">|</li>
						<li><a href=""><span>收藏本站</span></a></li>
						<li style="float:left;color:#000;text-align:center;font-size:14px;width:4px!important;width:4px;">|</li>
						<li><a href=""><span>友情链接</span></a></li>
					</ul>
				</div>
				<div class="fp">
					<p>Copyright 2012 www.sifu010.com All Rights Reserved</p>
					<p>请合理发布游戏！</p>
				</div>
			</div>
		</div>
	</div>
<!-- /footer -->
</body>
</html>
 
<script>
    $("#login").click(function(){
          if($("#name").val()&&$("#pwd").val()){
              $.post('/user/login_check',{name:$("#name").val(),pwd:$("#pwd").val()},function(data){
				
                   if(data==1){
                    location.href='/user/member';
                  }else if(data==2){
                	  $.layer({
                          area : ['auto','auto'],
                          dialog : {msg:'该用户已经禁止登陆!',type :                    8}

                  }); 
                  }else if(data==3){
                	  $.layer({
                          area : ['auto','auto'],
                          dialog : {msg:'此IP已经禁止登陆!',type :                    8}

                  }); 
                   }else{
                	   $.layer({
                           area : ['auto','auto'],
                           dialog : {msg:'用户名/密码错误，请查看!',type :                    8}

                   }); 
                       }
              });          
         }else{
                   $.layer({
                         area : ['auto','auto'],
                         dialog : {msg:'用户名/密码不能为空，请查看!',type :                    8}

                 }); 
           }
    });
  
</script>