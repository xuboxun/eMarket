<?php if (!defined('THINK_PATH')) exit();?><!-- 
author : huangyifan
version : 1.0
date : 2016.7.8
description : 首页
 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>电子商城</title>
	<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
	<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/index.css">
	<script type="text/javascript" src="/eMarket/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/eMarket/Public/js/base.js"></script>
</head>
<body>
<div id="wrapper">
	<!-- 顶部 start -->
	<div id="banner">
		<div class="container">
			<div class="banner-user">
				<span><a href="">请登录</a></span>
				<span><a href="">注册</a></span>
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="">商城首页</a></li>
					<li><a href="">购物车</a></li>
					<li><a href="">收藏夹</a></li>
					<li><a href="">客服中心</a></li>
					<li><a href="">网站导航</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 底部 end -->
	<!-- 头部 start -->
	<div id="header">
		<div class="container">
			<div class="logo">logo</div>
			<div class="search">
				<form action="" mathod="post" > 
					<div class="guide">
						<span class="guide-active">吃的</span>
						<span>喝的</span>
						<span>玩的</span>
					</div>
					<input type="text" name="search"><input type="submit" name="submit" value="搜索">
				</form>
			</div>
		</div>
	</div>
	<!-- 头部 end -->
	<!-- 导航栏 start -->
	<div id="nav"></div>
	<!-- 导航栏 end -->
	<!-- 中心区 start -->
	<div id="main"></div>
	<!-- 中心区 end -->
	<!-- 尾部 start -->
	<div id="footer"></div>
	<!-- 尾部 end -->
</div>
</body>
</html>