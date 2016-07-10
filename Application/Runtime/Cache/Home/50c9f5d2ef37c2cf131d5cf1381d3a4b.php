<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>电子商城</title>
		<link rel="stylesheet" href="/eMarket/Public/css/login.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
	</head>
	<body>
	    <!--整体布局-->
		<div class="main">
		<!--中间部分-->
		<div class="owner">
		<!--登陆表格-->
		<div class="contant">
		<div class="login_title">账户登录</div>
		 <form  method="post" action="" name="form">
		     <div class="filed">
			 	<input class="input_test" type="text" style="color:#666;" placeholder="手机号/会员名/qq邮箱" name="username"/>
			 </div>
			 <div class="filed">
			 	<input class="input_test" type="text" style="color:#666;" placeholder="请输入密码" name="password" />
			 </div>            
             <div class="link">
			 	<a class="forgetpsw" href="/eMarket/index.php/Home/Login/findpwd">忘记密码</a>
			 	<a class="sign" href="/eMarket/index.php/Home/Login/register">注册</a>
			 </div>
             <div> 
             	<input class="submit" type="submit" value="登录" />
			 </div>		
		 </form>
			<!--输入框文字隐藏功能-->
			<script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
			<script type="text/javascript">
			$(function(){
			$('.input_test').bind({
			focus:function(){
			if (this.value == this.defaultValue){
			this.value="";
			}
			},
			blur:function(){
			if (this.value == ""){
			this.value = this.defaultValue;
			}
			}
			});
			})
			</script>

		 </div>
		</div>
		</div>
		</div>
		<!-- 
author : huangyifan
version : 1.0
date : 2016.7.8
descriptioin : 公有css
-->

<!-- 尾部 start -->
	<div id="footer">
		<div class="container">
			<div class="footer-top"></div>
			<div class="footer-bottom">
				<div class="footer-bottom-line1">
					<span><a href="">关于我们</a></span>
					<span><a href="">联系客服</a></span>
					<span><a href="">商家入驻</a></span>
					<span><a href="">沸点工作室</a></span>
				</div>
				<div class="copyright">Copyright © 2016 <a href="http://www.52feidian.com/" target="blanket">沸点工作室 </a>版权所有</div>
				<div>招商引资  合作qq：123456789</div>
			</div>
		</div>
	</div>
	<!-- 尾部 end -->
	</body>
</html>