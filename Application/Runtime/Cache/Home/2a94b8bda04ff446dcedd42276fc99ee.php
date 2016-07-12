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
				<span><a href="<?php echo ($nav["url"]["0"]); ?>"><?php echo ($nav["state"]["0"]); ?></a></span>
				<span><a href="<?php echo ($nav["url"]["1"]); ?>"><?php echo ($nav["state"]["1"]); ?></a></span>
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="/eMarket/index.php/Home/Index/index">商城首页</a></li>
					<li><a href="/eMarket/index.php/Home/Person/cart">购物车</a></li>
					<li><a href="/eMarket/index.php/Home/Person/collect">收藏夹</a></li>
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
				<form> 
					<div class="guide">
						<span class="guide-active">吃的</span>
						<span>喝的</span>
						<!-- <span>玩的</span> -->
					</div>
					<div class="search-input">
						<input type="text" name="search" id="searchValue"><input id="submit_search" type="submit" name="submit" value="搜索">
					</div>
					<script type="text/javascript">
						$("#submit_search").click(function(){
							if($.trim($("#searchValue").val()) != ""){
								window.location.href="/eMarket/index.php/Home/Goods/classb?key="+$.trim($("#searchValue").val());
								return false;
							}else{
								return false;
							}
						})
						// 即时搜索
						var oldsearch = null;
						var search = null;
						var timer = setInterval(function(){

							search = $.trim($("#searchValue").val());
							if(oldsearch != search) {
								if(search != null && search != ""){
									// 向服务器传数据
									$.post('/eMarket/index.php/Home/Index/search',{
										search:search
									},function(ans){
										if(ans.length != 0) {
											$(".search-ul").html("");//清除旧的搜索答案
											// alert($(".search-ul").html(""))
											if($(".search-ul").html() == "" || $(".search-ul").html() == null){
												addhtml = $(".search-ul").html();
												for(var i = 0;i < ans.length;i++) {
													addhtml += "<li><a href='/eMarket/index.php/Home/Goods/detail.html?gid="
													+ans[i]['gid']+"' target='blanket'>"+ans[i]['g_name']+"</a></li>";
													$(".search-ul").html(addhtml);
												}
											}
											$(".search-answer").show();
										}else{
											$(".search-answer").hide();
										}										
									})
								}else{
									$(".search-answer").hide();
								}
								oldsearch = search;
							}
						},500)
						$("#searchValue").focusout(function(){
							$(".search-answer").slideUp();
						});
						$("#searchValue").focus(function(){
							$(".search-answer").show();
						})
					</script>
					<div class="search-answer">
						<!-- 搜索关键词 左侧 -->
						<div class="search-answer-left">
							<ul class="search-ul"></ul>
						</div>
						<!-- 关键词细化 右侧 -->
						<!-- <div class="search-answer-right">
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
						</div> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- 头部 end -->

	<!-- 导航栏 start -->
	<!-- <div id="nav"></div> -->
	<!-- 导航栏 end

	<!-- 中心区 start -->
	<div id="main">
		<div class="container">
			<!-- 区块1 侧边导航、图片展示 -->
			<div class="block1">

				<!-- 侧边导航 -->
<div class="sidenav">
	<ul class="sidenav-ul">
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=水果" class="sidenav-ul-li-a">水果</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=家常菜" class="sidenav-ul-li-a">家常菜</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=小吃零食" class="sidenav-ul-li-a">小吃零食</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=海鲜水产" class="sidenav-ul-li-a">海鲜水产</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=禽类蛋品" class="sidenav-ul-li-a">禽类蛋品</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=冷冻食饮" class="sidenav-ul-li-a">冷冻食饮</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=中外名酒" class="sidenav-ul-li-a">中外名酒</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=进口食品" class="sidenav-ul-li-a">进口食品</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=地方特产" class="sidenav-ul-li-a">地方特产</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=饮料冲调" class="sidenav-ul-li-a">饮料冲调</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=养生保健" class="sidenav-ul-li-a">养生保健</a>
		</li>
		<li class="sidenav-ul-li">
			<a href="/eMarket/index.php/Home/Goods/classa?key=粮油调味" class="sidenav-ul-li-a">粮油调味</a>
		</li>
	</ul>
