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
	<!--头部开始-->
		<div class="header">
			<div class="logoletter"><img src="/eMarket/Public/image/logoletter.jpg"/></div>
			<div class="letter"> 
				<ul>
					<li><a  href="/eMarket/index.php/Home/Person/cart.html" id="cart">购物车</a></li>				
					<li><a  href="/eMarket/index.php/Home/Person/collect.html" id="collect">收藏夹</a></li>				
					<li><a  href="/eMarket/index.php/Home/Person/bought.html" id="bought">已买宝贝</a></li>		
					<li><a  href="/eMarket/index.php/Home/Person/setting.html" id="set">个人设置</a></li>
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
						<li><a href="/eMarket/index.php/Home/Person/center" >个人信息</a></li>
						<li><a href="/eMarket/index.php/Home/Person/setting" id="person_address">收货地址</a></li>
					</ul>
				</div>
				<!--订单内容-->
				<div class="right"> 
				 	<div class="things">
				 		<div class="address">

				 			<div class="addresslist" id="op" style="display:none">
				 				<div class="smc">
				 					<div class="litem">
				 						<div class="item">
				 							<span>收货人：<b><?php echo ($list["nickname"]); ?></b></span>                     
				 						</div>
				 					
				 						<div class="item">
				 							<span>地址：<b><?php echo ($list["address"]); ?></b></span>                                     
				 						</div>
				 						<div class="item">
				 							<span>手机：<b><?php echo ($list["tel"]); ?></b></span>
				 						</div>
				 						<div class="item">
				 							<span>电子邮箱<b><?php echo ($list["email"]); ?></b></span>
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
				 							<!--<a class="theme-login">编辑</a>-->&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:delete_address();">删除</a>
				 						</div>
				 					</div>
				 				</div>
				 			</div>
							
				 		</div>	
				 		
				 		<a class="btn btn-primary theme-login" id="new_add" style="display:block">新增收货地址</a>
				    </div>
			</div>
		</div>
	</div>
</div>
<!--  -->
<script src="/eMarket/Public/js/jquery.min.js"></script>
<script>
jQuery(document).ready(function() {
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
	$("#person_address").css("color","#FF4400");
	if(<?php echo ($list); ?>){
		 $("#op").css("display","block");
			$("#new_add").hide();
	}                         
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
                	<em>* </em> 收&nbsp;货&nbsp;人&nbsp;：<input type="text" class="" id="username"/><span id="username_ts" style="display:none;color:red;">请您填写收货人姓名</span>
                </div>
                <div class="f1">
                	<em>* </em> 详细地址：<input type="text" class="" id="address"/><span id="address_ts" style="display:none;color:red;">请您填写收货人详细地址</span>
                </div>
                  <div class="f1">
                	<em>* </em> 手机号码：<input type="text" class="" id="tel"/><span id="tel_ts" style="display:none;color:red;">请您填写收货人手机号码</span>
                </div>
                <div class="f1">
                	<a style="margin-top:30px;"type="" class="btn" href="javascript:f1();">保存收货地址</a>
                </div>
           </form>
     </div>
</div>
<div class="theme-popover-mask"></div>
<script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
			<script type="text/javascript">
			    
			    var k=0;
			    function check_empty(id,con){
				    if(con){
					    k++;
						 $("#"+id+"_ts").css("display","none");
				    }else{
					    $("#"+id+"_ts").css("display","block");
					}
				}
			    function f1(){  
                        k=0;		
                        var username=$("#username").val();	
                        var address=$("#address").val();	
                        var tel=$("#tel").val();							
                     	check_empty("username",username);
                        check_empty("address",address);		
                        check_empty("tel",tel);		
                        if(k==3){
						  // alert("hello");
						   $.post("/eMarket/index.php/Home/Person/add_address",{
						       nickname:username,
							   address:address,
							   tel:tel,
						   },function(res){
						       alert(res);
							   window.location.href="/eMarket/index.php/Home/Person/setting";
						   });
						}	   						
				}
				function delete_address(){
				   $.post("/eMarket/index.php/Home/Person/delete_address",{
				       
				   },function(res){
				      alert(res);
					  window.location.href="/eMarket/index.php/Home/Person/setting";
				   });
				}
			</script>
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