<?php if (!defined('THINK_PATH')) exit();?><!-- 
author : sudonglin
version : 1.0
date : 2016.7.10
description : 个人中的购物车页面
-->
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>好食光</title>
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/person.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/p_base.css">
		<link rel="stylesheet" type="text/css" href="/eMarket/Public/css/base.css">
	</head>
	<body>
		<!--头部包含-->
		<!-- 
author : sudonglin
version : 1.0
date : 2016.7.9
descriptioin : 个人页面的头部
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
	<!-- 顶部 end -->
	<!--头部开始-->
		<div class="header">
			<div class="logoletter"><img src="/eMarket/Public/image/logoletter.jpg"/></div>
			<div class="letter">
				<ul>
					<li><a  href="/eMarket/index.php/Home/Person/cart.html">购物车</a></li>				
					<li><a  href="/eMarket/index.php/Home/Person/collect.html">收藏夹</a></li>				
					<li><a  href="/eMarket/index.php/Home/Person/bought.html">已买宝贝</a></li>		
					<li><a  href="/eMarket/index.php/Home/Person/setting.html">个人设置</a></li>
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
			<div class="cart_contanter">
				 	<div class="cart_things">
				 	<!-- 表格控制布局 -->
				 		<table class="tab">
				 		<!-- 表头 -->
				 			<thead>
				 				<tr>
				 					<th width="100px">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" check="checked" name="check_list" onclick="f2();"/>全选</th>
				 					<th width="460px">宝贝</th>
				 					<th width="170px">单价</th>
				 					<th widyh="170px">数量</th>
				 					<th width="170px">小计(元)</th>
				 					<th width="170px">全部操作</th>
				 				</tr>
				 			</thead>
				 			<!-- 表主体内容 -->
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody>
				 				<tr class="cart_three"> 
				 			        <td width="100px"><input type="checkbox" check="checked" name="check_list"/></td>
				 					<td width="460px">
				 						<div class="goods-item">
				 							<div class="cafa">

				 								
				 								<a href=""><img title="【好食光】" src="/eMarket/Public/image/goods/<?php echo ($vo["g_img"]); ?>"/></a>

				 							</div>
				 							<div class="link">
				 								<a href="">【好食光】<?php echo ($vo["g_name"]); ?></a>
				 							</div>
				 						</div>
				 					</td>
				 					<td width="170px"><span><?php echo ($vo["price"]); ?></span></td>
				 					<td width="170px">
				 						<div class="sum">
				 							<a class="decrement" href="javascript:sub('num<?php echo ($i); ?>',<?php echo ($vo["price"]); ?>);">-&nbsp;</a>
				 							<input type="text" value="1" id="num<?php echo ($i); ?>" onblur="f1('num<?php echo ($i); ?>',<?php echo ($vo["price"]); ?>)"/>
				 							<a class="increment" href="javascript:add('num<?php echo ($i); ?>',<?php echo ($vo["price"]); ?>);">&nbsp;+</a>
				 						</div>
				 					</td>
				 					<td width="170px" id="pricenum<?php echo ($i); ?>"><?php echo ($vo["price"]); ?></td>
				 					<td width="170px"><span><a href="">删除</a><br><a href="">移到我的关注</a></span></td>
				 				</tr>
				 			</tbody><?php endforeach; endif; else: echo "" ;endif; ?>
				 		<!--	<tbody>
				 				<tr class="cart_three">
				 			        <td width="100px"><input type="checkbox" check="checked" name=""/></td>
				 					<td width="460px">
				 						<div class="goods-item">
				 							<div class="cafa">
				 								<a><img title="【好食光】珍享&nbsp;&nbsp;美国进口樱桃 1kg果径约26-28mm"src="/eMarket/Public/image/goods/fruit.jpg"/></a>
				 							</div>
				 							<div class="link">
				 								<a href="">【好食光】珍享&nbsp;&nbsp;美国进口樱桃 1kg果径约26-28mm</a>
				 							</div>
				 						</div>
				 					</td>
				 					<td width="170px"><span>70</span></td>
				 					<td width="170px">
				 						<div class="sum">
				 							<a class="decrement" href="">-&nbsp;</a>
				 							<input type="text" value="1"/>
				 							<a class="increment" href="">&nbsp;+</a>
				 						</div>
				 					</td>
				 					<td width="170px"><span>70</span></td>
				 					<td width="170px"><span><a href="">删除</a><br><a href="">移到我的收藏</a></span></td>
				 				</tr>
				 				
				 			</tbody>
<<<<<<< HEAD
				 		    <tr class="count">
				 					 <td width="100px"><input type="checkbox" check="checked" name=""/></td>
				 					<td width="100px"><a>删除选中的物品</a>&nbsp;&nbsp;&nbsp;&nbsp;<a>移到我的关注</a></td>
				 					<td colspan="1"></td>
				 					<td>已选择<strong>2</strong>件商品</td>
				 					<td>总价<strong>￥120</strong></td>
				 					<td><input type="submit" name="" value="去结算"/></td>
				 				</tr>
=======
				 		-->

				 		</table>
				 	</div>
				</div>
			</div>
		    <script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
			<script type="text/javascript">
			       function trimStr(str){return str.replace(/(^\s*)|(\s*$)/g,"");}
				   var k=0;var sum=0;
			       function add(id,price){
				       k=Number($("#"+id).val())+1;
				       $("#"+id).val(k);
				       sum=Number(price)*k;
					   $("#price"+id).html(sum);
				   }
				   function sub(id,price){
				       var num=Number($("#"+id).val());
					   k=num-1;
					   if(num>1){
					       $("#"+id).val(k);
						   sum=Number(price)*k;
					       $("#price"+id).html(sum);
					   }else{
					     $("#"+id).val(1);
					   }
				   }
				   function f1(id,price){
				       k=Number($("#"+id).val());
					   if(isNaN(k)){
					      alert("请输入有效数字");
						  $("#"+id).val(1);
					   }else{
					      if(k<=0){
						       alert("请输入有效数字");
							   $("#"+id).val(1);
						  }else{
						       sum=Number(price)*k;
					           $("#price"+id).html(sum);
						  }
					   }
				   }
				   function f2(){
				      if($("input[name='chk_list']").is(':checked')){
					     $("input[name='check_list']").attr("checked",false); 
					  }else{
					     $("input[name='check_list']").attr("checked",true); 
					  }
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