<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>好食光</title>
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/register.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
	</head>
	<body>
		<!-- 
author : huangyifan
version : 1.0
date : 2016.7.8
descriptioin : 公有css
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
	<!-- 底部 end -->
	<!-- 头部 start -->
	<div id="header">
		<div class="container">
			<div class="logo">
				<img src="/eMarket/Public/image/system/logo.png">
			</div>
			<div class="search">
				<form action="" mathod="post" > 
					<div class="guide">
						<span class="guide-active">吃的</span>
						<span>喝的</span>
						<span>玩的</span>
					</div>
					<div class="search-input">
						<input type="text" name="search" id="searchValue"><input type="submit" name="submit" value="搜索">
					</div>
					<script type="text/javascript">
						// 即时搜索
						var timer = setInterval(function(){
							var search = $.trim($("#searchValue").val());
							if(search != null && search != ""){
								// 向服务器传数据
								$.post('/eMarket/index.php/Home/Index/search',{
									search:search
								},function(ans){
									$(".search-ul li").html(ans);
								})
								$(".search-answer").show();
							}else{
								$(".search-answer").hide();
							}
						},500)
					</script>
					<div class="search-answer">
						<!-- 搜索关键词 左侧 -->
						<div class="search-answer-left">
							<ul class="search-ul">
								<li>ans</li>
								<li>ans</li>
								<li>ans</li>
								<li>ans</li>
								<li>ans</li>
								<!-- <li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li>
								<li>asd</li> -->
							</ul>
						</div>
						<!-- 关键词细化 右侧 -->
						<div class="search-answer-right">
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
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- 头部 end -->

	<!-- 导航栏 start -->
	<!-- <div id="nav"></div> -->
	<!-- 导航栏 end -->
	 	<div class="main">
	 		<!--<div class="header">
	 			<img src="/eMarket/Public/image/logoletter.png"/>
	 			<a>已有账号</a><a href="/eMarket/index.php/Home/Login/login">请登录</a>
	 		</div>-->
	 		<div class="lcontant">
			   <form name="form">
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" id="username" value="用户名" onclick="f1('username1','!!支持中文、字母、数字的组，4-20个字符')" onblur="f2('username1')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="username1">!!支持中文、字母、数字的组，4-20个字符</p>
	 			</div>
	 			<div class="txt"style="height:100px;">
	 				<input class="input_test shuru" type="text" style="color:#777" id="password" value="设置密码" onclick="f1('password1','!!建议使用字母、数字和符号两种及以上的组合，6-20个字符')" onblur="f2('password1')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="password1">!!建议使用字母、数字和符号两种及以上的组合，6-20个字符</p>
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" id="repassword" value="确认密码" onclick="f1('repassword1','!!请再次输入密码')" onblur="fre('repassword1')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="repassword1">!!请再次输入密码</p>
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru" type="text" style="color:#777" id="tel" value="手机号" onclick="f1('tel1','!!仔细核对手机号是否正确')" onblur="f2('tel1')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="tel1">!!仔细核对手机号是否正确</p>
	 			</div>
	 			<div class="txt">
			        <input class="input_test shuru" type="text" style="color:#777" id="email" value="邮箱账号" onclick="f1('email1','!!完成验证后可以使用该账号登陆和找回密码')" onblur="f3('email1')"/>
	 				<p style="color:#999;font-size:14px;display:none;" id="email1">!!完成验证后可以使用该账号登陆和找回密码</p>
	 			</div>
	 			<div class="txt">
	 				<input class="input_test shuru2" type="text" style="color:#777" id="num" value="邮箱验证码"/>
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
			var k=0;
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
			function f1(id,con){
			    $("#"+id).html(con);
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
				     $("#"+id+"1").html(con+"不能为空");
					 document.getElementById(id+"1").style.display="block";
				  }else{
				     k++;
				  }
			}
			//检查用户名是否为空或被占用
			function check_used(id,name){
		       	var tr=trimStr(document.getElementById(id).value);
			    check_empty(id,name);
				$.get('/eMarket/index.php/Home/Login/check_user',{
						          zd:id,
					              con:tr
			    },function(res){
						          if(res=="已存在"){
								        k--;
						                $("#"+id+"1").html("该"+name+"已存在");
					                    document.getElementById(id+"1").style.display="block";
						          }
			   });
			}
			//检查用户名是否为空或被占用
			function check_user(){
		       check_used('username','用户名');
			}
			//检查手机号是否为空或被占用
			function check_tel(){
		       check_used('tel','手机号');
			}
			function check_repwd(){
			     var pwd=trimStr(document.getElementById('password').value);
				 var repwd=trimStr(document.getElementById('repassword').value);
				 if(pwd==repwd){
				     
				 }else{
				     $("#repassword1").html("密码不一致");
					 document.getElementById("repassword1").style.display="block";
					 k--;
				 }
			}
			function check_pwd(){
			     check_empty('password',"设置密码");
			     check_empty("repassword","确认密码");
			     check_repwd();
			}
			function check_email(){
			     var tr=trimStr(document.getElementById('email').value);
				//alert(tr);
			    if(tr=="邮箱账号"||tr==''){
				    $("#email1").html("邮箱不能为空");
					 document.getElementById("email1").style.display="block";
					return 0;
				}else{
				    var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                    if(!reg.test(tr)) {
                           alert("请输入有效的邮箱地址！");return 0;
                    }else{
					        $.get('/eMarket/index.php/Home/Login/check_user',{
						          zd:"email",
					              con:tr
					        },function(res){
						          if(res=="已存在"){
						                alert("该邮箱已存在");return 0;
						          }
					        })
					}
				}
				k++;
			}
			function sendmail(id){
			                if(check_email()==0){
							    
							}else{
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
				                         return;
				                      }
				                    },1000);
							}
			}
			function check_yzm(){
			    var tr=trimStr(document.getElementById('num').value);
				$.post('/eMarket/index.php/Home/Login/getyzm',{
				      
				},function(res){
				    if(res==1){
					    
					}else{
					   if(res==tr){
					     // k++;
					   }else{
					      alert("邮箱验证码错误");return;
					   }
				    }
				});
				k++;
			}
			function register(){
			    k=0;
			    check_user();
			    check_pwd();
				check_email();
				check_yzm();
				check_tel();
				//alert(k);
			    if(k==6){
				     var username=trimStr(document.getElementById('username').value);
					 var password=trimStr(document.getElementById('password').value);
					 var email=trimStr(document.getElementById('email').value);
					 var tel=trimStr(document.getElementById('tel').value);
					 $.post('/eMarket/index.php/Home/Login/record_user',{
					     username:username,
						 password:password,
						 email:email,
						 tel:tel
					 },function(res){
					    alert(res);
					 });
				}
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