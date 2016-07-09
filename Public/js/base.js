/*
author : huangyifan
version : 1.0
date : 2016.7.8
descriptioin : 公有js
*/
$(function(){

	/***********************************
	****** header.html页面
	************************************/
	// 搜索点击	
	$(".guide span").click(function(){
		var index = $(this).index();
		$(".guide span").removeClass("guide-active");
		$(".guide span:eq("+index+")").addClass("guide-active");
	})

	/***********************************
	****** index.html页面
	************************************/
	var num = null;//图片编号索引
	var src = null;//图片链接

	// 自动变换
	var time = null;//定时器
	//设置定时器
	time = setInterval(function(){
		changeAdImg("right");
	},3000);

	// 共用函数，判定类型，执行改变
	function changeAdImg(kind){
		if(kind == "right"){
			num = parseInt($(".big-ad-img-main").attr("index"));
			num = num+1 >= 4 ? 0 : num+1;
		}else if(kind == "left"){
			num = parseInt($(".big-ad-img-main").attr("index"));
			num = num-1 <= -1 ? 4 : num-1;
		}else{
			num = kind;
		}
		src = $(".small-ad-img div:eq("+num+") img").attr("src");
		// 更新大图片
		$(".big-ad-img-main").attr("index",num);
		$(".big-ad-img-main").attr("src",src);
		// 缩略图样式
		$(".small-ad-img div").removeClass("small-ad-img-datail-active"); 
		$(".small-ad-img div:eq("+num+")").addClass("small-ad-img-datail-active");
		// 小图标样式
		$(".ad-img-icon span").css("background","#333"); 
		$(".ad-img-icon span:eq("+num+")").css("background","#b61d1d"); 
	}

	// 清除定时器，调用共用函数，设置定时器
	function AdImgPublic(kind){
		clearInterval(time);
		changeAdImg(kind)
		time = setInterval(function(){
			changeAdImg("right");
		},3000);
	}

	// 鼠标进过显示切换按钮
	$(".big-ad-img").mouseover(function(){
		$(".big-ad-img-change").show();
	});
	// 鼠标移除隐藏切换按钮
	$(".big-ad-img").mouseout(function(){
		$(".big-ad-img-change").hide();
	});
	// 向左
	$(".left").click(function(){
		AdImgPublic("left");
	});
	// 向右
	$(".right").click(function(){
		AdImgPublic("right");
	});
	// 缩略图点击
	$(".small-ad-img div").click(function(){
		AdImgPublic($(this).index());
	});
	// 小图标点击
	$(".ad-img-icon span").click(function(){
		AdImgPublic($(this).index());
	});

	
})


