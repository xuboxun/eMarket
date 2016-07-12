<?php if (!defined('THINK_PATH')) exit();?><!-- 
author : sudonglin
version : 1.0
date : 2016.7.10
description : 个人中的个人中心页面
-->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>好食光</title>
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/setting.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/p_base.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/base.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/motaikuang.css">
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
				<span><a href="<?php echo ($nav["url"]["0"]); ?>"><?php echo ($nav["state"]["0"]); ?></a></span>
				<span><a href="<?php echo ($nav["url"]["1"]); ?>"><?php echo ($nav["state"]["1"]); ?></a></span>
			</div>
			<div class="banner-right">
				<ul class="banner-right-ul">
					<li><a href="/e-market/index.php/Home/Index/index">商城首页</a></li>
					<li><a href="/e-market/index.php/Home/Person/cart">购物车</a></li>
					<li><a href="/e-market/index.php/Home/Person/collect">收藏夹</a></li>
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
						<li><a href="/e-market/index.php/Home/Person/center" id="person_info">个人信息</a></li>
						<li><a href="/e-market/index.php/Home/Person/setting">收货地址</a></li>
					</ul>
				</div>
				<!--订单内容-->
				<div class="right"> 
				 	<div class="things">
				 		<div class="address">						
				 			<div class="f2">
				 				<div class="f2left">
				 					<h3>登陆密码</h3>
				 				</div>
				 				<div class="f2right">
				 					 <span>互联网账号存在被盗风险，建议您定期更改密码以保护账户安全</span>
				 					  <a href="/e-market/index.php/home/Login/findpwd">修改</a>
				 				</div>
				 			</div>	
				 			<div class="f2">
				 				<div class="f2left">
				 					<h3>头像昵称</h3>
				 				</div>
				 				<div class="f2right">
				 					 <span>可随时更换您喜欢的头像或昵称</span>
				 					  <a class="theme-login">修改</a>
				 				</div>
				 			</div>	
				 			<div class="f2">
				 				<div class="f2left">
				 					<h3>绑定手机</h3>
				 				</div>
				 				<div class="f2right">
				 					 <span> 您验证的手机： 159*****742    若已丢失或停用，请立即更换，避免账户被盗 </span>
				 					  <a class="theme-login">修改</a>
				 				</div>
				 			</div>	
				 							 		 
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="/e-market/Public/js/jquery.min.js"></script>
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
  $("#set").css("background","#E43D00");
	$("#person_info").css("color","#FF4400");
})
</script>
<div class="theme-popover">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h3>添加收货地址</h3>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" name="loginform" action="" method="post">
                <div class="f1">
                	<em>* </em>：<input type="text" class=""/><span style="display:none">请您填写收货人姓名</span>
                </div>
                <div class="f1">
                	<em>* </em> 详细地址：<input type="text" class=""/><span style="display:none">请您填写收货人详细地址</span>
                </div>
                  <div class="f1">
                	<em>* </em> 手机号码：<input type="text" class=""/><span style="display:none">请您填写收货人手机号码</span>
                </div>
                  <div class="f1">
                	&nbsp;邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱&nbsp;&nbsp;&nbsp;：<input type="text" class=""/>
                </div>
                  <div class="f1">
                	<a style="margin-top:30px;"type="" class="btn">保存收货地址</a>
                </div>
           </form>
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