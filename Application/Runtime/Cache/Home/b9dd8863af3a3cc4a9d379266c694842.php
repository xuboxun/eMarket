<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>电子商城</title>
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/findpwd.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/base.css">
	</head>
	<body>
	   <div class="main">
	   		<!--头部-->
	   		<div class="header">
	   			<img src="/e-market/Public/image/logoletter.png"/>
	   			<a href="/e-market/index.php/Home/Login/login">登录</a><a href="/e-market/index.php/Home/Login/register">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注册</a>
	   		</div>
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
	   			<div>
	   				<input class="submit" type="button" value="确定" onclick="f1();"/>
	   			</div>
	   		</div>
	   </div>
	   <script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
	   <script type="text/javascript">
			function trimStr(str){return str.replace(/(^\s*)|(\s*$)/g,"");}
			var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
			function f1(){
			   var username=trimStr($("#username").val());
			   var code=trimStr($("#code").val());
			   if(username){
			      $("#yxts").html("");
                    if(!reg.test(username)) {
                           $('#yxts').html("请输入有效的邮箱地址！");
                    }else{
					       if(code){
				                 $("#yzmts").html("");
								 
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
									  var i=10;
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