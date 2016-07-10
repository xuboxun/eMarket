<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>电子商城</title>
		<link rel="stylesheet" href="/e-market/Public/css/login.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/base.css">
	</head>
	<body>
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
			 	<a class="forgetpsw" href="/e-market/index.php/Home/Login/findpwd">忘记密码</a>
			 	<a class="sign" href="/e-market/index.php/Home/Login/register">注册</a>
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
							url:"/e-market/index.php/Home/Login/do_login",
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
descriptioin : 公有css
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