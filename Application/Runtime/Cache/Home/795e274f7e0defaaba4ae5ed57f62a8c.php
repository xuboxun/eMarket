<?php if (!defined('THINK_PATH')) exit();?><!-- 
author : huangyifan
version : 1.0
date : 2016.7.10
description : 商品详情页面
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
		<div class="container goods-detail-container">
			<div class="goods-detail-area">
				<!-- 图片展示区域 -->
				<div class="goods-detail-imgarea">
					<div class="goods-detail-imgarea-bigimg">
						<img src="/eMarket/Public/image/goods/<?php echo ($goods["g_img"]); ?>">
					</div>
					<div class="goods-detail-imgarea-thumbnail">
						<span><</span>
						<img src="/eMarket/Public/image/goods/<?php echo ($goods["g_img"]); ?>">
						<img src="/eMarket/Public/image/goods/<?php echo ($goods["g_img"]); ?>">
						<img src="/eMarket/Public/image/goods/<?php echo ($goods["g_img"]); ?>">
						<img src="/eMarket/Public/image/goods/<?php echo ($goods["g_img"]); ?>">
						<span>></span>
					</div>
				</div>
				<!-- 购买区域，价格，选择数量 -->
				<div class="goods-detail-buyarea">
					<div class="goods-detail-title"><?php echo ($goods["g_name"]); ?></div>
					<div class="goods-detail-price"><h2>好 食 光 价：<i id="price">￥<?php echo ($goods["price"]); ?> </i></h2></div>
					<div class="goods-detail-restnum">库存数量：<?php echo ($goods["count"]); ?>件</div>
					<div class="goods-detail-buynum"><font>购买量</font> <button id="minus">-</button><input type="text" name="buynum" id="buynum" value="1"><button id="add">+</button></div>
					<div class="goods-detail-operate">
						<span id="collect" onclick="collect(<?php echo ($goods["gid"]); ?>);">收藏</span>
						<span id="addcart" onclick="cart(<?php echo ($goods["gid"]); ?>)">加入购物车</span>
						<span id="buynow">立即购买</span>
					</div>
				</div>
				<!-- 商家信息 -->
				<div class="shop-information">
					<h2>店铺信息</h2>
					<img src="/eMarket/Public/image/shop/<?php echo ($shop["s_img"]); ?>">
					<h3>店名：<?php echo ($shop["sname"]); ?></h3>
					<h3>掌柜：<?php echo ($business["username"]); ?></h3>
					<h3>联系：<?php echo ($business["tel"]); ?></h3>
					<hr>
					<div class="eva-kind"><font>好评</font><i><?php echo ($goods["g_evaluate"]); ?></i></div>
					<div class="eva-kind" style="border-right:0px;"><font>差评</font><i><?php echo ($goods["g_evaluate"]); ?></i></div>
					<span><a href="">进入店铺</a></span>
					<span><a href="">收藏店铺</a></span>
				</div>
			</div>
			<div class="about-goods">
				<div class="about-goods-title">
					<font>评论</font>
				</div>
				<!-- 评论 -->
				<div class="goods-evaluete">
					<div class="goods-evaluete-line">
						<img src="">
						<div class="goods-evaluete-line-user">黄一凡 2016年12月12日</div>
						<div class="goods-evaluete-line-word">东西收到，很满意!!真的是超级好的卖家，解答疑问不厌其烦，细致认真，关键是东西好，而且货物发得超快，包装仔细，值得信赖!超大一包！东西收到，很满意!!真的是超级好的卖家，解答疑问不厌其烦，细致认真，关键是东西好，而且货物发得超快，包装仔细，值得信赖!超大一包！东西收到，很满意!!真的是超级好的卖家，解答疑问不厌其烦，细致认真，关键是东西好，而且货物发得超快，包装仔细，值得信赖!超大一包！东西收到，很满意!!</div>
					</div>
					<div class="goods-evaluete-line">
						<img src="">
						<div class="goods-evaluete-line-user">黄一凡 2016年12月12日</div>
						<div class="goods-evaluete-line-word">东西收到，很满意!!真的是超级好的卖家，解答疑问不厌其烦，细致认真，关键是东西好，而且货物发得超快，包装仔细，值得信赖!超大一包！东西收到，很满意!!真的是超级好的卖家，解答疑问不厌其烦，细致认真，关键是东西好，而且货物发得超快，包装仔细，值得信赖!超大一包！东西收到，很满意!!真的是超级好的卖家，解答疑问不厌其烦，细致认真，关键是东西好，而且货物发得超快，包装仔细，值得信赖!超大一包！东西收到，很满意!!</div>
					</div>
				</div>
			</div>
			<div class="other-goods">
				<div class="about-goods-title">
					<font>其他推荐</font>
				</div>
				<!-- 推荐内容 -->
				<div class="other-goods-content">
					<?php if(is_array($other)): $i = 0; $__LIST__ = $other;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$other): $mod = ($i % 2 );++$i;?><div class="good-area-content-col goods-block">
							<a href="/eMarket/index.php/Home/Goods/detail?gid=<?php echo ($other["gid"]); ?>"><div class="goods-block-img"><img src="/eMarket/Public/image/goods/<?php echo ($other["g_img"]); ?>" title="<?php echo ($other["g_name"]); ?>"></div></a>
							<div class="goods-block-description">
								<div class="goods-title"><a href="/eMarket/index.php/Home/Goods/detail?gid=<?php echo ($other["gid"]); ?>"><?php echo ($other["g_name"]); ?></a></div>
								<div class="goods-price"><?php echo ($other["price"]); ?></div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</div>
		</div>
	</div>
	<!-- 中心区 end -->
	<!-- 模态框 -->
	<script>
	jQuery(document).ready(function($){
		$('#buynow').click(function(){
			$(".model-form-price-span1").html($(".goods-detail-title").html()+" x"+$("#buynum").val());
			$(".model-form-price-span2").html("￥"+<?php echo ($goods['price']); ?>*$("#buynum").val());
			$("#final-price").html("￥"+<?php echo ($goods['price']); ?>*$("#buynum").val());
		    $('.model-mask').fadeIn(100);
		    $('.model').slideDown(200);
		})
		$('.model-head .close').click(function(){
		    $('.model-mask').fadeOut(100);
		    $('.model').slideUp(200);
		})
	})
	</script>
	<div class="model">
	     <div class="model-head">
	          <a href="javascript:;" title="关闭" class="close">×</a>
	          <label for="image_file" class="choose-img"></a>购买商品</label>     
	     </div>
	     <div class="model-form-div">
			<div class="model-form">
                <form>
                	<div>
                		<h2 class="model-form-h2">确认收货地址</h2>
                		<div class="model-form-address"><input type="radio" name value="address"><?php echo ($user["address"]); ?></div>
                	</div>
                	<div>
                		<h2 class="model-form-h2">确认订单信息</h2>
                		<div>
                			<div class="model-form-img">
                				<img src="/eMarket/Public/image/goods/<?php echo ($goods['g_img']); ?>">
                			</div>
                			<div class="model-form-price">
                				<span class="model-form-price-span1"></span>
                				<span class="model-form-price-span2"></span>
                			</div>
                		</div>
                	</div>
                	<div class="final">
                		<span>实付款： <i id="final-price"></i> </span>
                		<span>寄送至： <?php echo ($user["address"]); ?> </span>
                		<span>收货人： <?php echo ($user["username"]); ?> <?php echo ($user["tel"]); ?> </span>
                		<input id="order-submit" type="button" name="submit" value="提交订单">
                	</div>
                	<script>
                		$("#order-submit").click(function(){
                			if($('input:radio:checked').val() == null){
                				alert("请确认收货地址");
                			}else{
                				$.post('/eMarket/index.php/Home/Goods/buy',{
                					uid : <?php echo ($user["uid"]); ?>,
                					gid : <?php echo ($goods["gid"]); ?>,
                					number : $("#buynum").val()
                				},function(res){
                					if(res != 0){
                						window.location.href = "/eMarket/index.php/Home/Person/bought";
                					}else{
                						alert("服务器开小差了，订单未成功，请稍后再试");
                					}
                				})
                			}
                		})
						function collect(gid){
						   $.post("/e-market/index.php/Home/person/add_collect",{
						      id:gid,
						   },function(res){
						      alert(res);
						   });
						}
						function cart(gid){
						  $.post("/e-market/index.php/Home/person/add_cart",{
						      id:gid,
						   },function(res){
						      alert(res);
						   });
						}
					
                	</script>
                </form>
            </div>
	     </div>
	</div>
	<div class="model-mask"></div>
	<!-- 模态框 -->
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