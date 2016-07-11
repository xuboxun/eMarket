<?php if (!defined('THINK_PATH')) exit();?><!-- 
author : sudonglin
version : 1.0
date : 2016.7.11
description : 个人中的收藏店铺页面
-->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>好食光</title>
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/person.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/p_base.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
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
			<div class="collect_contanter">
			<!-- 侧边栏 -->
				<div class="left">
					<ul>
						<li><a href="/eMarket/index.php/Home/Person/collect">收藏的商品</a></li>
						<li><a href="/eMarket/index.php/Home/Person/collect2">收藏的店铺</a></li>
					</ul>
				</div>
				<!--订单内容-->
				<div class="right"> 
				 	<div class="collect_things">
				 	<!-- 列表布局 -->
				 	<div class="liebiao">
				 				<div class="c2_goods">
				 					<div class="c2_brand">
					 					<div class="p2_img">
					 						<input type="checkbox" value="" name="">
					 						<a href=""><img src="/eMarket/Public/image/goods/collectshop.png"/></a>
					 					</div>
					 					<div class="p2_name">
					 						<a href="">&nbsp;&nbsp;良品铺子&nbsp;&nbsp;官方旗舰店</a>
					 						<div class="null"></div>
					 					</div>
										<div class="value">
											<a href="">关注人气：<strong>75816人</strong></a>
											<p href="">关注时间：<strong>2016-07-11</strong></p>
										</div>
										<div>
											<input class="submit" type="button" value="进入店铺"/>
										</div>
							            <div>
							            	<input class="submit2" type="button" value="联系客服"/>
							            	<input class="submit2" type="button" value="取消关注"/>
							            </div>
							        </div>
							        <div class="c2_material">
							        	<ul>
							        		<li>
							        			<div class="material">
								        			<div class="p_img">
					 									<a href=""><img src="/eMarket/Public/image/goods/liangpin.jpg"/></a>
							 						</div>
							 						<div class="price">
														<strong price="49.90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥142.00</strong>
													</div>
												</div>
						 					</li>
							        	<li>
							        			<div class="material">
								        			<div class="p_img">
					 									<a href=""><img src="/eMarket/Public/image/goods/liangpin.jpg"/></a>
							 						</div>
							 						<div class="price">
														<strong price="49.90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥142.00</strong>
													</div>
												</div>
						 					</li>
						 					<li>
							        			<div class="material">
								        			<div class="p_img">
					 									<a href=""><img src="/eMarket/Public/image/goods/liangpin.jpg"/></a>
							 						</div>
							 						<div class="price">
														<strong price="49.90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥142.00</strong>
													</div>
												</div>
						 					</li>
						 					<li>
							        			<div class="material">
								        			<div class="p_img">
					 									<a href=""><img src="/eMarket/Public/image/goods/liangpin.jpg"/></a>
							 						</div>
							 						<div class="price">
														<strong price="49.90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥142.00</strong>
													</div>
												</div>
						 					</li>
							        	</ul>
							        </div>
				 				</div>


				 				<div class="c2_goods">
				 					<div class="c2_brand">
					 					<div class="p2_img">
					 						<input type="checkbox" value="" name="">
					 						<a href=""><img src="/eMarket/Public/image/goods/collectshop.png"/></a>
					 					</div>
					 					<div class="p2_name">
					 						<a href="">&nbsp;&nbsp;良品铺子&nbsp;&nbsp;官方旗舰店</a>
					 						<div class="null"></div>
					 					</div>
										<div class="value">
											<a href="">关注人气：<strong>75816人</strong></a>
											<p href="">关注时间：<strong>2016-07-11</strong></p>
										</div>
										<div>
											<input class="submit" type="button" value="进入店铺"/>
										</div>
							            <div>
							            	<input class="submit2" type="button" value="联系客服"/>
							            	<input class="submit2" type="button" value="取消关注"/>
							            </div>
							        </div>
							        <div class="c2_material">
							        	<ul>
							        		<li>
							        			<div class="material">
								        			<div class="p_img">
					 									<a href=""><img src="/eMarket/Public/image/goods/liangpin.jpg"/></a>
							 						</div>
							 						<div class="price">
														<strong price="49.90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥142.00</strong>
													</div>
												</div>
						 					</li>
							        	<li>
							        			<div class="material">
								        			<div class="p_img">
					 									<a href=""><img src="/eMarket/Public/image/goods/liangpin.jpg"/></a>
							 						</div>
							 						<div class="price">
														<strong price="49.90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥142.00</strong>
													</div>
												</div>
						 					</li>
						 					<li>
							        			<div class="material">
								        			<div class="p_img">
					 									<a href=""><img src="/eMarket/Public/image/goods/liangpin.jpg"/></a>
							 						</div>
							 						<div class="price">
														<strong price="49.90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥142.00</strong>
													</div>
												</div>
						 					</li>
						 					<li>
							        			<div class="material">
								        			<div class="p_img">
					 									<a href=""><img src="/eMarket/Public/image/goods/liangpin.jpg"/></a>
							 						</div>
							 						<div class="price">
														<strong price="49.90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;￥142.00</strong>
													</div>
												</div>
						 					</li>
							        	</ul>
							        </div>
				 				</div>

				 				
				 			 </div>
						 </div>
					</div>
				</div>
			</div>
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
</body>
</html>