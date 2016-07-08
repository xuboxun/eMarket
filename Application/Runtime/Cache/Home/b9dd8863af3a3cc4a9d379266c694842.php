<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>电子商城</title>
		<link rel="stylesheet" href="/eMarket/Public/css/findpwd.css">
	</head>
	<body>
	   <div class="main">
	   		<!--头部-->
	   		<div class="header">
	   			<img src="/eMarket/Public/image/logoletter.png"/>
	   			<a href="/eMarket/index.php/Home/Login/login">登录</a><a href="/eMarket/index.php/Home/Login/register">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注册</a>
	   		</div>
	   		<!--主题内容-->
	   		<div class="contant">
	   			<div>
	   				用户名：<input  class="shuru" type="text" name="username" style="color:#666" placeholder="邮箱账号">
	   			</div>
	   			<div>
	   				验证码：<input  class="shuru" type="text" name="code" style="width:140px"/><input type="button" name=""	 value="获取验证码" style="width:80px;margin-left:20px;height:42px;background:#2283D2;color:#444"/>
	   			</div>
	   			<div>
	   				<input class="submit" type="submit" value="确定"/>
	   			</div>
	   		</div>
	   </div>
	</body>
</html>