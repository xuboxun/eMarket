<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>好食光</title>
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/base.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/findpwd.css">	
	</head>
	<body>
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
	<!-- 头部 start -->
	<div id="header">
		<div class="container">
			<div class="logo">
				<img src="/e-market/Public/image/system/logo.png">
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
								window.location.href="/e-market/index.php/Home/Goods/classb?key="+$.trim($("#searchValue").val());
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
									$.post('/e-market/index.php/Home/Index/search',{
										search:search
									},function(ans){
										if(ans.length != 0) {
											$(".search-ul").html("");//清除旧的搜索答案
											// alert($(".search-ul").html(""))
											if($(".search-ul").html() == "" || $(".search-ul").html() == null){
												addhtml = $(".search-ul").html();
												for(var i = 0;i < ans.length;i++) {
													addhtml += "<li><a href='/e-market/index.php/Home/Goods/detail.html?gid="
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
	   <div class="main">
	   		<!--头部-->
	   		<!--<div class="header">
	   			<img src="/e-market/Public/image/logoletter.png"/>
	   			<a href="/e-market/index.php/Home/Login/login">登录</a><a href="/e-market/index.php/Home/Login/register">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注册</a>
	   		</div>-->
	   		<!--主题内容-->
	   		<div class="contant">
	   			<div>
	   				用户名：<input  class="shuru" type="text" name="username" style="color:#666" placeholder="邮箱账号" id="username">
	   			</div>
				<p style="color:red;" id="yxts"></p>
	   			<div>

	   				验证码：<input  class="shuru" type="text" name="code" style="width:140px" id="code"/><input type="button" name="" id="yzm"	onclick="sendmail();" value="获取验证码" style="width:80px;margin-left:20px;height:42px;background:#2283D2;color:#444"/>
	   				
	   			</div>
				<p style="color:red;" id="yzmts"></p>
				<div id="password" style="display:none;">
	   				密&nbsp&nbsp&nbsp码：<input  class="shuru" type="text"  style="color:#666" placeholder="请输入密码" id="pwd">
	   			</div>
	   			<div>
	   				<input class="submit" type="button" value="确定" onclick="f1();"/>
	   			</div>
	   		</div>
	   </div>
	   <script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
	   <script type="text/javascript">
			function trimStr(str){return str.replace(/(^\s*)|(\s*$)/g,"");}
			var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			var pl=0;
			function f1(){
			if(pl>0){
			   var password=trimStr($("#pwd").val());
			  
			                    $.ajax({
						               asnyc:false,
							           url:"/e-market/index.php/Home/Login/repwd",
							           type:"post",
						               data:"pwd="+password,
                                       success:function(res){
							               if(res=="success"){
									           
									       }else{
										      alert("请重试");
									          window.location.href="/e-market/index.php/Home/Login/findpwd";
									       }
							           },
						         });
			}
			   var username=trimStr($("#username").val());
			   var code=trimStr($("#code").val());
			   if(username){
			      $("#yxts").html("");
                    if(!reg.test(username)) {
                           $('#yxts').html("请输入有效的邮箱地址！");
                    }else{
					       if(code){
				                 $("#yzmts").html("");
								 $.ajax({
						               asnyc:false,
							           url:"/e-market/index.php/Home/Login/getmd",
							           type:"post",
						               data:"con="+code,
                                       success:function(res){
							               if(res=="success"){
									           $("#password").css("display","block");
											   pl++;
									       }else{
									           $("#yzmts").html("验证码错误，请重试");
									       }
							           },
						         });
					       }else{
				                 $("#yzmts").html("请您填写验证码");
				           }
					}
			      
			   }else{
			  // alert("sdfs");
			      $("#yxts").html("邮箱不能为空");
			   }
			}
			function sendmail(){
			     var username=trimStr($("#username").val());
				 if(username){
                    if(!reg.test(username)) {
                           $('#yxts').html("请输入有效的邮箱地址！");
                    }else{
					        $.ajax({
						    asnyc:false,
							url:"/e-market/index.php/Home/Login/sendpwd",
							type:"post",
						    data:"con="+username,
                            success:function(res){
							        if(res=="发送成功"){
									  alert("发送成功");
									  $("#yzm").attr("disabled","true");
									  var i=60;
				                      var time=setInterval(function(){
				                         if(i>0){
				                            $('#yzm').val(i+"秒后重发");
						                    i--;
				                         }else{
				                            $('#yzm').val("获取验证码");
                                            document.getElementById("yzm").disabled=false;											
				                            clearInterval(time);
				                         }
				                     },1000);
									}else{
									   alert("res");
									}
							    },
						    });
					}
			   }else{
			      $("#yxts").html("邮箱不能为空");
			   }
			}
	   </script>
	   <!-- 尾部引入 -->
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