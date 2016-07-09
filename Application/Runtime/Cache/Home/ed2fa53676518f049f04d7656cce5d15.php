<?php if (!defined('THINK_PATH')) exit();?><!-- 
author : sudonglin
version : 1.0
date : 2016.7.9
description : 个人中的购物车页面
-->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>电子商城</title>
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/bought.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/p_base.css">
	</head>
	<body>
		<!--头部包含-->
		<!-- 
author : sudonglin
version : 1.0
date : 2016.7.9
descriptioin : 个人页面的头部
-->

<!-- 顶部 start -->
	<div id="banner">
		<div class="container">
			<div class="banner-user">
				<span><a href="/eMarket/index.php/Home/Login/login">请登录</a></span>
				<span><a href="/eMarket/index.php/Home/Login/register">注册</a></span>
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="/eMarket/index.php/Home/Index/index">商城首页</a></li>
					<li><a href="">购物车</a></li>
					<li><a href="">收藏夹</a></li>
					<li><a href="">客服中心</a></li>
					<li><a href="">网站导航</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 顶部 end -->
	<!--头部开始-->
		<div class="header">
			<div class="logoletter"><img src="/eMarket/Public/image/logoletter.jpg"/></div>
			<div class="letter">
				<ul>
					<li><a  href="/eMarket/index.php/Home/Person/cart.html">购物车</a></li>				
					<li><a  href="/eMarket/index.php/Home/Person/collect.html">收藏夹</a></li>				
					<li><a  href="/eMarket/index.php/Home/Person/bought.html">已买宝贝</a></li>		
					<li><a  href="/eMarket/index.php/Home/Person/setting.html">个人设置</a></li>
				</ul>				
			</div>
			<div class="search">
			     
				<input type="text" name="" placeholder="柠檬"/>
				<button type="submit" class="">搜索</button>
			</div>
		</div>
		<!--头部结束-->
		<!-- 总体布局 -->
		<div class="contant">
			<div class="contanter">
			<!-- 侧边栏 -->
				<div class="left">
					<ul>
						<li><a href="">所有订单</a></li>
						<li><a href="">待评价</a></li>
						<li><a href="">待付款</a></li>
						<li><a href="">待发货</a></li>
						<li><a href="">待收货</a></li>
					</ul>
				</div>
				<!--订单内容-->
				<div class="right">
				 	<div class="series"><p>所有订单</p></div> 
				</div>
			</div>
		</div>
	</body>
</html>