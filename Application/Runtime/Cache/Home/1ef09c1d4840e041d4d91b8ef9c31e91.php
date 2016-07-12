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
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/base.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/person.css">
		<link rel="stylesheet" type="text/css" href="/e-market/Public/css/p_base.css">
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
	<!--头部开始-->
		<div class="header">
			<div class="logoletter"><img src="/e-market/Public/image/logoletter.jpg"/></div>
			<div class="letter"> 
				<ul>
					<li><a  href="/e-market/index.php/Home/Person/cart.html" id="cart">购物车</a></li>				
					<li><a  href="/e-market/index.php/Home/Person/collect.html" id="collect">收藏夹</a></li>				
					<li><a  href="/e-market/index.php/Home/Person/bought.html" id="bought">已买宝贝</a></li>		
					<li><a  href="/e-market/index.php/Home/Person/setting.html" id="set">个人设置</a></li>
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
				 					<th width="100px">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="check_list" onclick="f2();" value=""/>全选</th>
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
				 			        <td width="100px"><input type="checkbox"  name="check_list" value="num<?php echo ($i); ?>" onclick="f4();"/></td>
				 					<td width="460px">
				 						<div class="goods-item">
				 							<div class="cafa">
				 								<a href=""><img title="【好食光】" src="/e-market/Public/image/goods/<?php echo ($vo["g_img"]); ?>"/></a>
				 							</div>
				 							<div class="link">
				 								<a href="">【好食光】<?php echo ($vo["g_name"]); ?></a>
				 							</div>
				 						</div>
				 					</td>
									<input type="hidden" id="gidnum<?php echo ($i); ?>" value="<?php echo ($vo["gid"]); ?>" />
				 					<td width="170px"><span><?php echo ($vo["price"]); ?></span></td>
				 					<td width="170px">
				 						<div class="sum">
				 							<a class="decrement" href="javascript:sub('num<?php echo ($i); ?>',<?php echo ($vo["price"]); ?>);">-&nbsp;</a>
				 							<input type="text" value="1" id="num<?php echo ($i); ?>" onblur="f1('num<?php echo ($i); ?>',<?php echo ($vo["price"]); ?>)"/>
				 							<a class="increment" href="javascript:add('num<?php echo ($i); ?>',<?php echo ($vo["price"]); ?>);">&nbsp;+</a>
				 						</div>
				 					</td>
				 					<td width="170px" id="pricenum<?php echo ($i); ?>"><?php echo ($vo["price"]); ?></td>
<<<<<<< Updated upstream
				 					<td width="170px"><span><a href="javascript:delete_cart(<?php echo ($vo["gid"]); ?>);">删除</a><br></span></td>
=======
				 					<td width="170px"><span><a href="">删除</a><br></span></td>
>>>>>>> Stashed changes
				 				</tr>
				 			</tbody><?php endforeach; endif; else: echo "" ;endif; ?>
				 		

				 			</tbody>

				 		    <tr class="count">
				 					 <td width="100px"><input type="checkbox" name="check_list" onclick="f3();" value=""/></td>
<<<<<<< Updated upstream
				 					<td width="100px"><a href="javascript:delete_cart_all();">删除选中的物品</a></td>
=======
				 					<td width="100px"><a>删除选中的物品</a></td>
>>>>>>> Stashed changes
				 					<td colspan="1"></td>
				 					<td id="numprice">已选择<strong>0</strong>件商品</td>
				 					<td id="sumprice">总价<strong>￥0</strong></td>
				 					<td><input type="submit" name="" value="去结算" id="submit" onclick="submit();" /></td>
				 				</tr>


				 		


				 		</table>
				 	</div>
				</div>
			</div>
		    <script type="text/javascript" src="/e-market/Public/js/jquery.min.js"></script>
			<script type="text/javascript">
			       function trimStr(str){return str.replace(/(^\s*)|(\s*$)/g,"");}
				   $(document).ready(function(){ 
				            $("#cart").css("background-color","#E43D00");
　　                        $("#submit").attr("disabled","true");
　                　}); 
				   var k=0;var sum=0;
			       function add(id,price){
				       k=Number($("#"+id).val())+1;
				       $("#"+id).val(k);
				       sum=Number(price)*k;
					   $("#price"+id).html(sum);
					    f4();
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
					   f4();
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
					    f4();
				   }
				   var bz=0;
				   function f2(){
				      if(bz==1){
					     bz=0;
					     $("input[name='check_list']").removeAttr("checked"); 
						
						 <!-- alert(bz); -->
						
					  }else{
					     bz=1;
					     $("input[name='check_list']").attr("checked","true"); 
						 <!-- alert(bz); -->
					  }
				   }
				   function f3(){
				     f2();
					 f4();
				   }
				   function f4(){
				      var t=0;
					  var str="";
					  var pricesum=0;
                              $("input[name='check_list']:checked").each(function(){
							          str=$(this).val();  
							          if(str){
                                         pricesum+=Number($("#price"+str).html());
										 t++;
									  }
                                 })
						if(t==0){
						    $("#submit").attr("disabled","true");
							$(".count input").css("background-color","#666");
						}else{
						    $("#submit").removeAttr("disabled");
							$(".count input").css("background-color","#AE3345");
						}
					  $("#numprice").html("已选择<strong>"+t+"</strong>件商品");
					  $("#sumprice").html("总价<strong>￥"+pricesum+"</strong>");
				   }
				   function submit(){
				      var t=0;var er=1;
					  var num=0;
					  var gid;
					  var str="";
					  var arr= "";
					
				       $("input[name='check_list']:checked").each(function(){
							          str=$(this).val();  
							          if(str){
									    arr[t]= new Array();
                                        num=Number($("#"+str).val());
										gid=Number($("#gid"+str).val());
										arr+=er+"="+num+"&"+(er+1)+"="+gid+"&";
										t++;er=er+2;
									  }
                                 });
					arr+="t="+(er-1);
					  $.ajax({
						    asnyc:false,
							url:"/e-market/index.php/Home/Person/sold_goods",
							type:"post",
							traditional :true,
						    data:arr,
                            success:function(res){
							        if(res=="success"){
                                        window.location.href="/e-market/index.php/Home/Person/bought";									
 									}
							    },
						 });
				   }
				   function delete_cart(gid){
				      $.post("/e-market/index.php/Home/Person/delete_cart_one",{
					       id:gid,
					  },function(res){
					       alert(res);
						   window.location.href="/e-market/index.php/Home/Person/cart";
					  })
				   }
				   function delete_cart_all(){
				       var str= "";
					   var arr="";
					   var t=0;
				       $("input[name='check_list']:checked").each(function(){
							          str=$(this).val();  
							          if(str){
										gid=Number($("#gid"+str).val());
										arr+=t+"="+gid+"&";
										t++;
									  }
                                 });
								 arr+="num="+t;
				   	    $.ajax({
						    asnyc:false,
							url:"/e-market/index.php/Home/Person/delete_cart_all",
							type:"post",
						    data:arr,
                            success:function(res){
							        alert(res);
							        if(res=="success"){
                                        window.location.href="/e-market/index.php/Home/Person/cart";									
 									}
							    },
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