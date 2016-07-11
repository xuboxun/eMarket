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
	<title>好食光</title>
	<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
	<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/index.css">
	<script type="text/javascript" src="/eMarket/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/eMarket/Public/js/base.js"></script>
	<!-- <script type="text/javascript" src="/eMarket/Public/js/index.js"></script> -->
</head>
<body>
<div id="wrapper">
	<!-- 引入头部 -->
	<!-- 
author : huangyifan
version : 1.0
date : 2016.7.8
descriptioin : 公有头部
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
		<div class="container">
			<!-- 区块1 侧边导航、图片展示 -->
			<div class="block1">
				<!-- 侧边导航 -->
				<div class="sidenav">
					<ul class="sidenav-ul">
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">水果</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">苹果阿啊　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">红苹果</a></li>
											<li class="side-area-detail-ul-li"><a href="">青苹果</a></li>
											<li class="side-area-detail-ul-li"><a href="">大苹果</a></li>
											<li class="side-area-detail-ul-li"><a href="">小苹果</a></li>
											<li class="side-area-detail-ul-li"><a href="">红富士</a></li>
											<li class="side-area-detail-ul-li"><a href="">澳洲青苹</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">蔬菜</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">白菜　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">大白菜</a></li>
											<li class="side-area-detail-ul-li"><a href="">小白菜</a></li>
											<li class="side-area-detail-ul-li"><a href="">烂白菜</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">小吃零食</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">辣条　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">卫龙</a></li>
											<li class="side-area-detail-ul-li"><a href="">棒棒鸡</a></li>
											<li class="side-area-detail-ul-li"><a href="">口水鸭</a></li>
											<li class="side-area-detail-ul-li"><a href="">牛板筋</a></li>
											<li class="side-area-detail-ul-li"><a href="">香菇肥牛</a></li>
											<li class="side-area-detail-ul-li"><a href="">大刀肉</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">海鲜水产</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">淡水鱼　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">鲫鱼</a></li>
											<li class="side-area-detail-ul-li"><a href="">鲤鱼</a></li>
											<li class="side-area-detail-ul-li"><a href="">草鱼</a></li>
											<li class="side-area-detail-ul-li"><a href="">鲸鱼</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">禽类蛋品</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">鸡　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">老母鸡</a></li>
											<li class="side-area-detail-ul-li"><a href="">大公鸡</a></li>
											<li class="side-area-detail-ul-li"><a href="">小鸡</a></li>
											<li class="side-area-detail-ul-li"><a href="">野鸡</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">冷冻食饮</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">酸奶　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">蒙牛</a></li>
											<li class="side-area-detail-ul-li"><a href="">伊利</a></li>
											<li class="side-area-detail-ul-li"><a href="">老酸奶</a></li>
											<li class="side-area-detail-ul-li"><a href="">光明</a></li>
											<li class="side-area-detail-ul-li"><a href="">三鹿</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">中外名酒</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">啤酒　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">青岛</a></li>
											<li class="side-area-detail-ul-li"><a href="">雪花</a></li>
											<li class="side-area-detail-ul-li"><a href="">哈尔滨</a></li>
											<li class="side-area-detail-ul-li"><a href="">燕京</a></li>
											<li class="side-area-detail-ul-li"><a href="">黑啤</a></li>
											<li class="side-area-detail-ul-li"><a href="">菠萝啤</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">进口食品</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">巧克力　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">德芙</a></li>
											<li class="side-area-detail-ul-li"><a href="">进口**</a></li>
											<li class="side-area-detail-ul-li"><a href="">进口**</a></li>
											<li class="side-area-detail-ul-li"><a href="">进口**</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">地方特产</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">武汉　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">热干面</a></li>
											<li class="side-area-detail-ul-li"><a href="">周黑鸭</a></li>
											<li class="side-area-detail-ul-li"><a href="">小胡鸭</a></li>
											<li class="side-area-detail-ul-li"><a href="">武昌鱼</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">饮料冲调</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">茶　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">绿茶</a></li>
											<li class="side-area-detail-ul-li"><a href="">红茶</a></li>
											<li class="side-area-detail-ul-li"><a href="">乌龙茶</a></li>
											<li class="side-area-detail-ul-li"><a href="">龙井茶</a></li>
											<li class="side-area-detail-ul-li"><a href="">太平猴魁</a></li>
											<li class="side-area-detail-ul-li"><a href="">黄山毛峰</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">养生保健</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">保健品　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">脑白金</a></li>
											<li class="side-area-detail-ul-li"><a href="">黄金搭档</a></li>
											<li class="side-area-detail-ul-li"><a href="">富硒康</a></li>
											<li class="side-area-detail-ul-li"><a href="">雪源康</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
						<li class="sidenav-ul-li">
							<a href="" class="sidenav-ul-li-a">粮油调味</a>
							<div class="show-side-area">
								<div class="side-area-detail">
									<div class="side-area-detail-ul-area">
										<ul class="side-area-detail-ul">
											<span><a href="">油　<i>></i></a></span>
											<li class="side-area-detail-ul-li"><a href="">酱油</a></li>
											<li class="side-area-detail-ul-li"><a href="">香油</a></li>
											<li class="side-area-detail-ul-li"><a href="">润滑油</a></li>
											<li class="side-area-detail-ul-li"><a href="">菜籽油</a></li>
											<li class="side-area-detail-ul-li"><a href="">地沟油</a></li>
										</ul>
									</div>
									<div class="side-area-detail-ads">
										
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- 宣传图片区 -->
				<div class="ad-img">
					<!-- 中心大图片 -->
					<div class="big-ad-img">
						<a href=""><img src="/eMarket/Public/image/system/adimg1.jpg" index="0" class="big-ad-img-main"></a>
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
						<div class="small-ad-img-datail small-ad-img-datail-active"><img src="/eMarket/Public/image/system/adimg1.jpg"></div>
						<div class="small-ad-img-datail"><img src="/eMarket/Public/image/system/adimg2.jpg"></div>
						<div class="small-ad-img-datail"><img src="/eMarket/Public/image/system/adimg3.jpg"></div>
						<div class="small-ad-img-datail"><img src="/eMarket/Public/image/system/adimg4.jpg"></div>
					</div>
				</div>
			</div>
			<!-- 区块2 -->
			<div class="publicblock block2">
				<div class="block-title">
					<h5>猜你喜欢</h5>
				</div>
				<div class="block-main">
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!-- repeat from sql -->
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>

					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!--  -->
				</div>
			</div>
			<!-- 区块3 -->
			<div class="publicblock block1">
				<div class="block-title">
					<h5>促销打折</h5>
				</div>
				<div class="block-main">
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!-- repeat from sql -->
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>

					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!--  -->
				</div>
			</div>
			<!-- 区块4 -->
			<div class="publicblock block2">
				<div class="block-title">
					<h5>热销商品</h5>
				</div>
				<div class="block-main">
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!-- repeat from sql -->
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>

					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!--  -->
				</div>
			</div>
			<!-- 区块5 -->
			<div class="publicblock block3">
				<div class="block-title">
					<h5>美食看看</h5>
				</div>
				<div class="block-main">
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!-- repeat from sql -->
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>

					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!--  -->
				</div>
			</div>
			<!-- 区块3 -->
			<div class="publicblock block4">
				<div class="block-title">
					<h5>促销打折</h5>
				</div>
				<div class="block-main">
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!-- repeat from sql -->
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>

					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<div class="goods-block" title="百草味 台湾特色糕点 凤梨酥300g/盒 美食">
						<a href=""><div class="goods-block-img"><img src="/eMarket/Public/image/goods/goodsimg.jpg"></div></a>
						<div class="goods-block-description">
							<div class="goods-title"><a href="">百草味 台湾特色糕点 凤梨酥300g/盒 美食</a></div>
							<div class="goods-price">¥16.90</div>
						</div>
					</div>
					<!--  -->
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
descriptioin : 公有尾部
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