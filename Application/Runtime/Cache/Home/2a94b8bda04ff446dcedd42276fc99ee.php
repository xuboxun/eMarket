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
	<link rel="stylesheet" type="text/css" href="/e-market/Public/css/base.css">
	<link rel="stylesheet" type="text/css" href="/e-market/Public/css/index.css">
	<script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/e-market/Public/js/base.js"></script>
	<!-- <script type="text/javascript" src="/e-market/Public/js/index.js"></script> -->
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
				<span><a href="/e-market/index.php/Home/Login/login">请登录</a></span>
				<span><a href="/e-market/index.php/Home/Login/register">注册</a></span>
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="/e-market/index.php/Home/Index/index">商城首页</a></li>
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
					<div class="search-input">
						<input type="text" name="search" id="searchValue"><input type="submit" name="submit" value="搜索">
					</div>
					<script type="text/javascript">
						// 即时搜索
						var timer = setInterval(function(){
							var search = $.trim($("#searchValue").val());
							if(search != null && search != ""){
								// 向服务器传数据
								$.post('/e-market/index.php/Home/Index/search',{
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
		<div class="container">
			<!-- 区块1 -->
			<div class="block1">
				<!-- 侧边导航 -->
				<div class="sidenav">
					<ul class="sidenav-ul">
						<li class="sidenav-ul-li"><a href="">1类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">类别</a></li>
						<li class="sidenav-ul-li"><a href="">12类别</a></li>
					</ul>
				</div>
				<!-- 宣传图片区 -->
				<div class="ad-img">
					<!-- 中心大图片 -->
					<div class="big-ad-img">
						<a href=""><img src="/e-market/Public/image/system/adimg1.jpg" index="0" class="big-ad-img-main"></a>
						<span class="big-ad-img-change left"><</span>
						<span class="big-ad-img-change right">></span>
						<div class="ad-img-icon">
							<span>1</span>
							<span>2</span>
							<span>3</span>
							<span>4</span>
						</div>
					</div>
					<!-- 缩略图 -->
					<div class="small-ad-img">
						<div class="small-ad-img-datail small-ad-img-datail-active"><img src="/e-market/Public/image/system/adimg1.jpg"></div>
						<div class="small-ad-img-datail"><img src="/e-market/Public/image/system/adimg2.jpg"></div>
						<div class="small-ad-img-datail"><img src="/e-market/Public/image/system/adimg3.jpg"></div>
						<div class="small-ad-img-datail"><img src="/e-market/Public/image/system/adimg4.jpg"></div>
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
			<div class="footer-top">
				多块好省
			</div>
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