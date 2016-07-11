<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>好食光</title>
		<link rel="stylesheet" href="/eMarket/Public/css/login.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
	</head>
	<body>
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
							window.location.href="/eMarket/index.php/Home/Goods/classb?key="+$.trim($("#searchValue").val());
							return false;
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
													addhtml += "<li><a href='/eMarket/index.php/Home/Goods/detail.html?gid="+ans[i]['gid']+"' target='blanket'>"+ans[i]['g_name']+"</a></li>";
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
	    <!--整体布局-->
		<div class="main">
		<!--中间部分-->
		<div class="owner">
		<!--登陆表格-->
		<div class="contant">
		
		<div class="login_title">账户登录</div>
		<p style="color:red;" id="ts"></p>
		 <form name="form" method="post">
		     <div class="filed">
			 	<input class="input_test" type="text" style="color:#666;" placeholder="手机号/会员名/qq邮箱" id="username"/>
			 </div>
			 <div class="filed">
			 	<input class="input_test" type="text" style="color:#666;" placeholder="请输入密码" id="password" />
			 </div>            
             <div class="link">
			 	<a class="forgetpsw" href="/eMarket/index.php/Home/Login/findpwd">忘记密码</a>
			 	<a class="sign" href="/eMarket/index.php/Home/Login/register">注册</a>
			 </div>
             <div> 
             	<input class="submit" type="button" value="登录" onclick="f1();"/>
			 </div>		
		 </form>
			<!--输入框文字隐藏功能-->
			<script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
			<script type="text/javascript">
			function trimStr(str){return str.replace(/(^\s*)|(\s*$)/g,"");}
			$(function(){
			$('.input_test').bind({
			focus:function(){
			if (this.value == this.defaultValue){
			this.value="";
			}
			},
			blur:function(){
			if (this.value == ""){
			this.value = this.defaultValue;
			}
			}
			});
			})
			function f1(){
			     var username=trimStr($("#username").val());
				 var password=trimStr($("#password").val());
				
				 if(username){
				     if(password){
					     $.ajax({
						    asnyc:false,
							url:"/eMarket/index.php/Home/Login/do_login",
							type:"post",
						    data:"username="+username+"&password="+password,
                            success:function(res){
							          if(res=="failure"){
									       $("#ts").html("账户或密码错误");
									  }else{
									    
									  }
							    },
						 });
					 }else{
					    $("#ts").html("密码不能为空");
					 }
				 }else{
				 
				     $("#ts").html("用户名不能为空");
				 }
			}
			</script>

		 </div>
		</div>
		</div>
		</div>
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