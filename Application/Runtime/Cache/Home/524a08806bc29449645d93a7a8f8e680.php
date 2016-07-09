<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>电子商城</title>
		<link rel="stylesheet" href="/e-market/Public/css/register.css">
	</head>
	<body>
	 	<div class="main">
	 		<div class="header">
	 			<img src="/e-market/Public/image/logoletter.png"/>
	 			<a>已有账号</a><a href="/e-market/index.php/Home/Login/login">请登录</a>
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
				<span class="input_test shuru">验证码：<input type="password" id="confirm" style="width:60px;" placeholder="验证码"/><img style="width:33.3333%;height:20px;position:relative;top:5px;" src="/e-market/index.php/home/Commen/verify" id="code" onclick="this.src=this.src+'?'+Math.random()" class="code" />
 
	 				<!--<input class="input_test shuru" type="text" style="color:#777" id="code" value="验证码" onclick="f1('shuru5')" onblur="f2('shuru5')"/>
	 				<p style="color:999;font-size:14px;display:none;" id="shuru5">!!看不清？点击图片更换验证码</p>-->
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" id="num" value="邮箱验证码" onclick="f1('shuru6')" onblur="f2('shuru6')"/>
	 			</div>
	 			<input class="submit" type="button" value="立即注册" onclick="register();"/>
			  </form>
	 		</div>
	 		<div class="rcontant">
	 			<div class="right1">
	 				<img src="/e-market/Public/image/register.png"/>
	 			</div>
	 			<a href="/e-market/index.php/Home/Login/">----------商业注册</a>
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
			    var tr=trimStr(document.getElementById('email').value);
				//alert(tr);
			    if(tr==""){
				     alert("邮箱不能为空");
					// $("#email").focus();
				}else{
				    var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                    //var value = "xxx@qq.com";
                    if(!reg.test(tr)) {
                           alert("请输入有效的邮箱地址！");
						   
                    }else{
					        $.get('/e-market/index.php/Home/Login/check_user',{
						          zd:"email",
					              con:tr
					        },function(res){
						          if(res=="已存在"){
						                alert(res);
										$("#email").focus();
						          }
					        })
					}
				}
				   
				document.getElementById(id).style.display="none";
			}
			function fre(id){
			     var pwd=trimStr(document.getElementById('password').value);
				 var repwd=trimStr(document.getElementById('repassword').value);
				 if(pwd==repwd){
				     
				 }else{
				    alert("密码不一致");
				 }
			     document.getElementById(id).style.display="none";
			}
			function register(){
			   //alert('hello');
			    var tr=document.getElementById('username').value;
				//if()
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
<<<<<<< HEAD
					//var time=setInterval(function(){},1000);
=======
					var time=setInterval(function(){},1000);
					$.get('/eMarket/index.php/Home/Login/check_user',{
						zd:"email",
						con:tr
					},function(res){
						if(res=="已存在"){
						   alert(res);
						}
					})
				}
				document.getElementById(id).style.display="none";
			}
			function register(){
			   //alert('hello');
			    var tr=document.getElementById('username').value;
				//if()
			}
>>>>>>> 34a9bf222820de530016b2ea9242fedba2a3027e
			</script>
			
	</body>
</html>