</div>
<script>
	// 侧边导航鼠标移入
	var node = "";
	$(".sidenav-ul .sidenav-ul-li").mouseover(function(){
		$(this).children(".sidenav-ul-li-a").addClass("sidenav-ul-li-current-a");
		if($(this).children(".sidenav-ul-li-a").next().length == 0){
			// 发送数据
			$.ajax({
		        url: '/eMarket/index.php/Home/Index/side',
		        async: false, //改为同步方式
		        type: "POST",
		        data: {
					guidea : $(this).children(".sidenav-ul-li-a").html()
				},
		        success: function(guide){
		        			node += '<div class="show-side-area"><div class="side-area-detail">'+
							        		'<div class="side-area-detail-ul-area">';
							for(var i = 0;i < guide[0].length;i++){
								node += '<ul class="side-area-detail-ul">'+
								'<span><a href="/eMarket/index.php/Home/Goods/classb?key='+guide[0][i]+'">'+guide[0][i]+'　<i>></i></a></span>';
								for(var j = 0;j < guide[1][i].length;j++){
									node += '<li class="side-area-detail-ul-li"><a href="/eMarket/index.php/Home/Goods/classb?key='+guide[1][i][j]+'">'+guide[1][i][j]+'</a></li>';
								}
								node += '</ul>';
							}
							node += '</div><div class="side-area-detail-ads"></div></div></div>';
						},
		        dataType:"json"
		    });
			// 创建节点
			$(this).append(node);
		}
		node = "";
    })
	// 鼠标移出
	$(".sidenav-ul .sidenav-ul-li").mouseout(function(){
		node = "";
		$(this).children(".sidenav-ul-li-a").removeClass("sidenav-ul-li-current-a");
		$(this).children(".show-side-area").remove();
	})

</script>

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
					<?php if(is_array($love)): $i = 0; $__LIST__ = $love;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$love): $mod = ($i % 2 );++$i;?><div class="goods-block" title="<?php echo ($love["name"]); ?>">
							<a href="/eMarket/index.php/Home/Goods/detail?gid=<?php echo ($love["gid"]); ?>"><div class="goods-block-img"><img src="/eMarket/Public/image/goods/<?php echo ($love["img"]); ?>"></div></a>
							<div class="goods-block-description">
								<div class="goods-title"><a href="/eMarket/index.php/Home/Goods/detail?gid=<?php echo ($love["gid"]); ?>"><?php echo ($love["name"]); ?></a></div>
								<div class="goods-price">¥<?php echo ($love["price"]); ?></div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<!-- 区块4 -->
			<div class="publicblock block2">
				<div class="block-title">
					<h5>热销商品</h5>
				</div>
				<div class="block-main">
					<?php if(is_array($hotsold)): $i = 0; $__LIST__ = $hotsold;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotsold): $mod = ($i % 2 );++$i;?><div class="goods-block" title="<?php echo ($hotsold["name"]); ?>">
							<a href="/eMarket/index.php/Home/Goods/detail?gid=<?php echo ($hotsold["gid"]); ?>"><div class="goods-block-img"><img src="/eMarket/Public/image/goods/<?php echo ($hotsold["img"]); ?>"></div></a>
							<div class="goods-block-description">
								<div class="goods-title"><a href="/eMarket/index.php/Home/Goods/detail?gid=<?php echo ($hotsold["gid"]); ?>"><?php echo ($hotsold["name"]); ?></a></div>
								<div class="goods-price">¥<?php echo ($hotsold["price"]); ?></div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<!-- 区块5 -->
			<div class="publicblock block3">
				<div class="block-title">
					<h5>美食看看</h5>
				</div>
				<div class="block-main">
					<?php if(is_array($look)): $i = 0; $__LIST__ = $look;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$look): $mod = ($i % 2 );++$i;?><div class="goods-block" title="<?php echo ($look["name"]); ?>">
							<a href="/eMarket/index.php/Home/Goods/detail?gid=<?php echo ($look["gid"]); ?>"><div class="goods-block-img"><img src="/eMarket/Public/image/goods/<?php echo ($look["img"]); ?>"></div></a>
							<div class="goods-block-description">
								<div class="goods-title"><a href="/eMarket/index.php/Home/Goods/detail?gid=<?php echo ($look["gid"]); ?>"><?php echo ($look["name"]); ?></a></div>
								<div class="goods-price">¥<?php echo ($look["price"]); ?></div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<!-- 区块3 -->
			<div class="publicblock block4" style="display:none;">
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