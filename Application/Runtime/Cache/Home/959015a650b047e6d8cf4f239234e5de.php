<?php if (!defined('THINK_PATH')) exit();?><!-- 
author : sudonglin
version : 1.0
date : 2016.7.11
description : 个人中的设置页面
-->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>好食光</title>
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/setting.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/p_base.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/motaikuang.css">
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
						<li><a href="/eMarket/index.php/Home/Person/center">个人信息</a></li>
						<li><a href="/eMarket/index.php/Home/Person/setting">收货地址</a></li>
					</ul>
				</div>
				<!--订单内容-->
				<div class="right"> 
				 	<div class="things">
				 		<div class="address">

				 			<div class="addresslist">
				 				<div class="smc">
				 					<div class="litem">
				 						<div class="item">
				 							<span>收货人：<b>大帅哥</b></span>                     
				 						</div>
				 						<div class="item">
				 							<span>所在地区：<b>湖北省武汉市洪山区城区</b></span>
				 						</div>
				 						<div class="item">
				 							<span>地址：<b>湖北省武汉市洪山区 狮子山道 华中农业大学</b></span>                                     
				 						</div>
				 						<div class="item">
				 							<span>手机：<b>1567897773</b></span>
				 						</div>
				 						<div class="item">
				 							<span>电子邮箱<b>666666@qq.com</b></span>
				 						</div>
				 					</div>
				 					<div class="ritem">
				 						<div class="item">
				 							<span>支付方式: <b>在线支付</b></span
				 						</div>
				 						<div class="item">
				 							<span>配送方式: <b>配送区域内的由快递配送</b></span>
				 						</div>
				 						<div class="extra">
				 							<a class="theme-login">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">删除</a>
				 						</div>
				 					</div>
				 				</div>
				 			</div>
				 		</div>	
				 		<div class="addresslist">
				 				<div class="smc">
				 					<div class="litem">
				 						<div class="item">
				 							<span>收货人：<b>大帅哥</b></span>                     
				 						</div>
				 						<div class="item">
				 							<span>所在地区：<b>湖北省武汉市洪山区城区</b></span>
				 						</div>
				 						<div class="item">
				 							<span>地址：<b>湖北省武汉市洪山区 狮子山道 华中农业大学</b></span>                                     
				 						</div>
				 						<div class="item">
				 							<span>手机：<b>1567897773</b></span>
				 						</div>
				 						<div class="item">
				 							<span>电子邮箱<b>666666@qq.com</b></span>
				 						</div>
				 					</div>
				 					<div class="ritem">
				 						<div class="item">
				 							<span>支付方式: <b>在线支付</b></span
				 						</div>
				 						<div class="item">
				 							<span>配送方式: <b>配送区域内的由快递配送</b></span>
				 						</div>
				 						<div class="extra">
				 							<a class="theme-login">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">删除</a>
				 						</div>
				 					</div>
				 				</div>
				 			</div>
				 		</div>	 

				 		 <a class="btn btn-primary theme-login">新增收货地址</a>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#666;">您已经创建<strong>2</strong>个收货地址，最多可创建20个</span>
				    </div>
			</div>
		</div>
	</div>
</div>
<!--  -->
<script src="/eMarket/Public/js/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {
  $('.theme-login').click(function(){
  	//alert("hello");
      $('.theme-popover-mask').fadeIn(100);
      $('.theme-popover').slideDown(200);
  })
  $('.theme-poptit .close').click(function(){
      $('.theme-popover-mask').fadeOut(100);
      $('.theme-popover').slideUp(200);
  })

})
</script>
<div class="theme-popover">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h3>添加收货地址</h3>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" name="loginform" action="" method="post">
                
           </form>
     </div>
</div>
<div class="theme-popover-mask"></div>
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