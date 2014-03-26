<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery人性化表单标签提示</title>
<script language="javascript" type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
<script language="javascript" type="text/javascript" src="__PUBLIC__/js/register/register_one.js"></script>
<link href="__PUBLIC__/css/regester.css" rel="stylesheet" media="screen" type="text/css" />

<script>
 $(document).ready( function() {
   $(".label_better").label_better({
     easing: "bounce"
   });
 });
</script>
</head>
<body>
  <div class="wrapper">
	  <div class="main">
	    <div class="header">
        <h1>欢迎来到私服010</h1>
        <h2>www.sifu010.com</h2>
        <p class="credit">Copyright 2012 www.sifu010.com All Rights Reserved</p>
        <div class="btns">
  	      
  	    </div>
  	  </div>
      <div class="page-container">
        <form class="bl_form">
          <input type="text"  class="label_better" data-new-placeholder="用户名" placeholder="Username" >
          <input type="email"  class="label_better" data-new-placeholder="邮箱" placeholder="Email Address">
          <input type="password" value=""  class="label_better" data-new-placeholder="密码" placeholder="Password">
          <input type="password" value="" class="label_better" data-new-placeholder="确认密码" placeholder="Confirm Password">
		  <input type="button" value="提交" class="label_better" data-new-placeholder="" placeholder="">
        </form>
      </div>
    </div>
    
  </div>
<div style="text-align:center;clear:both">
</div>
</body>
</html>