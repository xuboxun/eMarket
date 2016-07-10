<?php if (!defined('THINK_PATH')) exit();?><!-- 
author : huangyifan
version : 1.0
date : 2016.7.10
description : 二级商品页面
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>好食光</title>
	<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
	<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/goods.css">
	<script type="text/javascript" src="/eMarket/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/eMarket/Public/js/base.js"></script>
</head>
<body>
<div id="wrapper">
	<!-- 引入头部 -->
	<!-- 
author : huangyifan
version : 1.0
date : 2016.7.8
descriptioin : 公有css
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
	<!-- 底部 end -->
	<!-- 头部 start -->
	<div id="header">
		<div class="container">
			<div class="logo">
				<img src="/eMarket/Public/image/system/logo.png">
			</div>
			<div class="search">
				<form action="" mathod="post" > 
					<div class="guide">
						<span class="guide-active">吃的</span>
						<span>喝的</span>
						<span>玩的</span>
					</div>
					<div class="search-input">
						<input type="text" name="search" id="searchValue"><input type="submit" name="submit" value="搜索">
					</div>
					<script type="text/javascript">
						// 即时搜索
						var timer = setInterval(function(){
							var search = $.trim($("#searchValue").val());
							if(search != null && search != ""){
								// 向服务器传数据
								$.post('/eMarket/index.php/Home/Index/search',{
									search:search
								},function(ans){
									$(".search-ul li").html(ans);
								})
								$(".search-answer").show();
							}else{
								$(".search-answer").hide();
							}
						},500)
					</script>
					<div class="search-answer">
						<!-- 搜索关键词 左侧 -->
						<div class="search-answer-left">
							<ul class="search-ul">
								<li>ans</li>
								<li>ans</li>
								<li>ans</li>
								<li>ans</li>
								<li>ans</li>
								<!-- <li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li> -->
							</ul>
						</div>
						<!-- 关键词细化 右侧 -->
						<div class="search-answer-right">
							<ul class="search-ul">
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
							</ul>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- 头部 end -->

	<!-- 导航栏 start -->
	<!-- <div id="nav"></div> -->
	<!-- 导航栏 end -->

	<!-- 中心区 start -->
	<div id="main">
		<div class="main-banner">
			<img src="/eMarket/Public/image/system/goodbanner.png">
		</div>
		<div class="container classb">
			<div class="classb-content">
				<div class="good-area-content-col goods-block">
					<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
					<div class="goods-block-description">
						<div class="goods-price">¥16.90</div>
						<div class="goods-sold-num">已售<i>4</i>件</div>
						<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
						<div class="goods-location">浙江 金华</div>
					</div>
				</div>
				<div class="good-area-content-col goods-block">
					<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
					<div class="goods-block-description">
						<div class="goods-price">¥16.90</div>
						<div class="goods-sold-num">已售<i>4</i>件</div>
						<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
						<div class="goods-location">浙江 金华</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- 中心区 end -->

	<!-- 引入尾部 -->
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
</div>
</body>
</html>