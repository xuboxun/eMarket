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
		<title>好食光</title>
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/person.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/p_base.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/base.css">
	</head>
	<body>
		<!--头部包含-->
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
<<<<<<< HEAD
				<span><a href="/e-market/index.php/Home/Login/login">请登录</a></span>
				<span><a href="/e-market/index.php/Home/Login/register">注册</a></span>
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="/e-market/index.php/Home/Index/index">商城首页</a></li>
=======
<<<<<<< Updated upstream
				<span><a href="<?php echo ($nav["url"]["0"]); ?>"><?php echo ($nav["state"]["0"]); ?></a></span>
				<span><a href="<?php echo ($nav["url"]["1"]); ?>"><?php echo ($nav["state"]["1"]); ?></a></span>
=======
				<span><a href="/eMarket/index.php/Home/Login/login">请登录</a></span>
				<span><a href="/eMarket/index.php/Home/Login/register">注册</a></span>
>>>>>>> Stashed changes
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="/eMarket/index.php/Home/Index/index">商城首页</a></li>
<<<<<<< Updated upstream
					<li><a href="/eMarket/index.php/Home/Person/cart">购物车</a></li>
					<li><a href="/eMarket/index.php/Home/Person/collect">收藏夹</a></li>
=======
>>>>>>> 726d56db9a388061684bc8de5f46c2dc8eed59b4
					<li><a href="">购物车</a></li>
					<li><a href="">收藏夹</a></li>
>>>>>>> Stashed changes
					<li><a href="">客服中心</a></li>
					<li><a href="">网站导航</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 底部 end -->
	<!--头部开始-->
		<div class="header">
			<div class="logoletter"><img src="/e-market/Public/image/logoletter.jpg"/></div>
			<div class="letter"> 
				<ul>
					<li><a  href="/e-market/index.php/Home/Person/cart.html" id="cart">购物车</a></li>				
					<li><a  href="/e-market/index.php/Home/Person/collect.html" id="collect">收藏夹</a></li>				
					<li><a  href="/e-market/index.php/Home/Person/bought.html" id="bought">已买宝贝</a></li>		
					<li><a  href="/e-market/index.php/Home/Person/setting.html" id="set">个人设置</a></li>
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
						<li><a href="/e-market/index.php/Home/Person/bought.html">所有订单</a></li>
						<li><a href="">待评价</a></li>
						<li><a href="">待付款</a></li>
						<li><a href="">待发货</a></li>
						<li><a href="">待收货</a></li>
					</ul>
				</div>
				<!--订单内容-->
				<div class="right">
				 	<div class="series"><p>所有订单</p></div> 
				 	<div class="things">
				 	<!-- 表格控制布局 -->
				 		<table class="tab">
				 		<!-- 表头 -->
				 			<thead>
				 				<tr>
				 					<th width="440px">宝贝</th>
				 					<th width="150px">单价</th>
				 					<th widyh="150px">数量</th>
				 					<th width="150px">交易状态</th>
				 					<th width="150px">全部操作</th>
				 				</tr>
				 			</thead>
				 			<!-- 表主体内容 -->
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody>
				 			<!-- 表第一行 -->
				 				<tr class="first">
				 					<td colspan="5"></td>
				 				</tr>
								<!-- 表第二行 -->
				 				<tr class="two">
				 					<td colspan="5">
				 						<span class="dealtime" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-07-09 21:50:39&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				 						<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单号：20152763431</span>
				 					</td>
				 				</tr>
								<!-- 表第三行 -->
				 				<tr class="three">
				 					<td width="440px">
				 						<div class="goods-item">
				 							<div class="cafa">
				 								<img title="【好食光】雀巢(Nestle)咖啡1+2特浓30条390克"src="/e-market/Public/image/goods/<?php echo ($vo["img"]); ?>"/>
				 							</div>
				 							<div class="link">
				 								<a href="">【好食光】<?php echo ($vo["name"]); ?></a>
				 							</div>
				 						</div>
				 					</td>
				 					<td width="150px"><span><?php echo ($vo["price"]); ?></span></td>
				 					<td width="150px"><span><?php echo ($vo["number"]); ?></span></td>
				 					<td width="150px"><span>交易成功</span></td>
				 					<td width="150px"><span><a href="">追加评论</a><br><a href="">再次购买</a></span></td>
				 				</tr>
				 			</tbody><?php endforeach; endif; else: echo "" ;endif; ?>
				 			<!--<tbody>
				 			
				 				<tr class="first">
				 					<td colspan="5"></td>
				 				</tr>
								
				 				<tr class="two">
				 					<td colspan="5">
				 						<span class="dealtime" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-07-09 21:50:39&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				 						<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单号：20152763431</span>
				 					</td>
				 				</tr>
								
				 				<tr class="three">
				 					<td width="440px">
				 						<div class="goods-item">
				 							<div class="cafa">
				 								<img title="【好食光】雀巢(Nestle)咖啡1+2特浓30条390克"src="/e-market/Public/image/goods/cafa.jpg"/>
				 							</div>
				 							<div class="link">
				 								<a href="">【好食光】雀巢(Nestle)咖啡1+2特浓30条390克</a>
				 							</div>
				 						</div>
				 					</td>
				 					<td width="150px"><span>39.9</span></td>
				 					<td width="150px"><span>1</span></td>
				 					<td width="150px"><span>交易成功</span></td>
				 					<td width="150px"><span><a href="">追加评论</a><br><a href="">再次购买</a></span></td>
				 				</tr>
				 			</tbody>-->
				 		</table>
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