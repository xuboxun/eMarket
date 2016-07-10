<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>电子商城</title>
<<<<<<< HEAD
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/register.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
=======
		<link rel="stylesheet" href="/eMarket/Public/css/register.css">
>>>>>>> f6f934b80e82c0abbf12084889f0ce2f399ca462
	</head>
	<body>
	 	<div class="main">
	 		<div class="header">
	 			<img src="/eMarket/Public/image/logoletter.png"/>
	 			<a>已有账号</a><a href="/eMarket/index.php/Home/Login/login">请登录</a>
	 		</div>
	 		<div class="lcontant">
			   <form name="form">
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" id="username" value="用户名" onclick="f1('shuru1')" onblur="f2('shuru1')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="shuru1">!!支持中文、字母、数字的组，4-20个字符</p>
	 			</div>
	 			<div class="txt"style="height:100px;">
	 				<input class="input_test shuru" type="text" style="color:#777" id="password" value="设置密码" onclick="f1('shuru2')" onblur="f2('shuru2')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="shuru2">!!建议使用字母、数字和符号两种及以上的组合，6-20个字符</p>
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" id="repassword" value="确认密码" onclick="f1('shuru3')" onblur="fre('shuru3')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="shuru3">!!请再次输入密码</p>
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" id="email" value="邮箱账号" onclick="f1('shuru4')" onblur="f3('shuru4')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="shuru4">!!完成验证后可以使用该账号登陆和找回密码</p>
	 			</div>
	 			<div class="txt">
				<!--<span class="input_test shuru">验证码：<input type="password" id="confirm" style="width:60px;" placeholder="验证码"/><img style="width:33.3333%;height:20px;position:relative;top:5px;" src="/eMarket/index.php/home/Commen/verify" id="code" onclick="this.src=this.src+'?'+Math.random()" class="code" />-->
 
	 				<!--<input class="input_test shuru" type="text" style="color:#777" id="code" value="验证码" onclick="f1('shuru5')" onblur="f2('shuru5')"/>
	 				<p style="color:999;font-size:14px;display:none;" id="shuru5">!!看不清？点击图片更换验证码</p>-->
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru2" type="text" style="color:#777" id="num" value="邮箱验证码" onclick="f1('shuru6')" onblur="f2('shuru6')"/>
	 				<input class="button_code" id="zhuce" type="button" value="获取验证码"  onclick="sendmail('zhuce');"  />
	 			</div>
	 			<input class="submit"  type="button" value="立即注册" onclick="register();"/>
			  </form>
	 		</div>
	 		<div class="rcontant">
	 			<div class="right1">
	 				<img src="/eMarket/Public/image/register.png"/>
	 			</div>
	 			<a href="/eMarket/index.php/Home/Login/">----------商业注册</a>
	 		</div>
	 	</div>
	 	<script type="text/javascript" src="/eMarket/Public/js/jquery.min.js"></script>
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
			function f1(id){
				document.getElementById(id).style.display="block";
			}
			function f2(id){
				document.getElementById(id).style.display="none";
			}
			function f3(id){
			    check_email();
				document.getElementById(id).style.display="none";
			}
			function fre(id){
			     check_repwd();
			     document.getElementById(id).style.display="none";
			}
			function check_empty(id,con){
			      var tr=trimStr(document.getElementById(id).value);
				  if(tr==con||tr==''){
				     alert(con+"不能为空");
				}
			}
			function check_repwd(){
			     var pwd=trimStr(document.getElementById('password').value);
				 var repwd=trimStr(document.getElementById('repassword').value);
				 if(pwd==repwd){
				     
				 }else{
				    alert("密码不一致");
				 }
			}
			function check_pwd(){
			     check_empty("repassword","确认密码");
			     check_repwd();
			}
			function check_email(){
			     var tr=trimStr(document.getElementById('email').value);
				//alert(tr);
			    if(tr=="邮箱账号"||tr==''){
				     alert("邮箱不能为空");
				}else{
				    var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                    if(!reg.test(tr)) {
                           alert("请输入有效的邮箱地址！");		   
                    }else{
					        $.get('/eMarket/index.php/Home/Login/check_user',{
						          zd:"email",
					              con:tr
					        },function(res){
						          if(res=="已存在"){
						                alert(res);
						          }
					        })
					}
				}
			}
			function sendmail(id){
			                check_email();
							var tr=trimStr(document.getElementById('email').value);
					        $.post('/eMarket/index.php/Home/Login/sendyzm',{
					              con:tr
					        },function(res){
						          alert(res);
					        });
				 document.getElementById(id).disabled=true;
				 var i=30;
				 var time=setInterval(function(){
				   if(i>0){
				        $('#'+id).val(i+"秒后重发");
						i--;
				   }else{
				      $('#'+id).val("获取验证码");
				      document.getElementById(id).disabled=false;
				      exit;
				   }
				 },1000);
				 
			}
			function register(){
			    check_empty('username',"用户名");
			    check_empty('password',"设置密码");
			    check_pwd();
				check_email();
			    
			}
			       /*var xhr=new XMLHttpRequest();
		            xhr.onreadystatechange=function(){
		                 if(xhr.readyState==4){
		                      if(xhr.responseText=="已存在"){
			                       alert(xhr.responseText);
			                    }else{
			                       alert(xhr.responseText);
			                    }
			             }
		            }
		            xhr.open("get","?);
		            xhr.send("null"); -->*/
					//var time=setInterval(function(){},1000);
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
			<div class="footer-top">
				多块好省
			</div>
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