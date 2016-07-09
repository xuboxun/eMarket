<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>电子商城</title>
		<link rel="stylesheet" href="/emarket/Public/css/login.css">
	</head>
	<body>
	    <!--整体布局-->
		<div class="main">
		<!--中间部分-->
		<div class="owner">
		<!--登陆表格-->
		<div class="contant">
		<div class="login_title">账户登录</div>
		 <form  method="post" action="" name="form">
		     <div class="filed">
			 	<input class="input_test" type="text" style="color:#666;" placeholder="手机号/会员名/qq邮箱" name="username"/>
			 </div>
			 <div class="filed">
			 	<input class="input_test" type="text" style="color:#666;" placeholder="请输入密码" name="password" />
			 </div>            
             <div class="link">
			 	<a class="forgetpsw" href="/emarket/index.php/Home/Login/findpwd">忘记密码</a>
			 	<a class="sign" href="/emarket/index.php/Home/Login/register">注册</a>
			 </div>
             <div> 
             	<input class="submit" type="submit" value="登录" />
			 </div>		
		 </form>
			<!--输入框文字隐藏功能-->
			<script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
			<script type="text/javascript">
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
			</script>

		 </div>
		</div>
		</div>
		</div>
	</body>
</html>